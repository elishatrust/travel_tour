<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripModel extends Model
{
    use HasFactory;

    protected $table = 'book_trip';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'arrival_date',
        'departure_date',
        'adults',
        'children',
        'accommodation',
        'package_id',
        'cost',
        'status',
        'archive',
        'updated_by',
        'created_by',
    ];


}
