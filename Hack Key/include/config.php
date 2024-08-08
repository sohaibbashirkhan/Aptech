<?php  $db = mysqli_connect('localhost' , 'id19769683_user2' , '@Yahya35eae1234' , 'id19769683_name2') OR  die('Not Connected'); mysqli_set_charset ($db , 'utf8');

function get_rows($connection,$query)
{

    $res = mysqli_query($connection,$query);
    $result = array();

    if($res->num_rows !=0):
        while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
            $result[] = $row;

    endif;
    return $result;
}
?>