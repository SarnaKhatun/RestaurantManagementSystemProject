<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>

            @if(Auth()->user()->access_label == 3)
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                User Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="users" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('users.create')}}">Add User</a>
                    <a class="nav-link" href="{{route('users.index')}}">Manage User</a>
                </nav>
            </div>
            @endif

            @if(Auth()->user()->access_label == 0 || Auth()->user()->access_label == 1 || Auth()->user()->access_label == 2 || Auth()->user()->access_label == 3)
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#update" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                Profile Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="update" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('edit.profile')}}">Update Profile</a>
                </nav>
            </div>
            @endif

            @if(Auth()->user()->access_label == 3)
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#slider" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-section"></i></div>
                Slider Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="slider" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('sliders.create')}}">Create Slider</a>
                    <a class="nav-link" href="{{route('sliders.index')}}">Manage Slider</a>
                </nav>
            </div>


            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuCategory" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-beer"></i></div>
                Menu Category Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menuCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('menuCategories.create')}}">Add Menu Category</a>
                    <a class="nav-link" href="{{route('menuCategories.index')}}">Manage Menu Category</a>
                </nav>
            </div>



            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-pie-chart"></i></div>
                Menu  Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('menus.create')}}">Add Menu</a>
                    <a class="nav-link" href="{{route('menus.index')}}">Manage Menu</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#specialCategory" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                Special Category Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="specialCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('specialCategories.create')}}">Add Category</a>
                    <a class="nav-link" href="{{route('specialCategories.index')}}">Manage Category</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#special" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-sailboat"></i></div>
                Special Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="special" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('specials.create')}}">Add Special</a>
                    <a class="nav-link" href="{{route('specials.index')}}">Manage Special</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#event" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-diagnoses"></i></div>
                Event Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="event" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('event.add')}}">Add Event</a>
                    <a class="nav-link" href="{{route('event.manage')}}">Manage Event</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#bookTable" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-book-bookmark"></i></div>
                Book Module
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="bookTable" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('book.manage')}}">Manage Book</a>
                </nav>
            </div>
            @endif
        </div>
    </div>
</nav>
