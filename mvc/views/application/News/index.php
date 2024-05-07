<div class="page-wrapper">
    <?php
    if (isset($data)) {
        require_once "./mvc/views/" . $data["header"] . ".php";
    }
    ?>
    <main class="page-main">
        <div class="section-first-screen">
            <div class="first-screen__bg hide-in-sd" style="background-color: rgba(86, 178, 128, 15%); height: 300px;">
            </div>
            <div class="first-screen__content hide-in-sd" style="height: 300px;">
                <div class="uk-container" style="padding: 32px 0">
                    <div class="first-screen__box page-info">
                        <p style="color: #008848; font-size: 50px; text-align: center">Tin tức</p>


                    </div>
                </div>
            </div>
            <?php
            $count = 0;
            ?>
            <div class="page-content">

                <div class="uk-margin-large-top uk-container">

                    <div class="uk-grid" data-uk-grid>
                        <?php
                        if ($count === 0) {
                            ?>

                            <div class="uk-width-1-1@m">
                                <aside class="sidebar">
                                    <div class="widjet widjet-search">
                                        <div class="widjet widjet-list-articles">
                                            <div class="widjet__title">Được xem nhiều gần đây</div>
                                            <ul class="list-articles">
                                                <?php
                                                while ($row = mysqli_fetch_array($data["news"])) {
                                                ?>
                                                <li class="list-articles-item">
                                                    <a class="list-articles-item__link"
                                                       href="<?php echo Utils\BASE_URL ?>/news/detail/<?php echo $row["id"] ?>">
                                                        <div class="list-articles-item__img"><img
                                                                    src="<?php echo $row["img_url"] ?>"
                                                                    alt="article-thumb">
                                                        </div>
                                                        <div class="list-articles-item__info">
                                                            <div class="list-articles-item__title">
                                                                <?php echo $row["header"] ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php
                                                    };
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                </aside>
                            </div>
                            <?php
                        }
                        $count++;

                        ?>
                        <?php
                        mysqli_data_seek($data["news"], 0);
                        while ($e = mysqli_fetch_assoc($data["news"])) {
                            ?>
                            <div class="uk-width-2-4@m">
                                <article class="article-intro">
                                    <div class="article-intro__image">
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                             data-uk-slideshow>
                                            <ul class="uk-slideshow-items">
                                                <li><img src="<?php echo $e["img_url"] ?>" alt data-uk-cover></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="article-intro__body">
                                        <div class="article-intro__info">
                                            <div class="article-intro__author">
                                                <i class="fas fa-user"></i><span><?php echo $e["author"] ?></span>
                                            </div>
                                            <div class="article-intro__date">
                                                <i class="fas fa-calendar-alt"></i><span><?php echo $e["created_at"] ?></span>
                                            </div>
                                        </div>
                                        <h2 class="article-intro__title"><?php echo $e["header"] ?></h2>
                                        <div class="article-intro__content">
                                            <p><?php echo $e["intro"] ?></p>
                                        </div>
                                        <div class="article-intro__bottom">
                                            <div class="article-intro__tags">
                                                <i class="fas fa-tags"></i><span>TIN TỨC, NÔNG SẢN, TRÁI CÂY</span>
                                            </div>
                                            <div class="article-intro__more">
                                                <a class="uk-button"
                                                   href="<?php echo Utils\BASE_URL ?>/news/detail/<?php echo $e["id"] ?>">
                                                    Chi Tiết
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>


                            </div>
                        <?php }

                        ?>

                    </div>
                </div>

            </div>


            <ul class="uk-pagination uk-flex-center uk-margin-medium-top" style="margin-bottom:60px">
                <li class="uk-active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="uk-disabled"><span>...</span></li>
                <li><a href="#"><span data-uk-pagination-next></span></a></li>
            </ul>
    </main>
    <?php
    require_once "./mvc/views/" . $data["footer"] . ".php";
    ?>
</div>