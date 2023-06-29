<?php include("header.php"); ?>


<!-- Open HARU Content Main -->
<div id="haru-content-main" class="clearfix">


    <div class="haru-page-title-section"
        style="background-image: url(../../wp-content/themes/clarivo/framework/admin-assets/images/theme-options/bg-page-title.jpg)">
        <section class="haru-page-title-wrapper page-title-wrapper-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Product Details</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="haru-breadcrumb-wrapper">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.php" class="home">Home</a></li>
                    <li><a href="our-product.php">All Category</a></li>
                    <li><span>Product Details</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="haru-single-product">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="single-product-content col-md-12  col-sm-12 col-xs-12">
                    <?php
                        require ('connection/connect.php');

                        $Product_Name=$_GET['Product_Name'];
                        $sql = "SELECT * FROM `productdetails`WHERE Product_Name='$Product_Name'";
                        $result = mysqli_query($con,$sql);
                        $check_crud = mysqli_num_rows($result) > 0;

                        if($check_crud)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                    <div class="single-product-inner">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-80"
                            class="clearfix product type-product post-80 status-publish first instock product_cat-capsule product_cat-spray product_cat-vitamin product_tag-inhaler product_tag-paste product_tag-spray product_tag-suppository product_tag-tablet has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
                            <div class="single-product-top">
                                <div class="single-product-image-wrap vertical thumbnail-left">
                                    <div class="product-label">
                                    </div>
                                    <div class="single-product-image-inner">
                                        <div id="product-images1" class="slider-for" data-slick='{"slidesToShow" : 1, "slidesToScroll": 1, "infinite" : false, "asNavFor" : ".slider-nav" }'>
                                            <div class="woocommerce-image-zoom">
                                              <?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="300px"; alt=" ">' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary entry-summary">
                                    <h1 class="product_title entry-title"><?php echo $row['Product_Name']; ?></h1>
                                    <div class="product_meta">
                                        <span class="posted_in">
                                            <span class="label">Product Chemical :</span>
                                            <a href="#" rel="tag"><?php echo $row['Product_Chemical']; ?></a>
                                        </span>
                                        <span class="posted_in">
                                            <span class="label">Product Form :</span>
                                            <a href="#" rel="tag"><?php echo $row['Product_Form']; ?></a>
                                        </span>
                                        <span class="tagged_as">
                                            <span class="label">Company Name :</span>
                                            <a href="#" rel="tag"><?php echo $row['Company_Name']; ?></a>
                                        </span>
                                        <span class="tagged_as">
                                            <span class="label">Product Storage :</span>
                                            <a href="#" rel="tag"><?php echo $row['Product_Storage']; ?></a>
                                        </span>
                                        <span class="tagged_as">
                                            <span class="label">Product Packing :</span>
                                            <a href="#" rel="tag"><?php echo $row['Product_Packing']; ?></a>
                                        </span>
                                        <span class="tagged_as">
                                            <span class="label">Product Category :</span>
                                            <a href="#" rel="tag"><?php echo $row['category_name']; ?></a>
                                        </span>
                                    </div>
                                </div><!-- .summary -->
                            </div>

                            <!-- <section class="related products">
                                <h2>Related Products</h2>
                                <ul class="haru-carousel related-products owl-carousel owl-theme" data-items="4" data-items-tablet="3" data-items-mobile="2" data-margin="30" data-autoplay="false" data-slide-duration="6000">
                                    <li class="clearfix product type-product post-82 status-publish last instock product_cat-capsule product_cat-ointment product_cat-syrup product_tag-capsule product_tag-paste product_tag-solution product_tag-suppository product_tag-syrup product_tag-tablet has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner">
                                            <div class="product-thumbnail">
                                                <a href="../brain-medication/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <div class="product-label"> </div>
                                                    <div class="product-thumb-primary">
                                                        <img width="270" height="270" src="../../wp-content/uploads/2017/09/product12-270x270.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-270x270.jpg 270w, https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-100x100.jpg 100w, https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-150x150.jpg 150w, https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-300x300.jpg 300w, https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-540x540.jpg 540w, https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12.jpg 600w" sizes="(max-width: 270px) 100vw, 270px" />
                                                    </div>
                                                </a>
                                                <div class="product-actions">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-82  wishlist-fragment on-first-load" data-fragment-ref="82" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:82,&quot;parent_product_id&quot;:82,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                        < ADD TO WISHLIST >
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="index3b6f.html?add_to_wishlist=82" rel="nofollow" data-product-id="82" data-product-type="simple" data-original-product-id="82" class="add_to_wishlist single_add_to_wishlist" data-title="Add to wishlist">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                                <span class="haru-tooltip button-tooltip">View Products Details</span>
                                                            </a>
                                                        </div>
                                                        < COUNT TEXT >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="../brain-medication/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2 class="woocommerce-loop-product__title">Brain Medication</h2>
                                                </a>
                                                <div class="product-short-description"> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section> -->
                        </div>
                        <!-- #product-80 -->
                    </div>
                    <?php
                  }
                }
             else
              {

              }
            ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Close HARU Content Main -->


<?php include("footer.php"); ?>