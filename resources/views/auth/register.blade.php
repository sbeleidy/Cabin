@extends('app')

@section('content')
<section class="auth top-section hero">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			@include('partials.errors')
			@include('partials.success')
			<h2 class="text-center">Register</h2>
			{!! Form::open(array('url' => 'register', 'class' => 'panel')) !!}
				<div class="row">
					<div class="small-12 large-6 columns">
						{!! Form::label('email', 'Email') !!}
						{!! Form::email('email', old('email')) !!}
					</div>
					<div class="small-12 large-6 columns">
						{!! Form::label('name', 'Username') !!}
						{!! Form::text('name') !!}
					</div>
				</div>

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}

				<div class="row">
				    <div class="small-12 large-6 columns">
				        <label for="card_name">Name on the Credit Card</label>
				        <input type="text" data-stripe="card-name" class="card-name" value="" required>
				    </div>
				    <div class="small-12 large-6 columns">
				        <label for="email">Email</label>
				        <input type="email" value="" id="email" name="email" required>
				         <p class="help-block">Where do you wish to receive your receipt?</p>
				    </div>
				</div>
				<div class="row">
				    <div class="small-12 large-6 columns">
				        <label for="card_number">Card Number <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-amex"></i></label>
				        <input type="number" data-stripe="card-number" class="card-number" required>
				        <p class="help-block">Visa, Mastercard, American Express, and Discover are accepted. Payments are processed securely through <a href="http://stripe.com">Stripe.com</a>.</p>
				    </div>
				    <div class="small-12 large-3 columns">
				        <label for="cvc">CVC</label>
				        <input type="number" data-stripe="card-cvc" class="card-cvc" required>
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
				        <select id="exp-month" class="card-expiry-month" data-stripe="card-expiry-month">
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
				        <select id="exp-yr" class="card-expiry-year" data-stripe="card-expiry-year">
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

				{!! Form::submit('Register', array('class' => 'button radius success expand small')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection