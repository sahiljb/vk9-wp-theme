jQuery(document).ready(function ($) {
	jQuery(
		".wp-block-woocommerce-customer-account a, .wc-block-mini-cart .wc-block-mini-cart__quantity-badge"
	)
		.find("svg")
		.remove();
	jQuery(
		".wp-block-woocommerce-customer-account a, .wc-block-mini-cart .wc-block-mini-cart__quantity-badge"
	)
		.find("svg")
		.remove();
	jQuery(".wp-block-woocommerce-customer-account a").append(
		'<svg class="wc-block-customer-account__account-icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="account" clip-path="url(#clip0_1_2754)"><g id="icon"><path id="Vector" d="M0.8125 13C0.8125 16.2323 2.09654 19.3323 4.38214 21.6179C6.66774 23.9035 9.76767 25.1875 13 25.1875C16.2323 25.1875 19.3323 23.9035 21.6179 21.6179C23.9035 19.3323 25.1875 16.2323 25.1875 13C25.1875 9.76767 23.9035 6.66774 21.6179 4.38214C19.3323 2.09654 16.2323 0.8125 13 0.8125C9.76767 0.8125 6.66774 2.09654 4.38214 4.38214C2.09654 6.66774 0.8125 9.76767 0.8125 13V13Z" stroke="#00031E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path id="Vector_2" d="M5.28223 22.4315C10.5624 6.5 11.1799 5.6875 13.8124 5.6875V8.9375L19.4143 11.7379C19.6843 11.8729 19.9113 12.0805 20.0699 12.3372C20.2285 12.594 20.3125 12.8899 20.3124 13.1918V13.8125C20.3124 14.6745 19.97 15.5011 19.3605 16.1106C18.751 16.7201 17.9243 17.0625 17.0624 17.0625H15.4374V24.9427" stroke="#00031E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path id="Vector_3" d="M15.4363 21.1241L7.31348 16.3867" stroke="#00031E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>'
	);
	jQuery(".wc-block-mini-cart .wc-block-mini-cart__quantity-badge").append(
		'<svg class="wc-block-mini-cart__icon" focusable="false" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="cart" clip-path="url(#clip0_1_2759)"><g id="Group"><path id="Vector" d="M25.1734 14.2351C24.8712 20.0526 19.5401 24.686 13 24.686C6.26925 24.686 0.8125 19.7731 0.8125 13.7129" stroke="#00031E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path id="Vector_2" d="M22.6178 11.4584C24.2277 12.1691 25.1875 13.0639 25.1875 14.0356C25.1875 16.3529 19.7308 18.2314 13 18.2314C6.26925 18.2314 0.8125 16.3583 0.8125 14.0356C0.8125 13.0487 1.80158 12.1409 3.458 11.4248" stroke="#00031E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path id="Vector_3" d="M13 16.3145C17.4183 16.3145 21 12.7327 21 8.31445C21 3.89618 17.4183 0.314453 13 0.314453C8.58172 0.314453 5 3.89618 5 8.31445C5 12.7327 8.58172 16.3145 13 16.3145Z" fill="#00031E"/></g></g><defs><clipPath id="clip0_1_2759"><rect width="26" height="26" fill="white"/></clipPath></defs></svg>'
	);
	jQuery(".wp-block-woocommerce-customer-account, .wc-block-mini-cart").show();

	// JS for slick slider
	var isSlickInitialized = false;
	
	function initSlick() {
		if ($(window).width() < 767 && !isSlickInitialized) {
			$(".nutrition-col-info .info_nci_content ul.list-nci").slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 3000,
				adaptiveHeight: false,
			});
			isSlickInitialized = true;
		}
	}
	
	function destroySlick() {
		if ($(window).width() >= 767 && isSlickInitialized) {
			$(".nutrition-col-info .info_nci_content ul.list-nci").slick("unslick");
			isSlickInitialized = false;
		}
	}
	
	initSlick();
	
	$(window).resize(function () {
		destroySlick();
		initSlick();
	});
	
	$(".list-product-info-box-mobile").slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		arrows: false,
		autoplay: false,
		autoplaySpeed: 3000,
		adaptiveHeight: false,
	});


})(jQuery);
