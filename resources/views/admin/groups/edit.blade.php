@extends('layouts.admin_layout')

@section('title', 'Редактировать группу')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать группу №{{$groups->id}} {{$groups->title}}</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

              <a class="btn btn-primary" href={{route('groups.index')}}>
                ← Назад
              </a>
              
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('groups.update', $groups->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название группы</label>
                                        <input type="text" name="title" class="form-control" value="{{$groups->title}}" id="title" placeholder="Введите заголовок" maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Подробная информация о группе</label>
                                        <textarea name="text" class="form-control" id="text" maxlength="100">{{$groups->text}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Цена за обучение</label>
                                        <input type="number" name="price" id="price" value="{{$groups->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="course_id">К какому курсу относится</label>
                                        <select name="course_id" id="course_id">
                                            @foreach ($courses as $course)
                                                <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Период обучения</label>
                                        <input type="number" name="period_study" id="period_study" value="{{$groups->period_study}}">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </section>
@endsection
    