<?php

require_once 'datebase.php';
require_once 'functions.php';


$feedback = trim($_POST['feedback']);
$x = add_feedback($feedback);


?>