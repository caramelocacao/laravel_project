    <header>
        <div class="flex-box">
            <h2>Weeb-sama</h2>
        </div>
        <div class="flex-box">
            <div class="flex-box-img">
                <a href="{{ route('catalogue')}}"><img src="../../images/home.png" alt="home" width="40" height="40"></a>
            </div>
                <a href="/panier"><div class="flex-box-img"><img src="../../images/bag.png" alt="bag" width="35" height="35"></div></a>
        </div>

        <div class="flex-box">
            <div class="flex-box-img"><img src="../../images/compte.png" alt="account" width="25" height="25"> </div>
            @if (Auth::check())
            <div>
                <p>{{ Auth()->user()->name }}</p>
                <a href="/deconnexion" class="button"></a>
            </div>
            <div class="flex-box-img">
                <a href="{{route('logout')}}"><img src="../../images/logout.png" alt="log out" width="25" height="25"></a>
            </div>

            @else
            <p>DISCONNECT</p>
            @endif

        </div>

    </header>