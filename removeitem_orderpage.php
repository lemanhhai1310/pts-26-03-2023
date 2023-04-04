<?php $data["title"] = "remove item Order page"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section order__content">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <div class="home__sendPhoto__titleSmall">what we need</div>
                <h1 class="uk-h1 uk-margin home__sendPhoto__title">Upload descriptive photos (if any), outline areas, objects to be deleted or make notes</h1>
                <div class="item__40-20">
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label" style="line-height: 1.6">Step 1 – Provide a high resolution image to be edited <span>(For example)</span></div>
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                            <?php for ($i=1;$i<=3;$i++): ?>
                            <div>
                                <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="470" height="302"></canvas>
                                </div>
                                <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                            </div>
                            <?php endfor; ?>
                        </div>

                        <div class="virtualstaging__orderpage__label item__44-20" style="line-height: 1.6">Step 2 – Upload a duplicate of the image with the items to be removed circled or crossed out <span>(For example)</span></div>
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                            <?php for ($i=1;$i<=3;$i++): ?>
                                <div>
                                    <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="470" height="302"></canvas>
                                    </div>
                                    <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label">Add your edited photo</div>
                        <?php for ($i=1;$i<=3;$i++): ?>
                        <div class="virtualstaging__orderpage__card uk-card uk-card-body uk-card-default uk-border-rounded uk-height-min-small item__32-16">
                            <a href="" class="uk-position-top-right virtualstaging__orderpage__close">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.7739 4.72413C17.4173 3.3677 15.689 2.44399 13.8075 2.06981C11.926 1.69562 9.97572 1.88777 8.20338 2.62194C6.43105 3.35612 4.91622 4.59936 3.85045 6.19445C2.78467 7.78953 2.21582 9.66483 2.21582 11.5832C2.21582 13.5016 2.78467 15.3769 3.85045 16.972C4.91622 18.5671 6.43105 19.8103 8.20338 20.5445C9.97572 21.2787 11.926 21.4708 13.8075 21.0966C15.689 20.7224 17.4173 19.7987 18.7739 18.4423C19.6747 17.5416 20.3893 16.4722 20.8768 15.2954C21.3643 14.1185 21.6152 12.8571 21.6152 11.5832C21.6152 10.3093 21.3643 9.04795 20.8768 7.87107C20.3893 6.69418 19.6747 5.62485 18.7739 4.72413ZM15.379 14.0359C15.4482 14.1007 15.5034 14.179 15.5411 14.266C15.5789 14.353 15.5983 14.4468 15.5983 14.5416C15.5983 14.6364 15.5789 14.7303 15.5411 14.8173C15.5034 14.9043 15.4482 14.9826 15.379 15.0474C15.3143 15.1116 15.2375 15.1624 15.1531 15.1969C15.0687 15.2314 14.9783 15.2488 14.8871 15.2483C14.7053 15.2476 14.5312 15.1754 14.4021 15.0474L11.9148 12.5601L9.46219 15.0474C9.33314 15.1754 9.15896 15.2476 8.9772 15.2483C8.88602 15.2488 8.79563 15.2314 8.71122 15.1969C8.62681 15.1624 8.55003 15.1116 8.48529 15.0474C8.35625 14.9176 8.28382 14.742 8.28382 14.5589C8.28382 14.3759 8.35625 14.2003 8.48529 14.0705L10.9379 11.5832L8.48529 9.13057C8.37179 8.99803 8.31247 8.82754 8.31921 8.65317C8.32594 8.4788 8.39823 8.31339 8.52162 8.19C8.64501 8.06661 8.81042 7.99433 8.98479 7.98759C9.15916 7.98086 9.32965 8.04017 9.46219 8.15367L11.9148 10.6063L14.3675 8.15367C14.4316 8.08725 14.5082 8.03412 14.5929 7.9973C14.6776 7.96049 14.7687 7.94071 14.861 7.9391C14.9533 7.93749 15.0451 7.95409 15.131 7.98793C15.2169 8.02177 15.2953 8.07221 15.3617 8.13635C15.4281 8.2005 15.4812 8.27709 15.5181 8.36177C15.5549 8.44645 15.5747 8.53755 15.5763 8.62987C15.5779 8.7222 15.5613 8.81393 15.5274 8.89984C15.4936 8.98575 15.4432 9.06415 15.379 9.13057L12.8917 11.5832L15.379 14.0359Z" fill="#888888"/>
                                </svg>
                            </a>
                            <div class="uk-grid-small uk-grid-22-m uk-grid-match" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="532" height="354"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-flex uk-flex-column">
                                        <div>
                                            <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                                <select aria-label="Custom controls">
                                                    <option value="">Room/Area*</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="virtualstaging__orderpage__selectBtn uk-button uk-width uk-button-default" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <textarea class="uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="3" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                        <div class="item__44-20">
                            <div class="uk-width" uk-form-custom>
                                <input type="file" aria-label="Custom controls">
                                <div class="home__sendPhoto__placeholder uk-placeholder uk-margin-remove uk-text-center">
                                    <div><img src="images/drag_dropIcon.png" alt=""></div>
                                    <div class="item__15 home__sendPhoto__placeholder__txt">Drag and Drop, Copy and Paste Files</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label">Add description image (if any)</div>
                        <?php for ($i=1;$i<=2;$i++): ?>
                            <div class="virtualstaging__orderpage__card uk-card uk-card-body uk-card-default uk-border-rounded uk-height-min-small item__32-16">
                                <a href="" class="uk-position-top-right virtualstaging__orderpage__close">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.7739 4.72413C17.4173 3.3677 15.689 2.44399 13.8075 2.06981C11.926 1.69562 9.97572 1.88777 8.20338 2.62194C6.43105 3.35612 4.91622 4.59936 3.85045 6.19445C2.78467 7.78953 2.21582 9.66483 2.21582 11.5832C2.21582 13.5016 2.78467 15.3769 3.85045 16.972C4.91622 18.5671 6.43105 19.8103 8.20338 20.5445C9.97572 21.2787 11.926 21.4708 13.8075 21.0966C15.689 20.7224 17.4173 19.7987 18.7739 18.4423C19.6747 17.5416 20.3893 16.4722 20.8768 15.2954C21.3643 14.1185 21.6152 12.8571 21.6152 11.5832C21.6152 10.3093 21.3643 9.04795 20.8768 7.87107C20.3893 6.69418 19.6747 5.62485 18.7739 4.72413ZM15.379 14.0359C15.4482 14.1007 15.5034 14.179 15.5411 14.266C15.5789 14.353 15.5983 14.4468 15.5983 14.5416C15.5983 14.6364 15.5789 14.7303 15.5411 14.8173C15.5034 14.9043 15.4482 14.9826 15.379 15.0474C15.3143 15.1116 15.2375 15.1624 15.1531 15.1969C15.0687 15.2314 14.9783 15.2488 14.8871 15.2483C14.7053 15.2476 14.5312 15.1754 14.4021 15.0474L11.9148 12.5601L9.46219 15.0474C9.33314 15.1754 9.15896 15.2476 8.9772 15.2483C8.88602 15.2488 8.79563 15.2314 8.71122 15.1969C8.62681 15.1624 8.55003 15.1116 8.48529 15.0474C8.35625 14.9176 8.28382 14.742 8.28382 14.5589C8.28382 14.3759 8.35625 14.2003 8.48529 14.0705L10.9379 11.5832L8.48529 9.13057C8.37179 8.99803 8.31247 8.82754 8.31921 8.65317C8.32594 8.4788 8.39823 8.31339 8.52162 8.19C8.64501 8.06661 8.81042 7.99433 8.98479 7.98759C9.15916 7.98086 9.32965 8.04017 9.46219 8.15367L11.9148 10.6063L14.3675 8.15367C14.4316 8.08725 14.5082 8.03412 14.5929 7.9973C14.6776 7.96049 14.7687 7.94071 14.861 7.9391C14.9533 7.93749 15.0451 7.95409 15.131 7.98793C15.2169 8.02177 15.2953 8.07221 15.3617 8.13635C15.4281 8.2005 15.4812 8.27709 15.5181 8.36177C15.5549 8.44645 15.5747 8.53755 15.5763 8.62987C15.5779 8.7222 15.5613 8.81393 15.5274 8.89984C15.4936 8.98575 15.4432 9.06415 15.379 9.13057L12.8917 11.5832L15.379 14.0359Z" fill="#888888"/>
                                    </svg>
                                </a>
                                <div class="uk-grid-small uk-grid-22-m uk-grid-match" uk-grid>
                                    <div class="uk-width-1-3@s">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/noimage.jpg" alt="" uk-cover="">
                                            <canvas width="532" height="354"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-flex uk-flex-column">
                                            <textarea class="uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="3" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                        <div class="item__44-20">
                            <div class="uk-width" uk-form-custom>
                                <input type="file" aria-label="Custom controls">
                                <div class="home__sendPhoto__placeholder uk-placeholder uk-margin-remove uk-text-center">
                                    <div><img src="images/drag_dropIcon.png" alt=""></div>
                                    <div class="item__15 home__sendPhoto__placeholder__txt">Drag and Drop, Copy and Paste Files</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-5@l">
                <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small sidebar">
                    <div class="home__sendPhoto__legend">Your order</div>

                    <table class="order__table divider uk-table uk-table-small uk-table-hover uk-table-justify">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quanlity</th>
                            <th>expense</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=1;$i<=3;$i++): ?>
                        <tr>
                            <td>Virtual staging</td>
                            <td>$15</td>
                            <td>X10</td>
                            <td>$150</td>
                        </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                    <div class="item__40-20 uk-form-stacked">
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Delivery time:</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width uk-grid" uk-grid>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3" checked> Delivery time 24 hours (Default)</label>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3"> Delivery time 12 hours </label>
                            </div>
                        </div>
                    </div>
                    <div class="item__20 single__card__boxTotal">
                        <div class="" uk-grid>
                            <div class="uk-width-expand">
                                <div class="single__card__boxTotal__txt">Total:</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="single__card__boxTotal__price">$150</div>
                            </div>
                        </div>
                    </div>
                    <button class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width item__40-20">
                        Continue
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.138 7.52861L10.4713 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82756 2.67635 9.66035 2.74646 9.53675 2.87007C9.41314 2.99367 9.34303 3.16088 9.34151 3.33568C9.33999 3.51048 9.40719 3.67888 9.52863 3.80461L13.0573 7.33328H1.33329C1.15648 7.33328 0.986912 7.40352 0.861888 7.52854C0.736864 7.65357 0.666626 7.82313 0.666626 7.99995C0.666626 8.17676 0.736864 8.34633 0.861888 8.47135C0.986912 8.59637 1.15648 8.66661 1.33329 8.66661H13.0573L9.52863 12.1953C9.46495 12.2568 9.41416 12.3303 9.37922 12.4117C9.34429 12.493 9.3259 12.5805 9.32513 12.669C9.32436 12.7575 9.34122 12.8453 9.37475 12.9272C9.40827 13.0092 9.45777 13.0836 9.52036 13.1462C9.58296 13.2088 9.65739 13.2583 9.73932 13.2918C9.82125 13.3253 9.90904 13.3422 9.99756 13.3414C10.0861 13.3407 10.1736 13.3223 10.2549 13.2873C10.3362 13.2524 10.4098 13.2016 10.4713 13.1379L15.138 8.47128C15.2629 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.2629 7.65363 15.138 7.52861Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/all_our_services.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>