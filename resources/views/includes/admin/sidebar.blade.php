<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">Меню</li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Страницы
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.products.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Товары</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.categories.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Категории</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.markers.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Производители</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
