<?php
require_once 'header.php';
require_once 'helping/feedback.php';
$post_id = $_GET['post_id'];
$geted_post = get_current_post($post_id);
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="container page-up" style="margin-top: 80px">
                <h1><?=$geted_post['title']?></h1>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a href="#">
                        <img class="img-thumbnail img-fluid" src="<?=$geted_post['img']?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <p><?=$geted_post['content']?></p>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><i class="fa fa-bars" aria-hidden="true"></i> <?=$geted_post['type']?></a></li>
                                <li class="white"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$geted_post['datetime']?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <span>Feedback:</span>
                            <br/>
                            <span><?=$feedback?></span>
                            <?php

                            ?>
                        </div>
                    </div>
                    <!--

                    -->
                </div>
            </div>
                <hr>
            <?php

            ?>


        </div>
        <div class="col-md-3">
            <?php
                require_once 'side.php';
            ?>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>