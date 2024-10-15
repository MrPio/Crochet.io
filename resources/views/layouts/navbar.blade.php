<div id="navbar">
    <ul>
        <li><a href="{{ route('home') }}"
               title="Vai alla home">
                Home
            </a>
            @if($url== '/')
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('home') }}"
               title="Vai al mio catalogo">
                Catalogo
            </a>
            @if(str_contains($url, route('catalogue')))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('about') }}"
               title="Vai alla mia bio">
                Chi sono
            </a>
            @if(str_contains($url, route('about')))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('contact') }}"
               title="Vai ai miei contatti">
                Contatti
            </a>
            @if(str_contains($url, route('contact')))
                <span></span>
            @endif
        </li>
    </ul>
</div>
