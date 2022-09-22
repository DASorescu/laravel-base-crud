@extends('layouts.main')
@section('route','edit comic')
@section('main-content')
  <div class="card bg-secondary py-2 w-75 " id="form-card">
    <div class="card-title text-center text-white fw-bold fs-3">
      MODIFY COMIC INFO
    </div>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-row d-flex justify-content-between flex-wrap">
            <div class="form-group my-2 col-md-8">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$comic->title}}">
            </div>
            <div class="form-group my-2 col-md-3">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price" placeholder="Price in dollars" name="price"value="{{$comic->price}}">
            </div>
            <div class="form-group my-2 col-md-3">
              <label for="series">SERIES</label>
              <input type="text" class="form-control" id="series"placeholder="comic serie" name="series"value="{{$comic->series}}">
            </div>
            <div class="form-group my-2 col-md-3">
              <label for="sale_date">Date</label>
              <input type="text" class="form-control" id="sale_date"placeholder="insert date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="form-group my-2 col-md-3">
              <label for="sale_date">Type</label>
              <select class="form-select col-md-3" aria-label="Default select example " name="type">
                <option selected>Select the comic type</option>
                <option @if($comic->type ==='Graphic Novel') selected @endif>Graphic Novel</option>
                <option @if($comic->type ==='Comic Book') selected @endif>Comic Book</option>
              </select>
            </div>

            <div class="form-group my-2 col-md-7">
              <label for="thumb">Cover</label>
              <input type="text" class="form-control" id="thumb"placeholder="insert comic cover url" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="form-group my-2 col-md-12">
              <label for="description">Description</label>
              <textarea type="text-area" class="form-control" id="description" rows="5" placeholder="Description" name="description">{{$comic->description}}</textarea>
            </div>
            <div class="col-md-12 d-flex justify-content-end align-items-center py-3">
              <a href="{{route('comics.index')}}" class="btn btn-info mx-3 text-white p-1 h-40 d-flex align-items-center  rounded-0">Back to comics</a>
              <button type="submit" class="btn btn-primary my-2 rounded-0 h-40">Save </button>
            </div>
        </div>
      </div>
    </form>
  </div>
  
@endsection
          
