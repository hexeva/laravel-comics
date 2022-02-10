@extends('layouts.app')

@section('page_title')
    about comics
@endsection

@section('main_content')
    <div class="about-top">
        <div class="about-container">
            <div class="card-detail">
                <img src="{{$comic_info['thumb']}}" alt="{{$comic_info['title']}}">
                <div class="detail-title">
                    view gallery
                </div>
            </div>
        </div>
        {{-- end container --}}
    </div>
    <div class="about-container">
        <div class="about-bottom">
            <div class="about-left">
                <h2>action comics #1000:the deluxe edition</h2>
                <div class="comic-info">
                    <div class="comic-price">
                        <div class="price">
                            <h3>U.S.PRICE: {{$comic_info['price']}}</h3>
                        </div>
                        <div class="available">
                            <h3>available</h3>
                        </div>
                    </div>
                    <div class="comic-check">Check Availability</div>
                </div>
                <div class="comic-description">
                    <p>{{$comic_info['description']}}</p>
                </div>
            </div>
            <div class="about-rigth">RIGTH</div>
        </div>
    </div>

@endsection