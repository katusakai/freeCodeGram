@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{route('profile.show', ['user' => $post->user->id])}}">
                    <img class="w-100" src="{{url('storage/' . $post->image)}}" alt="">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <p>
                <span class="font-weight-bold">
                    <a href="{{route('profile.show', ['user' => $post->user->id])}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span> {{$post->caption}}
                </p>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>

</div>
@endsection