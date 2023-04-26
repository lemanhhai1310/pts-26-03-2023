<?php $data["title"] = "Virtual staging furniture code"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="item__44-20 uk-grid-20" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-padding-small uk-background-muted resource__boxContent">
                    <nav class="resource__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"><a href="">All</a></li>
                                <li><a href="">Farmhouse</a></li>
                                <li><a href="">Modern/Contemporary</a></li>
                                <li><a href="">Scandinavian</a></li>
                                <li><a href="">Traditional</a></li>
                                <li><a href="">Transitional</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="item__40-20 uk-child-width-1-4@m uk-grid-small uk-grid-20-m" uk-grid>
                        <?php for ($i=1;$i<=12;$i++): ?>
                        <div>
                            <div class="uk-border-rounded uk-overflow-hidden uk-card uk-card-default">
                                <div class="uk-cover-container">
                                    <img src="https://picsum.photos/348/232/?random=<?= $i ?>" alt="" uk-cover="">
                                    <canvas width="696" height="464"></canvas>
                                </div>
                                <div class="uk-padding-small uk-text-center">
                                    3001
                                </div>
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
                    <li class="uk-active"><a href="#">Living Room</a></li>
                    <li><a href="#">Dining/Kitchen</a></li>
                    <li><a href="#">Bedroom</a></li>
                    <li><a href="#">Study/office</a></li>
                    <li><a href="#">Outdoor Funiture</a></li>
                    <li><a href="#">Kids Room</a></li>
                    <li><a href="#">Entertaiment</a></li>
                    <li><a href="#">Game/fitness</a></li>
                    <li><a href="#">Bathroom</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>