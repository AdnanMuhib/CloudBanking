<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\CurrencyRate;
use App\Customer;
use PdfReport;
use App\Transaction;
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

    public function transactionReport(Request $request){
        $report_title = "Transactions Report — Cloud Banking";

		// For displaying filters description on header.
	    $meta = [
	        'Report Type'=>'Transactions Report',
	        'Date' => date("Y/m/d")
        ];

        $result = Transaction::select('customer_id','amount','trans_type','created_at');//->with('customer')->get();//select('customer_id','amount','trans_type','created_at');
        //return $result;
        // $result = DB::table('transactions')
        //     ->select('customers.name', 'transactions.amount', 'transactions.trans_type', 'transactions.created_at')
        //     ->join('customers', 'transactions.customer_id', '=', 'customers.id')
        //     ->get();

	    // Set Column to be displayed
	    $columns = [
            'Customer' => 'customer_id',
	        'Amount' => 'amount',
	        'Transactions Type' => 'trans_type',
	        'Date' => 'created_at',
        ];

	    //$pdf = PdfReport::of('pdf.invoice', $users);
	     return PdfReport::of($report_title, $meta, $result, $columns)
	     ->setCss([
	     	'.head-content' => 'border-width: 1px',
	     ])->setPaper('a4')->stream();
    }

    public function customerReport(Request $request){
        $report_title = "Customer Report — Cloud Banking";

		// For displaying filters description on header.
	    $meta = [
	        'Report Type'=>'Customer Report',
	        'Date' => date("Y/m/d")
        ];
        $result;

        if($request->gender != 'all'){
        $result = Customer::select(['name', 'dob', 'address', 'cnic', 'gender', 'created_at'])
        ->whereBetween('created_at',[$request->from, $request->to])
        ->where('gender','=', $request->gender);
        } else {
        $result = Customer::select(['name', 'dob', 'address', 'cnic', 'gender', 'created_at'])
        ->whereBetween('created_at',[$request->from, $request->to]);
        }
	    // Set Column to be displayed
	    $columns = [
            'Join Date' => 'created_at',
	        'Name' => 'ame',
	        'DOB' => 'dob',
	        'Address' => 'address',
	        'CNIC' => 'cnic',
	        'GENDER' => 'gender',
	    ];
	    //$pdf = PdfReport::of('pdf.invoice', $users);
	     return PdfReport::of($report_title, $meta, $result, $columns)
	     ->setCss([
	     	'.head-content' => 'border-width: 1px',
	     ])->setPaper('a4')->stream();
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
