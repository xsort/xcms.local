
<ul class="nav nav-list">
    <li class="">
        <a href="{{ URL::to('/admin') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Главная </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="admin/categories">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Категории</span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="admin/products">
            <i class="menu-icon fa fa-cube"></i>
            <span class="menu-text"> Объекты </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="{{URL::to('admin/content')}}">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Страницы </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="{{URL::to('admin/news')}}">
            <i class="menu-icon fa fa-newspaper-o"></i>
            <span class="menu-text"> Новости </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="{{URL::to('admin/tags')}}">
            <i class="menu-icon fa fa-tags"></i>
            <span class="menu-text"> Теги </span>
        </a>
    </li>

     <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-cutlery"></i>
            <span class="menu-text"> Продукция</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{URL::to('admin/menucategories')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Категории
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="{{URL::to('admin/users')}}">
            <i class="menu-icon fa fa-users"></i>
            Пользователи
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="{{URL::to('admin/translations')}}">
            <i class="menu-icon fa fa-globe"></i>
            <span class="menu-text"> Переводы </span>
        </a>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-cutlery"></i>
            <span class="menu-text"> Меню</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{URL::to('admin/menucategories')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Категории
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <!-- <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-cogs"></i>
            <span class="menu-text"> Администр.</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{URL::to('admin/links')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Ссылки
                </a>
                <b class="arrow"></b>
            </li>

            <!--
            <li class="">
                <a href="index.php?action=admin_comments">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Комментарии
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="index.php?action=admin_constants">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Константы
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="index.php?action=admin_users">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Пользователи
                </a>
                <b class="arrow"></b>
            </li>


            <li class="">
                <a href="index.php?action=admin_changepassword">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Сменить пароль
                </a>
                <b class="arrow"></b>
            </li>
            -->
        </ul>
    </li> -->
</ul><!-- /.nav-list -->
