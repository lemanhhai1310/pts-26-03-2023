<?php $data["title"] = "Forgot password"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-grid-match uk-grid-collapse" uk-grid>
    <div class="uk-width-3-5@m">
        <div class="sign_in__bg uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/unsplash_IH7wPsjwomc.png" uk-img></div>
    </div>
    <div class="uk-width-expand">
        <div class="uk-container">
            <div class="sign_in__card uk-card uk-card-body uk-card-default uk-height-min-large">
                <div class="uk-text-center sign_in__card__title">Forgot password</div>
                <a href="" class="sign_in__card__btn uk-button item__40-20 uk-button-default uk-width uk-flex uk-flex-middle uk-flex-center">
                    <svg class="uk-margin-small-right" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_411_2947)">
                            <path d="M23.0955 9.91355L13.3061 9.91309C12.8738 9.91309 12.5234 10.2634 12.5234 10.6957V13.823C12.5234 14.2552 12.8738 14.6056 13.3061 14.6056H18.8188C18.2152 16.1722 17.0885 17.4842 15.651 18.3178L18.0017 22.387C21.7724 20.2062 24.0017 16.3799 24.0017 12.0965C24.0017 11.4866 23.9567 11.0506 23.8668 10.5597C23.7985 10.1867 23.4747 9.91355 23.0955 9.91355Z" fill="#167EE6"/>
                            <path d="M12.0003 19.3043C9.30242 19.3043 6.94723 17.8303 5.68231 15.649L1.61328 17.9944C3.68398 21.5832 7.56308 24 12.0003 24C14.177 24 16.2309 23.4139 18.0003 22.3925V22.387L15.6496 18.3177C14.5744 18.9414 13.3302 19.3043 12.0003 19.3043Z" fill="#12B347"/>
                            <path d="M18 22.3925V22.387L15.6494 18.3177C14.5741 18.9413 13.33 19.3043 12 19.3043V24C14.1767 24 16.2308 23.4139 18 22.3925Z" fill="#0F993E"/>
                            <path d="M4.69566 12C4.69566 10.6702 5.05856 9.42607 5.68205 8.3509L1.61302 6.00555C0.586031 7.76932 0 9.81766 0 12C0 14.1823 0.586031 16.2306 1.61302 17.9944L5.68205 15.6491C5.05856 14.5739 4.69566 13.3298 4.69566 12Z" fill="#FFD500"/>
                            <path d="M12.0003 4.69566C13.7595 4.69566 15.3755 5.32078 16.6377 6.36061C16.9491 6.61711 17.4017 6.59859 17.6869 6.31336L19.9027 4.09758C20.2263 3.77395 20.2033 3.24422 19.8575 2.94431C17.7428 1.10967 14.9912 0 12.0003 0C7.56308 0 3.68398 2.41673 1.61328 6.00558L5.68231 8.35092C6.94723 6.16969 9.30242 4.69566 12.0003 4.69566Z" fill="#FF4B26"/>
                            <path d="M16.6374 6.36061C16.9488 6.61711 17.4015 6.59859 17.6866 6.31336L19.9024 4.09758C20.226 3.77395 20.2029 3.24422 19.8573 2.94431C17.7425 1.10963 14.991 0 12 0V4.69566C13.7592 4.69566 15.3752 5.32078 16.6374 6.36061Z" fill="#D93F21"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_411_2947">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Sign in with google
                </a>
                <div class="item__40-20 uk-position-relative">
                    <span class="uk-position-center video__order__divider__txt" style="color: rgba(38, 38, 38, 0.6);">Or</span>
                    <hr class="uk-divider-icon video__order__divider">
                </div>
                <form class="uk-form-stacked item__40-20">

                    <div class="uk-margin">
                        <label class="uk-form-label sign_in__card__label" for="form-stacked-email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input sign_in__card__input" id="form-stacked-email" type="email" placeholder="Enter email">
                        </div>
                    </div>

                    <button type="button" class="sign_in__card__btn uk-button item__40-20 uk-button-primary uk-width uk-border-rounded">Submit</button>
                    
                    <div class="uk-text-center item__40-20 sign_in__card__txt">Already registered? <a href="sign_in.php">Sign in</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>