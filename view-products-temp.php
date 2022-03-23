<?php

    $select_query = $_POST['select_query'];

    $recommended_products = $select_query;
    $recommended_products_folder = ucwords(str_replace('_', ' ', $recommended_products)); 

    $page_title = $recommended_products_folder;

    include "header.php";


    $recommended_products = $select_query;
    $recommended_products_folder = str_replace('_', '-', $recommended_products); 

    $recommended_products_sql = "SELECT * FROM $recommended_products;";
    $recommended_products_query = mysqli_query($conn, $recommended_products_sql);
    $recommended_products_result = mysqli_fetch_all($recommended_products_query);

    $more_products = "commercial_doors";
    $more_products_folder = str_replace('_', '-', $more_products); 

    $more_products_sql = "SELECT * FROM $more_products;";
    $more_products_query = mysqli_query($conn, $more_products_sql);
    $more_products_result = mysqli_fetch_all($more_products_query);
 
    if(isset($_POST['submit'])) {

        $product_id = $_POST['product_id'];
        
        $view_product_sql = "SELECT * FROM $select_query WHERE id = $product_id;";
        $view_product_query = mysqli_query($conn, $view_product_sql);
        $view_product_result = mysqli_fetch_all($view_product_query);
 
        $view_product = str_replace('_', '-', $select_query);
 
    }

    if(isset($_POST['more_products_submit'])) {

        $product_id = $_POST['product_id'];
        echo $product_id;

//         $view_product_sql = "SELECT * FROM $recommended_products WHERE id = $product_id;";
//         $view_product_query = mysqli_query($conn, $view_product_sql);
//         $view_product_result = mysqli_fetch_all($view_product_query);
 
//         $view_product = str_replace('_', '-', $select_query);

// print_r($view_product_result);
    }
 
?>

    <div class="view-products-wrapper">
        <div class="view-products-inner">
            <div style="background-image: url(images/<?= $view_product . '/' . $view_product_result['0']['1']; ?>)"></div>
            <div>
                <h2>Product Name</h2>
                <br>
                <p>Price: $390</p>
                <p>Product Description</p> 
                <p><button>Continue Shopping</button></p>
            </div>
        </div>
    </div>

    <div class="recommended-products-title"><h2>Recommended Products</h2></div>

    <div class="recommended-products-wrapper">
        <div class="recommended-products-inner">
            <div class="recommended-products-content-wrapper"> 

                <?php foreach($recommended_products_result as $recommended_products): ?> 
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post"> 

                        <div class="recommended-products-content">
                            <div style="background-image: url(images/<?= $recommended_products_folder . '/' . $recommended_products['1']; ?>)"></div>
                            <p>$364.00</p>
                            <br>
                            <center><button type="submit" name="submit_recommended_products">ADD TO CART</button></center> 
                        </div>

                    </form>

                <?php endforeach; ?>
                
            </div> 
        </div>
    </div>

    <div class="more-products-title"><h2>More Products</h2></div>

    <div class="more-products-wrapper">
        <div class="more-products-inner">
            <div class="more-products-content-wrapper"> 

                <?php foreach($more_products_result as $more_products): ?>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post"> 
                    <!--  -->
                        <div class="more-products-content">
                            <div style="background-image: url(images/<?= $more_products_folder . '/' . $more_products['1']; ?>)"></div>
                            <p>$364.00</p>
                            <input type="hidden" name="select_query" value="<?= "$select_query"; ?>">
                            <input type="hidden" name="product_id" value="<?= $supply['0']; ?>">
                            <br>
                            <center><button type="submit" name="more_products_submit">ADD TO CART</button></center> 
                        </div> 
                    <!--  -->
                    </form>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php
    include "footer.php";
?>