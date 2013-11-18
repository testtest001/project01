<?php
	$mageFilename = "../../../../../../../../app/Mage.php";
	require_once $mageFilename; 
	umask(0);
	Mage::app();
	$baseconfig = Mage::helper("jmbasetheme")->getactiveprofile();
	header("Content-type: text/css; charset: UTF-8");
?>

/* Base settings */
body#bd {
	background-image:url("images/<?php echo $baseconfig["bgimage"]; ?>");
	background-color: <?php echo $baseconfig["bgolor"] ?>;
}

#jm-header {
	background-image:url("images/<?php echo $baseconfig["headerimage"]; ?>");
	background-color: <?php echo $baseconfig["headerolor"] ?>;
}

#mainnav-inner {
	background-image:url("images/<?php echo $baseconfig["mainnavbg"]; ?>");
	background-color: <?php echo $baseconfig["mainnavcolor"] ?>;
}

#jm-footer {
	background-image:url("images/<?php echo $baseconfig["footerimage"]; ?>");
	background-color: <?php echo $baseconfig["footerolor"] ?>;
}

#jm-pathway,
#jm-container {
	background-image:url("images/<?php echo $baseconfig["containerbg"]; ?>");
	background-color: <?php echo $baseconfig["containercolor"] ?>;
}

#jm-tops1 {
	background-image:url("images/<?php echo $baseconfig["tops1bg"]; ?>");
	background-color: <?php echo $baseconfig["tops1color"] ?>;
}

#jm-tops2 {
	background-image:url("images/<?php echo $baseconfig["tops2bg"]; ?>");
	background-color: <?php echo $baseconfig["tops2color"] ?>;
}

#jm-tops3 {
	background-image:url("images/<?php echo $baseconfig["tops3bg"]; ?>");
	background-color: <?php echo $baseconfig["tops3color"] ?>;
}

#jm-mass-top {
	background-image:url("images/<?php echo $baseconfig["masstopbg"]; ?>");
	background-color: <?php echo $baseconfig["masstopcolor"] ?>;
}

#jm-mass-bottom {
	background-image:url("images/<?php echo $baseconfig["massbottombg"]; ?>");
	background-color: <?php echo $baseconfig["massbottomcolor"] ?>;
}

#jm-bots1 {
	background-image:url("images/<?php echo $baseconfig["bots1bg"]; ?>");
	background-color: <?php echo $baseconfig["bots1color"] ?>;
}

#jm-bots2{
	background-image:url("images/<?php echo $baseconfig["bots2bg"]; ?>");
	background-color: <?php echo $baseconfig["bots2color"] ?>;
}
#jm-bots3{
	background-image:url("images/<?php echo $baseconfig["bots3bg"]; ?>");
	background-color: <?php echo $baseconfig["bots3color"] ?>;
}
#ja-footer{
	background-image:url("images/<?php echo $baseconfig["footerimage"]; ?>");
	background-color: <?php echo $baseconfig["footerolor"] ?>;
}
a,
.notice,
.error-msg,
.sub-title,
p.required,
.link-cart,
.pages ol li,
.toolbar label,
.fieldset .legend,
.add-to-cart label,
.product-options dt,
.breadcrumbs a:hover,
.block-layered-nav dt,
.tier-prices-grouped li,
.shop-access li a:hover ,
.availability-only strong, 
.block-poll .block-subtitle,
.view-mode .ico-outer.active,
#jm-mycart  .block-cart .summary a,
.block-account .block-content li.current,
.block-account .block-content li a:hover,
.link-reorder, 
.link-print, 
.link-cart,
.block-layered-nav dd li a:active .price,
.block-layered-nav dd li a:focus .price,
.block-layered-nav dd li a:hover .price,
.block-layered-nav dd li a:active,
.block-layered-nav dd li a:focus,
.block-layered-nav dd li a:hover,
.jm-megamenu .products-grid .product-name a:active,
.jm-megamenu .products-grid .product-name a:focus,
.jm-megamenu .products-grid .product-name a:hover,
.catalog-product-compare-index .link-cart,
.catalog-product-compare-index .link-print,
.catalog-product-compare-index .link-reorder,
#jm-mycart  .mini-products-list .product-details .remove:hover,
.block-compare .block-content .product-name a, 
.compare-table tr.first td .product-name a:hover,
.products-list .product-name a:hover, 
.availability-only-details tr.odd td.last,
.product-options ul.options-list .label,
.product-options dt label.required em,
.product-options-bottom .tier-prices,
.product-options-bottom .tier-prices .price,
.product-options-bottom .tier-prices .benefit,
.advanced-search-summary strong,
.cart-table a,
.info-set h4,
#jm-footer a,
.gift-messages h3,
.info-set .box h2,
.addresses-list h2,
.info-set h3.legend,
.cart-table .item-msg,
.multiple-checkout h4,
.gift-messages-form h4,
#jm-bots3 ul li a:hover,
.box-account .box-head h2,
.account-login .content h2,
.multiple-checkout .box h2,
.opc .active .step-title h2,
.block-progress dt.complete,
.checkout-progress li.active,
.block-progress dd.complete a,
.footer-socials li a span.name,
.products-grid-anticipated li h5 a:focus,
.products-grid-anticipated li h5 a:hover,
.products-grid-anticipated li h5 a:active,
.multiple-checkout .data-table .icoremove,
.multiple-checkout .data-table .product-name a,
.multiple-checkout .place-order .grand-total .price,
.verticallist .jm-slider  .jm-slider-li h5 a:active,
.verticallist .jm-slider  .jm-slider-li h5 a:focus,
.verticallist .jm-slider  .jm-slider-li h5 a:hover,
.jm-megamenu ul.level0 li.mega a.mega span.titlecolors,
.jm-megamenu ul.level2 li.mega.active a.mega, 
.jm-megamenu ul.level2 li.mega a.mega:active, 
.jm-megamenu ul.level2 li.mega a.mega:focus, 
.jm-megamenu ul.level2 li.mega a.mega:hover,
.product-view .availability-title,
.product-essential h2,
#jm-mycart .mini-products-list .product-details .edit:active, 
#jm-mycart .mini-products-list .product-details .edit:focus, 
#jm-mycart .mini-products-list .product-details .edit:hover, 
#jm-mycart .mini-products-list .product-details .remove:active, 
#jm-mycart .mini-products-list .product-details .remove:focus, 
#jm-mycart .mini-products-list .product-details .remove:hover,
#jm-mycart .block-cart .subtotal .price,
.jm-megamenu ul.level0 li.mega a.active,
.blank .jm-tabs-title-top ul.jm-tabs-title li:hover h3 span,
.product-options ul.options-list input[type=radio]:checked + .label label:before {
  color: <?php echo $baseconfig["color"] ?>;
}

