@extends('layouts.app')

@section('content')
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 w-75">

                <a class="btn btn-primary mb-4" href="{{route('posts.create')}}">Add New Post</a>

                <div class="mt-16 mx-auto">

                    <table class="table table-striped table-dark mx-auto">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('posts.show',$post->id)}}">Show</a>

                                    @auth
                                        @if(auth()->user()->role == 1)
                                            <a class="btn btn-secondary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ route('posts.delete', $post->id) }}">Delete</a>
                                        @endif
                                    @endauth
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
@endsection
