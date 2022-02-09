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