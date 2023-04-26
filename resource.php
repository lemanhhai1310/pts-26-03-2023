<?php $data["title"] = "Resource"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <h1 class="uk-h1 resource__title">Our resource (share for all people)</h1>
        <div class="item__44-20 uk-grid-20" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-padding-small uk-background-muted resource__boxContent">
                    <div>
                        <button class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary">
                            Download all files
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1361_5260)">
                                    <path d="M12.4444 16H3.55555C2.60588 16 1.71302 15.6302 1.04142 14.9586C0.369847 14.287 0 13.3941 0 12.4444V11.5555C0 11.0646 0.397948 10.6666 0.888894 10.6666C1.37984 10.6666 1.77779 11.0646 1.77779 11.5555V12.4444C1.77779 12.9193 1.96273 13.3657 2.29845 13.7015C2.63426 14.0372 3.08068 14.2222 3.55555 14.2222H12.4444C12.9193 14.2222 13.3657 14.0372 13.7015 13.7015C14.0372 13.3656 14.2222 12.9192 14.2222 12.4444V11.5555C14.2222 11.0646 14.6202 10.6666 15.1111 10.6666C15.602 10.6666 16 11.0646 16 11.5555V12.4444C16 13.3941 15.6302 14.2869 14.9586 14.9586C14.287 15.6302 13.3941 16 12.4444 16ZM7.99998 12.4444C7.87702 12.4444 7.75996 12.4194 7.65346 12.3743C7.55409 12.3323 7.46072 12.2713 7.37903 12.1916C7.379 12.1915 7.379 12.1915 7.37897 12.1915C7.37838 12.191 7.37779 12.1904 7.3772 12.1898C7.37704 12.1897 7.37685 12.1894 7.3767 12.1893C7.3762 12.1888 7.37577 12.1884 7.3753 12.1879C7.37499 12.1876 7.37471 12.1874 7.3744 12.187C7.37409 12.1867 7.37369 12.1863 7.37341 12.186C7.37279 12.1854 7.3721 12.1847 7.37148 12.1841L3.81591 8.62852C3.46879 8.2814 3.46879 7.71857 3.81591 7.37142C4.16302 7.0243 4.72588 7.02427 5.073 7.37142L7.11112 9.40954V0.888894C7.11109 0.397948 7.50904 0 7.99998 0C8.49093 0 8.88891 0.397948 8.88891 0.888894V9.40951L10.927 7.37142C11.2741 7.0243 11.837 7.0243 12.1841 7.37142C12.5312 7.71854 12.5312 8.2814 12.1841 8.62852L8.62852 12.1841C8.6279 12.1847 8.62721 12.1854 8.62659 12.186C8.62625 12.1863 8.62588 12.1867 8.6256 12.1869C8.62529 12.1873 8.62501 12.1875 8.6247 12.1878C8.62426 12.1883 8.62377 12.1888 8.62333 12.1892C8.62318 12.1894 8.62296 12.1896 8.6228 12.1897C8.62224 12.1903 8.62165 12.1909 8.62106 12.1915C8.62103 12.1915 8.62103 12.1915 8.621 12.1915C8.61122 12.201 8.60132 12.2103 8.59119 12.2193C8.51676 12.2857 8.43386 12.3375 8.3462 12.3744C8.34589 12.3745 8.34564 12.3747 8.34533 12.3748C8.34499 12.3749 8.34471 12.3751 8.34437 12.3752C8.23842 12.4198 8.12211 12.4444 7.99998 12.4444Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1361_5260">
                                        <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                    <div class="item__40-20 uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
                        <?php for ($i=1;$i<=9;$i++): ?>
                        <div>
                            <div class="uk-border-rounded uk-overflow-hidden">
                                <div class="uk-cover-container">
                                    <img src="https://picsum.photos/348/232/?random=<?= $i ?>" alt="" uk-cover="">
                                    <canvas width="696" height="464"></canvas>
                                </div>
                                <a href="" class="uk-button resource__btnDownload uk-button-primary uk-width">Download</a>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="item__80-40">
                        <?php require "template-parts/layouts/pagination.php"; ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto@m uk-flex-first@m">
                <ul class="uk-nav uk-nav-default resource__nav">
                    <li class="uk-active"><a href="#">Blue skies</a></li>
                    <li><a href="#">Grass</a></li>
                    <li><a href="#">Sunset skies</a></li>
                    <li><a href="#">Dusk skies</a></li>
                    <li><a href="#">TV screen</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>