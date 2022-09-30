@extends('main')

@section('content')

    <form method="POST" action="/update/{{$todo_list->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="title" value="{{$todo_list->title}}" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="mb-3">
            <textarea class="form-control"  name="description" rows="3" placeholder="Desription">{{$todo_list->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>

@endsection
