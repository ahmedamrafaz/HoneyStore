<?php
    require 'includes/init.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ADMIN PAGE</title>
    </head>
   
    
    <body>
 <div>
 
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ProductID</th>
      <th scope="col">Pname</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Pphoto</th>

    </tr>
  </thead>
  <tbody>
  <?php
  $sql="select * from products";
  $result=mysqli_query($conn,$sql);
  if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['ProductID'];
      $name=$row['Pname'];
      $desc=$row['Description'];
      $price=$row['Price'];
      $quantity=$row['Quantity'];
      $pphoto=$row['Pphoto'];


     echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$desc.'</td>
      <td>'.$price.'</td>
      <td>'.$quantity.'</td>
      <td>'.$pphoto.'</td>
 
     <td>
     <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">UPDATE </a></button>
     <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">DELETE</a></button>
     </td>

    </tr>';
}

  }
  ?>
  </tbody>
</table>
 </div>
 <div class="container">
 <a href="AdminControl.php"> <button class="btn btn-primary" >ADD Products</button></a> 
 </div>
  </body>
  </html>