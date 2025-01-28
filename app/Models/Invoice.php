<?php

namespace App\Models;

use App\Scopes\BelongsToUserClientScope;
use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends FMModel
{
    use HasFactory;


    protected $layout = 'invoices';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'CUSTOMER ID MATCH FIELD' => 'customer_id',
        'Attorney_ID' => 'Attorney_ID',
        'WorkOrderNo' => 'id',
        'Status' => 'total',
        'InvoiceFaxRemarks' => 'InvoiceFaxRemarks',
        'DateServed' => 'DateServed',
        'Filed_On' => 'paid_on',
        'Docket_ID' => 'Docket_ID',
        'Case_No' => 'Case_No',
        'N1010C_Date' => 'N1010C_Date',
        'DateRecdfromAttnys' => 'DateRecdfromAttnys',
        'Serve_To(1)' => 'Serve_To',
        'Insured' => 'Insured',
        'CombAttnyFirstLastTitle' => 'CombAttnyFirstLastTitle',
        'Service' => 'Service',
        'DocumentsToBeServed(1)' => 'DocumentsToBeServed',
        'Serve_To_Address1' => 'Serve_To_Address1',
        'FriendlyWitness' => 'FriendlyWitness',
        'OKtoSubServe' => 'OKtoSubServe',
        'CutCheck' => 'CutCheck',
        'CutCheckAmt' => 'CutCheckAmt',
        'SpecialInstructions' => 'SpecialInstructions',
        'WebSendBy' => 'WebSendBy',
        'Docket_ID' => 'Docket_ID',
        'InvoiceDate' => 'InvoiceDate',
        'DateofHearing' => 'DateofHearing',
    ];

    public function lineItems(){
        return $this->hasMany(LineItem::class);
    }


}
