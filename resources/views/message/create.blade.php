@extends('layouts.layout')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Новая заявка</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('message.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Имя</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror" id="name"
                                           placeholder="Название">
                                </div>

                                <div class="form-group">
                                    <label for="description">Телефон</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Номер телефона">
                                <div class="form-group">
                                    <label for="title">Компания</label>
                                    <input type="text" name="company"
                                           class="form-control @error('company') is-invalid @enderror" id="company"
                                           placeholder="Компания">

                                </div>
                                <div class="form-group">
                                    <label for="title">Название заявки</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="company"
                                           placeholder="Название заявки">
                                </div>
                                <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7"
                                              placeholder="Контент ..."></textarea>
                                </div>

                                 <div class="form-group">
                                    <label for="thumbnail">Файл</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
