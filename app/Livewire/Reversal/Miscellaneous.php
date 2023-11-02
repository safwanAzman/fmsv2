<?php

namespace App\Livewire\Reversal;

use App\Models\Fms\FmsMiscStatement;
use App\Services\General\ActgPeriod;
use App\Services\General\ReportService;
use App\Traits\Reversal\MiscellaneousPlaceholder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Miscellaneous extends Component
{
    use Actions, WithPagination, MiscellaneousPlaceholder;

    public $reversalModal = false;
    public $clientId;
    public $searchBy = 'FMS.MISC_STATEMENTS.mbr_no';
    public $search = '';

    public function search()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->clientId = auth()->user()->client_id;
    }

    public static function formatData($data)
    {
        return [
            'MEMBERSHIP NO' => [
                'value' => $data->mbr_no,
                'align' => 'left'
            ],
            'NAME' => [
                'value' => $data->name,
                'align' => 'left'
            ],
            'DOCUMENT NO' => [
                'value' => $data->doc_no,
                'align' => 'left'
            ],
            'DESCRIPTION' => [
                'value' => $data->description,
                'align' => 'left'
            ],
            'AMOUNT' => [
                'value' => number_format($data->transaction_amount, 2),
                'align' => 'right'
            ],
            'TRANSACTION DATE' => [
                'value' => date('d/m/Y', strtotime($data->transaction_date)),
                'align' => 'left'
            ],
            'ACTION' => [
                'value' => ($data->trx_group == 'MISC' && $data->ref_id_reversal == NULL) ? 'reverse("' . $data->id . '")' : 'DONE',
                'align' => 'center'
            ],
        ];
    }

    public function reverse($id)
    {
        $this->reversalModal = true;
    }

    public function getData()
    {
        // only enable this when live, for now hard coded to sept 2023 (data that has in db)
        // $start = ActgPeriod::determinePeriodRange()['startDate'];
        // $end = ActgPeriod::determinePeriodRange()['endDate'];

        $start = '2023-09-01';
        $end = '2023-09-30';

        $rawData = FmsMiscStatement::select(
            'FMS.MISC_STATEMENTS.id',
            'FMS.MISC_STATEMENTS.mbr_no',
            'FMS.MISC_STATEMENTS.doc_no',
            'CIF.CUSTOMERS.name',
            'REF.TRANSACTION_CODES.description',
            'FMS.MISC_STATEMENTS.transaction_date',
            'FMS.MISC_STATEMENTS.transaction_amount',
            'REF.TRANSACTION_CODES.trx_group',
            'FMS.MISC_STATEMENTS.ref_id_reversal'
        )
            ->join('FMS.MEMBERSHIP', 'FMS.MISC_STATEMENTS.mbr_no', 'FMS.MEMBERSHIP.mbr_no')
            ->join('CIF.CUSTOMERS', 'CIF.CUSTOMERS.id', 'FMS.MEMBERSHIP.cif_id')
            ->join('REF.TRANSACTION_CODES', 'REF.TRANSACTION_CODES.id', 'FMS.MISC_STATEMENTS.transaction_code_id')
            ->whereIn('REF.TRANSACTION_CODES.trx_group', ['MISC', 'MISC - Balance C/F', 'MISC (REVERSAL)'])
            ->whereBetween('FMS.MISC_STATEMENTS.transaction_date', [$start, $end])
            ->where('FMS.MISC_STATEMENTS.client_id', $this->clientId)
            ->where('FMS.MEMBERSHIP.client_id', $this->clientId)
            ->where('CIF.CUSTOMERS.client_id', $this->clientId)
            ->where('REF.TRANSACTION_CODES.client_id', $this->clientId)
            ->where($this->searchBy, 'LIKE', '%' . $this->search . '%')
            ->orderBy('FMS.MISC_STATEMENTS.id', 'desc')
            ->get();

        $formattedData = [];

        foreach ($rawData as $data) {
            $formattedData[] = $this->formatData($data);
        }

        $data = new Collection($formattedData);

        return ReportService::paginateData($data);
    }

    public function render()
    {
        $dataTable = $this->getData();

        return view('livewire.reversal.miscellaneous', [
            'dataTable' => $dataTable
        ])->extends('layouts.main');
    }
}
