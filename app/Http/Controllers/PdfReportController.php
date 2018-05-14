<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use PdfReport;
use Illuminate\Support\Facades\DB;

class PdfReportController extends Controller
{
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