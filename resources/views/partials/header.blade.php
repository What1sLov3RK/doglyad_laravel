<header>
    <div class="logo">
        <img id="logo" src="{{ asset('images/logo.jpg') }}" alt="Лого сайту">
    </div>
    <div class="menu-navigation">
        <div class="menu-desctop">
            <span id="menu-position"><a class="color-position-1" id="menu-a" href="/">Головна</a></span>
            <span class="hov" id="menu-position"><a class="color-position-2" id="menu-a" href="/catalog">Каталог</a>
                        <div id="catol">
                            <span><a class="color-position-2" id="menu-a" href="/catalog/1">Прання</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/2">Миття посуди</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/3">Прибирання</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/4">Дом</a></span>
                        </div>
            </span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="/about">Про нас</a></span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="/buy">Де купити?</a></span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="{{ session()->has('user') ? '/admin': '#admin_form' }}" {{ session()->has('user') ? '' : 'rel=modal:open' }}>Адмінка</a></span>
            @if(session()->has('user'))
                <span id="menu-position"><a class="color-position-2" id="menu-a" href="/logout">Вийти</a></span>
            @endif
        </div>
        <div class="menu-mobile">
            <img id="menu" src="{{ asset('images/menu.jpg') }}" alt="іконка меню">
            <div id="mb" class="menu-mob">
                <span id="close">&#10006;</span>
                <div class="mbli">
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/">Головна</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/catalog">Каталог</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/about">Про нас</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/buy">Де купити?</a></span>
                    <span id="retreat"><a class="color-position-/" id="menu-a" href="{{ session()->has('user') ? '/admin': '#admin_form' }}" {{ session()->has('user') ? '' : 'rel=modal:open' }}>Адмінка</a></span>
                    @if(session()->has('user'))
                        <span id="retreat"><a class="color-position-/" id="menu-a" href="/logout">Вийти</a></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

<div id="admin_form" class="modal">
    <form action="/login" method="post" class="admin_form">
        @csrf
        <input type="text" name="login" class="login_admin" required>
        <input type="text" name="password" class="login_admin" required>
        <button type="submit" class="submit_admin">Авторизуватись</button>
    </form>
</div>
