@extends('layouts.app')


@section('title', 'Posts')


@section('content')
    <h1>

        @foreach ($posts as  $post)
        <div>{{ $post['title']}}</div>


        @endforeach
        {{-- <div class="col-6-md-6 align-center"> {{ $post['title'] }} <br> {{ $post['content'] }}</div> --}}
    </h1>

@endsection
