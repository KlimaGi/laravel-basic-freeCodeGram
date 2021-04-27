@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://images.unsplash.com/photo-1496459169807-866e74594fa8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" style="height:5rem;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Title</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Lorem ipsum</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
            <div><a href="#">www.loremipsum.com</a></div>
        </div>
    </div>

<div class="row pt-5">
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1587279063133-e65e2d8b849f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1482784160316-6eb046863ece?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1563547257011-054b1054e185?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1051&q=80" class="w-100">
    </div>
</div>

</div>
@endsection
