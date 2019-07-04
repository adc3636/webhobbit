<?php
    $link = mysqli_connect('localhost', 'root', '', 'hobbit' );

if (mysqli_connect_errno()){
    echo 'Oshubka k podklucheniu '.mysqli_connect_errno().' : '.mysqli_connect_error();
}
?>