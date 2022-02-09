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
        @forelse ($comics_array as $disc)

        <div class="product">
            <div class="product-img">
                <img src="" alt="">
            </div>
            <div class="product-title">
                <h3>serie</h3>
            </div>
        </div> 
            
        @empty
        <h2>No discs found</h2>
            
        @endforelse
        
    </div>
</div>

@endsection