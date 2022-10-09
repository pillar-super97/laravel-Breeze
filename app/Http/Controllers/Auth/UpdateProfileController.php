<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UpdateProfileRequest;

class UpdateProfileController extends Controller
{
    //
    public function update(UpdateProfileRequest $request)
    {
       // auth()->user()->update($request->only('name','ic', 'age','email','bloodType','gender'));

       if ($request->input('address'))
        {
            auth()->user()->update([
                'address' => ($request->input('address'))
            ]);
        }

        if ($request->input('zipCode'))
        {
            auth()->user()->update([
                'zipCode' => ($request->input('zipCode'))
            ]);
        }

        if ($request->input('password')) 
        {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }
}
