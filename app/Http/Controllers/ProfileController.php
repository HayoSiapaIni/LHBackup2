<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile() {
        $user = User::where('id', Auth::id())->first();

        return view('profile',compact('user'));
    }

    public function editProfile(Request $request) {

        $validator = Validator::make($request->all(), [
            
            'photo_profile' => [ 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else { 

            $profile = User::where('id',Auth::id())->first();
            $profile->nama_lengkap = $request->input('nama_lengkap');
            $profile->alamat_toko = $request->input('alamat_toko');

            if ($request->hasFile('photo_profile')) {
                $photo_profile = $request->file('photo_profile');
                $filenamex = $photo_profile->getClientOriginalName();
                $photo_profile->storeAs('storage/images/Profil', $filenamex);
                $profile->photo_profile = $filenamex;
            }

            $profile->save();

            $user = User::where('id',Auth::id())->first();

            return redirect()->route('Profile', compact('user'));
        }
    }
}
