<?php
    require_once 'helping/datebase.php';
    require_once 'helping/functions.php';

    $categories_f_hob = get_navbar_hob();
    $categories_f_lord = get_navbar_lord();

?>

<!DOCTYPE html>
<html lang="ru">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="/includes/bootstrap.css" rel="stylesheet">
        <link href="/includes/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <link href="/includes/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-xl navbar-fixed-top navbar-dark bg-dark">
        <div class="col-sm-1"></div>
            <a class="navbar-brand navbar-logo" href="/">HOBBITON</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lord of the rings</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <?foreach ($categories_f_lord as $cat):?>
                            <a class="dropdown-item" href="/category.php?type=<?=$cat['type']?>"><?=$cat['title']?></a>
                            <?endforeach;?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">The Hobbit</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <?foreach ($categories_f_hob as $cat):?>
                                <a class="dropdown-item" href="/category.php?type=<?=$cat['type']?>"><?=$cat['title']?></a>
                            <?endforeach;?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lord of the rings</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <?foreach ($categories_f_lord as $cat):?>
                                <a class="dropdown-item" href="/category.php?type=<?=$cat['type']?>"><?=$cat['title']?></a>
                            <?endforeach;?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">The Hobbit</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <?foreach ($categories_f_hob as $cat):?>
                                <a class="dropdown-item" href="/category.php?type=<?=$cat['type']?>"><?=$cat['title']?></a>
                            <?endforeach;?>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>

    </body>
</html>