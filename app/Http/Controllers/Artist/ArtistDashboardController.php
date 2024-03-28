<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ArtistDashboardController extends Controller
{
    public function dashboard()
    {
        return view('artist.dashboard.dashboard');
    }

    public function profile(Request $request) {
        return view('artist.profile');
    }
    public function profileUpdate(Request $request)
   {
        $user = User::find(auth()->user()->id);
        $input = $request->except(['profile','_token'],$request->all());

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile/"), $img);
        }

        $user->update($input);

        return redirect()->back()
                ->with(['message'=>'Profile Update Successfully','type'=>'success']);
   }

}
