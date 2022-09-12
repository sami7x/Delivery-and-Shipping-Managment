<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;
    protected $table ='riders';
     protected $fillable =[
         'rider_name',
         'rider_address',
         'rider_phone',
         'gender',
         'license_no',
         'vehicle_no',
         "image"

     ];
     public $append=[ "image_path"];
}
