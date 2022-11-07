@extends('components.show_components.show_index')

@section('title', 'Show')
@section('content')
    @if(!empty($data))
    <h1 class="text-center">{{ $data->name }}</h1>
    <div class="text-center">
        <a href="" class="btn btn-primary">See Details</a>
        <a href="" class="btn btn-primary">See Details</a>
    </div>
    @else
        aradiginiz id = {{ $reqId }} bulunamadi
    @endif
@endsection