<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي |منتجاتي</title>
    <link rel="stylesheet" href="css/card.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <h3>منتجاتك المحجوزه</h3>
    <?php
    include("config.php");
    $result = mysqli_query($con , "SELECT * FROM addcard");
    while($row=mysqli_fetch_array($result)){
        echo"
        <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>اسم المنتج</th>
                        <th scope='col'>سعر المنتج</th>
                        <th scope='col'>حذف المنتج</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>إزالة</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
    ";}?>
    <center>
        <a href="shop.php">الرجوع لصفحة المنتجات</a>
    </center>
</body>
</html>