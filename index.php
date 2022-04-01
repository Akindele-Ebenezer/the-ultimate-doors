<?php
 
    $page_title = "THE ULTIMATE DOORS";
    include "header.php";
    
    $recommended_products = "commercial-doors";
    $recommended_products_folder = $recommended_products; 
    $recommended_products = str_replace('-', '_', $recommended_products); 

    $recommended_products_sql = "SELECT * FROM $recommended_products;";
    $recommended_products_query = mysqli_query($conn, $recommended_products_sql);
    $recommended_products_result = mysqli_fetch_all($recommended_products_query, MYSQLI_ASSOC);

    $more_products = "interior-front-doors"; 
    $more_products_folder = $more_products; 
    $more_products = str_replace('-', '_', $more_products); 

    $more_products_sql = "SELECT * FROM $more_products;";
    $more_products_query = mysqli_query($conn, $more_products_sql);
    $more_products_result = mysqli_fetch_all($more_products_query, MYSQLI_ASSOC);

?>


        <section class="sec-1" style="background-image: url('images/bg.jpg')">
            <div class="sec-1-inner">
                <div>
                    <h4>SERVICE YOU CAN TRUST</h4>
                    <h1>THE ULTIMATE DOORS</h1> 
                    <p>AND <span>CABINETS</span></p>
                    <center><a href="#bookings"><button>BOOK ONLINE</button></a></center>

                    <p class="auto-type">We Provide <span class="auto-type-services"></span></p> 

                </div>
            </div>
        </section> 

        <div class="recommended-products-title" id="recommended-products"><h2>Recommended Products</h2></div>

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

        <section class="sec-1-sub" id="supplies">
            <div class="sec-1-sub-inner">
                <a href="interior-front-doors.php"> 
                        <div class="door">
                            <div>
                                <img src="images/door-1.png">
                            </div>
                            <div>
                                Interior Front Doors
                            </div>
                        </div>
                </a> 
                <a href="cabinets.php"> 
                        <div class="door">
                            <div>
                                <img src="images/cabinet.png">
                            </div>
                            <div>
                                Cabinets
                            </div>
                        </div>
                </a> 
                <a href="custom-made-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-2.png">
                        </div>
                        <div>
                            Custom Made Doors
                        </div>
                    </div>
                </a>
                <a href="iron-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-3.png">
                        </div>
                        <div>
                            Iron Doors
                        </div>
                    </div>
                </a>
                <a href="wooden-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-4.png">
                        </div>
                        <div>
                            Wooden Doors
                        </div>
                    </div>
                </a>
                <a href="fire-rated-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-5.png">
                        </div>
                        <div>
                            Fire Rated Doors
                        </div>
                    </div>
                </a>
                <a href="swing-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-6.png">
                        </div>
                        <div>
                            Swing Doors
                        </div>
                    </div>
                </a>
                <a href="commercial-doors.php">
                    <div class="door">
                        <div>
                            <img src="images/door-7.png">
                        </div>
                        <div>
                            Commercial Doors
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="sec-2-title" id="services">Our Services</section>

        <section class="sec-2">
            <div class="sec-inner">
                <div class="services">
                    <div class="services-img" style="background-image: url(images/project-management.jpg);">
                    </div>
                    <div>
                        <small>
                            <p>Project Management</p> 
                        </small>
                    </div>  
                </div>

                <div class="services">
                    <div class="services-img" style="background-image: url(images/designs-and-fabrications.jpg); 
                    "></div>
                    <div>
                        <small>
                            <p>Designs and Fabrications</p> 
                        </small>
                    </div> 
                </div>

                <div class="services">
                    <div class="services-img" style="background-image: url(images/consolidations.jpg); 
                    "></div>
                    <div>
                        <small>
                            <p>Consolidations</p>  
                        </small>
                    </div> 
                </div>

                <div class="services">
                    <div class="services-img" style="background-image: url(images/supplies-and-delivery.jpg); 
                    "></div>
                    <div>
                        <small>
                            <p>Supplies and Delivery</p> 
                        </small>
                    </div> 
                </div>

                <div class="services">
                    <div class="services-img" style="background-image: url(images/walk-through.jpeg); 
                    "></div>
                    <div>
                        <small>
                            <p>Walk Through</p> 
                        </small>
                    </div> 
                </div>

                <div class="services">
                    <div class="services-img" style="background-image: url(images/turn-key.jpg); 
                    "></div>
                    <div>
                        <small>
                            <p>Turn Key</p> 
                        </small>
                    </div> 
                </div>
            </div>
        </section>

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

        <section class="sec-3" style="background-image: url('images/bg.jpg')" id="bookings">
            <div class="sec-3-inner">
                <form action="mail.php" method="post">
                    <h1>BOOK NOW</h1>
                    <div class="sec-3-input">
                        <div>
                            <input type="text" name="full_name" placeholder="Enter Full Name">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Enter Email">
                        </div>
                        <div>
                            <input type="text" name="origin_location" placeholder="Origin Location">
                        </div>
                        <div>
                            <input type="text" name="destination" placeholder="Enter A Destination Location">
                        </div>
                        <div>
                            <label>* Delivery Date</label>
                            <br>
                            <input type="date" name="pickup_date" placeholder="Pickup Date">
                        </div>
                        <div>
                            <label>* Delivery Time</label>
                            <br>
                            <input type="time" name="pickup_time" placeholder="Pickup Time">
                        </div>
                    </div>
                    <button type="submit" name="book_now" class="book-now">Book Now</button>            
                </form>

            </div>
        </section>

        <section class="sec-4" style="background-image: url('images/bg-2.webp')">
            <div class="sec-4-inner">        
                <div>
                    <h2>Interiors That Inspire</h2>
                    <p>All Front and Entrance doors, Iron Steel or Hard Core Wooden Sliding Doors,  Custom-made to fit. <br><br> Fire Rated Door of all Grades and Specification.. <br> Interior Doors and many more, <br> based in Houston and US.</p>
                    <a href="#supplies">CHECKOUT ultimate doors available</a> 
                </div>
            </div>
        </section>

        <section class="sec-5" id="contact">
            <div class="sec-5-inner">
                <div>
                    <form action="" method="post">
                        <h1>Send us a message</h1>
                        <div>
                            <input type="text" name="message_full_name" placeholder="Full Name..."> <br>
                            <input type="email" name="message_email" placeholder="Enter Email..."> <br>
                            <textarea name="message" placeholder="Write your message..."></textarea> <br>
                        </div>
                        <button type="submit" name="send_message">Send Message</button>
                    </form>
                </div>
                <div class="sec-5-inner-wrapper">
                    <div class="sec-5-inner-sub">
                        <div>
                            <img src="images/call.png">
                        </div>
                        <div>
                            <p>Toll Free Number</p>
                            <span>1800 909 8413</span>
                            <br> 
                        </div>
                    </div>
                    <div class="sec-5-inner-sub">
                        <div>
                            <img src="images/email.png">
                        </div>
                        <div>
                            <p>Send us an email</p>
                            <a href="mailto:info@ultimatedoorsncabinets.com">info@ultimatedoorsncabinets.com</a>
                        </div>
                    </div>
                    <div class="sec-5-inner-sub">
                        <div>
                            <img src="images/location.png">
                        </div>
                        <div>
                            <p>Come see us</p>
                            <p>ONE RIVERWAY <br> 777 SOUTH POST OAK LANE <br>HOUSTON, TX 77056</p>
                        </div>
                    </div>
                    <div class="sec-5-inner-sub">
                        <div>
                            <img src="images/whatsapp.png">
                        </div>
                        <div>
                            <p>Whatsapp</p>
                            <a href="#">DM on whatsapp</a>
                        </div>
                    </div>
                    <div class="sec-5-inner-sub">
                        <div>
                            <img src="images/facebook.png">
                        </div>
                        <div>
                            <p>Facebook</p>
                            <a href="#">Reach out on Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<?php

    include "footer.php";

?>
