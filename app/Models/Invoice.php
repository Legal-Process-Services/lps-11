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
        'TimeofHearing' => 'TimeofHearing',
        'Court' => 'Court',
        'County' => 'County',
        'HearingStatus' => 'HearingStatus',
        'TotalAmtDueTableSummary' => 'TotalAmtDueTableSummary',
        'DateSentToAttny' => 'DateSentToAttny',
        'DateRecdfromAttnys' => 'DateRecdfromAttnys',
        'Contact' => 'Contact',
        'Dept_No' => 'Dept_No',
        'Atty_Client' => 'Atty_Client',
        'Defendant_Respondent' => 'Defendant_Respondent',
        'TotalAmountDueTABLE' => 'TotalAmountDueTABLE',
        'ContactID' => 'ContactID',
        'ATTRNEYS::FirmName' => 'FirmName',
        'ATTRNEYS::WebChkDateRecdfromAttnys' => 'WebChkDateRecdfromAttnys',
        'ATTRNEYS::WebChkDateSentToAttny' => 'WebChkDateSentToAttny',
        'ATTRNEYS::WebChkWorkOrderNo' => 'WebChkWorkOrderNo',
        'ATTRNEYS::WebChkCase_No' => 'WebChkCase_No',
        'ATTRNEYS::WebChkDocket_ID' => 'WebChkDocket_ID',
        'ATTRNEYS::WebChkDateServed' => 'WebChkDateServed',
        'ATTRNEYS::WebChkServe_To' => 'WebChkServe_To',
        'ATTRNEYS::WebChkContact' => 'WebChkContact',
        'ATTRNEYS::WebChkCombAttnyFirstLastTitle' => 'WebChkCombAttnyFirstLastTitle',
        'ATTRNEYS::WebChkDept_No' => 'WebChkDept_No',
        'ATTRNEYS::WebChkCourt' => 'WebChkCourt',
        'ATTRNEYS::WebChkDateofHearing' => 'WebChkDateofHearing',
        'ATTRNEYS::WebChkPlaintiff' => 'WebChkPlaintiff',
        'ATTRNEYS::WebChkDefendant' => 'WebChkDefendant',
        'ATTRNEYS::InvoiceDate' => 'InvoiceDate',
    ];


    public function lineItems(){
        return $this->hasMany(LineItem::class);
    }


}
