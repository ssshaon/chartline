<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartLineController extends Controller
{
    public function chartline(){
        $devlist = chartline::table('charts')
            ->select(chartline::raw('temperature as Temp'), DB::raw("DATE_FORMAT(created_at,'%Y-%m') as Date"), DB::raw('count(*) as temperatures'))
            ->groupBy('Date')
            ->get();

        return $devlist;

    }
}
