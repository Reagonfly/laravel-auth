@extends('layouts.admin');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 my-4">
            <div class="d-flex justify-content-evenly">
                <div>
                    <h2 class="text-primary"><strong>Post Index</strong></h2>
                </div>
                <div>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-secondary">Add New Post</a>
                </div>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
        @endif
        <div class="col-12">
            <table class="table table-striped">
                <thead class="text-danger">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th class="text-success">{{$post->id}}</th>
                        <th>{{$post->title}}</th>
                        <th>{{$post->slug}}</th>
                        <th>
                            {{--action--}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection