<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookTableController extends Controller
{
    public function add (Request $request)
    {
        if (Auth::check())
        {
            if (Auth::user()->access_label == 0)
            {
                BookTable::bookTable($request);
                return back()->with('message', 'Booking a table successfully');
            }
            else {
                return redirect()->back()->with('error', 'Only registered customer can booking this table');
            }

        }

        else {
            return redirect('/login')->with('message', 'You may login first');
        }
    }



    public function manage()
    {
        return view('admin.booking.manage', [
            'bookings' => BookTable::orderBy('id', 'DESC')->get(),
        ]);
    }


    public function delete($id)
    {
        $booking = BookTable::find($id);
        $booking->delete();
        return back()->with('message', 'Booking deleted successfully');
    }


}
