@extends('layouts.app')

@section('title', 'larablog-v3')

@section('content')

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">

        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
            <a href="#" class="card-link">Подробнее</a>
            <a href="#" class="card-link">Удалить</a>
        </div>
        </div>
    </div>
</div>

@endsection
