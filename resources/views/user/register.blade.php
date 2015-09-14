@extends('app')

@section('content')
<section class="content oil">
    <div class="row">
        <div class="small-12 large-8 large-offset-2 columns end">
			<ul class="tabs" data-tab data-options="scroll_to_content: false">
                <li class="tab-title active"><a href="#panel1">Credit Card</a></li>
                <!--<li class="tab-title"><a href="#panel2">Bitcoin</a></li>-->
                <li class="tab-title"><a href="#panel3">Paypal</a></li>
            </ul>
            <div class="tabs-content">
            <div class="content active" id="panel1">
                <form id="payment-form" class="panel ming" action="/purchase/payment/web" method="POST">
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
                        <div class="small-12 large-6 columns alpha">
                            <label for="card_number">Card Number <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-amex"></i></label>
                            <input type="number" data-stripe="card-number" class="card-number" required>
                            <p class="help-block">Visa, Mastercard, American Express, and Discover are accepted. Payments are processed securely through <a href="http://stripe.com">Stripe.com</a>.</p>
                        </div>
                        <div class="small-12 large-3 columns">
                            <label for="cvc">CVC</label>
                            <input type="number" data-stripe="card-cvc" class="card-cvc" required>
                            <p class="help-block">3-4 digit number on the back of the card.</p>
                        </div>
                        <div class="small-12 large-3 columns omega">
                            <label for="zip">Zip code</label>
                            <input type="text" data-stripe="address-zip" class="address-zip" required>
                        </div>
                    </div>
                    <label for="exp-month">Expiration (MM/YYYY)</label>
                    <div class="row">
                        <div class="small-6 columns alpha">
                            <select id="exp-month" class="card-expiry-month" data-stripe="card-expiry-month">
                                                            <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09" selected>09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="small-6 columns omega">
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
                    <button type="submit" class="button small success expand radius">Purchase For $50</button>
                    <div class="payment-errors"></div>
                </form>
            </div>
            <div class="content" id="panel3">
                <div class="panel ming">
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
</section>
@endsection