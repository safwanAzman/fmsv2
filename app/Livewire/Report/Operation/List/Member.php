<?php

namespace App\Livewire\Report\Operation\List;

use App\Action\StoredProcedure\SpFmsUpRptMember;
use App\Services\General\ReportService;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;


class Member extends Component
{
    use WithPagination;
    public $clientId = 1;

    #[Rule('required')]
    public $startDate;

    #[Rule('required')]
    public $endDate;

    public function generateExcel()
    {
        $this->validate();
        return $this->handleExcel();
    }

    private function handleDataTable()
    {
        $data = SpFmsUpRptMember::handleForTable([
            'clientId' => $this->clientId,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
        ], true);

        return ReportService::paginateData($data);
    }

    private function handleExcel()
    {
        $dataGenerator = function () {
            $rawData = SpFmsUpRptMember::handleForExcel([
                'clientId' => $this->clientId,
                'startDate' => $this->startDate,
                'endDate' => $this->endDate,
            ], true);

            foreach ($rawData as $data) {
                yield $data;
            }
        };

        $filename = 'ListOfMember-%s.xlsx';
        $report = new ReportService();

        return $report->generateExcelReport($dataGenerator, $filename, $this->startDate);
    }

    public function render()
    {
        $result = null;

        if ($this->startDate && $this->endDate) {
            $result = $this->handleDataTable();
        }

        return view('livewire.report.operation.list.member', [
            'result' => $result
        ])->extends('layouts.main');
    }
}