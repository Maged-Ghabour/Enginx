<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\User;
use Illuminate\Http\Request;



class ProfileController extends Controller
{
    public function show($id)
    {

        $user['user'] = User::where('id', $id)->get();
        // $user['order'] = User::where('user_id', $id)
        //     ->with('order')
        //     ->get();
        // dd($user);
        return view('Front.profile_user.a')->with($user);
    }
    public function edit_name($id)
    {
        $user = User::findOrFail($id);
        return view('Front.profile_user.edit_name', compact('user'));
    }
    public function edit_email($id)
    {
        $user = User::findOrFail($id);
        return view('Front.profile_user.edit_email', compact('user'));
    }
    public function edit_phone($id)
    {
        $user = User::findOrFail($id);
        return view('Front.profile_user.edit_phone', compact('user'));
    }
    public function update(Request $request, $id)
    {
        if ($request->name) {
            User::where('id', $request->id)
                ->update(['name' => $request->name]);
            return redirect()->route('profile', $request->id);
        } elseif ($request->email) {
            User::where('id', $request->id)
                ->update(['email' => $request->email]);
            return redirect()->route('profile', $request->id);
        } elseif ($request->phone) {
            User::where('id', $request->id)
                ->update(['phone' => $request->phone]);
            return redirect()->route('profile', $request->id);
        }
    }
}