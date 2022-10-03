@extends('layouts.admin_layout')

@section('title', 'Все новости')
    
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все новости</h1>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
        </div>
        <a class="btn btn-primary" href={{url('/adminpanel')}}>
            ← Назад
        </a>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                     <tr> <th style="width: 5%"> ID  </th>
                          <th>Название</th>
                          <th style="width: 20%">Фото</th>
                          <th>Дата публикации</th>
                          <th>Текст</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($news as $new)
                        <tr>
                            <td>
                                {{$new->id}}
                            </td>
                            <td>
                                {{$new->title}}
                            </td>
                            <td>
                                <img src="{{$new->image}}" style="max-width:150px; object-fit:cover;">
                            </td>
                            <td>{{$new->created_at}}</td>
                            <td> 
                                {{$new->textarea}}
                            </td>
                            <td class="project-actions text-right">
                                <a href="{{route('news.edit', $new->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>  
                                <form action="{{route('news.destroy', $new->id)}}" method="POST" style="display: inline-block">
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

