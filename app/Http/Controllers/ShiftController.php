<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\ShiftRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShiftController extends Controller
{
    function createIndex()
    {
        $shifts = Shift::with(['createdby:id,name'])->withCount(['request'])->orderby('created_at', 'desc')->paginate(25);
        return view('admin.createshift', compact('shifts'));
    }

    function createShift(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'string|required|min:3|max:50',
            'salary' => 'float|required|min:1|max:20',
            'workers_needed' => 'integer|required|min:1',
            'location' => 'string|required|min:1|max:100',
            'type' => 'string|required|min:1|max:30',
            'discipline' => 'string|required|min:1|max:30',
            'reference' => 'string|required|min:1|max:30',
            'description' => 'string|required|min:1|max:30',
        ]);

        Shift::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'workers_needed' => $request->workers_needed,
            'location' => $request->location,
            'type' => $request->type,
            'discipline' => $request->discipline,
            'reference' => $request->reference,
            'description' => $request->description,
            'created_by' => auth()->user()->id,
        ]);

        return back()->with('success', 'Shift has been created sucessfuly');
    }



    function acceptShift(Request $request)
    {
        Validator::make($request->all(), [
            'shift_id' => 'required|exists:shifts,id'
        ]);

        // return $request;

        $ck = ShiftRequest::where(['user_id' => auth()->user()->id, 'shift_id' => $request->shift_id ])->count();
        if($ck){
            return back()->with('error', 'You have already requested for this shift');
        }

        ShiftRequest::create([
            'user_id' => auth()->user()->id,
            'shift_id' => $request->shift_id
        ]);

        return back()->with('success', 'Request has been sent sucessfuly');
    }
}
