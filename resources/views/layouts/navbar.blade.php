<div id="navbar">
    <ul>
        <li><a href="{{ route('home') }}"
               title="Vai alla home" class="clickable">
                Home
            </a>
            @if($url== '/')
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('home') }}"
               title="Vai al mio catalogo" class="clickable">
                Catalogo
            </a>
            @if(str_contains($url, route('catalogue')))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('about') }}"
               title="Vai alla mia bio" class="clickable">
                Chi sono
            </a>
            @if(str_contains($url, route('about')))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('contact') }}"
               title="Vai ai miei contatti" class="clickable">
                Contatti
            </a>
            @if(str_contains($url, route('contact')))
                <span></span>
            @endif
        </li>
    </ul>
</div>
