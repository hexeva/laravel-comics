@extends('layouts.app')

@section('page_title')
DC Comics
@endsection


@section('main_content')

<div class="container-main">
    <div class="btn_title">
        <a href="#">current series</a>
    </div>
    <div class="product-list">
        <!-- QUI CI ANDRANNO I SINGOLI dischi -->
        @foreach ($comics as $comic)
        
        <div class="product">
            <div class="product-img">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
            <div class="product-title">
                <h3>{{$comic['series']}}</h3>
            </div>
        </div> 

        @endforeach
        
    </div>
</div>

@endsection