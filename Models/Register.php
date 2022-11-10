<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primarykey='stu_id';
    public $timestamps=false;
    public function setNameAttributes($value)
    {
        $this->atttributes['name']="Mr". $value;

    }
    public function setAddressAttributes($value)
    {
        $this->attributes['address']=$value.".India";
    }

}
