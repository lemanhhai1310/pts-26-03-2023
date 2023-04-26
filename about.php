<?php $data["title"] = "About Us"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-2@l" uk-grid>
            <div>
                <h1 class="uk-h1 virtualrenovation__title1">About DevotedEdit</h1>
                <article class="uk-article about__article">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                </article>
            </div>
            <div>
                <div class="uk-child-width-1-2 uk-grid-small uk-grid-24-l" uk-grid="parallax: 77">
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div>
                        <div class="uk-cover-container">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="636" height="840"></canvas>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small uk-section-primary about__section">
    <div class="uk-container uk-container-large">
        <div>DevotedEdit's Journey and People</div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <?php for ($i=1;$i<=3;$i++): ?>
        <div class="about__nhansuItem">
            <div class="uk-child-width-1-2@l uk-grid-224-l uk-grid" uk-grid>
                <div class="uk-flex-last@l">
                    <div class="uk-cover-container">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="1140" height="604"></canvas>
                    </div>
                </div>
                <div>
                    <div class="about__name uk-margin">Tên Nhân sự</div>
                    <div class="about__txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>