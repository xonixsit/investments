<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'name', 'email', 'dial_code', 'phone', 'country',
        'contact_method', 'property_interest', 'budget_label', 'message', 'status',
    ];
}
