<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store |إضافة منتجات</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسوق اونلاين</h2>
                <img src="imgs/img_1.png" alt="logo" width="450px" height="150px" >
                <input type="text" name="name" require placeholder="اكتب اسم المنتج">
                <br>
                <input type="text" name="price" require placeholder="اكتب سعر المنتج" >
                <br>
                <input type="file" name="image" id="file" style="display:none;" >
                <label for="file">اختيار صورة للمنتج</label>
                <button name="upload">رفع المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Mustafa Elshehawy</p>
    </center>
</body>
</html>
<!DOCTYPE html>