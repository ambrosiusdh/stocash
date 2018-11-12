<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Stocash</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
        <div class="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Hi, {{session()->get('name')}}</a>
                </li>
                @if(session()->get('id') == 2)
                    <li style="padding-top: 6px"><a href="{{url('/logout')}}"><i style="color: white; font-size: 32px;" class="fas fa-sign-out-alt logout-cashier"></i></a></li>
                @endif
                @if(session()->get('id') == 1)
                <li class="nav-item nav-burger">
                    <i class="fas fa-bars"></i>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
