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
                    </div>
                </div>
            </div>

                    <h5 class="card-title">Таблица пройденных тестов</h5>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>ФИО</th>
                            <th>Почта</th>
                            <th>Компания</th>
                            <th>Баллы</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

            </section>

    </main>
@endsection
