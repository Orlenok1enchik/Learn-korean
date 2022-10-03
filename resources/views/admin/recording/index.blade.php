@extends('layouts.admin_layout')

@section('title', 'Заявки на курсы')
    
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Заявки на обучение</h1>
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
                     <tr> <th style="width: 5%">ID</th>
                          <th>ФИО</th>
                          <th>Email</th>
                          <th>Какой курс</th>
                          <th>Какая группа</th>
                          <th style="width: 20%">Фото пользователя</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recordings as $recording)
                        <tr>
                            <td>{{$recording->id}}</td>
                            <td>{{$recording->user->name}} {{$recording->user->surname}} {{$recording->user->lastname}}</td>
                            <td>{{$recording->user->email}}</td>
                            <td>{{$recording->course->title}}</td>
                            <td>{{$recording->group->title}}</td>
                            <td>
                                @if ($recording->user->photo)
                                    <img src="{{$recording->user->photo}}" style="max-width:150px; object-fit:cover;" alt="User photo"/>
                                @endif
                            </td>

                            <td class="project-actions text-right">
                                <form action="{{route('recording.update', $recording->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="user_id" value="{{$recording->user->id}}" />
                                    <input type="hidden" name="course_id" value="{{$recording->course_id}}" />
                                    <input type="hidden" name="group_id" value="{{$recording->group_id}}" />
                                    <button class="btn btn-primary btn-sm" style="width: 150px">
                                        <i class="fas fa-pencil-alt"></i>
                                        Одобрить заявку
                                    </button>
                                   
                                </form>  
                                <form action="{{route('recording.destroy', $recording->id)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn" style="width: 150px">
                                        <i class="fas fa-trash"></i>
                                        Удалить заявку
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