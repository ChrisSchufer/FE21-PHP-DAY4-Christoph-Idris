<?php 
    include_once "actions/db_connect.php";

    $query = "SELECT * FROM dishes";
    $result = mysqli_query($connect, $query);
    $card = "";

    // var_dump(mysqli_fetch_array($result, MYSQLI_ASSOC));
    

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $card .= "
                <div class='card'>
                    <img src='pictures/" . $row['img'] . "' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row['name'] . "</h5>
                        <p class='card-text'>" . $row['mealDescription'] . "</p>
                        <a href='update_dish.php?id=" . $row['dishID'] . "' class='btn btn-warning'>Edit</a>
                        <a href='delete_dish.php?id=" . $row['dishID'] . "' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
            ";
        }
    }else {
        $card = "<div class='alert alert-danger'>
                    <p class='text-center'>No dishes available!</p>
                    <p class='text-center'>Go to <a href='create_dish.php'>Create Dish</a>, to create your first dish.</p>
                 </div>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "components/boot_css.php" ?>
</head>
<body>
    <!-- Nav -->
   <?php include_once "nav.php" ?>
   <!-- Nav end -->
   <!-- Main -->
   <div class="container">
        <?= $card ?>
   </div>

   

    

    <?php include_once "components/boot_js.php" ?>
</body>
</html>