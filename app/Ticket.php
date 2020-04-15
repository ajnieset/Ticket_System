<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //define the model
    protected $fillable = [
        'title',
        'ticket_number',
        'description',
        'assigned',
        'created_date',
        'completed_date',
        'status'
    ];
}
