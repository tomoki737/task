@extends('app')

@section('title', '作成画面')

@section('content')
<div class="container" style="max-width: 800px;">
    <div class="mt-5 h2">作成</div>
    <form method="POST" action="{{ route('articles.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1 mt-3" class="form-label">文字を入力</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div align="end">
            <button type="submit" class="btn btn-outline-primary btn-lg mr-auto">作成</button>
        </div>
    </form>
</div>
@endsection
