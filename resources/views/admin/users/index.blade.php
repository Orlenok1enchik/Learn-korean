@extends('layouts.admin_layout')

@section('title', 'Все пользователи')
    
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все пользователи</h1>
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
                        <tr> 
                            <th style="width: 5%"> ID  </th>
                            <th>Email</th>
                            <th>Фамилия Имя Отчество</th>
                            <th>День рождения</th>
                            <th style="width: 20%">Фото</th>
                            <th>Курс</th>
                            <th>Группа</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->surname}} {{$user->name}} {{$user->lastname}}
                            </td>
                            <td> 
                                {{$user->birthday}}
                            </td>
                            <td>
                                <img src="{{$user->photo}}" style="max-width:150px; object-fit:cover;">
                            </td>
                            <td>
                                @if ($user->course)
                                    {{$user->course->title}}
                                @endif
                            </td>
                           <td>
                                @if ($user->group)
                                    {{$user->group->title}}
                                 @endif
                            </td>
                            <td class="project-actions text-right">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>  
                                <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block">
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

