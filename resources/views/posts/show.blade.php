@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="{{url('storage/' . $post->image)}}" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img class="w-100 rounded-circle" src="{{url($post->user->profile->profileImage())}}" alt="" style="max-width: 40px">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="{{route('profile.show', ['user' => $post->user->id])}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold">
                    <a href="{{route('profile.show', ['user' => $post->user->id])}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span> {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection