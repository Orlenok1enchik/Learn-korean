@extends('layouts.admin_layout')

@section('title', 'Добавить курс')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Добавить курс</h1>
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

              <a class="btn btn-primary" href={{url('/adminpanel')}}>
                ← Назад
              </a>

            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <section class="content">

            <div class="card card-primary">
                <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Введите заголовок" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="image">Фото курса</label>
                            <input type="file" name="image" class="form-control" accept="image/*" >
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
          </section>
@endsection
    