<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.main.index')}}">
                <i class="bi bi-grid"></i>
                <span>Главная</span>

            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>1 Уровень</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @foreach($courses->where('level', 1) as $course)
                    <li>
                        <a href="{{ route('course.file', $course->id) }}">
                            <i class="bi bi-circle"></i><span>{{ $course->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>2 уровень</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @foreach($courses->where('level', 2) as $course)
                    <li>
                        <a href="{{ route('course.file', $course->id) }}">
                            <i class="bi bi-circle"></i><span>{{ $course->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>3 уровень</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @foreach($courses->where('level', 3) as $course)
                    <li>
                        <a href="{{ route('course.file', $course->id) }}" target="_blank">
                            <i class="bi bi-circle"></i><span>{{ $course->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li><!-- End Tables Nav -->
        <li class="nav-heading">Курсы</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.course.index')}}">
                <i class="bi bi-person"></i>
                <span>Добавление инфы</span>
            </a>
        </li>
        <li class="nav-heading">Тестирование</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.test.index')}}">
                <i class="bi bi-person"></i>
                <span>Создание теста</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-heading">Создание пользователей</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.users.index')}}">
                <i class="bi bi-person"></i>
                <span>Создание пользователя</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.profile.index')}}">
                <i class="bi bi-person"></i>
                <span>Профиль</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.faq.index')}}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Контакты</span>
            </a>
        </li><!-- End Contact Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
