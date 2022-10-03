@extends('layouts.admin_layout')

@section('title', 'Добавить группу')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Добавить группу</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-times-circle-o"></i>{{$errors->all()[0]}}</h4>
                  </div>
              @endif
            </div><!-- /.container-fluid -->
            <a class="btn btn-primary" href={{url('/adminpanel')}}>
                ← Назад
            </a>
          </div>
          <!-- /.content-header -->

          <section class="content">

            <div class="card card-primary">
                <form action="{{route('groups.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название группы</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Введите название" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="text">Подробная информация</label>
                            <textarea name="text" class="form-control" id="text" maxlength="100"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Цена за обучение</label>
                            <input type="number" name="price" class="form-control">
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
                            <label for="price">Период обучения</label>
                            <input type="number" name="period_study" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
          </section>
@endsection
    