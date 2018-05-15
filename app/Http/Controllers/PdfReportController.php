<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\CurrencyRate;
use PdfReport;
use Illuminate\Support\Facades\DB;

class PdfReportController extends Controller
{

    public function report(){
        return view('report');
    }

    public function currencyReport(Request $request){

        $report_title = "Currency Report — Cloud Banking";

		// For displaying filters description on header.
	    $meta = [
	        'Report Type'=>'Currency Report',
	        'Date' => date("Y/m/d")
        ];


        $result = CurrencyRate::select(['PKR', 'INR', 'EURO', 'DIRHAM', 'POUND', 'RIYAL', 'date'])
        ->whereBetween('date',[$request->from, $request->to]);

	    // Set Column to be displayed
	    $columns = [
            'Date' => 'date',
	        'PKR' => 'PKR',
	        'INR' => 'INR',
	        'EURO' => 'EURO',
	        'DIRHAM' => 'DIRHAM',
	        'POUND' => 'POUND',
	        'RIYAL' => 'RIYAL'
	    ];
	    //$pdf = PdfReport::of('pdf.invoice', $users);
	     return PdfReport::of($report_title, $meta, $result, $columns)
	     ->setCss([
	     	'.head-content' => 'border-width: 1px',
	     ])->setPaper('a4')->stream();
    }

    public function transactionReport(){
        return view('report');
    }

    public function customerReport(){
        return view('report');
    }

	public function displayReport()
	{
		$report_title = "Cloud Banking Monthly Report";
		// For displaying filters description on header
	    $meta = [
	        'Registered on' => "15 May, 2018",
	        'Sort By' => "Name",
	        'Name'=>'Muhammad Adnan',
	        'Date' => date("Y/m/d")
	    ];
	    $users = User::select(['name', 'email', 'created_at']);

	    // Set Column to be displayed
	    $columns = [
	        'Name' => 'name',
	        'Email' => 'email',
	        'Register Date' => 'created_at'
	    ];
	    //$pdf = PdfReport::of('pdf.invoice', $users);
	     return PdfReport::of($report_title, $meta, $users, $columns)
	     ->setCss([
	     	'.head-content' => 'border-width: 1px',
	     ])->setPaper('a4')->stream();
	}
}
