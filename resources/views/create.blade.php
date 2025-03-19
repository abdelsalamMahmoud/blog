@extends('layouts.app')

@section('content')
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 w-75">
                <div class="mt-16 mx-auto">

                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="Title" placeholder="Post Title" name="title">
                        </div>

                        <div class="form-group mb-4">
                            <label for="Content">Content</label>
                            <textarea class="form-control" id="Content" rows="3" name="content"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>

                    </form>

                </div>
            </div>
        </div>
@endsection
