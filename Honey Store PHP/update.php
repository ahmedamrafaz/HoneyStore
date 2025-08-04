<?php
    require 'includes/init.php';
    $id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name= $_POST['Pname'];
    $desc= $_POST['Description'];
    $price= $_POST['Price'];
    $quantity= $_POST['Quantity'];
    $pphoto= $_POST['Pphoto'];
  
    $sql="Update products set ProductID= $id,Pname='$name',Description='$desc',Price='$price',Quantity='$quantity',Pphoto='$pphoto' where ProductID=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
    echo '<script>alert("Update succes")</script>';
    header('Location:admin.php');

    }else{
        echo '<script>alert("Update failed")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>USER ADDING</title>
    </head>
    <body>
<form method="post">
  <div class="mb-3">
    <label> Product Name</label>
    <input type="text" class="form-control" placeholder="Enter Product name" name="Pname"required >
  </div>

  <div class="mb-3">
    <label> Description</label>
    <input type="text" class="form-control" placeholder="Enter Product description" name="Description"required >
  </div>

  <div class="mb-3">
    <label> Price</label>
    <input type="text" class="form-control" placeholder="Enter Product price" name="Price"required >
  </div>

  <div class="mb-3">
    <label> Quantity</label>
    <input type="text" class="form-control" placeholder="Enter Product quantity" name="Quantity"required >
  </div>
  
  <div class="mb-3">
    <label>Picture</label>
    <input type="text" class="form-control" placeholder="Enter Product picture url" name="Pphoto"required autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">EDITE </button>
 </form>
 <br>
 
</body>
</html>