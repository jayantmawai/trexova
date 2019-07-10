@extends('master')
    @section('body')
        <div class="uk-section uk-container uk-preserve-color uk-padding-remove-bottom uk-padding-remove-top">
            <h3 class="uk-text-bold uk-text-center">About <span class="uk-text-success">Trexova</span></h3>
            <div class="uk-padding-large  uk-width-1-1@s">
                <p class="uk-text-left"> On one side, we have tourists who are looking for wellness holidays experience.
                    On the other side there are lots of very good quality tour operators which are capable and can provide such wellness experiences.
                    Due to the highly fragmented market, it is very tough for both sides to join hands easily.
                    Every client, spends lot of their time to find their choice of wellness experience holidays and spends lots of time in searching best prices, best supplier, reliable supplier, best service and many more information reg the holiday.
                </p>
                <p class="uk-text-left">We aim to solve it by making a wellness holidays marketplace where in clients can search, view, compare and book their choice of wellness holidays at best rates with most trusted wellness holidays operators from all over the world.
                    Additionally, clients can ask questions directly with holiday providers and also clients can refer to the reviews and ratings before taking a decision for any wellness holidays provider.
                </p>
                <div class="uk-container uk-flex uk-grid uk-grid-match uk-padding" uk-grid>
                    <div class="uk-width-1-3@s">
                        <img class="uk-background uk-background-cover uk-align-bottom" src="{{URL::asset('images/undraw_programmer_imem.webp')}}" alt="image" uk-img>
                    </div>
                    <div class="uk-width-expand@s">
                        <div class="uk-text-left uk-postion-center">
                            <p>Benefits for holidays provider is that they gets preferred platform to showcase their unique experience based holidays and access to global market. Refer here for more details
                            </p>
                            <p>We only allow the holidays operators with stringent quality control to participate.
                            </p>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <img class="uk-background-cover uk-align-top" src="{{URL::asset('images/undraw_product_teardown_elol.webp')}}" alt="image" uk-img>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-container uk-preserve-color uk-padding-remove-top">
            <h3 class="uk-text-bold uk-text-center">We <span class="uk-text-success">Aim</span></h3>
            <div class="uk-padding-large  uk-width-1-1@s">
                <p class="uk-text-emphasis"><span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                    Bring transparency between tourists and holiday providers with ethical practices.<br>
                    <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                    Bring overall cost to tourist down by providing direct access to actual tour operators and visa versa.<br>
                    <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                    Keep using technological innovations to bring operational cost low and to provide value for money holidays for tourist at ease.
                </p>
                <div class="uk-container uk-flex-center uk-grid uk-grid-match uk-padding uk-padding-remove-top" uk-grid>
                    <div class="uk-width-expand@s">
                        <div class="uk-text-left uk-padding">
                            <p>We are building the marketplace platform and it will be ready by 2019 December. Till that time we are taking manual bookings.</p>
                            <p>If you feel excited about such platform and its overall benefit to each stakeholders then register with us and avail exclusive inaugural offers upon its launch.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <img class="uk-background-content"  src="{{URL::asset('images/undraw_in_progress.webp')}}" width="200">
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
                <img class="uk-background-norepeat uk-background-cover uk-light"
                     src="{{URL::asset('images/sustainable.webp')}}" width="1800" alt="sustainable image">
            </div>
        </div>
    @endsection