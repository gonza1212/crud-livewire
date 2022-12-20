<nav class="w3-bar @auth w3-indigo @endauth">
    @guest
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-indigo" id="theme_toggler">{color-theme}</a>
        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-indigo w3-right">Log In</a>
    @else
        <a href="{{ route('dashboard') }}" class="w3-bar-item w3-btn w3-hover-violet">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-blue" id="theme_toggler">{color-theme}</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-blue w3-right" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">Log Out</a>
        <form method="POST" action="{{ route('logout') }}" id="logout_form" style="display:none">
            @csrf
        </form>
    @endguest
</nav>