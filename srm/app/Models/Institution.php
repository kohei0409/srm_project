<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $institution = 'institutions';

    protected $fillable =
        [
            'image1',
            'image2',
            'image3',
            'image1comment',
            'image2comment',
            'image3comment',
            'image4comment',
            'image5comment',
            'theta',
            'madoriimage1',
            'floornumber',
            'status1',
            'created_at',
            'updated_at',
            'deleted_at',
            'comment1',
            'service',
            'hikiwatashi',
            'madori',
            'type',
            'roomnumber',
            'direction',
            'areasize',
            'peopleimage',
            'ispetok',
            'price1',
            'price2',
            'writedate',
            'price1manage',
            'price1food',
            'price2manage',
            'price2food',
            'sheetformat',
            'reformstatus',
            'floortotalnumber',
            'price1_80',
            'price2_80'
        ];

}
