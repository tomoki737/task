@extends('app')

@section('title', '一覧画面')

@section('content')
@include('nav')
<div class="container" style="max-width: 800px;">
    <div class="mt-5 h2">投稿一覧</div>
    @foreach($articles as $article)
    <div class="card mb-2">
        <div class="card-body">
            {{$article->body}}
        </div>
    </div>
    @endforeach
</div>
@endsection
