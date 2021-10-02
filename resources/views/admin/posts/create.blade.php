@extends('admin.layouts.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Статьи</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Статьи</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Создать статью</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('posts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCat1">Название Статьи</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" id="exampleInputCat1"
                                    placeholder="Введите название Статьи">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCat2">Цитата</label>
                                <textarea name="description" rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="exampleInputCat2" placeholder="Введите описание Статьи"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCat3">Контент</label>
                                <textarea name="content" rows="5"
                                    class="form-control @error('content') is-invalid @enderror" id="exampleInputCat3"
                                    placeholder="Введите описание Статьи"></textarea>
                            </div>
                            {{-- {{print_r($categories)}} --}}
                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach($categories as $id => $title)
                                        <option value="{{$id}}">{{$title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Тэги</label>
                                <select class="select2" id="tags" name="tags[]" multiple="multiple"
                                    data-placeholder="Выбрать тэги" style="width: 100%;">
                                    @foreach($tags as $id => $title)
                                        <option value="{{$id}}">{{$title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Картинка</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Отправить</button>
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
{{-- </div> --}}
<!-- /.content-wrapper -->
@endsection
