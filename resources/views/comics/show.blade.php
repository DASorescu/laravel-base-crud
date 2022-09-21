@extends('layouts.main')
@section('route',$comic['title'])
@section('main-content')
<section id="comic-info">
<div class="blue-banner">
    <div class="image-container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>
</div>
<div class="wrapper">
    <div class="info-content">
        <h2>{{$comic['title']}}</h2>
        <div class="availability">
            <div class="price">U.S.Price : <span>{{$comic['price']}}</span></div>
            <div class="status">AVAILABLE</div>
            <div class="check">Check Availability</div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <figure>
        <p>ADVERTISMENT</p>
        <img src="../images/madv.jpg" alt="adv">
    </figure>
</div>
</section>
@endsection
@section('main-banner')
<section id="comic-credits">
    <div class="border-div">
        <div class="wrapper">
    
            <div class="artist-writers">
                <h2>Talent</h2>
                <div class="art-list">
                    <p>Art by :</p>
                    <ul>
                        @foreach ($comic['artists'] as $artist)
                        <li>{{$artist}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="art-list">
                    <p>Written by :</p>
                    <ul>
                        @foreach ($comic['writers'] as $writer)
                        <li>{{$writer}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="art-list">
                    <p>Series :</p>
                    <ul>
                        <li>{{$comic['series']}}</li>
                    </ul>
                </div>
                <div class="art-list">
                    <p>U.S. Price :</p>
                    <ul>
                        <li>{{$comic['price']}}</li>
                    </ul>
                </div>
                <div class="art-list">
                    <p>On Sale Date :</p>
                    <ul>
                        <li>{{$comic['sale_date']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="thumbnails">
        <div class="digital">
            <p>DIGITAL COMICS</p>
            <img class="device" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
        </div>
        <div class="shop">
            <p>SHOP DC</p>
            <img class="cards" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
        </div>
        <div class="locator">
            <p>COMICS SHOP LOCATOR</p>
            <img class="pointer" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
        </div>
        <div class="subs">
            <p>SUBSCRIPTION</p>
            <img class="shirt" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
        </div>
    </div>

</div>
</section>
@endsection

                    



