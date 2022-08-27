
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width">    
    <title>Netmeds</title>
   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/cart.css'); ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="page-template-default page page-id-116 logged-in admin-bar  customize-support" cz-shortcut-listen="true">
  <header id="masthead" class="site-header" role="banner">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                        <div id="logo">
                            <div class="site-header-inner col-sm-12">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="#" title="Netmeds" rel="home">Netmeds</a>
                                    </h1>
                				    
                                </div>
                            </div>
                        </div>
                    </div><!--.col-sm-3-->
                <div class="col-sm-6">
                    <div class="header-social-icon-wrap">
                        <ul class="nav navbar-nav navbar-right" style="display: inherit; float: right;">

                           


                <li class="text-right" style="display: inline;font-size: 14px;">
                    <a class="cart-links" href="<?php echo base_url('cart'); ?>"> 
                        <i class="fa fa-shopping-cart ft-19 text-white"></i> 
                        Cart <span id="go-to-basket-item">
                            <span id="go-to-basket" class="badge badge-warning"> 
                            <?php $a = count($this->cart->contents());
			echo $a; ?>
                            </span>
                        </span>
                    </a>
                </li>

                <li>
                        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-form navbar-right">
				<a href="<?php echo base_url() ?>/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
        	</div>
      </div></li>
            </ul>
                    </div><!--.header-social-icon-wrap-->
                </div><!-- .col-sm-6-->
            </div>
        </div>
     </div>
    <div id="header-main" class="header-bottom">
        <div class="header-bottom-inner">
            <div class="">
                <div class="row">                 

                    <div class="col-sm-12">                        
                        <div class="site-navigation">
            			    <nav class="main-menu" style="display: block;">
            				<ul id="menu-primari_menu" class="header-nav clearfix"><li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-40"></li>
<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-47"></li>
</ul>            			    </nav>
    	                    <div id="responsive-menu-container"></div>
                        </div><!-- .site-navigation -->
                    </div><!--.col-sm-12-->
                </div><!--.row-->
            </div><!-- .container -->
        </div><!--.header-bottom-inner-->
    </div><!--.header-bottom-->

</header><!-- #masthead -->

<div class="main-content">
    <div class="">
        <div id="content" class="main-content-inner">

<div class="row">
    <div class="col-sm-12 col-md-12">
	<div class="box">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
                    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Cart</a></li>
                      </ol>
        </nav>
        
            <table class="table table-bordered table-hover table-striped print-table order-table">
                                    <thead>
                        <tr class="bg-primary">
                            <th class="text-left" style="width:45%">Product</th>
                            <th class="text-right" style="width:15%">Price</th>
                            <th class="text-right add-tax-th" style="width:15%">QTY</th>
                            <th class="text-right" style="width:25%">Sub Total</th>                          
                        </tr>
                    </thead>
                    <?php 
                        	$cartDetails = $this->cart->contents();
                            if(empty($cartDetails)){
                                echo "Cart Is Empty";
                                exit;
                            }
                            $total = 0;
                            foreach($cartDetails as $key => $value){
                    ?>
                    <tbody id="render-more-item-tr">
                                                    <tr class="count-tr" id="render-more-item1">
                                <td class="border-bottom" style="word-break: keep-all;">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url('assets/image/').$value['image'] ?>" style="width: 50px; height: 50px;"></a>
                                        <div class="media-body">
                                            <h6 class="media-heading">&nbsp;<?php echo $value['name']; ?></h6>
                                            <span style="font-size: 11px;">&nbsp;Status: </span><span class="text-success" style="font-size: 11px;"><strong>In Stock</strong></span>
                                        </div>
                                    </div>
                                    
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">₹</span>
                                    <span id="price0" class="dynamic-price"><?php echo $value['price']; ?></span>
                                </td>
                                <td class="text-right" style="text-align: right; padding: 1px 5px;font-size: 12px; line-height: 1.5; 
                                    border-radius: 3px;">
                                        <input type="number" name="qty" value="<?php echo $value['qty']; ?>" id="update-cart-qty-<?php echo $value['id']; ?>" maxlength="3" size="1" style="width:40px; border: 1px solid #CCC; border-radius: 3px;text-align: center;height: 35px;" min="0">
                                        <button type="button" data-updproductid="<?php echo $value['rowid']; ?>" data-itemid="<?php echo $value['id']; ?>" id="action-cart-qty-<?php echo $value['id']; ?>" class="update-cart-qty btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">₹</span>
                                    <span><?php echo $value['subtotal']; $total = $total + $value['subtotal']; ?></span> <span style="cursor: pointer;" class="remove-cart" data-rmitemid="<?php echo $value['id']; ?>" data-rmproductid="<?php echo $value['rowid']; ?>"><i class="text-danger fa fa-times"></i></span>
                                </td>            
                            </tr>
                                                      </tbody>

                               <?php } ?>                  
                        <tfoot id="render-calculation">

                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>
                                <td class="text-left" style="width:40%; border-right: 0;" colspan="2">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="text-right" style="border-left: 0px;">
                                    <strong>
                                        <span class="currency-symbol">₹ </span>
                                        <span id="sub-total"><?php echo $total; ?></span>
                                    </strong>
                                </td>           
                            </tr>
                               
                                                        <tr id="render-tax">
                                <td style="text-align:left; border:0px;"></td>
                                <td style="text-align:left; border-right: 0px;" colspan="2"><strong id="change-tax-label">GST @0%</strong></td>
                                <td style="text-align:right; border-left: 0px;">
                                    <span id="tax-total" style="visibility: hidden;">0.00</span>
                                </td>
                            </tr>

                            <tr id="render-tax-cgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style="text-indent: 30px; border-right: 0px;" colspan="2"><strong>- CGST @0%</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span>$ </span><span>0.00</span></strong></td>
                            </tr>
                            <tr id="render-tax-sgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style="text-indent: 30px; border-right: 0px;" colspan="2"><strong>- SGST @0%</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span>$ </span><span>0.00</span></strong></td>
                            </tr>
                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>            
                                <td class="text-left" colspan="2" style="border-right: 0px;">
                                    <strong>Total</strong>
                                </td>
                                <td class="border-bottom text-right" style="border-left: 0px;">
                                    <strong>
                                        <span class="currency-symbol">₹ </span>
                                        <span id="final-total"><?php echo $total; ?></span>
                                    </strong>
                                </td>
                            </tr>

                        </tfoot>
                                    </table>

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
            <a href="<?php echo base_url(); ?>" class="btn btn-success">Continue Shopping</a>
                            <a href="<?php echo base_url(); ?>" class="btn btn-warning">Place Order</a>
                    </div>
    </div>
