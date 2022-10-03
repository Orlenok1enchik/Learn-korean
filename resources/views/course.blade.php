@extends('layouts.app')
@section('title', 'Курсы')
@section('content')

<div class="container">
    <h1>Курсы</h1>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>

@foreach($courses as $course)
<div class="container">
    <div class="row">
        <div class="bg_course col">
            <img src="{{$course->image}}" alt="" srcset="">
            <p class="title_course">{{$course->title}}</p>
        </div>
        <div class="col">
            <p>Срок обучения: {{$course->training_period}}</p>
            <p>Периодичность обучения: {{$course->period_study	}}</p>
            <p>Цена: {{$course->price}} руб.</p>
            <form action="{{route('signUpForCource')}}" method="post">
                @csrf
                <input type="hidden" name="course_id" value="{{$course->id_courses}}">
                <button class="bth-entry {{!Auth::check() ? 'disabled' : null}}" 
                @if (!Auth::check())
                    disabled
                @endif>Записаться</button><br>
                @if (!Auth::check())
                    <i>Чтобы записаться на курс необходимо авторизироваться</i>
                @endif 
            </form>
            
        </div>
    </div>
</div>
@endforeach

@endsection