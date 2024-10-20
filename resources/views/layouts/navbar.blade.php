<div id="navbar" style="min-width: 20rem">
    <ul>
        <li><a href="{{ route('home') }}"
               title="Vai alla home" class="clickable">
                Home
            </a>
            @if($url== '/')
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('articles.index') }}"
               title="Vai al mio catalogo" class="clickable">
                Catalogo
            </a>
            @if(str_contains($url, '/articles'))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('about') }}"
               title="Vai alla mia bio" class="clickable">
                Chi sono
            </a>
            @if(str_contains($url, '/bio'))
                <span></span>
            @endif
        </li>

        <li><a href="{{ route('contact') }}"
               title="Vai ai miei contatti" class="clickable">
                Contatti
            </a>
            @if(str_contains($url, '/contatto'))
                <span></span>
            @endif
        </li>
    </ul>
</div>
