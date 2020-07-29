@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $topic->title }}</h1>
        <hr>
        <form action="{{ route('topics.update', $topic) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titre du topic</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $topic->title }}">
            @error('title')
            <div class="invalidfeedback">{{ $errors->first('title') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">votre sujet</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ $topic->title }}</textarea>
            @error('content')
            <div class="invalidfeedback">{{ $errors->first('content') }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">modifier mon topic</button>
        </form>
    </div>
    
@endsection