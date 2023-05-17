<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.main.index')}}">
                <i class="bi bi-grid"></i>
                <span>Главная</span>

            </a>
        </li><!-- End Dashboard Nav -->
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

    </ul>

</aside><!-- End Sidebar-->
