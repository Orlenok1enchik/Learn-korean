@extends('layouts.app')
@section('title', 'О шкoле')
@section('content')

<div class="container">
    <h1>О школе</h1>
    <p>Мы учим языку в живой непринужденной атмосфере. Но иногда приходится развивать навыки говорения и аудирования на разработанных нами 
        тренажерах. Эта комбинация гарантирует успех!</p>
</div>
<div class="container">
    <h1>Крутые преподаватели</h1>
</div>

@foreach($teachers as $teacher)
<div class="container teacher-cards">
    <div class="row teacher">
        <div class="col">
            <img src="{{$teacher->photo}}" alt="" srcset="" class="img-fluid photo_teacher">
        </div>
        <div class="col">
            <p class="name_teacher">{{$teacher->name}} {{$teacher->surname}}</p>
            <p>Образование: {{$teacher->education}}</p>
            <p>Стаж преподавательской деятельности: {{$teacher->experience}}</p>
            <p>{{$teacher->text_more}}</p>
        </div>
    </div>
</div>
@endforeach

@endsection