<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Carbon\Carbon;

class FirmController extends Controller
{
    //

    public function show()
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $outFirm = $customer->outstandingFirm()->get();


        $client = "test";
        $data = [
            'client' => $client,
            'outHearing' => $outHearing,
            'oneRow' => $oneRow,
            'customer' => $customer,
            'outfirm' => $outFirm,
        ];


        return Inertia::render('Firm/Firm', $data);
    }

    public function getFirm(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;


        $firms = Customer::where('userID', "=" . $customer->id)->orderByDesc('userID');


        return $firms;
    }
    public function getAccountBalance(Request $request)
{
    /** @var User $user */
    $user = Auth::user();

    $customer = $user->customer;

    $outFirm = $customer->outstandingFirm()->get();


    $client = "test";
    $data = [
        'client' => $client,
        'outFirm' => $outFirm,
    ];



    return Inertia::render('Firm/Account-Balance', $data);
}

public function getPayAccountBalance(Request $request)
{
    /** @var User $user */
    $user = Auth::user();

    $customer = $user->customer;

    $outFirm = $customer->outstandingFirm()->get();


    $client = "test";
    $data = [
        'client' => $client,
        'outFirm' => $outFirm,
    ];



    return Inertia::render('Firm/Pay-Account-Balance', $data);
}

    public function getPaySelectInvoices(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $outFirm = $customer->outstandingFirm()->get();


        $client = "test";
        $data = [
            'client' => $client,
            'outFirm' => $outFirm,
        ];



        return Inertia::render('Firm/Pay-Select-Invoices', $data);
    }

    public function getPymtStubCheck(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $outFirm = $customer->outstandingFirm()->get();


        $client = "test";
        $data = [
            'client' => $client,
            'outFirm' => $outFirm,
        ];



        return Inertia::render('Firm/Pymt-Stub-Check', $data);
    }

    public function getHearingDate(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $sevendaysago = Carbon::now()->subDays(7)->format('D F j, Y');

        $outFirm = $customer->outstandingFirm()->get();


        $client = "test";
        $data = [
            'client' => $client,
            'outFirm' => $outFirm,
            'sevendaysago' => $sevendaysago,

        ];



        return Inertia::render('Firm/Hearing-Date', $data);
    }
    public function getHearingDatePrint(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $sevendaysago = Carbon::now()->subDays(7)->format('D F j, Y');

        $outFirm = $customer->outstandingFirm()->get();


        $client = "test";
        $data = [
            'client' => $client,
            'outFirm' => $outFirm,
            'sevendaysago' => $sevendaysago,

        ];



        return Inertia::render('Firm/Hearing-Date-Print', $data);
    }
    public function getSpreadsheet(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $here = $user->customer;

//        dd($here);

//        if ($user->customer->exists()) {
//            // user found
//            dd($customer);
//        }


        $data = [
            'customer' => $customer,
            'here' => $here,

        ];

        return Inertia::render('Firm/Spreadsheet', $data);
    }

    public function getExcelExport(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $here = $user->customer;



        $data = [
            'customer' => $customer,
            'here' => $here,

        ];

        return Inertia::render('Firm/Spreadsheet-Excel', $data);
    }

}
