<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discount_amount = ($price * $discount)/100;
    $discount_price = $price - $discount_amount;
}
?>
<div>
    <form method="post" action="result_amount.php">
        <table>
            <tr>
                <td><h2>Product Discount Calculator</h2></td>
                <td></td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td><?php echo $product ?></td>
            </tr>
            <tr>
                <td>List Price:</td>
                <td><?php echo "$" . $price ?></td>
            </tr>
            <tr>
                <td>Discount Percent:</td>
                <td><?php echo $discount . "%" ?></td>
            </tr>
            <tr>
                <td>Discount Amount:</td>
                <td><?php echo "$" . $discount_amount ?></td>
            </tr>
            <tr>
                <td>Discount Price:</td>
                <td><?php echo "$" . $discount_price ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>