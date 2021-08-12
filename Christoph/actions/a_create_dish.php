<?php
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST) {
        $name = $_POST['name'];
        $description = $_POST['desc'];
        $price = $_POST['price'];
        $picture = file_upload($_FILES['picture']);

        $query = "INSERT INTO `dishes`(`img`, `name`, `mealDescription`, `price`) VALUES ('$picture->fileName','$name','$description','$price')";

        if(mysqli_query($connect, $query)) {
            $class = "success";
            $message = "
                <div class='card'>
                    <img src='../pictures/$picture->fileName' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>$name</h5>
                        <p class='card-text text-center'>$description</p>
                    </div>
                </div>
            ";
        }else {
            $class = "danger";
            $message = "
                <div class='alert alert-danger'>
                    <p class='text-center'>Something went wrong</p>
                    <p class='text-center'>Go back to <a href='index.php'>home.</a></p>
                 </div>
            ";
        }
        mysqli_close($connect);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once '../components/boot_css.php'?>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">Create request response</h1>
        <div class="alert alert-<?=$class;?>">
            <p><p><?php echo ($message) ?? ''; 
                 header("Refresh:3; url=../index.php");
            ?></p></p>    
        </div>
    </div>
    
</body>
</html>