@extends('layouts.admin_layout')

@section('title', 'Редактировать новость')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать новость №{{$news->id}} {{$news->title}}</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

            </div><!-- /.container-fluid -->
            <a class="btn btn-primary" href={{route('news.index')}}>
                ← Назад
            </a>
          </div>
          <!-- /.content-header -->

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Заголовок</label>
                                        <input type="text" name="title" class="form-control" value="{{$news->title}}" id="title" placeholder="Введите заголовок" maxlength="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Текст новости</label>
                                        <textarea name="textarea" class="form-control" id="textarea" maxlength="100">{{$news->textarea}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Фото новости</label>
                                        <input type="file" name="image" class="form-control" accept="image/*" >
                                        <input type="hidden" name="image_hidden" value="{{$news->image}}">
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
    