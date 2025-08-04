<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookingModel extends Model
{
    use HasFactory;

    protected $table = 'book_trip';
    protected $fillable = [
        'fullname', 'nationality', 'phone', 'email', 
        'arrival_date', 'departure_date', 'adults', 'children', 
        'accommodation', 'package_id', 'cost', 'message'
    ];

    static public function getBooking()
    {
        return DB::table('book_trip')
            ->join('packages', 'packages.id', '=', 'book_trip.package_id') 
            ->where('book_trip.archive', '=', 0)->orderBy('book_trip.id', 'desc')
            ->get();
    }

    static public function updateBooking($id)
    {
        return DB::table('book_trip')->where('id', '=', $id)->update(['archive' => 1]);
    }
}