.hot-label,
#button-btt,
.demo-notice,
.control-barslide .jm-slider-prev:hover,
.control-barslide .jm-slider-prev:active,
.control-barslide .jm-slider-next:hover,
.control-barslide .jm-slider-next:active,
.remember-me-popup .remember-me-popup-body a {
  background-color: <?php echo $baseconfig["color"] ?>;
}


#mainnav-inner,
input.input-text:focus,
select:focus,textarea:focus,
#mainnav-inner, input.input-text:focus, 
select:focus, 
textarea:focus,
.control-barslide .jm-slider-prev:hover, 
.control-barslide .jm-slider-prev:active, 
.control-barslide .jm-slider-next:hover, 
.control-barslide .jm-slider-next:active,
#jm-mycart .inner-toggle.active, 
button.button.btn-checkout, 
button.button.btn-cart, 
button.button.btn-wishlist, 
button.button.btn-compare,
.go-home, .more-details, 
.go-home:active, 
.go-home:focus, 
.go-home:hover, 
.more-details:active, 
.more-details:focus, 
.more-details:hover, 
button.button.btn-checkout, 
button.button.btn-cart, 
button.button.btn-wishlist, 
button.button.btn-compare,
.product-view .more-views ul li.active,
.remember-me-popup .remember-me-popup-body a,
.remember-me-popup .remember-me-popup-body a{
  border-color: <?php echo $baseconfig["color"] ?>;
}

.product-view .more-views ul li.active {
	 box-shadow: 0 0 10px <?php echo $baseconfig["color"] ?>
}

.view-pre,
.view-next {
	background-image:url("images/<?php echo $baseconfig["prevnextdetails"]; ?>");
}

.footer-socials li a:active em,
.footer-socials li a:focus em,
.footer-socials li a:hover em {
	text-shadow: 0 0 10px <?php echo $baseconfig["color"] ?>;
}

.jm-slide-thumb.active {
  border-color: <?php echo $baseconfig["color"] ?>;
	box-shadow: 0 0 10px <?php echo $baseconfig["color"] ?>
}

#jm-mycart,
#jm-mycart .mycart-toggle.active  {
	background-image:url("images/<?php echo $baseconfig["bgcart"]; ?>");
}

.jm-megamenu ul.level0 li.mega a.active{
	background-image:url("images/<?php echo $baseconfig["bgactive"]; ?>");
}

.jm-megamenu ul.level0 li.mega a.active {
	text-shadow: 0 0 3px <?php echo $baseconfig["color"] ?>
}

button.button.blue.btn-wishlist,
button.button.blue.btn-compare,
button.button.blue.btn-wishlist:hover,
button.button.blue.btn-wishlist:focus,
button.button.blue.btn-compare:hover,
button.button.blue.btn-compare:focus,
button.button,
button.button:hover,
button.button:focus{
	background-image:url("images/<?php echo $baseconfig["button"]; ?>");
}
.go-home, 
.more-details,
.go-home:active, 
.go-home:focus, 
.go-home:hover, 
.more-details:active, 
.more-details:focus, 
.more-details:hover,
button.button.btn-checkout, 
button.button.btn-cart, 
button.button.btn-wishlist, 
button.button.btn-compare,
button.button.btn-checkout:hover,
button.button.btn-checkout:focus,
button.button.btn-cart:hover,
button.button.btn-cart:focus,
button.button.btn-wishlist:hover,
button.button.btn-wishlist:focus,
button.button.btn-compare:hover,
button.button.btn-compare:focus {
	background-image:url("images/<?php echo $baseconfig["buttoncart"]; ?>");
}

.jm-tabs .head span{
	background-image:url("images/<?php echo $baseconfig["bestsellertitle"]; ?>");
}