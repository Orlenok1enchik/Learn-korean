@extends('layouts.app')
@section('title', 'Новости')
@section('content')

<div class="container mb-0">
  <h1 class="p-3">Новости</h1>
  <div class="row row-cols-md-12  row-cols-1 m-0 d-flex justify-content-around ml-4 all-cards ">
  @foreach ($news as $new)
  <div class="cards-news col-sm-3 pt-4 pb-4">
      <img src="{{$new->image}}" alt="" srcset="" class="img-fluid image-news">
      <p class="title-news">{{$new->title}}</p>
      <p>{{$new->textarea}}</p>
      <p><i>{{$new->created_at}}</i></p>
  </div>
  @endforeach
@endsection