<?php
    require_once 'helping/datebase.php';
    require_once 'helping/functions.php';

?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="/includes/bootstrap.css" rel="stylesheet">
    <link href="/includes/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="/includes/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div><h1>Adminka</h1></div>
    <div class="row">
        <div class="col-md-9">
            <hr>
            <form class="form-group" method="post">
                <h3>Add post</h3>
                <input name="title" class="form-control"  placeholder="Write new title" alt="" required>
                <br>
                <input name="content" class="form-control"  placeholder="Write content" alt="" style="height: 100px" required>
                <br>
                <input name="img" class="form-control"  placeholder="Image's name" alt="" required>
                <br>
                <input name="datetime" class="form-control"  placeholder="Write current datetime" alt="" required>
                <br>
                <input name="type" class="form-control"  placeholder="Write type of post" alt="" required>
                <br>
                <button type="submit" class="btn btn-outline-dark">Add new post</button>
            </form>
        </div>
        <?php
            $title_new = trim($_POST['title']);
            $img_new = trim($_POST['img']);
            $content_new = trim($_POST['content']);
            $datetime_new = trim($_POST['datetime']);
            $type_new = trim($_POST['type']);
            $added = add_new_post($title_new, $content_new, $datetime_new, $type_new, $img_new);
            if ($added == 'done') {
                echo "It's on";
            } else {
                echo "it's shit";
            }
        ?>
        <div class="col-md-3">
            <p><a href="/" class="btn btn-outline-dark">Home</a></p>
        </div>
    </div>
</div>
</body>




<?php
    require_once '/footer.php';
?>
