@extends('main')
@section('content')
    <div class="container" style="margin-top: 2rem">
        <form method="POST" action="add/">
            @csrf
            <div class="mb-3">
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="description" rows="3" placeholder="Desription"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
        <div class="container">
            @foreach($todo_list as $todo)
            <div class="row" style="width: 155%">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">

                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            <div class="g-mb-15">
                                <h5 class="h5 g-color-gray-dark-v1 mb-0">{{$todo->title}}</h5>
                            </div>

                            <p>{{$todo->description}}</p>
                            <div style="text-align: right">
                                <form action="/edit/{{$todo->id}}">

                                    @csrf
                                    <button style="padding: 5px 20px;" class="btn sm btn-success" type="submit">Edit</button>
                                </form>
                                <br>
                                <form action="/delete/{{$todo->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button style="padding: 5px 10px;" class="btn sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
            @endforeach
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div style="color: red">{{$error}}</div>
                    @endforeach

                @endif

        </div>
@endsection
