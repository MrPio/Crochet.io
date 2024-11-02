<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

@vite('resources/css/layouts/footer.css')

{{--<div id="pre_footer"></div>--}}
<footer class="padding footer">
    <div class="footer-container">
        <div class="row" style="justify-content: space-between; width: auto">
            <div class="footer-col">
                <h4 class="company">Intrecci di passione</h4>
                <ul style="padding: 0">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('articles.index') }}">Catalogo</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="help">Informazioni</h4>
                <ul style="padding: 0">
                    <li><a href="{{ route('about') }}">Contatti</a></li>
                    <li><a href="{{ route('about') }}">Chi sono</a></li>
                </ul>
            </div>
{{--            <div class="footer-col">--}}
{{--                <h4 class="shop">online shop</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="/account">Ok, ora puoi cancellarmi</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="footer-col">
                <h4 class="follow">Seguimi</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/mariaantoniettao1"><i class="fab fa-facebook-f" ></i></a>
                    <a href="https://www.instagram.com/maria_antonietta08/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

