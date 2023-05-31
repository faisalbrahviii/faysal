<?php
include ("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">email</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">contact</label>
                    <input type="number" name="contact" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">address</label>
                    <input type="text" name="address" id="" class="form-control" placeholder="" >
                </div>
                
               
               <button type="submit" name="ins">insert</button>
        </form>
    </div>
    <?php
    if(isset($_POST['ins'])){
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $query = $pdo->prepare("insert into faculty (name ,email,contact,address) value (:name,:email,:contact,:address)");
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('contact',$contact);
        $query->bindParam('address',$address);
        $query->execute();
       
        echo"data successfully inserted";
    }
    
    ?>
</body>
</html>