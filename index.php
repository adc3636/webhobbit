<?php
    require_once '/header.php';

    $posts = get_posts();


?>
    <div class='empty'>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="container page-up">
                    <h1>All posts:</h1>
                    <hr>
                </div>
                <?foreach ($posts as $post):?>
                <div class="row">
                    <div class="col-md-3">
                        <a href="/post.php?post_id=<?=$post['id']?>">
                            <img class="img-thumbnail img-fluid" src="<?=$post['img']?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <a href="/post.php?post_id=<?=$post['id']?>"><h4><?=$post['title']?></h4></a>
                        <p><?=mb_substr($post['content'], 0, 200)?>...</p>
                        <p><a href="/post.php?post_id=<?=$post['id']?>" class="btn btn-outline-dark">Читать полностью</a></p>
                        <br/>
                        <ul class="list-inline">
                            <li><i class="fa fa-bars" aria-hidden="true"></i> <?=$post['type']?></a></li>
                            <li class="white"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$post['datetime']?></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <?endforeach?>

            </div>

            <div class="col-md-3" style="margin-top: 100px">
                <?php

                ?>
            </div>
        </div>
    </div>



<?php
    require_once '/footer.php';
?>
