<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
          <!--  <h4>  Admin Dashboard</h4>-->
        </div>

        <ul class="list-unstyled components">
            <p><a href="#" class="nav-link">{{ auth()->user()->name }}</a></p>
            <li class="active">
                <a href="#homeSubmenu" class="nav-link" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa-thin fa-arrow-right-from-bracket"></i>Domains</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#" class="nav-link">Home 1</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Home 2</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="fa-thin fa-arrow-right-from-bracket"></i>Users</a>
            </li>
            <li>
                <form  action="{{'logout'}}" style="display: inline;" method="POST">
                    @csrf
                    <a class="nav-link" href="#" onclick="this.closest('form').submit()"> <i class="fa-thin fa-arrow-right-from-bracket"></i> Log out</a>
                </form>
            </li>
        </ul>
    </nav>

</div>