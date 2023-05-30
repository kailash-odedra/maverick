<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subservice;
use App\Models\Service;


class SubserviceController extends Controller
{
    function Subservice($slug)
    {
        $data['service'] = Service::where('Slug', $slug)->first();
        $data['Subservice'] = Subservice::where('Service_id', $data['service']->id )->get();
        $data['all_service'] = Service::all();
        

        $groupedData = $data['Subservice']->groupBy(function ($item, $key) {
            return $item->id % 2 == 0 ? 'even' : 'odd';
        });

        $data['evenData'] = $groupedData->get('even');
        $data['oddData'] = $groupedData->get('odd');

        return view('Subservice')->with($data);
    }
}