</div>

            </div>
	</div>
	

</div>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->

<script type="text/javascript">
    var baseurl = "<?php echo base_url() ?>";

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>







                <script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                <script>function productZoom(){
                        $(".product-zoom").elevateZoom({
                          gallery: 'ProductThumbs',
                          galleryActiveClass: "active",
                          zoomType: "inner",
                          cursor: "crosshair"
                        });$(".product-zoom").on("click", function(e) {
                          var ez = $('.product-zoom').data('elevateZoom');
                          $.fancybox(ez.getGalleryList());
                          return false;
                        });
                        
                        };
                      function productZoomDisable(){
                        if( $(window).width() < 767 ) {
                          $('.zoomContainer').remove();
                          $(".product-zoom").removeData('elevateZoom');
                          $(".product-zoom").removeData('zoomImage');
                        } else {
                          productZoom();
                        }
                      };

                      productZoomDisable();

                      $(window).resize(function() {
                        productZoomDisable();
                      });
                </script>
                <script>
                    $('.product-thumbnail').owlCarousel({
                       
                        nav: true,
                        dots:false,
                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        
                    });









                    




                    // cart Add
jQuery(document).on('click', '.item-add-to-cart', function () {
    var productID = jQuery(this).data('productid');
    var qty = jQuery('#add-cart-qty').val();
    if(qty){
        qty=qty;
    } else {
        qty=1;
    }
    jQuery.ajax({
        url: baseurl + '/cart/add',
        type: 'post',
        data: {productID: productID, qty:qty},
        dataType: 'json',
        beforeSend: function () {
            jQuery('button.ajax-spin-cart').button('loading');
        },
        complete: function () {
            jQuery('button.ajax-spin-cart').button('reset');
        },
        success: function (json) {
            if (json.status == 1) {
                jQuery("span#go-to-basket").html(json.counter);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

// Cart update
jQuery(document).on('click', '.update-cart-qty', function () {
    var productID = jQuery(this).data('updproductid');
    var itemID = jQuery(this).data('itemid');
    var qty = jQuery('#update-cart-qty-' + itemID).val();
    jQuery.ajax({
        url: baseurl + 'cart/update',
        type: 'post',
        data: {productID: productID, qty: qty},
        dataType: 'json',
        beforeSend: function () {
            jQuery('button#action-cart-qty-' + productID).button('loading');
        },
        complete: function () {
            jQuery('button#action-cart-qty-' + productID).button('reset');
        },
        success: function (json) {
            jQuery('#update-cart-qty-' + itemID).val(qty);
            location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});


// Cart remove
jQuery(document).on('click', '.remove-cart', function () {
    var productID = jQuery(this).data('rmproductid');
    var itemID = jQuery(this).data('rmitemid');
    jQuery.ajax({
        url: baseurl + '/cart/remove',
        type: 'post',
        data: {productID: productID},
        dataType: 'json',
        beforeSend: function () {
            jQuery('#remove-cart' + productID).button('loading');
        },
        complete: function () {
            jQuery('#remove-cart' + productID).button('reset');
        },
        success: function (json) {
            location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
                </script>






</body>
</html>
