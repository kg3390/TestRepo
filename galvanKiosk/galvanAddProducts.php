<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
    <title>Add Product</title>
    <style>
        body { background-color: goldenrod; }
        .center { text-align: center; }
    </style>
</head>

<body>

<div class="whole-page">
<form action="galvanAddProductAction.php" method="post">

<table>

<tr>
<td><label for="name"><b>Product Name</b></label></td>
<td><input class="inputname" type="text" name="productname" placeholder="Enter Product Name" required></td>
</tr>

<tr>
<td><label for="unit"><b>Unit</b></label></td>
<td><input class="inputname" type="text" name="unit" placeholder="Enter Unit" required></td>
</tr>

<tr>
<td><label for="Price_per_Unit"><b>Price per Unit</b></label></td>
<td><input class="inputname" type="text" name="Price_per_Unit" placeholder="Enter Price per Unit" required></td>
</tr>

<tr>
<td><label for="image_url"><b>Image Url</b></label></td>
<td><input class="inputname" type="file" name="image_url" required></td>
</tr>

</table>

<table>
<button type="submit" class="galvanCompute" name="register">Add Product</button>
<button type="submit" class="galvanClear" formaction="galvanProduct.php">Cancel</button>
</table>
</form>
</div>

</body>
</html>