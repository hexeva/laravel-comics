@foreach ($comics as $comic)

    <div class="product">
        <div class="product-img">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="product-title">
            <a href="{{ route('about',['id'=>$comic['id']]) }}">
                <h3>{{$comic['series']}}</h3>     
            </a>
        </div>
    </div> 
        
    

 @endforeach