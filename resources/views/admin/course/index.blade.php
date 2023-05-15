@extends('admin.layouts.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Курсы</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.course.index')}}">Test</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gg">
                            Добавить информацию
                            <i class="ri-add-circle-line ms-2"></i>
                        </button>

                        <div class="modal fade" id="gg" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Добавить информацию</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" >
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Название</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">Файл</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="file">
                                                </div>
                                            </div>
                                            <h5 class="card-title">Уровень</h5>
                                            <div class="mb-3">
                                                <select name="level" class="form-select" aria-label="Default select example">
                                                    <option value="1">1 уровень</option>
                                                    <option value="2">2 уровень</option>
                                                    <option value="3">3 уровень</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-primary" id="save_course">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Таблица курсов</h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Уровень</th>
                            <th scope="col">Скачиваний</th>
                            <th scope="col">Дата создания</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <th scope="row">{{$course->id}}</th>
                            <td>{{$course->title}}</td>
                            <td>{{$course->level}} уровень</td>
                            <td>{{$course->downloads}}</td>
                            <td>{{$course->created_at}}</td>
                            <td><button type="button" class="btn btn-danger delete-course" data-id="{{$course->id}}"><i class="ri-delete-bin-5-line"></i></button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </section>

    </main>
@endsection
