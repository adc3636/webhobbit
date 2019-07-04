<?php

require_once 'header.php';
$current_type = $_GET['type'];
$current_posts = get_posts_by_cat($current_type);

?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?foreach($current_posts as $current_post):?>
                <div class="container page-up" style="margin-top: 80px">
                    <h1><?=$current_post['title']?></h1>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-thumbnail img-fluid" src="<?=$current_post['img']?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <p><?=$current_post['content']?></p>
                        <br/>
                        <ul class="list-inline">
                            <li><i class="fa fa-bars" aria-hidden="true"></i> <?=$current_post['type']?></a></li>
                            <li class="white"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$current_post['datetime']?></li>
                        </ul>
                    </div>
                </div>
                <hr>
            <?endforeach?>
        </div>
        <div class="col-md-3">
            <?php
                //var_dump($current_post);
            ?>
        </div>
    </div>
</div>
<?php
require_once '/footer.php';
?>