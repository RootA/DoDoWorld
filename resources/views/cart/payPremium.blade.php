@extends('main')
@section('title','Payment')
@section('maininfo')
<style type="text/css">
.db-bk-color-one {
    background-color: #f55039;
}
.db-bk-color-two {
    background-color: #46A6F7;
}
.db-bk-color-three {
    background-color: #47887E;
}
.db-bk-color-six {
    background-color: #F59B24;
}
.db-padding-btm {
    padding-bottom: 50px;
}
.db-button-color-square {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.50);
    border: none;
    border-radius: 0px;
}
.db-button-color-square:hover {
    color: #fff;
    border: none;
}
.db-pricing-eleven {
    margin-bottom: 30px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    color: #fff;
    line-height: 30px;
}
.db-pricing-eleven ul {
    list-style: none;
    margin: 0;
    text-align: center;
    padding-left: 0px;
}
.db-pricing-eleven ul li {
    padding-top: 10px;
    padding-bottom: 10px;
    cursor: pointer;
}
.db-pricing-eleven ul li i {
    margin-right: 5px;
}
.db-pricing-eleven .price {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px 20px 20px 20px;
    font-size: 60px;
    font-weight: 900;
    color: #FFFFFF;
}
.db-pricing-eleven .price small {
    color: #B8B8B8;
    display: block;
    font-size: 12px;
    margin-top: 22px;
}
.db-pricing-eleven .type {
    background-color: #52E89E;
    padding: 40px 10px;
    font-weight: 900;
    text-transform: uppercase;
    font-size: 30px;
}
.db-pricing-eleven .pricing-footer {
    padding: 10px;
}
.db-pricing-eleven.popular {
    margin-top: 10px;
}
.db-pricing-eleven.popular .price {
	padding-top: 50px;
}
.db-wrapper{
  width: 40%;
}
</style>
<div class="container">
   <div class="row text-center">
        <div class="col-md-12">
            <h3>DoDoWorld - Payment Using Paypal</h3>
        </div>
    </div>

        <div class="container">
          <div class="db-padding-btm db-attached">
            <div class="col-md-4">
                <div class="db-wrapper">
                  {!! Form::open(array('route' => 'getCheckout')) !!}
                    {!! Form::hidden('type','small') !!}
                    {!! Form::hidden('pay',3000) !!}
                      <div class="db-pricing-eleven db-bk-color-one">
                          <div class="price">
                              <sup>$</sup>3000
                                  <small>per quarter</small>
                          </div>
                          <div class="type">
                              Package A
                          </div>
                          <div class="pricing-footer">
                              <button class="btn db-button-color-square btn-lg">Proceed</button>
                          </div>
                      </div>
                    {!! Form::close() !!}
                </div>
                <script src="https://www.paypalobjects.com/api/button.js?"
     data-merchant="braintree"
     data-id="paypal-button"
     data-button="checkout"
     data-color="blue"
     data-size="medium"
     data-shape="pill"
     data-button_type="submit"
     data-button_disabled="false"
 ></script>
            </div>
            <div class="col-md-4">
                <div class="db-wrapper">
                  {!! Form::open(array('route' => 'getCheckout')) !!}
                    {!! Form::hidden('type','medium') !!}
                    {!! Form::hidden('pay',4500) !!}
                  <div class="db-pricing-eleven db-bk-color-two popular">
                      <div class="price">
                          <sup>$</sup>4500
                                  <small>per quarter</small>
                      </div>
                      <div class="type">
                          Package B
                      </div>
                      <div class="pricing-footer">
                          <button class="btn db-button-color-square btn-lg">Proceed</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                  {!! Form::open(array('route' => 'getCheckout')) !!}
                    {!! Form::hidden('type','advance') !!}
                    {!! Form::hidden('pay',6800) !!}
                  <div class="db-pricing-eleven db-bk-color-three">
                      <div class="price">
                          <sup>$</sup>6800
                                  <small>per quarter</small>
                      </div>
                      <div class="type">
                          Package C
                      </div>
                      <div class="pricing-footer">
                          <button class="btn db-button-color-square btn-lg">Proceed</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                  {!! Form::open(array('route' => 'getCheckout')) !!}
                    {!! Form::hidden('type','advance') !!}
                    {!! Form::hidden('pay',6800) !!}
                  <div class="db-pricing-eleven db-bk-color-three">
                      <div class="price">
                          <sup>$</sup>6800
                                  <small>per quarter</small>
                      </div>
                      <div class="type">
                          Package D
                      </div>
                      <div class="pricing-footer">
                          <button class="btn db-button-color-square btn-lg">Proceed</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
                </div>
            </div>

          </div>
        </div>
</div>
@endsection
@section('paypal')
  <script data-main="main.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.1/require.min.js"></script>
  <script type="text/javascript">
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
  // Fetch the button you are using to initiate the PayPal flow
var paypalButton = document.getElementById('paypal-button');

// Create a Client component
braintree.client.create({
authorization: 'TOKEN'
}, function (clientErr, clientInstance) {
// Create PayPal component
braintree.paypal.create({
  client: clientInstance
}, function (err, paypalInstance) {
  paypalButton.addEventListener('click', function () {
    // Tokenize here!
    paypalInstance.tokenize({
      flow: 'checkout', // Required
      amount: 10.00, // Required
      currency: 'USD', // Required
      locale: 'en_US',
      enableShippingAddress: true,
      shippingAddressEditable: false,
      shippingAddressOverride: {
        recipientName: 'DoDoWorld',
        line1: 'Unga House.',
        line2: 'Westlands',
        city: 'Nairobi',
        countryCode: 'KE',
        postalCode: '60652',
        state: 'Westlands',
        phone: '123.456.7890'
      }
    }, function (err, tokenizationPayload) {
      // Tokenization complete
      // Send tokenizationPayload.nonce to server
    });
  });
});
});
  </script>
@endsection
