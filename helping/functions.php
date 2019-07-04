<?php



function get_navbar_hob(){
    global $link;
    $sql="SELECT * FROM categories_f WHERE type = 'hob1' OR type = 'hob2' OR type = 'hob3'";
    $query = mysqli_query($link, $sql);
    $res = mysqli_fetch_all($query, 1);
    return $res;

}

function get_navbar_lord(){
    global $link;
    $sql="SELECT * FROM categories_f WHERE type = 'lord1' OR type = 'lord2' OR type = 'lord3'";
    $query = mysqli_query($link, $sql);
    $res = mysqli_fetch_all($query, 1);
    return $res;
}

function get_posts(){
    global $link;
    $sql = "SELECT * FROM post_films";
    $query = mysqli_query($link, $sql);
    $res = mysqli_fetch_all($query, 1);
    return $res;
}
 function get_current_post($post_id){
    global $link;
    $sql = "SELECT * FROM post_films WHERE id='$post_id'";
    $query = mysqli_query($link, $sql);
    $res = mysqli_fetch_assoc($query);
    return $res;
 }

 function get_posts_by_cat($current_type){
    global $link;
    $sql = "SELECT * FROM post_films WHERE type ='$current_type'";
    $query = mysqli_query($link, $sql);
    $res = mysqli_fetch_all($query, 1);
    return $res;
 }

 function add_feedback($feedback){
     global $link;
     $sql = "SELECT * FROM feedbacks WHERE feedback = '$feedback'";
     $query = mysqli_query($link, $sql);
     $result_q = mysqli_fetch_assoc($query);

    if($result_q == NULL) {

        $ins_quer = "INSERT INTO feedbacks (feedback) VALUES ('$feedback')";
        $res = mysqli_query($link, $ins_quer);
        return 'done';
    }
    else {
        return'exsist';
    }
 }

 function add_new_post($title_new, $content_new, $datetime_new, $type_new, $img_new){
    global $link;
     $img_new = 'includes/img/'.$img_new;

     $query2 = "SELECT id FROM post_films ORDER BY id DESC LIMIT 1";
     $res2 = mysqli_query($link, $query2);
     $id_new = mysqli_fetch_assoc($res2);
     $id_new=++$id_new['id'];

     $title_new = mysqli_real_escape_string($link, $title_new);
     $content_new = mysqli_real_escape_string($link, $content_new);
     $datetime_new = mysqli_real_escape_string($link, $datetime_new);
     $type_new = mysqli_real_escape_string($link, $type_new);
     $img_new = mysqli_real_escape_string($link, $img_new);



        if ($title_new !== '' and $content_new !== '' and $datetime_new !== '' and $type_new !== '' and $img_new !== ''){

            $sql = "INSERT INTO post_films (id, title, img, content, datetime, type) VALUES ('$id_new', '$title_new', '$img_new', '$content_new', '$datetime_new', '$type_new')";
            $query = mysqli_query($link, $sql);
            return 'done';
        } else {
            return 'shit';
        }



 }


?>