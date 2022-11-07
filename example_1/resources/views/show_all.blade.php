@extends('components.show_all_components.show_all_index')

@section('title', 'Show_All')
@section('content')
    @foreach($data as $guest)
        <div class="row justify-content-md-center">
            <div class="card text-center col col-lg-5 mb-4 p-0">
                <div class="card-body">
                    <h5 class="card-title">{{ $guest->name }}</h5>
                    <p class="card-text">{{ $guest->note }}</p>
                    <a href="{{ route('home_show', ['id' => $guest->id]); }}" class="btn btn-primary">See Details</a>
                </div>
                <div class="card-footer text-muted">
                    @if(!empty($guest->updated_at))
                        {{ $guest->updated_at }}
                    @else
                        no update info
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endsection