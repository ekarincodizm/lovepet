<?php
$activity_id = $_REQUEST['activity_id'];
$user_id = $_REQUEST['user_id'];

$sqlCheckLike = "SELECT * FROM tb_activity_user_like WHERE activity_id = '$activity_id' AND user_id = '$user_id' ";
$rsCheckLike  = mysqli_query($conn, $sqlCheckLike);
if(mysqli_num_rows($rsCheckLike) > 0){
    $sql = "DELETE FROM tb_activity_user_like WHERE activity_id = '$activity_id' AND user_id = '$user_id' ";
    $rs = mysqli_query($conn, $sql);

    if($rs){
        ?>
        <script type="text/javascript">
            history.back();
        </script>
        <?php
    }else{
        echo $sql;
        ?>
        <script type="text/javascript">
            alert('Error!!!');
        </script>
        <?php
    }
}else{
    echo mysqli_num_rows($rsCheckLike).' ELSE | '.$sqlCheckLike;
}
?>