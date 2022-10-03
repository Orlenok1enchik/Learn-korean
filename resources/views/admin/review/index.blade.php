@extends('layouts.admin_layout')

@section('title', 'Все отзывы')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все отзывы</h1>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
        </div>
    </div>
    <a class="btn btn-primary" href={{url('/adminpanel')}}>
        ← Назад
    </a>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                     <tr> <th style="width: 5%"> ID  </th>
                          <th>Кем опубликовано</th>
                          <th>Текст</th>
                          <th style="width: 20%">Фото</th>
                          <th>Статус</th>
                          <th>Дата публикации</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($reviews as $review)
                        <tr>
                            <td>
                                {{$review->id}}
                            </td>
                            <td>
                                {{$review->user->name}} {{$review->user->surname}}
                            </td>
                            <td>
                                {{$review->text}}
                            </td>
                            <td>
                                <img src="{{$review->user->photo}}" style="max-width:150px; object-fit:cover;">
                            </td>
                            <td>{{$review->is_public ? 'Опубликован' : 'Не опубликован'}}</td>
                            <td>{{$review->created_at}}</td>
                            <td class="project-actions text-right">
                                <a href="{{route('review.edit', $review->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>  
                                <form action="{{route('review.destroy', $review->id)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash"></i>
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection