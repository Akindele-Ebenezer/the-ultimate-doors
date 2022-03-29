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
    $recommended_products_result = mysqli_fetch_all($recommended_products_query, MYSQLI_ASSOC);

    $more_products = "commercial_doors";
    $more_products_folder = str_replace('_', '-', $more_products); 

    $more_products_sql = "SELECT * FROM $more_products;";
    $more_products_query = mysqli_query($conn, $more_products_sql);
    $more_products_result = mysqli_fetch_all($more_products_query, MYSQLI_ASSOC);
    
    if(isset($_POST['view_products_submit'])) {

        $product_id = $_POST['product_id'];
        
        $view_product_sql = "SELECT * FROM $select_query WHERE id = $product_id;";
        $view_product_query = mysqli_query($conn, $view_product_sql);
        $view_product_result = mysqli_fetch_all($view_product_query, MYSQLI_ASSOC);
 
        $view_product = str_replace('_', '-', $select_query);
         
    } 
//     if(isset($_POST['more_products_submit'])) { 

//         $product_id = $_POST['product_id']; 
//         $table_name = str_replace('-', '_', $_POST['table_name']);
//         $recommended_products_folder = str_replace('_', '-', $_POST['table_name']);
//         // echo $recommended_products_folder;

//         // $view_product_sql = "SELECT * FROM $table_name WHERE id = $product_id;";
//         // $view_product_query = mysqli_query($conn, $view_product_sql);
//         // $view_product_result = mysqli_fetch_all($view_product_query, MYSQLI_ASSOC);

//         // $view_product = str_replace('_', '-', $select_query);

// // print_r($view_product_result);
//     }
 
?>

    <div class="view-products-wrapper">
        <h4 class="name-of-product-sm-screen"><?= $view_product_result['0']['name_of_product']; ?></h4>
        <div class="view-products-inner">
            <div style="background-image: url(images/<?= $recommended_products_folder . '/' . $view_product_result['0']['images']; ?>)"></div>
            <div>
                <h2><?= $view_product_result['0']['name_of_product']; ?></h2>
                <br> 
                <p> <?= str_replace('US Door & More', '<strong>Ultimate Doors N Cabinets</strong>', $view_product_result['0']['content']); ?></p> 
                <span><big><?= $view_product_result['0']['price']; ?></big></span>
                <p><a><button>Continue Shopping</button></a></p>
            </div>
        </div>
    </div>

    <div class="recommended-products-title"><h2>Recommended Products</h2></div>

    <div class="recommended-products-wrapper">
        <div class="recommended-products-inner">
            <div class="recommended-products-content-wrapper"> 

                <?php foreach($recommended_products_result as $recommended_products): ?> 
                    <form action="view-more-products.php" method="post"> 

                        <div class="recommended-products-content">
                            <p><?= substr($recommended_products['name_of_product'], 0, 25) . "..."; ?></p>
                            <br> 
                            <div style="background-image: url(images/<?= $recommended_products_folder . '/' . $recommended_products['images']; ?>)"></div>
                            <p><?= $recommended_products['price']; ?></p> 
                            <input type="hidden" name="table_name" value="<?= $recommended_products_folder; ?>">
                            <input type="hidden" name="product_id" value="<?= $recommended_products['id']; ?>">
                            <br>
                            <center><button type="submit" name="recommended_products_submit">CHECKOUT</button></center> 
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
                    <form action="view-more-products.php" method="post"> 
                    <!--  -->
                        <div class="more-products-content">
                            <p><?= substr($more_products['name_of_product'], 0, 25) . "..."; ?></p>
                            <br> 
                            <div style="background-image: url(images/<?= $more_products_folder . '/' . $more_products['images']; ?>)"></div>                                                       
                            <p><?= $more_products['price']; ?></p> 
                            <input type="hidden" name="table_name" value="<?= $more_products_folder; ?>">
                            <input type="hidden" name="product_id" value="<?= $more_products['id']; ?>">
                            <br>
                            <center><button type="submit" name="more_products_submit">CHECKOUT</button></center> 
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