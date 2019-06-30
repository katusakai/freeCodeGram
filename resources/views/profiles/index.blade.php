@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.fkun1-1.fna.fbcdn.net/vp/2933f466753bbf5f9f376eef3ddb98f3/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fkun1-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="{{route('post.create')}}">Add New Post</a>
            </div>
            <div>
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                <a href="https://{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
