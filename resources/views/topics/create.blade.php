@extends('layouts.app')

@section('extra-js')
     {!! NoCaptcha::renderJs() !!}
@endsection

@section('content')
    <div class="container">
        <h1>Créer un topic</h1>
        <hr>
        <form action="{{ route('topics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titre du topic</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
            @error('title')
            <div class="invalidfeedback">{{ $errors->first('title') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">votre sujet</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5"></textarea>
            @error('content')
            <div class="invalidfeedback">{{ $errors ->first('content') }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! NoCaptcha::display() !!}
        </div>
        <button type="submit" class="btn btn-primary">créer mon topic</button>
        </form>
    </div>
    
@endsection