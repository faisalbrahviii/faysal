<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <style>
        td,th {
            padding: 10px;
        }

        thead {
            border-bottom: 2px solid black;
        }
        table{
            margin-left: 55vh;
        }
    </style>
</head>

<body>

    <?php
    $name = $father_name = $class = $roll_number = $english = $science = $urdu = $sindhi = $math = $biology = $school = " ";

    if(isset($_POST['apply'])) {
        $name = $_POST['name'];
        $father_name = $_POST['f-name'];
        $class = $_POST['class'];
        $roll_number = $_POST['roll_no'];
        $english = $_POST['eng'];
        $science = $_POST['sci'];
        $urdu = $_POST['ud'];
        $sindhi = $_POST['sind'];
        $math = $_POST['math'];
        $biology = $_POST['bio'];
        $school = $_POST['sch'];


    }
    ?>

    <div class="container">
        <h1 class="text-center mt-5">Board Of F.S</h1>
       
            <div class="mt-5">
                <h4 class="text-center">
                   Student Name :  <?php echo $name ?>
                </h4>
                <h4 class="text-center">
                Father Name: <?php echo $father_name ?>
                </h4>
                <h4 class="text-center">
                Class:    <?php echo $class ?>
                </h4>
                <h4 class="text-center">
                 Roll Number :   <?php echo $roll_number ?>
                </h4>
                <h4 class="text-center">
                  School:  <?php echo $school ?>
                </h4>

            </div>
            <div class="col-3"></div>
        <table border="2px" class="mt-5">
            <thead>
                <tr>
                    <th>Component 1</th>
                    <th>Marks</th>
                    <th>Component 2</th>
                    <th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        English
                    </td>
                    <td>
                            <?php echo $english ?>
                    </td>
                    <td>
                        Urdu
                    </td>
                    <td>
                    <?php echo $urdu ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Sindhi
                    </td>
                    <td>
                    <?php echo $sindhi ?>
                    </td>
                    <td>
                        Science
                    </td>
                    <td>
                    <?php echo $science ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Biology
                    </td>
                    <td>
                    <?php echo $biology ?>
                    </td>
                    <td>
                        Math
                    </td>
                    <td>
                    <?php echo $math ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1>hello</h1>
        
</body>

</html>