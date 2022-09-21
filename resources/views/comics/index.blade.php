@extends('layouts.main')
@section('route','Comics')
@section('main-content')
<section class="container">

    <button class="current-series">CURRENT SERIES</button>

    <div class="row">
        <ul class="comic-cards-section">
            @foreach($comics as $comic)
            <li>
                <a href="{{route('comics.show' , ['id'=> $loop->index])}}">
                    <div class="card">
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
        <button>LOAD MORE</button>
    </div>
</section>
@endsection
@section('main-banner')
<section class="banner ">
    <div class="container">
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