<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'guest_name',
        'guest_email',
        'guest_phone',
        'guest_note',
        'guest_room_number',
        'guest_check_in',
        'guest_check_out',
        'room_id',
        'payment_method',
        'reservation_number',
        'guest_status',
        'guest_id_card',
        'isOnline',
        'isReseve',
        'subtotal',
        'totalAmount',
    ];
}
