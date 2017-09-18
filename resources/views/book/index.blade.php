@extends('layouts.main')

@section('title')
    Online library
@endsection

@section('content')
    <div class="container">
        <div class="authors col-sm-3 col-xs-12 panel-group">
            <div class="panel panel-default">
                <div class="panel-heading text-center text-uppercase">
                    Автори
                </div>
                <div class="panel-body">
                    @foreach($authors as $author)
                        <div class="raw">
                            <a href="{{url('authors/'.$author->id)}}">
                                <span class="glyphicon glyphicon-user small"></span>
                                {{$author->name}} {{$author->surname}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="books col-sm-offset-3 col-sm-9 col-xs-12 text-center">
            <div class="raw">
                @foreach($books as $book)
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center"><h3><a href="{{url('books/'.$book->id)}}">{{$book->title}}</a></h3>
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
                                            <a href="{{url('authors/'.$author->id)}}">
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