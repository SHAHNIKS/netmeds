
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

<!-- jQuery -->

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
                    <a class="cart-links" href="<?php echo base_url(); ?>cart"> 
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
				<a href="<?php echo base_url() ?>logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
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
            <div class="container">
                <div class="row">                 

                    <div class="col-sm-12">                        
                        <div class="site-navigation">
            			    <nav class="main-menu" style="display: block;">
                            
                            <form method="GET">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter keyword to search" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-success" value="submit">
                            </div>
                            </form>
                 			    </nav>
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

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                      </ol>
        </nav>
        
<div class="container">
    <div class="row">

    <?php foreach($products as $key => $value){ ?>
    
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    
                        <img class="pic-1" src="<?php echo base_url('assets/image/').$value['image']; ?>">
                        <img class="pic-2" src="">
                    
                    <ul class="social">
                        <li><a href="javascript:void(0);" class="item-add-to-cart" data-productid="<?php echo $value['product_id'] ?>" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
               
                <div class="product-content">
                    <h3 class="title"><?php echo $value['name']; ?></h3>
                    <div class="price"><?php echo $value['price']; ?>                        
                    </div>
                    <a style="cursor: pointer;" class="add-to-cart-list item-add-to-cart" data-productid="1">+ Add To Cart</a>
                </div>
            </div>
             </div>


<?php } ?>


       </div>
    </div>
<div class="modal fade product_view" id="quick-view-product">
    <div class="modal-dialog">
        <div class="modal-content" id="render-quick-product">
            <div class="text-center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>
        </div>
    </div>
</div>            </div>
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
        url: baseurl + 'cart/remove',
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
