<?php $data["title"] = "Gallery"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <h1 class="uk-h1 uk-text-center gallery__title">GALLERY</h1>
        <div class="uk-child-width-1-3@m uk-grid-20-m item__89-40" uk-grid>
            <?php for ($i=1;$i<=9;$i++): ?>
            <div>
                <div class="uk-cover-container uk-light">
                    <img src="https://picsum.photos/436/436/?random=<?= $i ?>" alt="" uk-cover="">
                    <canvas width="436" height="436"></canvas>
                    <div class="gallery__coverImg__overlay uk-position-cover"></div>
                    <div class="uk-position-bottom uk-position-small">
                        <div class="gallery__coverImg__title">Virtual Staging</div>
                        <div class="gallery__coverImg__desc item__10">Adding furniture to real estate photography to show how versatile the space is.</div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>