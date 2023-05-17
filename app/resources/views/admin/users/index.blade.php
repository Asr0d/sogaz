@extends('admin.layouts.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Создание пользователей</h1>
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
                           Добавить пользователя
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gg">
                            Создать компанию
                            <i class="ri-add-circle-line ms-2"></i>
                        </button>

                        <div class="modal fade" id="gg" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Создание компании</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Название</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name-company">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-primary" id="save_company">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                    <h5 class="card-title">Таблица польщователей</h5>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>ФИО</th>
                            <th>Почта</th>
                            <th>Компания</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

            </section>

    </main>
@endsection
