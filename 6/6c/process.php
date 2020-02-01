<?php 

$mysqli = new mysqli('localhost','root', '', 'arkademy') or die(mysqli_error($mysqli));

$cashier = '';
$category = '';
$name = '';
$price = '';

if(isset($_POST['save'])){
    $cashier = $_POST['cashier'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $mysqli->query("insert into product (name, price, id_category, id_cashier) values ('$name', '$price', '$category', '$cashier')") or die($mysqli->error);
    header("location: index.php");
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("delete from product where id=$id") or die($mysqli->error);
    header("location: index.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("select * from product where id=$id") or die($mysqli->error);
    if(count($result)==1){
        $row = $result->fetch_array();
        $cashier = $row['cashier'];
        $category = $row['category'];
        $name = $row['name'];
        $price = $row['price'];
    }
    header("location: index.php");
}

?>