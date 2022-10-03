@extends('layouts.admin_layout')

@section('title', 'Редактировать информацию об отзыве')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Опубликовать отзыв {{$reviews->id}}.</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->

              @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                  </div>
              @endif

            </div><!-- /.container-fluid -->
            <a class="btn btn-primary" href={{route('review.index')}}>
                ← Назад
            </a>
          </div>
          <!-- /.content-header -->

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('review.update', $reviews->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="textarea">Текст отзыва</label>
                                        <textarea name="textarea" class="form-control" id="textarea" maxlength="100">{{$reviews->text}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="is_public" id="is_public" @if ($reviews->is_public)
                                            checked
                                        @endif>
                                        <label for="is_public">Опубликовать</label>
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
    