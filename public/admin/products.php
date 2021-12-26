<?php
require_once('../../include/database.php');



$msg="";
    if(isset($_POST['save_product'])){

      $filename=$_FILES['upload_image']['name'];
      $tempname=$_FILES['upload_image']['tmp_name'];
      $folder="../images/".$filename;

      if(move_uploaded_file($tempname,$folder)){
          $msg="Image upload successfully";
      }else{
          $msg="Fail to upload image";
      }   

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/styles.css">
    <title>Store</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h1>Store</h1>
        </div>
        <div class="signin">
            <h5>Products</h5>
        </div>
        <div class="cart"><a href="">cart</a></div>
    </nav>

    <section>
        <form action="products.php" method="POST" enctype="multipart/form-data">
            <div class="form_container">

                <div class="form_input">
                    <label for="product_name">Product Name: </label>
                    <input type="text" id="product_name" name="product_name">
                </div>
              

                <div class="form_input">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price">
                </div>                       

                <div class="form_input">
                    <label for="desc">Desc</label>
                    <textarea name="product_desc" id="desc" cols="21" rows="3"></textarea>
                </div>
                <p>Upload Image</p>
                <div class="upload_image ">                   
                    <input type="file" name="upload_image" value=""/>
                </div>

                
                <input type="submit" name="save_product" value="save">
              
         
                

            </div>
        </form>

        <?php echo $msg; ?>








    </section>

</body>

</html>