@extends('layouts.app')


@section('title', 'Posts')


@section('content')
    <h1>
{{--
        @foreach ($posts as  $post)
        <div>{{ $post['title']}}</div>
        <div>{{ $post['content']}}</div>

        @endforeach --}}
        <div class="col-6-md-6 align-center"> {{ $posts['title'] }} <br> {{ $posts['content'] }}</div>
    </h1>

@endsection
