@extends('layouts.app')

@section('title')
    Authors list
@endsection

@section('content')
    <div class="container">
        <div class="raw">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading text-left">

                        <form action="{{url('admin/authors')}}" method="post" class="form-horizontal">

                            <div class="form-group">
                                <label for="fname" class="col-sm-2 control-label">Author name:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" title="Author name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lname" class="col-sm-2 control-label">Author surname:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="surname" title="Author surname">
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
        </div>

        <div class="raw">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Автори
                        </h3>
                    </div>

                    <div class="panel-content">

                        @foreach($authors as $author)

                            <div class="raw panel panel-heading">

                                    <form action="{{url('admin/authors/'.$author->id)}}" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="delete" class="col-sm-4 text-left">
                                                {{$author->name}}
                                                {{$author->surname}}
                                            </label>
                                            <span class="col-sm-2">
                                                <a href="{{url('admin/authors/edit/'.$author->id)}}">
                                                    <span class="btn btn-default">Edit</span>
                                                </a>

                                                <button type="submit" class="btn btn-default">Delete</button>
                                            </span>
                                        </div>

                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                    </form>

                            </div>

                         @endforeach

                    </div>
                </div>
            </div>
        </div>

        {{$authors->links()}}

    </div>
@endsection