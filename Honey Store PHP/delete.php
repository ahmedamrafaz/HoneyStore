<?php
    require 'includes/init.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="delete from products where ProductID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
                echo '<script>alert("deletion succes")</script>';
				header('Location:admin.php');

        }else {
        echo '<script>alert("deletion failed")</script>';

}

    }
?>