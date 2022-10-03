@extends('layouts.admin_layout')

@section('title', 'Добавить учителя')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Добавить учителя</h1>
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
                <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Введите фамилию"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Отчество</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Введите отчество"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="education">Образование</label>
                            <input type="text" name="education" class="form-control" id="education" placeholder="Введите образование"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="text_more">Подробное описание</label>
                            <textarea name="text_more" class="form-control" id="text_more"  maxlength="300"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">Опыт</label>
                            <input type="text" name="experience" class="form-control" id="experience" placeholder="Введите опыт работы"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Введите email"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="img">Фото учителя</label>
                            <input type="file" name="photo" class="form-control" accept="image/*" >
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль"  maxlength="100">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_admin" id="is_admin" value="1">
                            <label for="is_admin">Сделать админом</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
          </section>
@endsection
    