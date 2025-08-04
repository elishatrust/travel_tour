<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'Booking',
            ];

        return view('backend.booking.list', compact('data'));
    }

    public function listView()
    {
        $data = BookingModel::getBooking();
        return view('backend.booking.list_view', compact('data'));
    }

    public function deleteBooking($id)
    {
        try {
            $data = BookingModel::updateBooking($id);
            if($data)
            {
                $message='Booking deleted successfully';
                return response()->json(['status' => 200, 'message' => $message]);
            }else{
                $message='Something went wrong. Try again!';
                return response()->json(['status' => 450, 'message' => $message]);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
