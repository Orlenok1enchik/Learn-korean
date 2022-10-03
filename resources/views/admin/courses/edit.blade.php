@extends('layouts.admin_layout')

@section('title', 'Редактировать курс')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать курс №{{$courses->id}} {{$courses->title}}</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

              <a class="btn btn-primary" href={{route('courses.index')}}>
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
                            <form action="{{route('courses.update', $courses->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Заголовок</label>
                                        <input type="text" name="title" class="form-control" value="{{$courses->title}}" id="title" placeholder="Введите заголовок" maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Фото курса</label>
                                        <input type="file" name="image" class="form-control" accept="image/*" >
                                        <input type="hidden" name="image" value="{{$courses->image}}">
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
    