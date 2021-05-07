<header>
    <div class="header_top">
        <a href="{{ route('homepage') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
    </div>
    <div class="nav">
        <ul>
            <li class="{{ (Request::route()->getName() == 'homepage' ? 'active' : '') }}"><a href="{{ route('homepage') }}">Home</a></li>
            <li>Grano Italiano</li>
            <li>Tenacita' Certificata</li>
            <li>Chi Siamo</li>
            <li class="{{ (Request::route()->getName() == 'products_page' ? 'active' : '') }}"><a href="{{ route('products_page') }}">I Prodotti</a></li>
            <li>Food Service</li>
            <li>Le Ricette</li>
            <li>L'Impegno</li>
            <li>Limited Edition</li>
            <li class="{{ (Request::route()->getName() == 'news_page' ? 'active' : '') }}"><a href="{{ route('news_page') }}">News</a></li>
            <li>
                <i class="fas fa-shopping-cart"></i>
                Shop
            </li>
            <li>EN</li>
            <li>US</li>
            <li>FR</li>
        </ul>
        <div class="search">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>