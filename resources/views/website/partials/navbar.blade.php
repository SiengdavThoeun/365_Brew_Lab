<nav class="navbar-content-container">
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="navbar-top">
        <div class="navbar-content-row">
            <a href="{{ url('') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
        </div>
    </div>
    <div class="navbar-content-menu">
        <div class="navbar-content-row">
            <div class="navbar-left">
                <div class="navbar-content-col">
                    <span class="dropdown-toggle" id="menuDropdownToggle">Menu <i class="fa fa-caret-down"></i></span>
                    <div class="dropdown-menu" id="menuDropdown">
                        <div class="dropdown-col">
                            <a class="dropdown-item" href="{{ url('/foods')}}">Foods</a>
                            <hr>
                            <a class="dropdown-item" href="{{ url('/drinks')}}">Drinks</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="navbar-content-col">
                    <a href="{{ url('/gallery')}}">Gallery</a>
                    <hr>
                </div>
            </div>

            <div class="navbar-right">
                <div class="navbar-content-col">
                    <a href="{{ url('/events')}}">News & Events</a>
                    <hr>
                </div>

                <div class="navbar-content-col">
                    <a href="{{ url('/aboutUs')}}">About Us</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</nav>
