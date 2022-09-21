@php
$links = config('main_menu');
@endphp
<header>
    <div class="topbanner">
        <div class="container">
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <img src="../images/dc-logo.png" alt="dc-logo">
            <ul>
                @foreach ($links as $link)
                    <li><a >{{$link['text']}}</a></li>
                @endforeach
            </ul>

        </div>
    </div>
</header>


