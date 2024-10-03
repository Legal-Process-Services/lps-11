<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\Attempt;
use App\Models\User;
use BlueFeather\EloquentFileMaker\Support\Facades\FM;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use UnexpectedValueException;

class AttemptController extends Controller
{
    public function show(Request  $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;



        $outAttemptHistory =   Attempt::where('WorkOrderNo', "=", $request->id)->orderByDesc('DateAttempted', 'DESC')->get();


// return($outAttemptHistory);

        $client = "test";
        $data = [
            'client' => $client,
            'outAttemptHistory' => $outAttemptHistory,
        ];


        return Inertia::render('Attempt/Attempt', $data);
    }
}
