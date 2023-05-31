<?php
include("connection.php")
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

<?php
if(isset($_GET['id'])){
$emp_id = $_GET['id'];
$query = $pdo->prepare("select * from faculty  where id = :e_id");
$query ->bindParam('e_id',$emp_id);
$query->execute();
$data = $query->fetch(PDO::FETCH_ASSOC);
}
?>
<div class="container mt-4">
            <form  action="" method="post">
                <div class="form-group mb-3">
                        <label for="">id</label>
                    <input type="text" name="e_id" value="<?php echo $data['id']?>" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" name="e_name" id="" value="<?php echo $data['name']?>" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">email</label>
                    <input type="text" name="e_email" id="" value="<?php echo $data['email']?>" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">contact</label>
                    <input type="number" name="e_contact" value="<?php echo $data['contact']?>" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">address</label>
                    <input type="text" name="e_address" value="<?php echo $data['address']?>" id="" class="form-control" placeholder="">
                </div>
               
               
               <button type="submit" name="update">update</button>
                </form>
        </div>
        <?php
       if(isset($_POST['update'])){
        $e_id = $_POST['e_name'];
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_contact = $_POST['e_contact'];
        $e_address = $_POST['e_address'];
        $query = $pdo->prepare("update faculty set  name = :name, email = :email, contact = :contact , address = :address where id =:e_id ");
        $query->bindParam('e_id',$emp_id);
        $query->bindParam('name',$e_name);
        $query->bindParam('email',$e_email);
        $query->bindParam('contact',$e_contact);
        $query->bindParam('address',$e_address);
        $query->execute();
        echo"data successfully inserted";
    }
        ?>

</body>
</html>