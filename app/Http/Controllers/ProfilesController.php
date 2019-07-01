<?php

namespace App\Http\Controllers;

use App\Caching\Caching;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = auth()->user() ? auth()->user()->following->contains($user->id) : false;

        $postCount = Caching::remember($user, 'count.post' . $user->id, $user->posts->count());

        $followersCount = Caching::remember($user, 'count.followers' . $user->id, $user->profile->followers()->count());

        $followingCount = Caching::remember($user, 'count.following' . $user->id, $user->profile->followers()->count());

        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'image',
        ]);

        if (\request('image')) {
            $imagePath = \request('image')->store('profile', 'public');
            Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000)->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}
