<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    require_once "./entities/product.class.php";
    if(isset($_POST["btnsubmit"])){

        $productName = $_POST["txtName"];
        $cateID = $_POST["txtCateID"];
        $price = $_POST["txtPrice"];
        $quantity = $_POST["txtQuantity"];
        $description = $_POST["txtdesc"];
        $picture = $_POST["txtpic"];

        $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);

        $result = $newProduct->save();
        if(!$result){
            header("Location: add_product.php?failure");
        }
        else{
            header("Location: add_product.php?inserted");
        }
    }
?>
<form method="post" class="form-style-7">
<h1>Add new product</h1>
    <ul>
        <li>
            <label >Product Name</label>
            <input type="text" name="txtName" maxlength="100" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?> ">
            <span>Product Name</span>
        </li>
        <li>
            <label >Quantity</label>
            <input type="text" name="txtQuantity" maxlength="100" value="<?php echo isset($_POST["txtQuantity"]) ? $_POST["txtQuantity"] : ""; ?> ">
            <span>Quantity</span>
        </li>
        <li>
            <label >Price</label>
            <input type="text" name="txtPrice" maxlength="100" value="<?php echo isset($_POST["txtPrice"]) ? $_POST["txtPrice"] : ""; ?> ">
            <span>Price</span>
        </li>
        <li>
            <label>Type</label>
            <select name="txtCateID" value="<?php echo isset($_POST["txtCateID"]) ? $_POST["txtCateID"] : ""; ?> ">
                <option value="1">Phone</option>
                <option value="2">Tablet</option>
                <option value="3">Laptop</option>
            </select>
            <span>Type</span>
        </li>
        <li>
            <label>Picture</label>
            <input type="text" name="txtpic" maxlength="100" value="<?php echo isset($_POST["txtpic"]) ? $_POST["txtpic"] : ""; ?> ">
            <span>Picture</span>
        </li>
        <li>
            <label>Description</label>
            <input type="text" name="txtdesc" maxlength="100" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?> "/>
            <span>Description</span>
        </li>
        <?php 
            if(isset($_GET["inserted"])){
                echo "<h1>Added</h1>";
            }
        ?>
        <li>
            <input type="submit" name="btnsubmit" value="Add" >
        </li>
    </ul>
</form>
<?php 
    include_once("footer.php");
?>
<style>
body {
  background: #B8D7FF;
  text-align: 'center';
  
}

.form-style-7{
	max-width:400px;
	margin:50px auto;
	background:#fff;
	border-radius:2px;
	padding:20px;
	font-family: Georgia, "Times New Roman", Times, serif;
    border-radius: 30px
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #5C5C5C;
	font-size:x-large;
}
.form-style-7 ul{
	list-style:none;
	padding:0;
	margin:0;	
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #DDDDDD;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #FFFFFF;
	height: 14px;
	padding: 2px 5px 2px 5px;
	color: #B9B9B9;
	font-size: 14px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="number"],
.form-style-7 textarea,
.form-style-7 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	display: block;
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus 
{
}
.form-style-7 li > span{
	background: #F3F3F3;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: #C0C0C0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.form-style-7 textarea{
	resize:none;
}
.form-style-7 input[type="submit"]{
	background: #2471FF;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #5994FF;
	border-radius: 3px;
	color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover{
	background: #6B9FFF;
	color:#fff;
}
</style>
</body>
</html>