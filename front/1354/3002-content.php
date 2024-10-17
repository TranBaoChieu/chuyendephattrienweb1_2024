<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/' ;

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3002">
    <section class="services">
        <h3 class="header-services">WHAT WE OFFER</h3>
        <h2 class="content-services">Get It Fixed Fast with MobiCare's Expert Technicians.</h2>

        <div class="services-grid">
            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Screen Repair">
                <div class="service-info">
                    <h4 class="heading-content-info">Screen Repair</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>

            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Battery Replacement">
                <div class="service-info">
                    <h4 class="heading-content-info">Battery Replacement</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>

            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Water Damage">
                <div class="service-info">
                    <h4 class="heading-content-info">Water Damage</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>

            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Charging Repair">
                <div class="service-info">
                    <h4 class="heading-content-info">Charging Repair</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>

            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Camera Repair">
                <div class="service-info">
                    <h4 class="heading-content-info">Camera Repair</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>

            <div class="service-card">
                <img class="img-service-card"
                    src="http://<?php echo $url_path ?>/img/sua-dien-thoai-guido-mieth-getty_xbrx.jpeg.webp"
                    alt="Data Recovery">
                <div class="service-info">
                    <h4 class="heading-content-info">Data Recovery</h4>
                    <p class="desc-content-info">Eilt letius himenaeos curabitur dis leo primis tempus pharetra tortor
                    </p>
                    <div class="btn-learn-more">Learn more</div> <!-- Nút Learn More -->
                </div>
            </div>
        </div>
    </section>
</div>