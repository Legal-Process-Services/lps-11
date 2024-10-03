<?php

namespace App\Models;

use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LineItem extends FMModel
{
    use HasFactory;


    protected $layout = 'invoice-data';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'INVOICE ID MATCH FIELD' => 'invoice_id',
        'ServiceDescription' => 'ServiceDescription',
        'ItemCode' => 'ItemCode'
    ];

}
