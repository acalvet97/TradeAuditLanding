    <!-- Footer Section -->
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-container">
                <div class="footer-logo-container"><a href=""><img src="<?= BASE_URL ?>assets/TA_logo_light.png" alt="Logo de TradeAudit" class="logo"></a></div>
                <div class="footer-bottom-container">
                    <span class="footer-copyright">Copyright 2025 © TradeAudit. Todos los derechos reservados.</span>
                    <nav class="footer-nav">
                        <ul class="footer-menu">
                            <li class="footer-menu--item"><a href="#">Términos legales</a></li>
                            <li class="footer-menu--item"><a href="#">Política de privacidad</a></li>
                            <li class="footer-menu--item"><a href="#">Política de cookies</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- Script para el menú hamburguesa -->
    <script defer>
        document.querySelector('.menu-toggle').addEventListener('click', e => {
            const nav = document.querySelector('.header-nav');
            const expanded = e.currentTarget.getAttribute('aria-expanded') === 'true';
            e.currentTarget.setAttribute('aria-expanded', !expanded);
            nav.classList.toggle('active');
        });
    </script>
</body>
</html>