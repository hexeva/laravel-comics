@extends('layouts.app')

@section('page_title')
DC Comics
@endsection
@section('main_classes')
main-colors
@endsection


@section('main_content')

<div class="container-main">
    <div class="btn_title">
        <a href="#">current series</a>
    </div>
    <div class="product-list">
        <!-- QUI CI ANDRANNO I SINGOLI comics -->
        @include('components.comic',['comic_list'=>$comics])
        
    </div>
</div>
@include('components.section')


@endsection