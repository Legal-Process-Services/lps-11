<?php

namespace App\Models;

use App\Scopes\BelongsToUserClientScope;
use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Customer extends FMModel
{
    use HasFactory;


    protected $layout = 'ATTRNEYS';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'FirmName' => 'FirmName',
        'AttnyID' => 'AttnyID',
        'Loc Active Primary::Email' => 'Email',
        'Status' => 'Status',
        'userID' => 'userID',
    ];




    public function outstandingInvoices()
    {
        return $this->hasMany(Invoice::class)->where('Attorney_ID', "=" . '');
    }

    public function ThisClientResponse()
    {
        return $this->hasOne(Invoice::class)->where('WorkOrderNo', "=0701234");
        dd($this->hasOne(Invoice::class)->where('WorkOrderNo', "=" . $this->id));
        // it is not this function, this is not showing the results that I see, and obviously it's not doing the dd
    }

    public function outstandingFirm(){

        //dd($this->hasOne(Customer::class)->where('userID', "=" . $this->id));
        return $this->hasOne(Customer::class)->where('userID', "=" . $this->id);

    }

    public function findAttemptHistory(){

        return $this->hasMany(Attempt::class)->paginate(6);


    }
    public function outstandingSearch(){

        return $this->hasMany(Search::class)->where('CUSTOMER ID MATCH FIELD', "=" . $this->id);

    }




 }


