@extends('layouts.app')

@section('title')
    Books list
@endsection

@section('content')
    <div class="container">
        <div class="books col-xs-12 text-center">
            <div class="raw">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading text-left">

                            <form action="{{url('admin/books')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">
                                        Title:
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="title" title="title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="authors" class="col-sm-2 control-label">
                                        Authors:
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="authors[]" multiple title="authors array">
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">
                                                    {{$author->name}}
                                                    {{$author->surname}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">
                                        Description:
                                    </label>
                                    <div class="col-sm-6">
                                        <textarea name="description" class="form-control" rows="5" cols="250" title="description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="col-sm-2 control-label">
                                        Image:
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-2">
                                        <button type="submit" class="btn btn-default">Create</button>
                                    </div>
                                </div>

                                {{method_field('POST')}}
                                {{csrf_field()}}
                            </form>
                            @include('admin.partials.errors')
                        </div>
                    </div>
                </div>

                @foreach($books as $book)
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h3><a href="/admin/books/edit/{{$book->id}}">{{$book->title}}</a></h3>
                            </div>

                            <div class="panel-body">
                                <div class="col-md-4 col-sm-12">
                                    <img src="{{url($book->image)}}">
                                </div>

                                <div class="col-xs-12 visible-sm visible-xs">
                                    <br>
                                </div>

                                <div class="col-md-8 col-sm-12 text-left">
                                    <div class="raw">
                                        <b>Автор:</b>
                                        @foreach($book->authors as $author)
                                            <a href="/authors/{{$author->id}}">
                                                {{$author->name}} {{$author->surname}}
                                            </a>
                                            @if(!$loop->last)
                                                ,
                                            @else
                                                .
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="raw">
                                        <p>
                                            {{$book->description}}
                                        </p>
                                    </div>
                                    <br>

                                    <div class="raw">
                                        <h4>
                                            <form action="{{url('admin/books/'.$book->id)}}" method="post" class="form-horizontal">
                                                <div class="form-group">
                                                     <span class="col-sm-2">
                                                        <button type="submit" class="btn btn-default">Delete</button>
                                                        <a href="{{url('admin/books/edit/'.$book->id)}}">
                                                            <span class="btn btn-default">Edit</span>
                                                        </a>
                                                     </span>
                                                </div>

                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}

                                            </form>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>

            {{$books->links()}}

        </div>
    </div>
@endsection