<?php include("header.php"); ?>

<!-- Open HARU Content Main -->
<div id="haru-content-main" class="clearfix">
    <div class="haru-page-title-section" style="background-image: url(../wp-content/themes/clarivo/framework/admin-assets/images/theme-options/bg-page-title.jpg)">
        <section  class="haru-page-title-wrapper page-title-wrapper-bg" >
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Category</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="haru-breadcrumb-wrapper">
            <div class="container">
                <ul class="breadcrumbs"><li><a href="index.php" class="home">Home</a></li><li><span>Category</span></li></ul>
            </div>
        </div>
    </div>

    <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <h1 style="font-size: 30px;color: #18a0b1;text-align: center; margin-bottom: 20px;" class="vc_custom_heading heading_style_1">OUR CATEGORY</h1>
        </div>
    </div>
    <main class="haru-page">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="page-content col-md-12  col-sm-12 col-xs-12">
                    <?php
                    require ('connection/connect.php');
                    $category_id=$_GET['category_id'];
                    $sql = "SELECT * FROM `productdetails` WHERE category_id='$category_id'";
                    $result = mysqli_query($con,$sql);
                    $check_crud = mysqli_num_rows($result) > 0;

                    if($check_crud)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            ?>
                    <div class="page-wrapper">
                        <div class="page-inner clearfix">
                           <div id="post-498" class="post-498 page type-page status-publish hentry clearfix">
                              <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1511608503841">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                   <div class=" ">
                                                                       <div class="products-shortcode-wrap grid ">
                                                                            <ul class="products shortcode-product-columns-5">
                                                                                <li class="clearfix product type-product post-69 status-publish first instock product_cat-tablet product_tag-powder product_tag-solution product_tag-spray product_tag-suppository product_tag-syrup product_tag-tablet has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable">
                                                                                    <div class="product-inner">
                                                                                        <div class="product-thumbnail">
                                                                                          <div class="card-header bg-transparent text-center"><h5 class="card-title" style="color:#ed6f1e;"><?php echo $row['Product_Name']; ?></h5></div>
                                                                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                                                <div class="product-thumb-primary">
                                                                                                   <?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;" alt=" ">' ?>                                                                                                </div>
                                                                                            </a>
                                                                                                <div class="product-actions">
                                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-69  wishlist-fragment on-first-load" data-fragment-ref="69" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:69,&quot;parent_product_id&quot;:69,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                                                    <!-- ADD TO WISHLIST -->
                                                                                                        <div class="yith-wcwl-add-button">
                                                                                                        <a href="sub-categoryview.php?Product_Chemical=<?php echo $row['Product_Chemical']; ?>">
                                                                                                            <i class="icofont icofont-eye-alt"></i>
                                                                                                            <span class="haru-tooltip button-tooltip">View More Products</span>
                                                                                                        </a>
                                                                                                        </div>
                                                                                                    <!-- COUNT TEXT -->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="product-info">
                                                                                                <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                                                    <h2 class="woocommerce-loop-product__title">Product Chemical</b></p><?php echo $row['Product_Chemical']; ?></h2>
                                                                                                </a>
                                                                                                <div class="product-short-description">
                                                                                            </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </li>
                                                                          </ul>
                                                                        <div class="products-shortcode-paging-wrap paging-infinity-scroll text-center">
                                                                          <nav id="infinite_scroll_button">
                                                                             <a href="page/2/index.html"></a>
                                                                           </nav>
                                                                           <div id="infinite_scroll_loading" class="text-center infinite-scroll-loading"></div>
                                                                        </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                          </div>
                      </div>
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
    </main>
</div>
<!-- Close HARU Content Main -->

<?php include("footer.php"); ?>