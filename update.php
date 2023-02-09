<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update |تعديل منتج</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up =mysqli_query($con,"SELECT * FROM product WHERE id=$ID");
    $pre_data=mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل المنتجات</h2>
                <input type ="text" name ="id" value ="<?php echo $pre_data['id']?>">
                <br>
                <input type ="text" name ="name" value ="<?php echo $pre_data['name']?>">
                <br>
                <input type ="text" name ="price" value ="<?php echo $pre_data['price']?>">
                <br>
                <input type ="file" name ="image" id ="file" style="display:none;">
                <label for="file">تغير صورة للمنتج</label>
                <button name ="update" type="submit">تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Mustafa Elshehawy</p>
    </center>
</body>
</html>
<!DOCTYPE html>