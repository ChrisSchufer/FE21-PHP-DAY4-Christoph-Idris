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

    <?php include_once "nav.php" ?>

    <div class="container">
        <h1 class="text-center mt-5">Add Dish</h1>
        <form class="mt-5" action="actions/a_create_dish.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Dish Name" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "desc" placeholder="Dish Description" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add Dish</button></td>
                    </tr>
                </table>
            </form>
    </div>


    <?php require_once "components/boot_js.php" ?>
</body>
</html>