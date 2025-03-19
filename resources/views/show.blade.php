@extends('layouts.app')

@section('content')
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 w-75">
                <div class="container mt-5">
                    <div class="text-center">
                        <h1 class="fw-bold">{{ $post->title }}</h1>
                        <p class="mt-3">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
