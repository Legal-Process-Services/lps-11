<?php

namespace App\Models;

use App\Http\Controllers\AuthClientController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GearboxSolutions\EloquentFileMaker\Database\Eloquent\FMModel;

class AuthClient extends FMModel
{
    use HasFactory;


    protected $layout = 'customers';
    protected $keyType = 'string';
    protected $fieldMapping = [
        'CUSTOMER ID MATCH FIELD' => 'id',
        'FirmName' => 'name',
        'AttnyID' => 'address_2',
        'Address' => 'address_1'
    ];

    public function getThisFirm(){
        return $this->hasOne(AuthClientController::class)->where('AttnyID', "=AJJR");
        //return $this->hasOne(AuthClientController::class)->where('CUSTOMER ID MATCH FIELD', "=" . $this->id);
    }

}
