<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Carbon\Carbon;

class SearchController extends Controller
{
    //

    public function show(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;


        $invoices = Invoice::query();
        $search = $request->search;
        $date1 = $request->invdate1;
        $date2 = $request->invdate2;
        $date1a = Carbon::parse($date1)->format('m/d/Y');
        $date2a = Carbon::parse($date2)->format('m/d/Y');
        if($search){
            $invoices->when($search, function ($query,$search) use ($customer){
                $query->where('WorkOrderNo',    $search)
                    ->where('Attorney_ID', $customer->AttnyID)
                    ->orWhere('InvoiceFaxRemarks',  $search)
                    ->orWhere('Serve_To(1)',  $search)
                    ->orWhere('Status', $search)
                    ->orWhere('Docket_ID',  $search)
                    ->orWhere('Case_No',  $search);

            });
        }
        else if ($date1){
           $invoices->when($date1a, function ($query, $date1a) use ($customer, $date2a){
                    $query->whereBetween('InvoiceDate',    [$date1a, $date2a])
                        ->orderByDesc('WorkOrderNo')->paginate(5);
                });

        }



        $data = [
            'outSearch' => $invoices->where('Attorney_ID', $customer->AttnyID)
                ->orderByDesc('WorkOrderNo')->paginate(10),
        ];


        return Inertia::render('Search/Search', $data);
    }


    public function index(Request $request)
    {

        $searches = Search::query();
        $searches->when(request('search'), function ($query){
           $query->where('WorkOrderNo', 'like', "%{request->input('search')}%")
                ->orWhere('Serve_To(1)', 'like', "%{request->input('search')}%")
                ->orWhere('Status', 'like', "%{request->input('search')}%")
                ->orWhere('Docket_ID', 'like', "%{request->input('search')}%")
                ->orWhere('Case_No', 'like', "%{request->input('search')}%");

    });
        dd($searches->limit(19)->get());
        return  Inertia::render('Search/Search',  ['searches' => $searches->limit(19)->get()]);

        //$search = $request->input('search');
        //$results = Search::where('WorkOrderNo', 'like', "%$search%")->get();

    }

    public function showReport(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $customer = $user->customer;


        $invoices = Invoice::query();
        $search = $request->search;
        $date1 = $request->invdate1;
        $date2 = $request->invdate2;
        $date1a = Carbon::parse($date1)->format('m/d/Y');
        $date2a = Carbon::parse($date2)->format('m/d/Y');
        if($search){
            $invoices->when($search, function ($query,$search) use ($customer){
                $query->where('WorkOrderNo',    $search)
                    ->where('Attorney_ID', $customer->AttnyID)
                    ->orWhere('InvoiceFaxRemarks',  $search)
                    ->orWhere('Serve_To(1)',  $search)
                    ->orWhere('Status', $search)
                    ->orWhere('Docket_ID',  $search)
                    ->orWhere('Case_No',  $search);

            });
        }
        else if ($date1){
            $invoices->when($date1a, function ($query, $date1a) use ($customer, $date2a){
                $query->whereBetween('InvoiceDate',    [$date1a, $date2a])
                    ->orderByDesc('WorkOrderNo')->paginate(5);
            });

        }



        $data = [
            'outSearch' => $invoices->where('Attorney_ID', $customer->AttnyID)
                ->orderByDesc('WorkOrderNo')->paginate(10),
        ];


        return Inertia::render('Search/Reports', $data);
    }
}

