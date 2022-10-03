@extends('layouts.admin_layout')

@section('title', 'Редактировать информацию о пользователе')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать информацию о пользователе {{$users->surname}} {{$users->name}} {{$users->lastname}}.</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

            </div><!-- /.container-fluid -->
            <a class="btn btn-primary" href={{route('users.index')}}>
                ← Назад
            </a>
          </div>
          <!-- /.content-header -->

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('users.update', $users->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="surname">Фамилия</label>
                                        <input type="text" name="surname" class="form-control" value="{{$users->surname}}" id="surname" placeholder="Введите фамилию"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" name="name" class="form-control" value="{{$users->name}}" id="name" placeholder="Введите имя"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Отчество</label>
                                        <input type="text" name="lastname" class="form-control" value="{{$users->lastname}}" id="lastname" placeholder="Введите отчество"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Дата рождения</label>
                                        <input type="text" name="birthday" class="form-control" value="{{$users->birthday}}" id="birthday" placeholder="Введите день рождение"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$users->email}}" id="email" placeholder="Введите email"  maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Фото пользователя</label>
                                        <input type="file" name="photo" class="form-control" accept="image/*" >
                                        <input type="hidden" name="photo_hidden" value="{{$users->photo}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="is_admin" id="is_admin" @if ($users->is_admin)
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
    