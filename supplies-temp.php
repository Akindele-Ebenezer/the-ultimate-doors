<?php

    include './header.php';
    
    $sql = "SELECT * FROM $select_query;";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query);

?>

<div class="supplies-temp" style="background-image: url(<?= $supplies_sub_title_background_image; ?>)">
    <div class="supplies-temp-inner">
        <div>
            <h1><?= $supplies_temp_title; ?></h1>
            <p><?= "Home &nbsp;&nbsp; > &nbsp;&nbsp; Services &nbsp;&nbsp; > &nbsp;&nbsp; " . "<span>$supplies_temp_sub_title</span>"; ?></p>
        </div>
    </div>
</div>

<div class="supplies-wrapper">
    <div class="supplies">
        <!-- $supplies_content;  -->

        <?php foreach($result as $supply): ?>

            <form action="view-products-temp.php" method="post">
                <div class="supplies-content">
                    <div style="background-image: url(<?= $supplies_image_folder . $supply["1"]; ?>)"></div>
                    <p><?= $supply["2"]; ?></p>
                    <input type="hidden" name="select_query" value="<?= $select_query; ?>">
                    <input type="hidden" name="product_id" value="<?= $supply["0"]; ?>">
                    <br>
                    <center><button type="submit" name="view_products_submit">ADD TO CART</button></center> 
                </div>
            </form>

        <?php  endforeach; ?>

        <!--  -->
    </div>
    <div class="supplies-categories">
        <div>
            <h2>Categories</h2>
            <ul> 
                <li><a href="interior-front-doors.php"><img src="images/right-arrow.png"> Interior Front Doors </a> </li>
                <li><a href="custom-made-doors.php"><img src="images/right-arrow.png"> Custom Made Doors</a> </li>
                <li><a href="iron-doors.php"><img src="images/right-arrow.png"> Iron Doors</a> </li>
                <li><a href="wooden-doors.php"><img src="images/right-arrow.png"> Wooden Doors</a> </li>
                <li><a href="fire-rated-doors.php"><img src="images/right-arrow.png"> Fire Rated Doors</a> </li>
                <li><a href="swing-doors.php"><img src="images/right-arrow.png"> Swing Doors</a> </li>
                <li><a href="commercial-doors.php"><img src="images/right-arrow.png"> Commercial Doors</a> </li>
            </ul>

            <h2>Search</h2>
            <br>
            <input type="search" name="search"> <img src="images/search.png">
            <br>
            <p>  All Front and Entrance doors, Iron Steel or Hard Core <br> Wooden Sliding Doors, Custom-made  to fit. <br><br>

                Fire Rated Door of all Grades and Specification..<br>
                Interior Doors and many more,<br>
                based in Houston and US.<br>
            </p>
        </div>


    </div>
</div>


<?php

    include './footer.php';

?>