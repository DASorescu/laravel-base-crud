@extends('layouts.main')
@section('route','Comics')
@section('main-content')
<section class="my-container">

    <button class="current-series">CURRENT SERIES</button>

    <div class="my-row">
        <ul class="comic-cards-section">
            @foreach($comics as $comic)
            <li>
                <a href="{{route('comics.show' , $comic->id)}}">
                    <div class="my-card">
                        <figure>
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </figure>
                        <p>{{$comic['title']}}</p>
                    </div>

                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="button-section">
        <button class="butn">LOAD MORE</button>
        <a href="{{route('comics.create')}}">ADD COMIC</a>
    </div>
</section>
@endsection
@section('main-banner')
<section class="banner ">
    <div class="my-container">
        <ul>
            <li><img src="../images/buy-comics-digital-comics.png" alt="buy">
                <p>DIGITAL COMICS</p>
            </li>
            <li><img src="../images/buy-comics-merchandise.png" alt="buy">
                <p>DC MERCHANDISE</p>
            </li>
            <li><img src="../images/buy-comics-subscriptions.png" alt="buy">
                <p>SUBSCRIPTION</p>
            </li>
            <li><img src="../images/buy-comics-shop-locator.png" alt="buy">
                <p>COMIC SHOP LOCATOR</p>
            </li>
            <li><img src="../images/buy-dc-power-visa.svg" alt="buy">
                <p>DC POWER VISA </p>
            </li>
        </ul>

    </div>
</section>
@endsection