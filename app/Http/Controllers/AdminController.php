<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // function to logout
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    // display user profile
    public function profile()
    {
        // get id of user who is logged in
        $userId = Auth::user()->id;

        // fetch user data
        $user = User::find($userId);

        return view('admin.admin_profile', compact('user'));
    }

    public function editProfile()
    {
        // get id of user who is logged in
        $userId = Auth::user()->id;

        // fetch user data
        $user = User::find($userId);

        return view('admin.edit_profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        if (Auth::user()->id == $id)
        {
            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username
            ]);
            if ($request->file('profile_photo'))
            {
                $photo = $request->file('profile_photo');
                $photoName = date('YmdHi') . '-' . $photo->getClientOriginalName();
                $user->update([
                    'profile_photo' => $photoName
                ]);
                $photo->move(public_path('uploads/admin-photos'), $photoName);
            }

            $notification = array(
                'message' => 'Admin Profile has been updated',
                'alert-type' => 'success'
            );
        }
        else
        {
            echo "Can't Update User Information";
        }



        return redirect()->route('admin.profile')->with($notification);
    }

    // method for change password view page
    public function changePassword()
    {
        return view('admin.change_password');
    }

    // method to update password
    public function updatePassword(Request $request)
    {
        $userID = $request->userid;
        // validate inputs
        $passValidate = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword'
        ]);

        // get user password
        $userPass = Auth::user()->password;

        // get old pass
        $oldPass = $request->oldpassword;

        // check if inserted password equal to password in the database
        if (Hash::check($oldPass, $userPass))
        {
            $user = User::find($userID);
            $user->update([
                'password' => bcrypt($request->newpassword)
            ]);
            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        }
        else
        {
            session()->flash('message', 'Password not correct');
            return redirect()->back();
        }
    }

}
