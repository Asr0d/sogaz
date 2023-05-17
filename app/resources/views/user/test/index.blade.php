@extends('user.layouts.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Тестирование</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Test</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <!-- start Quiz button -->
                    <div class="start_btn"><button>Начать тест</button></div>

                    <!-- Info Box -->
                    <div class="info_box">
                        <div class="info-title"><span>Некоторые правила этой прохождения теста</span></div>
                        <div class="info-list">
                            <div class="info">1. На каждый вопрос у вас будет только  <span>15 секунд</span></div>
                            <div class="info">2. После выбора ответа его нельзя будет отменить.</div>
                            <div class="info">3. Вы не можете выбрать ни одну опцию, как только время истечет.</div>
                            <div class="info">4. Вы не можете выйти из тестирования</div>
                            <div class="info">5. Вы будете получать очки за правильные ответы.</div>
                        </div>
                        <div class="buttons">
                            <button class="quit">Выйти</button>
                            <button class="restart">Продолжить</button>
                        </div>
                    </div>

                    <!-- Quiz Box -->
                    <div class="quiz_box">
                        <header>
                            <div class="title">Тестирование</div>
                            <div class="timer">
                                <div class="time_left_txt">Осталось</div>
                                <div class="timer_sec">15</div>
                            </div>
                            <div class="time_line"></div>
                        </header>
                        <section>
                            <div class="que_text">
                                <!-- Here I've inserted question from JavaScript -->
                            </div>
                            <div class="option_list">
                                <!-- Here I've inserted options from JavaScript -->
                            </div>
                        </section>

                        <!-- footer of Quiz Box -->
                        <footer>
                            <div class="total_que">
                                <!-- Here I've inserted Question Count Number from JavaScript -->
                            </div>
                            <button class="next_btn">Следующий</button>
                        </footer>
                    </div>

                    <!-- Result Box -->
                    <div class="result_box">
                        <div class="icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="complete_text">Вы завершили тест!</div>
                        <div class="score_text">
                            <!-- Here I've inserted Score Result from JavaScript -->
                        </div>
                        <div class="buttons">
                            <button class="restart">Заново</button>
                            <button class="quit">Выход</button>
                        </div>
                    </div>

                    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
                    <script src="{{asset('assets/quiz-test/js/questions.js')}}"></script>

                    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
                    <script src="{{asset('assets/quiz-test/js/script.js')}}"></script>

                </div>
            </div>
        </section>

    </main>
@endsection
