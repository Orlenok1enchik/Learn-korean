@extends('layouts.admin_layout')

@section('title', 'Редактировать информацию об учителе')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать информацию об учителе {{$teacher->name}} {{$teacher->surname}}.</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

            </div><!-- /.container-fluid -->
            <a class="btn btn-primary" href={{route('teacher.index')}}>
                ← Назад
            </a>
          </div>
          <!-- /.content-header -->

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('teacher.update', $teacher->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" name="name" class="form-control" value="{{$teacher->name}}" id="name" placeholder="Введите имя"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Фамилия</label>
                                        <input type="text" name="surname" class="form-control" value="{{$teacher->surname}}" id="surname" placeholder="Введите фамилию"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Отчество</label>
                                        <input type="text" name="lastname" class="form-control" value="{{$teacher->lastname}}" id="lastname" placeholder="Введите отчество"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="education">Образование</label>
                                        <input type="text" name="education" class="form-control" value="{{$teacher->education}}" id="education" placeholder="Введите образование"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_more">Подробное описание</label>
                                        <textarea name="text_more" class="form-control" id="text_more" maxlength="100">{{$teacher->text_more}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="experience">Опыт</label>
                                        <input type="text" name="experience" class="form-control" value="{{$teacher->experience}}" id="experience" placeholder="Введите опыт работы"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$teacher->email}}" id="email" placeholder="Введите email"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Фото учителя</label>
                                        <input type="file" name="photo" class="form-control" accept="image/*" >
                                        <input type="hidden" name="photo_hidden" value="{{$teacher->photo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Пароль</label>
                                        <input type="password" name="password" value="" class="form-control" id="password" placeholder="Введите пароль"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="is_admin" id="is_admin" @if ($teacher->is_admin)
                                            checked
                                        @endif>
                                        <label for="is_admin">Сделать админом</label>
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
    