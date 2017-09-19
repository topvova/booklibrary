@extends('layouts.app')

@section('title')
    Edit the author data
@endsection

@section('content')
<div class="container">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading text-left">

                <form action="{{url('admin/authors/'.$author->id)}}" method="post" class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Author name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" title="Author name" value="{{$author->name}}">
                            <input type="hidden" name="id" value="{{$author->id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="surname" class="col-sm-2 control-label">Author surname:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="surname" title="Author surname" value="{{$author->surname}}">
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