@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.fkun1-1.fna.fbcdn.net/vp/2933f466753bbf5f9f376eef3ddb98f3/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fkun1-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                freeCodeCamp.org
            </div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div>
                <a href="#">www.freecodecamp.org</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkun1-1.fna.fbcdn.net/vp/c6556f9c2188adee53fca177e71b41ae/5DBD4AB8/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=instagram.fkun1-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkun1-1.fna.fbcdn.net/vp/adc3c05dba0bde542df6d61af0c7e364/5DB89C39/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/64399732_342632753086513_7474261410690496163_n.jpg?_nc_ht=instagram.fkun1-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkun1-1.fna.fbcdn.net/vp/de0a7984c91e72c2873457c3d7aada64/5DAEF247/t51.2885-15/sh0.08/e35/c0.113.933.933a/s640x640/64608541_325913674993611_762834003623133469_n.jpg?_nc_ht=instagram.fkun1-1.fna.fbcdn.net" alt="">
        </div>
    </div>
</div>
@endsection
