<div class="uk-section-small service">
    <div class="uk-container uk-container-large">
        <h2 class="uk-h2 uk-text-center service__title uk-background-norepeat uk-background-center-center" data-src="images/Rectangle33.png" uk-img>All our services</h2>
        <div class="uk-grid-8 uk-child-width-1-2@m item__40-20" uk-grid>
            <?php for ($i=1;$i<=12;$i++): ?>
            <div>
                <div class="service__card uk-card uk-card-default uk-height-min-small">
                    <div class="uk-grid-collapse uk-grid-match" uk-grid>
                        <div class="uk-width-1-2@m uk-flex-last@m">
                            <div class="beforeAfter uk-position-relative">
                                <div class="uk-height-1-1">
                                    <img src="images/dark.jpg" />
                                    <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                                </div>
                                <div class="uk-height-1-1">
                                    <img src="images/photo.jpg" />
                                    <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="service__card__box">
                                <div class="uk-grid-8" uk-grid>
                                    <div>
                                        <div class="service__card__title"><a href="">Single photos</a></div>
                                    </div>
                                    <div>
                                        <div class="service__card__title price">US$1.60</div>
                                    </div>
                                </div>
                                <div class="service__card__txt item__20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>