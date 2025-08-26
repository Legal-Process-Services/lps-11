<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //

    public function show()
    {
        /** @var User $user */
        $user = Auth::user();

//        dd(Customer::limit(10)->get());
//
        $customer = $user->customer;


       $sixmoago = Carbon::now()->subMonths(6)->format('D F j, Y');

        $outFirm = $customer->outstandingFirm()->get();

        $outInvoices = $customer->outstandingInvoices()->orderByDesc('WorkOrderNo', 'asc')->limit(5)->get();

        $oneRow = $customer->outstandingFirm()->get();
//        dd($oneRow);


        $data = [
            'outInvoices' => $outInvoices,
            'outFirm' => $outFirm,
            'sixmoago' => $sixmoago,
            'oneRow' => $oneRow,
        ];


        return Inertia::render('Dashboard/Dashboard', $data);
    }


    public  function  getCustomer()
    {
        $user = Auth::user();

        $customer = $user->customer;


        return response()->json($customer,200);
    }

    public function getPaidInvoices(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();



        $customer = $user->customer;

        $sixmoago = Carbon::now()->subMonths(6)->format('m/d/Y');

//      return  Invoice::limit(5)->get();


        $invoices = Invoice::where('Attorney_ID', $customer->AttnyID)
            ->where(  'N1010C_Date', ">" . $sixmoago)->orderByDesc('WorkOrderNo')->paginate(5);

        return $invoices;


        $openinvoices = Invoice::where('Attorney_ID', $customer->AttnyID)
           ->orderByDesc('WorkOrderNo')->paginate(5);

        return $openinvoices;
    }
}
