@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('home.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('home.logged in') }}
                    <p><a href="{{ url('home/editpost') }}">Create New Post</a></p>

                    @foreach($posts as $post)
                        <h2><a href="{{ url('home/show/'.$post->id) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->content }}</p>
                        {{ $post->created_at }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
