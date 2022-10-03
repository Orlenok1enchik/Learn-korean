@extends('layouts.app')
@section('title', 'Отзывы')
@section('content')

<div class="container mb-0">
  <h1 class="p-3">Отзывы</h1>
  <div class="row row-cols-md-12  row-cols-1 m-0 d-flex justify-content-around ml-4 all-cards ">
      @foreach ($reviews as $review)
      <div class="col-sm-3 pt-4 pb-4">
          <img src="{{$review->user['photo']}}" alt="" srcset="" class="img-fluid image-reviews">
          <p class="">{{$review->user['name']}} {{$review->user['surname']}}</p>
          <p>{{$review->text}}</p>
          <p><i>{{$review->created_at}}</i></p>
      </div>
      @endforeach

      <h3 class="">Оставить свой отзыв</h3>
      <form action="{{route('addreview')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        
        @if (Auth::check())
            <textarea name="text" class="form-control" id="textarea" maxlength="300"></textarea>
        @endif
        <button class="bth-entry {{!Auth::check() ? 'disabled' : null}}" 
        @if (!Auth::check())
            disabled
        @endif>Отправить</button><br>
        @if (!Auth::check())
        <i>Чтобы оставить отзыв необходимо авторизоваться</i>
        @endif
    </form>
  </div>
</div> 

@endsection 