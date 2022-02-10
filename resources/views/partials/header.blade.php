<header>
   
    <div class="header-top">

        <div>prova</div>
        <div>prova</div>
        
    </div>
    
    <div class="container">
        <div class="left-col">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc">
                </a>
            </div>
        </div>
        <div class="right-col">
            <ul>
                <li>
                    <a class="{{ Request::route()->getName()==='home' ? 'active' : '' }}" href=" {{route('home')}} ">characters</a>
                </li>
                <li>
                    <a class="{{ Request::route()->getName()==='about' ? 'active' : '' }}" href="">comics</a>
                </li>
                <li>
                    <a href="">movies</a>
                </li>
                <li>
                    <a href="">tv</a>
                </li>
                <li>
                    <a href="">games</a>
                </li>
                <li>
                    <a href="">collectibles</a>
                </li>
                <li>
                    <a href="">videos</a>
                </li>
                <li>
                    <a href="">fans</a>
                </li>
                <li>
                    <a href="">news</a>
                </li>
                <li>
                    <a href="">shop</a>
                </li>
            </ul>
        </div>

    </div>
</header>