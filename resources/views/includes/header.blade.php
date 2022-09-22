@php
$links = config('main_menu');
@endphp
<header>
    <div class="topbanner">
        <div class="my-container">
            
        </div>
    </div>
    <div class="my-container">
        <div class="my-row">
            <img src="../images/dc-logo.png" alt="dc-logo">
            <ul>
                <li ><a href="{{route('home')}}">HOME</a></li>
                <li ><a href="{{route('comics.index')}}">COMICS</a></li>
                <li ><a href="{{route('movies')}}">MOVIES</a></li>
            
            </ul>

        </div>
    </div>
</header>


