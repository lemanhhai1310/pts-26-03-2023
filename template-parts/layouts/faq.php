<div class="uk-position-relative uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/bg1.png" uk-img>
    <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
    <div class="uk-position-relative uk-section-small uk-position-z-index">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-91-l" uk-grid>
                <div class="uk-width-2-5@l">
                    <h2 class="uk-h2 faq__title">FREQUENTLY ASKED QUESTIONS</h2>
                </div>
                <div class="uk-width-expand">
                    <ul class="faq__accordion" uk-accordion>
                        <?php
                        $data = array(
                            'Can I really get my virtually staged rooms in 48 hours?',
                            'Can you really put realistic furniture in my empty house?',
                            'What if I want to change something?',
                            'Do you offer volume discounts?',
                            'How long do you store my photos for?',
                            'Can I get exact furniture pieces?',
                            'What is included in virtual staging?',
                            'Can I have lights, curtains & blinds added to my virtually staged image?',
                        );
                        foreach ($data as $k=>$v): ?>
                        <li class="faq__accordion__li">
                            <a class="uk-accordion-title faq__accordion__title" href="#"><?= $v ?></a>
                            <div class="uk-accordion-content faq__accordion__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>