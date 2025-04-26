<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'appointment_date',
        'appointment_time',
        'booking_type',
        'address',
        'unit_apt',
        'city',
        'state',
        'zip_code',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'onside_first_name',
        'onside_last_name',
        'onside_email',
        'onside_phone_number',
        'removal_items',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
