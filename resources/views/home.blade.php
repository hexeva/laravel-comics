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
        @include('components.comic')
        
    </div>
</div>

@endsection