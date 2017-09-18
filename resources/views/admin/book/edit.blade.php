@extends('layouts.app')

@section('title')
    Books list
@endsection

@section('content')
    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading text-left">

                    <form action="{{url('admin/books/'.$book->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">
                                Title:
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" title="title" value="{{$book->title}}">
                                <input type="hidden" name="id" value="{{$book->id}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="authors" class="col-sm-2 control-label">
                                Author:
                            </label>
                            <div class="col-sm-6">
                                <select name="authors[]" multiple title="authors array">
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}"
                                        @foreach($book->authors as $au)
                                            @if($author->id == $au->id)
                                                selected
                                            @endif
                                        @endforeach
                                        >
                                            {{$author->name}}
                                            {{$author->surname}}
                                        </option>
                                    @endforeach
                                </select>
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
                            <label for="description" class="col-sm-2 control-label">
                                Description:
                            </label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="5" name="description" title="description">{{$book->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-2">
                                <button type="submit" class="btn btn-default">Update</button>
                            </div>
                        </div>

                        {{method_field('PATCH')}}
                        {{csrf_field()}}

                    </form>
                    @include('admin.partials.errors')
                </div>
            </div>
        </div>
    </div>
@endsection