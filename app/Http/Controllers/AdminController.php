<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\ShiftRequest;
use App\Models\User;
use Database\Factories\ShiftFactory;
use Database\Factories\ShiftRequestFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function requestIndex(Request $request)
    {
        if ($request->q) {
            $users = User::where('name', 'like', '%' . $request->q . '%')->where(['status' => 'pending'])->orderBy('updated_at', 'desc')->limit(100)->get();
        } else {
            $users = User::where('status', 'pending')->orderBy('created_at', 'desc')->paginate(25);
        }
        return view('admin.joinrequest',  compact('users'));
    }

    function index()
    {
        $workers_active = User::where(['status' => 'active'])->count();
        $workers_all = User::count();
        $pending = ShiftRequest::where(['status' => 'pending'])->count();
        $completed = ShiftRequest::where(['status' => 'completed'])->count();
        $total_shift = Shift::all()->sum('workers_needed');
        $available = Shift::all()->sum('workers_needed') - ShiftRequest::where(['status' => 'approved'])->count();

        $users = User::inRandomOrder()->limit(5)->get(['id', 'name', 'phone', 'email', 'status']);

        $data = [
            'workers' => $workers_all,
            'active_workers' => $workers_active,
            'pending_request' => $pending,
            'completed' => $completed,
            'total_shift' => $total_shift,
            'available' => $available
        ];

        return view('admin.index', compact(['data', 'users']));
    }


    function genusers()
    {

        for ($i = 0; $i <= 1000; $i++) {
            // $user = User::factory()->create();
            ShiftRequest::factory()->create();
            // Shift::factory()->create();
        }
    }


    function approveSingle($id)
    {
        $this->approve($id);
        return back()->with('success', 'User request has been approved');
    }

    function approve($id)
    {
        User::where('id', $id)->update([
            'status' => 'active'
        ]);
    }

    function approveMultiple(Request $request)
    {
        Validator::make($request->all(), [
            'shift_id' => 'required|exists:shift,id',
            'data' => 'required|array',
            'action' => 'required|string'
        ]);

        $shift = Shift::withCount(['request', 'approved'])->find($request->shift_id);
        $data = $request->data;
        $approved = 0;
        $skipped = 0;

        if ($request->action == 'reject') {
            foreach ($data as $key => $id) {
                ShiftRequest::where('id', $id)->update([
                    'status' => 'rejected'
                ]);
                $approved++;
            }
        } else {
            foreach ($data as $key =>  $id) {
                if (ShiftRequest::where(['id' => $shift->id, 'status' => 'approved'])->count() <= $shift->workers_needed) {
                    ShiftRequest::where('id', $id)->update([
                        'status' => 'approved'
                    ]);
                    $approved++;
                } else {
                    $skipped++;
                }
            }
        }

        if ($request->action == 'reject') {
            $message = $approved . ' request rejected';
        } else {
            $message = ($skipped == 0) ? $approved . ' request approved' : $approved . ' request approved (' . $skipped . ', request skipped)';
        }

        return response([
            'message', $message
        ]);
    }

    function approveSingleShift($id)
    {
        ShiftRequest::where('id', $id)->update([
            'status' => 'approved'
        ]);
        return back()->with('success', 'Shift has been approved');
    }

    function rejectSingleShift($id)
    {
        ShiftRequest::where('id', $id)->update([
            'status' => 'rejected'
        ]);
        return back()->with('success', 'Shift has been approved');
    }


    function activeUserIndex(Request $request)
    {
        if ($request->q) {
            $users = User::where('name', 'like', '%' . $request->q . '%')->where(['status' => 'active'])->orderBy('updated_at', 'desc')->limit(100)->paginate();
        } else {
            $users = User::where('status', 'active')->orderBy('updated_at', 'desc')->paginate(25);
        }
        return view('admin.active_users',  compact('users'));
    }


    function shiftRequestIndex()
    {
        $requests = ShiftRequest::with(['user:id,name', 'shift:id,title,location'])->orderBy('updated_at', 'desc')->where(['status' => 'pending'])->paginate(25);
        return view('admin.view_shift_request', compact('requests'));
    }

    function shiftDetailsIndex($id)
    {
        $shift = Shift::withCount(['request', 'pending', 'approved', 'completed'])->findOrFail($id);
        $requests = ShiftRequest::with(['user:id,name,email,phone'])->where('shift_id', $shift->id)->paginate(25);
        return view('admin.shifts_details', compact(['shift', 'requests']));
    }
}
