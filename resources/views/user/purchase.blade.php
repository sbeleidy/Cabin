@extends('app')

@section('headScripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@endsection

@section('content')
<section class="top-section hero ming">
	<div class="row">
		<div class="small-12 medium-4 medium-push-8 columns">
			<h3 class="">Purchase Access to the Full Stack Web School for $50</h3>
			<p>You&rsquo;ve made it this far and I like where you are going with this. You are ready to soak up some vast amounts of knowledge and change the direction of your life.</p>
			<p>Just make sure you share your donuts with me. Please.</p>
			<p><i class="fa fa-lock"></i> This page is 100% secure and none of this info is being kept on our servers.</p>
		</div>
		<div class="small-12 medium-8 medium-pull-4 columns">
			<ul class="tabs" data-tab data-options="scroll_to_content: false">
                <li class="tab-title active"><a href="#panel1">Credit Card</a></li>
                <!--<li class="tab-title"><a href="#panel2">Bitcoin</a></li>-->
                <li class="tab-title"><a href="#panel3">Paypal</a></li>
            </ul>
            <div class="tabs-content">
            	<div class="content active" id="panel1">
					@include('partials.errors')
					<div class="payment-errors"></div>
					{!! Form::open(array('url' => 'purchase', 'class' => 'panel radius', 'id' => 'payment-form')) !!}
						<div class="row">
				    		<div class="small-12 large-6 columns">
				        		<label for="card_number">Card Number <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-amex"></i></label>
				        		<input type="number" data-stripe="number" class="card-number" value={{ old('number') }} required>
				        		<p class="help-block">Visa, Mastercard, American Express, and Discover are accepted. Payments are processed securely through <a href="http://stripe.com">Stripe.com</a>.</p>
				    		</div>
				    		<div class="small-12 large-3 columns">
				        		<label for="cvc">CVC</label>
				        		<input type="number" data-stripe="cvc" class="card-cvc" required>
				        		<p class="help-block">3-4 digit number on the back of the card.</p>
				    		</div>
				    		<div class="small-12 large-3 columns">
				        		<label for="zip">Zip code</label>
				        		<input type="text" data-stripe="address-zip" class="address-zip" required>
				    		</div>
				 		</div>
				 		<label for="exp-month">Expiration (MM/YYYY)</label>
				 		<div class="row">
				    		<div class="small-6 columns">
				        		<select id="exp-month" class="card-expiry-month" data-stripe="exp-month">
				            		<option value="01">01</option>
				            		<option value="02">02</option>
				            		<option value="03">03</option>
				            		<option value="04">04</option>
				            		<option value="05">05</option>
				            		<option value="06">06</option>
				            		<option value="07">07</option>
				            		<option value="08">08</option>
				            		<option value="09">09</option>
				            		<option value="10">10</option>
				            		<option value="11">11</option>
				            		<option value="12">12</option>
				        		</select>
				    		</div>
				    		<div class="small-6 columns">
				        		<select id="exp-yr" class="card-expiry-year" data-stripe="exp-year">
				            		<option value="2015">2015</option>
				            		<option value="2016">2016</option>
				            		<option value="2017">2017</option>
				            		<option value="2018">2018</option>
				            		<option value="2019">2019</option>
				            		<option value="2020">2020</option>
				            		<option value="2021">2021</option>
				            		<option value="2022">2022</option>
				            		<option value="2023">2023</option>
				            		<option value="2024">2024</option>
				            		<option value="2025">2025</option>
				            		<option value="2026">2026</option>
				        		</select>
				    		</div>
						</div>
						{!! Form::submit('Purchase Access', array('class' => 'button radius expand success submit-button')) !!}
					{!! Form::close() !!}
				</div>
				<div class="content" id="panel3">
					<div class="borderless-panel">
						<p>You&rsquo;ll be taken to Paypal.com where you will place your order. Upon successful payment you&rsquo;ll be returned to Makers Cabin.</p>
						<!-- $199 -->
						<br>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						    <input type="hidden" name="cmd" value="_s-xclick">
						    <input type="hidden" name="hosted_button_id" value="ZVB373Q4NSA7J">
						    <input type="hidden" name="notify_url" value="https://courses.makerscabin.com/paypal/ipn/web" />
						    <button type="submit" class="button small success radius expand">Purchase via Paypal</button>
						    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footScripts')
<script type="text/javascript">
  	// This identifies your website in the createToken call below
  	Stripe.setPublishableKey('{{ env('STRIPE_KEY') }}');
  	// ...
  	jQuery(function($) {
  	  $('#payment-form').submit(function(event) {
  	    var $form = $(this);

  	    // Disable the submit button to prevent repeated clicks
  	    $form.find('.submit-button').prop('disabled', true);

  	    Stripe.card.createToken($form, stripeResponseHandler);

  	    // Prevent the form from submitting with the default action
  	    return false;
  	  });
  	});

  	function stripeResponseHandler(status, response) {
  	  var $form = $('#payment-form');

  	  if (response.error) {
  	    // Show the errors on the form
  	    $form.find('.payment-errors').text(response.error.message);
  	    $form.find('.submit-button').prop('disabled', false);
  	  } else {
  	    // response contains id and card, which contains additional card details
  	    var token = response.id;
  	    // Insert the token into the form so it gets submitted to the server
  	    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
  	    // and submit
  	    $form.get(0).submit();
  	  }
  	};
</script>
@endsection