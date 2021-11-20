@extends('layouts.app')

@section('title', 'Новый пост')


@section('content')

<form method="POST" action="{{ route('post.store') }}">
@csrf
  <div class="mb-3">
      
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" id="title" aria-describedby="titlelHelp">
    <div id="titlelHelp" class="form-text">Введите название поста.</div>
    </div>

    <select class="form-select mb-3" aria-label="Default select example">

    @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
    @endforeach

    </select>

    <label for="text">Текст поста</label>
    <textarea class="form-control" placeholder="Введите ваш текст" id="text" style="height: 200px"></textarea>
        
    
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

@endsection