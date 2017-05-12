<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartLineController extends Controller
{
    public function chartline(){
        $devlist = charts::table('chartline')
            ->select(charts::raw('temperature as Temp'), charts::raw("DATE_FORMAT(created_at,'%Y-%m') as Date"), charts::raw('count(*) as temperatures'))
            ->groupBy('Date')
            ->get();

        return $devlist;

    }
}
