<?php


namespace App\Http\Controllers;

use App\Mail\ClientResponse;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Carbon\Carbon;


class ClientResponseController extends Controller
{
    public function show()
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;

        $sixmoago = Carbon::now()->subMonths(6)->format('D F j, Y');

        $outFirm = $customer->outstandingFirm()->get();

        $outResponseWO = $customer->ThisClientResponse()->get();

        //is this where I put the email send?
       //Mail::to($post->user)->send(new ClientResponse($response));

        $data = [
            'outResponseWO' => $outResponseWO,
            'outFirm' => $outFirm,
            'sixmoago' => $sixmoago,
        ];


        return Inertia::render('Forms/ClientResponse', $data);
    }
    public function store(Request $request, Response  $response)
    {
        /** @var User $user */
        $user = Auth::user();

        dd($request->all());

        $customer = $user->customer;

        // I think this is where it is supposed to send but gets errors with undefined $post
        //Mail::to($post->user)->send(new ClientResponse($post));

        $data = [
            'outResponseWO' => $outResponseWO,
            'outFirm' => $outFirm,
            'sixmoago' => $sixmoago,
        ];


        return Inertia::render('Forms/ClientResponse', $data);
    }
}

