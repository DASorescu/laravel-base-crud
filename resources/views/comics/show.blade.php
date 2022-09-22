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
        <div class="d-flex align-items-center">
            <a href="{{route('comics.index')}}"class="btn btn-primary m-3">BACK TO COMICS</a>
            <a href="{{route('comics.edit',$comic->id)}}"class="btn btn-warning m-3">EDIT</a>
            <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger h-40 m-3" type="submit">DELETE</button>
            </form>

        </div>
            
    </div>
    <figure>
        <p>ADVERTISMENT</p>
        <img src="../images/madv.jpg" alt="adv">
    </figure>
</div>
</section>
@endsection



                    



