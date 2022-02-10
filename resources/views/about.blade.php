@extends('layouts.app')

@section('page_title')
    about comics
@endsection

@section('main_content')
    <div class="about-top">
        <div class="about-container">
            <div class="card-detail">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
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
                            <h3>PRICE</h3>
                        </div>
                        <div class="available">
                            <h3>available</h3>
                        </div>
                    </div>
                    <div class="comic-check">Check Availability</div>
                </div>
            </div>
            <div class="about-rigth">RIGTH</div>
        </div>
    </div>

@endsection