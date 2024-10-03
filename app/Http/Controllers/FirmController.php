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
            'outFirm' => $outFirm,
//            'customers' => $$customer,
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
}

