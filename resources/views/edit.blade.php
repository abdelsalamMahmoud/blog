@extends('layouts.app')

@section('content')
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 w-75">
                <div class="mt-16 mx-auto">

                    <form action="{{ route('posts.update',$post->id)}}" method="post">
                        @csrf
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="content">content</label>
                            <input class="form-control" id="content" name="content" value="{{$post->content}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>
@endsection
