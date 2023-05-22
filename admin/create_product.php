<?php
session_start();
include('../server/connection.php');
include('layouts/header.php');

if (isset($_POST['submit_btn'])) {
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $kategori = $_POST['product_category'];
    $desc = $_POST['product_description'];
    $harga = $_POST['product_price'];
    $query = "INSERT INTO products VALUES ('','$name','$brand','$kategori','$desc','','','','','','$harga','0.0','')";

    mysqli_query($conn, $query);
    
    header('location:products.php');
    
}

?>



<h1 class="h3 mb-2 text-gray-800">Create Products</h1>
<nav class="mt-4 rounded" aria-label="breadcrumb">
    <ol class="breadcrumb px-3 py-2 rounded mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="products.php">Products</a></li>
        <li class="breadcrumb-item active">Create Product</li>
    </ol>
</nav>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
    </div>
    <div class="card-body">
        <form action="">
            <label>Product Name</label>
            <div>
                <input type="text" placeholder="Masukan Nama Product" name="product_name">
            </div>
            <label>Product Brand</label>
            <div>
                <input type="text" placeholder="Masukan Brand Product" name="product_brand">
            </div>
            <label>Product Category</label>
            <div>
                <input type="text" placeholder="Masukan Category Product" name="product_category">
            </div>
            <div>
                <textarea name="" id="" cols="30" name="product_description">Product Description</textarea>
            </div>
            <label>Product Price</label>
            <div>
                <input type="text" placeholder="Masukan Price Product" name="product_price">
            </div>
            <div>
                <label>Image 1</label>
                <input type="file" name="" id="">
            </div>
            <div>
                <label>Image 2</label>
                <input type="file" name="" id="">
            </div>
            <div>
                <label>Image 3</label>
                <input type="file" name="" id="">
            </div>
            <div>
                <label>Image 4</label>
                <input type="file" name="" id="">
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Favorite
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non Favourite
                    </label>
                </div>
            </div>
            <input type="submit" value="Create Product" name="submit_btn">
        </form>

    </div>
</div>