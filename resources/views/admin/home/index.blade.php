@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
<div class="container-fluid">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row cards-admin">

          {{-- Информация о новостях --}}
            <div class="corner-box-5">
              <div class="corner-textbox-5">
                <div class="inner">
                  <div class="row">
                    <div class="col">
                      <h1>Новости</h1>
                      <h2>Всего: <b>{{$news_count}}</b></h2>
                    </div>
                  </div>
                </div>
                  <a href="{{route('news.index')}}" class="btn-look">Посмотреть</a>
                  <a href="{{route('news.create')}}" class="btn-create">Добавить</a>
              </div>
          </div>


           {{-- Информация об учителях --}}
          <div class="corner-box-5">
            <div class="corner-textbox-5">
              <div class="inner">
                <div class="row">
                  <div class="col">
                    <h1>Учителя</h1>
                    <h2>Всего: <b>{{$teachers_count}}</b></h2>
                  </div>
                </div>
              </div>
                <a href="{{route('teacher.index')}}" class="btn-look">Посмотреть</a>
                <a href="{{route('teacher.create')}}" class="btn-create">Добавить</a>
            </div>
         </div>


          {{-- Информация об отзывах --}}
         <div class="corner-box-5">
           <div class="corner-icon-cont-5">
               <span class="corner-icon-5">i</span>
               <div class="corner-textbox-5-2">
                 <h1>Новые: <b>{{$reviews_unread_count}}</b></h1>
               </div>
           </div>
           <div class="corner-textbox-5">
             <div class="inner">
               <div class="row">
                 <div class="col">
                   <h1>Отзывы</h1>
                   <h2>Всего: <b>{{$reviews_count}}</b></h2>
                 </div>
               </div>
             </div>
               <a href="{{route('review.index')}}" class="btn-look">Посмотреть</a>
           </div>
         </div>


          {{-- Информация о пользователях --}}
         <div class="corner-box-5">
           <div class="corner-textbox-5">
             <div class="inner">
               <div class="row">
                 <div class="col">
                   <h1>Пользователи</h1>
                   <h2>Всего: <b>{{$users_count}}</b></h2>
                 </div>
               </div>
             </div>
               <a href="{{route('users.index')}}" class="btn-look">Посмотреть</a>
           </div>
        </div>       


        {{-- Информация о заявках --}}
        <div class="corner-box-5">
          <div class="corner-icon-cont-5">
              <span class="corner-icon-5">i</span>
              <div class="corner-textbox-5-2">
                <h1>Новые: <b>{{$recordings_unread_count}}</b></h1>
              </div>
          </div>
          <div class="corner-textbox-5">
            <div class="inner">
              <div class="row">
                <div class="col">
                  <h1>Заявки</h1>
                  <h2>Всего: <b>{{$recordings_count}}</b></h2>
                </div>
              </div>
            </div>
              <a href="{{route('recording.index')}}" class="btn-look">Посмотреть</a>
          </div>
      </div>


        {{-- Информация о группах --}}
      <div class="corner-box-5">
          <div class="corner-textbox-5">
            <div class="inner">
              <div class="row">
                <div class="col">
                  <h1>Группы</h1>
                  <h2>Всего: <b>{{$groups_count}}</b></h2>
                </div>
              </div>
            </div>
              <a href="{{route('groups.index')}}" class="btn-look">Посмотреть</a>
              <a href="{{route('groups.create')}}" class="btn-create">Добавить</a>
          </div>
      </div>

      {{-- Информация о курсах --}}
      <div class="corner-box-5">
        <div class="corner-textbox-5">
          <div class="inner">
            <div class="row">
              <div class="col">
                <h1>Курсы</h1>
                <h2>Всего: <b>{{$courses_count}}</b></h2>
              </div>
            </div>
          </div>
            <a href="{{route('courses.index')}}" class="btn-look">Посмотреть</a>
            <a href="{{route('courses.create')}}" class="btn-create">Добавить</a>
        </div>
    </div>

        {{-- Информация о вопросах --}}
        <div class="corner-box-5">
          <div class="corner-icon-cont-5">
              <span class="corner-icon-5">i</span>
              <div class="corner-textbox-5-2">
                <h1>Новые: <b>{{$questions_unread_count}}</b></h1>
              </div>
          </div>
          <div class="corner-textbox-5">
            <div class="inner">
              <div class="row">
                <div class="col">
                  <h1>Вопросы</h1>
                  <h2>Всего: <b>{{$questions_count}}</b></h2>
                </div>
              </div>
            </div>
              <a href="{{route('questions.index')}}" class="btn-look">Посмотреть</a>
          </div>
      </div>
    
  </div>
</div>
@endsection
