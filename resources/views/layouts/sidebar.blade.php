<header id="config-header">
    <div class="top-menu">
        <div class="container clearfix">
            <a href="/">
                <center><img src="{{ asset('images/logo-dmci.png')}}" class=" ls-is-cached lazyloaded" alt="DMCI Homes Logo" width="140" height="31">
                <img class="logo-exclusive lazyload" style="display: none;" src="{{ asset('images/ex.png')}}" alt="DMCI Homes Exclusive Logo" width="400" height="105">
            </a>
            <div class="fr">
                <nav class="top-nav fl" id="top-nav">
                    <ul>
                        @if(auth()->check() && auth()->user()->isAdmin())
                            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @endif
                        <li><a href="#" class="pop-up-trigger popup-settings"><span class="icon-home icon-advancefilter"></span></a></li>
                        <li style="display: none;"><a href="#" class="pop-up-trigger" id="profile-selected-currency"> (PhP) Peso</a></li>
                        <li style="display: none;"><a href="#" class="pop-up-trigger" id="profile-selected-language"> (EN)</a></li>
                    </ul>
                </nav>
                {{-- <div class="fr">
                    <div class="search-icon">
                        <label for="">Quick Search</label>
                        <span class="icon-home icon-search"></span>
                        <form action="https://www.dmcihomes.com/search" method="GET">
                            <div class="input-wrap">
                                <input type="text" name="q" placeholder="Quick Search" required>
                                <button type="submit"><span class="icon-home icon-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</header>
