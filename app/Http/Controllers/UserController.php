<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\ShiftRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function searchShiftIndex()
    {
        $shifts = Shift::with(['createdby:id,name'])->where(['status' => 'active'])->orderBy('updated_at', 'desc')->paginate(20);
        return view('searchjobs', compact('shifts'));
    }

    function detialIndex($id)
    {
        $shift = Shift::findOrFail($id);
        $shifts = Shift::where(['status' => 'active'])->inRandomOrder()->limit(5)->get(['id', 'title', 'location', 'type', 'salary']);
        $details = [
            'status' => ''
        ];
        if (auth()->user()) {
            $ck = ShiftRequest::where(['user_id' => auth()->user()->id, 'shift_id' => $id])->first();
            if ($ck) {
                $details = [
                    'status' => $ck->status
                ];
            }
        }
        return view('shiftdetails', compact(['shift', 'shifts', 'details']));
    }

    function bookShiftsIndex()
    {
        $requests = ShiftRequest::with(['shift'])->where(['user_id' => auth()->user()->id])->orderBy('id', 'desc')->paginate(25);
        return view('users.bookshifts', compact('requests'));
    }
}
