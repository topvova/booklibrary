@extends('layouts.main')

@section('title')
    {{$book->title}}
@endsection

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class=" panel panel-default">
                <div class="panel-heading text-center">
                    <h1>{{$book->title}}</h1>
                </div>
                <div class="panel-body text-center">
                    <img src="{{url($book->image)}}">
                </div>

                <div class="panel-body">
                    <div class="raw">
                        <span class="glyphicon glyphicon-user"></span>
                        <b>Автор:</b>
                        @foreach($book->authors as $author)
                            <a href="{{url('authors/'.$author->id)}}">
                                {{$author->name}}
                                {{$author->surname}}
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

                </div>
            </div>
        </div>
    </div>
@endsection