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
<div>
    <form method="post" action="result_amount.php">
        <table>
            <tr>
                <td><h2>Product Discount Calculator</h2></td>
                <td></td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td><input type="text" name="product"></td>
            </tr>
            <tr>
                <td>List Price:</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Discount Percent:</td>
                <td><input type="text" name="discount"></td>
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