<aside class="sidebar navbar-default" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="{{ route('categorypage') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Category</a>
            </li>
            <li>
                <a href="{{ route('all.products') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Products</a>
            </li>

        </ul>
    </div>
</aside>
