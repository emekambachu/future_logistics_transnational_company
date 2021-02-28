<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [

        'parcel',
        'parcel_weight',
        'user_detail_id',
        'tracking_id',
        'is_active',

        'product',
        'carrier_ref',
        'quantity',
        'shipment_mode',
        'payment_mode',

    ];

    public function userDetail(){
        return $this->belongsTo(UserDetails::class);
    }

    public function shipmentHistories(){
        return $this->hasMany(ShipmentHistory::class);
    }
}
