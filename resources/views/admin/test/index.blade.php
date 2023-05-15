@extends('admin.layouts.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tестирование</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.test.index')}}">Test</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

            <section>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card-body">

                        <!-- Basic Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                           Добавить тест
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gg">
                            Создать категорию
                            <i class="ri-add-circle-line ms-2"></i>
                        </button>

                        <div class="modal fade" id="gg" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Создание категории</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Название</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-primary" id="save_category">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Создание вопроса</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="card-title">Вопрос</h5>
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="question-text">
                                            </div>
                                            <h5 class="card-title">Варианты ответа</h5>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-1 col-form-label">1</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="answer-option[]">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-1 col-form-label">2</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="answer-option[]">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-1 col-form-label">3</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="answer-option[]">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-1 col-form-label">4</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="answer-option[]">
                                                </div>
                                            </div>

                                            <h5 class="card-title">Правильный ответ</h5>
                                            <div class="mb-3">
                                                <select name="correct-answer" class="form-select" aria-label="Default select example">
                                                    <option value="li-1">1</option>
                                                    <option value="li-2">2</option>
                                                    <option value="li-3">3</option>
                                                    <option value="li-4">4</option>
                                                </select>
                                            </div>
                                            <h5 class="card-title">Категория</h5>
                                            <div class="mb-3">
                                                <select name="category-select" class="form-select" aria-label="Default select example">\
                                                    @foreach($categories as $category )
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-primary" id="save_test">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <h5 class="card-title">Таблица тестов</h5>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Вопрос</th>
                            <th>Варианты ответа</th>
                            <th>Правильный ответ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                        <tr>
                            <td>{{ $test->id }}</td>
                            <td>{{ $test->question_text }}</td>
                            <td>{{ $test->options }}</td>
                            <td>{{ $test->answer }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

            </section>

    </main>
@endsection
