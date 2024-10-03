<?php

namespace App\Models;

use App\Scopes\BelongsToUserClientScope;
use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attempt extends FMModel
{
    use HasFactory;


    protected $layout = 'attempts';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'WorkOrderNo' => 'id',
        'InsertType' => 'InsertType',
        'DateAttempted' => 'DateAttempted',
        'Time_AttOrSvd' => 'Time_AttOrSvd',
        'ServerID' => 'ServerID',
        'Attorney_ID' => 'Attorney_ID',
        'customer_id' => 'customer_id',
    ];


    public function attemptItems(){
        //$this->hasMany(Attempt::class)->where('id', "=" . $this->id);
    }


}
