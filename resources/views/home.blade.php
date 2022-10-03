@extends('layouts.app')

@section('content')
{{-- Запишитесь на школу --}}
<div class="container">
    <div class="row container">
        <div class="col position-relative">
            <h1 class="h1-text-entry">Запишитесь в школу <br>
                по изучению корейского языка</h1>
            <p class="p-text-entry">Наши курсы подходят для любого возраста</p>
            <a href="#course"><button type="submit" class="bth-entry">Записаться</button></a> 
        </div>
        <div class="col">
            <img src="/image/Panda.svg" alt="" srcset="" class="img-panda">
        </div>
    </div>
</div>
{{-- В нашей школе --}}
<div class="container-fluid bg-container-school">
    <div class="row container w-2000 mx-auto">
        <h1 class="text-light p-3">В нашей школе ты получишь</h1>
        <div class="col">
            <img src="/image/teacher.svg" alt="" srcset="">
            <p class="heading-text">
                Крутых <br> преподавателей
            </p>
            <p class="text-light">
                С тобой занимается опытный <br>
                преподаватель, выбранный <br>
                тобой и нами из сотен других
            </p>
        </div>
        <div class="col">
            <img src="/image/puzzle.svg" alt="" srcset="">
            <p class="heading-text">
                Персональный <br> план обучения
            </p>
            <p class="text-light">
                Проведем диагностику и <br>
                составим персональный
                план обучения
            </p>
        </div>
        <div class="col">
            <img src="/image/responsive.svg" alt="" srcset="">
            <p class="heading-text">
                Современное <br> обучение
            </p>
            <p class="text-light">
                Интерактивные задачи <br>
                с автоматической проверкой
            </p>
        </div>
    </div>
</div>
{{-- Разный формат обучения --}}
<div class="container">
    <a name="course"></a>
    <h1 class="p-3 heading-learn">Разный формат обучения</h1>
    <div class="container">
        <div class="row row-cols-md-12  row-cols-1 m-0 d-flex justify-content-around">
            @foreach ($courses as $course)
            <div class="bg-color-cards col-sm-3 pt-4 pb-4">
                <img class="mt-3 container-fluid" src="{{$course->image}}" alt="" srcset="">
                <p class="heading-text">{{$course->title}}</p>
                <a href="{!!$course->courseLink->link!!}"><button class="btn btn-sm moreinfo mb-4">Подробнее</button></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Новости --}}
<div class="container">
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
        <div class="button div-btn-all-news col-sm-3 pt-4 pb-4">
            <button class="col col-md-3 btn-all-news">
                <a class="arrow-circle" href="{{Route('new')}}">Читать все новости
                        <svg class="arrow-circle-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        viewBox="0 0 32 32">
                                <g fill="none" stroke="#EE4B73" stroke-width="1.5" stroke-linejoin="round"
                            stroke-miterlimit="10">
                                        <circle class="arrow-circle-iconcircle" cx="16" cy="16" r="15.12"></circle>
                                        <path class="arrow-circle-icon--arrow"
                                d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                            </svg>
                </a>
            </button>
        </div>
    </div>
</div>

{{-- Отзывы --}}
<div class="container mt-4 mb-4">
    <h1 class="p-3">Отзывы</h1>
    <div class="slider">
        <div class="slider__container">
            <div class="slider__wrapper">
                <div class="slider__items">
                    @foreach($reviews as $review)
                    <div class="slider__item p-4 col-mb-12">
                        <div class="imgaa col"><img src="{{$review->user['photo']}}" alt="" class="img-fluid"></div>
                        <div class="col">
                            <h5 class="name-user">{{$review->user['name']}} {{$review->user['surname']}}</h5>
                            <p>{{$review->text}}</p>
                            <p><i>{{$review->created_at}}</i></p>
                        </div>  
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
    </div>

</div>



<script src="{{asset('js/main.js')}}"></script>
@endsection
