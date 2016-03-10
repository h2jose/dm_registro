<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Suscriber;

use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {

        Excel::create('Registro Datamedic Excel', function($excel) {

            $excel->sheet('Suscribers', function($sheet) {

                $suscribers = Suscriber::all();

                $sheet->fromArray($suscribers);

            });
        })->export('xls');

    }
}
