<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function viewProfile()
    {
        $profile = Profile::where('id','=',Auth::id())->firstOrFail();
        return view('profile.index', compact('profile'));
    }

    public function editProfile(Profile $profile)
    {

        if($profile->id == Auth::id() && Auth::check()) {
            return view('profile.edit', compact('profile'));
        }
        else {
            return redirect()->route('profile.index')
                ->with('fail','No puedes acceder');
        }
    }

    public function updateProfile(Request $request, Profile $profile) {

        $profile->update($request->all());

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');

            $savepath = "avatars/".Auth::id()."/".$file->getClientOriginalName();

            Storage::disk('public')->put($savepath , File::get($file));
            $profile->photo = asset("storage/".$savepath);
            $profile->save();
        }

        return redirect()->route('profile.index')
            ->with('success','Perfil actualizado con éxito');
    }
}
