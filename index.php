<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Training</title>
    <style>
        .navbar {
        width: 50%;
        background-color: #555;
        overflow: auto;
        }

        /* Navigation links */
        .navbar a {
        float: left;
        padding-top: 12px;
        padding-bottom: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        width: 50%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
        text-align: center; /* If you want the text to be centered */
        }

        /* Add a background color on mouse-over */
        .navbar a:hover {
        background-color: #000;
        }
        .menu{
            margin-bottom: 20px;
            margin-left: 480px
        }

    </style>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="menu">
        <div class="navbar">
            <a href="/LAB33/list_product.php">Product List</a>
            <a href="/LAB33/add_product.php">Add Product</a>
        </div>
    </div>
    <?php 
        include_once("footer.php");
    ?>
</body>
</html>