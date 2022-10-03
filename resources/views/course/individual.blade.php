@extends('layouts.app')
@section('title', 'Индивидуальные курсы')
@section('content')

<div class="container">
    <h1>Индивидуальные курсы</h1>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    @foreach($groups as $group)
    <div class="container">
        <div class="row">
            <div class="bg_course col">
                <p class="title_course">{{$group->title}}</p>
            </div>
            <div class="col">
                <div class="container">
                    <p style="margin-top: 25px">Что будет на курсе: </p>
                    <p>{!!$group->text!!}</p>
                    <p>Периодичность обучения: {{$group->period_study}} год</p>
                    <p>Цена: {{$group->price}} руб.</p>
                </div>
                <form action="{{route('signUpForCource')}}" method="post">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$group->course->id}}">
                    <input type="hidden" name="group_id" value="{{$group->id}}"/>
                    <button class="bth-entry {{!Auth::check() ? 'disabled' : null}}" 
                    @if (!Auth::check())
                        disabled
                    @endif>Записаться</button>
                    <br>
                        @if (!Auth::check())
                        <i>Чтобы записаться на курс необходимо авторизоваться</i>
                        @endif 
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection