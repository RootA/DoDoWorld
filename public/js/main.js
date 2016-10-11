jQuery(function($) {

	//Ajax contact
	var form = $('.contact-form');
		form.submit(function () {
			$this = $(this);
			$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//Goto Top
	$('.gototop').click(function(event) {
		 event.preventDefault();
		 $('html, body').animate({
			 scrollTop: $("body").offset().top
		 }, 500);
	});
	//End goto top

});

// main.js
require.config({
  paths: {
    braintreeClient: 'https://js.braintreegateway.com/web/3.3.0/js/client.min',
    braintreePaypal: 'https://js.braintreegateway.com/web/3.3.0/js/paypal.min'
  }
});

require(['braintreeClient', 'braintreePaypal'], function (client, paypal) {
  client.create({
    authorization: 'CLIENT_TOKEN_FROM_SERVER'
  }, function (err, clientInstance) {
    paypal.create(/* ... */);
  });
});
