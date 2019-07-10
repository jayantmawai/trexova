@extends('master')
    @section('body')
        <div class="uk-section uk-preserve-color uk-padding">
            <div class="uk container uk-flex uk-grid uk-grid-match" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/yoga.webp')}}" alt="yoga image" uk-img>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-text-center uk-margin-remove-bottom">
                        <h3 class="uk-h3 uk-margin-remove-bottom uk-text-success uk-text-bold">Book Your Wellness Holidays at Best Prices</h3>
                        <p class= "uk-text-bold">Your Preferred Wellness Holiday Marketplace</p>
                        <img src="{{URL::asset('images/prefrenceimg.webp')}}" alt="yoga image" uk-img>
                        <p class="uk-text-center">
                            <button class="uk-button uk-button-success">Send me Best Offer</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-preserve-color">
            <div class="uk-container uk-flex uk-grid uk-grid-match uk-padding-remove-bottom" uk-grid>
                <div class="uk-width-1-3">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/budget.webp')}}" alt="image" uk-img>wellness holidays for every
                        budget
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/price.webp')}}" alt="image" uk-img>best price quarntee
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/credits.webp')}}" alt="image" uk-img>unlimited travel credit
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-preserve-color uk-padding-remove-top">
            <h3 class="uk-text-center uk-padding-small uk-padding-remove-top uk-text-bold">Customise and Book your Preferred Wellness
                holiday in <span class="uk-text-success">3 Simple Steps</span></h3>
            <div class="uk container uk-flex uk-grid uk-grid-match uk-padding-large uk-padding-remove-top uk-padding-remove-bottom"
                 uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/step1.png')}}" alt="image" uk-img><br>Tell us your Preferences
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/step2.png')}}" alt="image" uk-img><br>Get multiple quotes from verified tour operators
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/step3.png')}}" alt="image" uk-img><br>Customised and Book your
                        preferred holiday
                    </div>
                </div>
                <div class="uk-align-center uk-margin uk-padding-remove-bottom">
                    <img src="{{URL::asset('images/package-img.webp')}}" alt="package-image" uk-img>
                </div>
            </div>
        </div>
        <div class="uk-section uk-preserve-color uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="uk-text-center uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-text-bold">Why <span class="uk-text-success"> Book With Us</span></h3>
            <div class="uk container uk-flex uk-grid uk-grid-collapse uk-grid-match uk-padding-large uk-padding-remove-top"
                 uk-grid>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/lowest_price.webp')}}" alt="image" uk-img><br>Lowest Price Guarantee
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/nocredit_fees.webp')}}" alt="image" uk-img><br>No Credit Card Fee
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/unlimited_credits.webp')}}" alt="image" uk-img><br>Earn Unlimited
                        Credits
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center uk-padding">
                        <img src="{{URL::asset('images/holidays_budget.webp')}}" alt="image" uk-img><br>Holidays for Every
                        Budget
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center uk-padding">
                        <img src="{{URL::asset('images/supllier_selection.webp')}}" alt="image" uk-img><br><br>Carefully
                        Selected Suppliers
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-text-center uk-padding">
                        <img src="{{URL::asset('images/friendly_service.webp')}}" alt="image" uk-img><br >Friendly Customer
                        Service
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-preserve-color uk-padding-remove">
            <h3 class="uk-text-center uk-text-bold">For Exclusive deals and offers during launch</h3>
            <h4 class="uk-text-center uk-margin-remove-top uk-text-success uk-text-bold">Register with us</h4>
            <div class="uk container uk-flex uk-grid uk-grid-match uk-padding-remove" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-text-center">
                        <img src="{{URL::asset('images/exclusive deals.webp')}}" alt="image" uk-img>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-text-center">
                        <h1>...............</h1>
                    </div>
                </div>
            </div>
            <h3 class="uk-text-center uk-text-bold">We work with only those holiday providers who support <span class="uk-text-success">Sustainable Tourism</span></h3>
            <div class="uk-text-center">
                <img class="uk-background-norepeat  uk-background-cover uk-light"
                     src="{{URL::asset('images/sustainable.webp')}}" width="1800" alt="sustainable image">
            </div>
        </div>
    @endsection
