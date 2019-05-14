<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class UserController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $images = $request->image;
        foreach ($images as $image)
        {
            $imageDetail = new Image();
            $imageDetail->user_id = $user->id;
            $path = $image->store('images','public');
            $imageDetail->img = $path;
            $imageDetail->save();
        }

    }

    public function showImageUser($id)
    {
        $user = User::find($id)->images;
//        $images = $user->images;
        $image =$user[0];
//        dd($user);
        return view('show', compact('image'));
    }
}
