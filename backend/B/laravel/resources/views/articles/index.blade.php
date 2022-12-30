@extends('app')

@section('title', '一覧画面')

@section('content')
<div class="container" style="max-width: 800px;">
<a class="btn btn-primary" href="{{ route('articles.create') }}" role="button">Link</a>
    <div class="mt-5 h2">一覧が表示されます</div>
    @foreach($articles as $article)
    <p>{{$article->body}}</p>
    @endforeach
    <p></p>
</div>
@endsection
