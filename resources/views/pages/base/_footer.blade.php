<!-- For Footer -->
<footer class="footer">
    <div class="footer__logo-box">
        <picture class="footer__logo">
            <source srcset="{{ asset('images/content/logo.png') }}.png 1x, {{ asset('images/content/logo.png') }} 2x"
                    media="(max-width: 37.5em)">
            <img srcset="{{ asset('images/content/logo.png') }}1x, {{ asset('images/content/logo.png') }} 2x" alt="Full logo" src="{{ asset('images/content/logo.png') }}">
        </picture>
    </div>
    
    <div class="row">
        <div class="col-1-of-2">
            <div class="footer__navigation">
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">About us</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Menu</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">News</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Career</a></li>
                </ul>
            </div>
        </div>
        <div class="col-1-of-2">
            <p class="footer__copyright">
                Built by <a href="#" class="footer__link">Jonas Schmedtmann</a> for his online course <a href="#" class="footer__link">Advanced CSS and Sass</a>.
                Copyright &copy; by Jonas Schmedtmann. You are 100% allowed to use this webpage for both personal
                and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas
                Schmedtmann, is of course highly appreciated!
            </p>
        </div>
    </div>
</footer>