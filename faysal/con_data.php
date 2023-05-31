<?php

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #bt a{
          color: white;

        }
    </style>
</head>
<body>
    

    <?php
        $query = $pdo->query("select * from faculty");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach( $result as $faculty){

        ?>

            <div class="container mt-5">    
            <table class="table table-striped">
                <tr>
                    <td><?php echo $faculty ['id'] ?></td>
                    <td><?php echo $faculty ['name'] ?></td>
                    <td><?php echo $faculty ['email'] ?></td>
                    <td><?php echo $faculty ['contact'] ?></td>
                    <td><?php echo $faculty ['address'] ?></td>
                    <td><button id="bt" class="btn btn-primary" ><a href="update.php?id=<?php echo $faculty['id']?>">update</a>
                    <td><button id="bt" class="btn btn-danger" ><a href="delete.php?id=<?php echo $faculty['id']?>">delete</a>
                    </button></td>
                </tr>
            </table>
            </div>

        <?php
        }
    ?>

</body>
</html>