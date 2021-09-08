@extends('layouts.layout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Мои заявки</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список заявок</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('message.create') }}" class="btn btn-primary mb-3">Добавить
                                    заявку</a>
                                @if (!empty($messages))

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Название заявки</th>
                                                <th>Имя</th>
                                                <th>Номер телефона</th>
                                                <th>Компания</th>
                                                <th>Дата</th>
                                                <th>Действие</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($messages as $message)
                                                <tr>
                                                    <td>{{ $message->id }}</td>
                                                    <td>{{ $message->title }}</td>
                                                    <td>{{ $message->name}}</td>
                                                    <td>{{ $message->phone }}</td>
                                                    <td>{{ $message->company }}</td>
                                                    <td>{{ $message->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('message.destroy', ['message' => $message->id]) }}" method="post" class="float-left">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Подтвердите удаление')">
                                                                <i
                                                                    class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>Заявок пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer clearfix">
                                {{ $messages->links() }}
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
