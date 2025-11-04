<?php
define('BASE_URL', '/TradeAuditLanding-main/');
include 'includes/headerLanding.php';
?>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Optimiza tus <span>trades</span> con TradeAudit</h1>
                <p>Sube tus datos de Bitget y obtén análisis claros y accionables al instante.</p>
                <div class="hero-cta">
                    <a href="https://tradeaudit.com/registro.php" class="button button-primary button-md">Comenzar gratis</a>
                    <span>*Crea tu cuenta con tu UID de referidos.</span>
                </div>
            </div>
            <div class="hero-img-container wrapper"><img src="<?= BASE_URL ?>assets/hero-img.png" alt="Logo de TradeAudit" width="auto" class="hero-img"></div>
            <canvas class="hero-canvas"></canvas>
        </section>
        <!-- About Section -->
        <section id="about" class="about">
            <div class="wrapper">
                <div class="intro">
                    <h2>La auditoría automatizada que tu operativa necesita</h2>
                    <p class="intro-text">Conecta tu cuenta de Bitget y obtén un análisis completo de tu operativa a través de un dashboard intuitivo y visual. TradeAudit interpreta los datos directamente desde la API de Bitget para ofrecerte una auditoría detallada de cada trade.</br><span>Acceso gratuito exclusivo mediante UID referido de Cryptobruj.</span></p>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section id="features" class="features-section">
            <div class="wrapper">
                <div class="features-container">
                    <div class="features-headings">
                        <h2>Todo lo que necesitas.</br>Nada que estorbe</h2>
                        <p>TradeAudit está diseñado para darte <span>exactamente lo que necesitas para mejorar tu trading</span>, sin complicaciones.</p>
                    </div>
                    <div class="features-cards-container">
                        <div class="feature-card">
                            <img src="<?= BASE_URL ?>assets/rectangle-1.png" alt="">
                            <div class="feature-card-text">
                                <h3>Análisis de rendimiento</h3>
                                <p>Tus trades procesados al detalle: ganancias, pérdidas, ratios relevantes y evolución global de tu operativa.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <img src="<?= BASE_URL ?>assets/rectangle-3.png" alt="">
                            <div class="feature-card-text">
                                <h3>Visualización avanzada de datos</h3>
                                <p>Gráficos dinámicos y comparativas interactivas para interpretar tu actividad sin complicaciones.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <img src="<?= BASE_URL ?>assets/rectangle-2.png" alt="">
                            <div class="feature-card-text">
                                <h3>Integración directa con Bitget</h3>
                                <p>Conecta tu API de Bitget en segundos y visualiza tus resultados en tiempo real y con máxima privacidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQs Section -->
        <section id="FAQs" class="faqs">
            <h2>¿Tienes preguntas?</h2>
            <div class="faqs-accordion">
                <details aria-label="Pregunta frecuente sobre análisis de TradeAudit">
                    <summary>¿Qué tipo de análisis proporciona TradeAudit?</summary>
                    <div class="faqs-textContainer"><p>TradeAudit realiza una auditoría completa de tu operativa en Bitget.
                        Obtendrás métricas clave como porcentaje de aciertos, relación riesgo/beneficio, drawdown, rentabilidad acumulada y estadísticas por par, día o estrategia. Además, el panel te muestra visualizaciones interactivas que te ayudan a entender cómo y dónde mejorar tu rendimiento.
                    </p></div>
                </details>
                <details aria-label="Pregunta frecuente sobre cómo vincular Bitget con TradeAudit">
                    <summary>¿Cómo se realiza la integración con mi cuenta de Bitget?</summary>
                    <div class="faqs-textContainer"><p>Solo necesitas generar tus claves API desde tu cuenta de Bitget (con permisos de solo lectura) y conectarlas en tu panel de usuario de TradeAudit. En segundos, el sistema sincroniza tus operaciones y actualiza tus estadísticas de forma automática y en tiempo real.    
                    </p></div>
                </details>
                <details aria-label="Pregunta frecuente sobre la compatibilidad de TradeAudit con exhanges">
                    <summary>¿Está prevista la compatibilidad con otros exchanges?</summary>
                    <div class="faqs-textContainer"><p>Sí. Actualmente TradeAudit está optimizando su integración exclusiva con Bitget, pero ya se está trabajando en la expansión hacia otros exchanges líderes como Bitunix o BingX. Nuestro objetivo es ofrecerte la misma calidad de análisis sin importar dónde operes.</p></div>
                </details>
                <details aria-label="Pregunta frecuente sobre la protección de datos en TradeAudit">
                    <summary>¿Cómo se garantiza la seguridad de mis datos?</summary>
                    <div class="faqs-textContainer"><p>La privacidad y protección de tus datos es nuestra máxima prioridad.
TradeAudit no almacena claves con permisos de retiro, utiliza encriptación de nivel bancario para proteger la información y sigue estrictos protocolos de seguridad en servidores dedicados. Tus datos permanecen siempre bajo tu control y solo se usan para generar tus reportes.</p></div>
                </details>
            </div>
        </section>
        <!-- Bottom CTA Section -->
        <section class="bottom-cta wrapper">
            <h2>La única herramienta <span>gratuita</span></br>para optimizar tus trades en tiempo real</h2>
            <p>Accede ahora con tu cuenta de Bitget y empieza a mejorar tu operativa desde el primer trade.</br><span>Sin costes. Sin complicaciones. Solo resultados.</span></p>
            <div class="bottom-cta-button">
                <a href="https://tradeaudit.com/registro.php" class="button button-primary button-lg">Empieza gratis con tu UID de referido</a>
                <span>*No se necesita tarjeta de crédito.</span>
            </div>
        </section>
    </main>

<?php include 'includes/footerLanding.php'; ?>