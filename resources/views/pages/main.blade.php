@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Main Page </h1>
            <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
            </ol>

            <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h4>Background Image..</h4>
                    <img style="height: 40vh" src="{{url($main->bc_img)}}" alt="" class="img-thumbnail">
                    <input class="mt-2" type="file" id="bc-img" name="bc_img">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                    </div>
                    <div>
                        <h4>Upload Resume</h4>
                        <input type="file" name="resume" id="resume">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
    </form>
    </main>
@endsection
