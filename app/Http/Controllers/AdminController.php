<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function requestIndex()
    {
        $users = User::where('status', 'pending')->orderBy('created_at', 'desc')->paginate(25);

        return view('admin.joinrequest',  compact('users'));
    }


    function genusers()
    {

        for ($i=0; $i <=31 ; $i++) { 
            $user = User::factory()->create();
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

        //queue the user email here... send after 30 mins
    }
}
