<?php

namespace App\Models;

use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Firm extends FMModel
{
    use HasFactory;


    protected $layout = 'customers';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'CUSTOMER ID MATCH FIELD' => 'id',
        'FirmName' => 'name',
        'AttnyID' => 'address_2',
        'Notes' => 'address_1',
        'userID' => 'userID'
    ];


   // Models/Customer.php is used instead of this Firm page FieldMapping above is obsolete



}


