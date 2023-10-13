<?php

namespace App\Action\StoredProcedure;

use DB;

class SpFmsFinancingCashDetail
{
    public static function handle($input)
    {
        $rawData = DB::select("fms.up_rpt_fin_disbursement_cash :clientId, :startDate, :endDate", $input);

        foreach ($rawData as $data) {
            yield $data;
        }
    }
}