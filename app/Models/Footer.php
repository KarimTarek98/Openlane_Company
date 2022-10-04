<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'contact_text',
        'country',
        'address_details',
        'company_email',
        'connect_small_desc',
        'copyright',
    ];
}
