@extends('master')
@section('body')
    <div class="uk-section uk-container uk-preserve-color uk-padding-remove-bottom uk-padding-remove-top">
        <div class="uk-padding-large uk-padding-remove-top  uk-width-1-1@s">
            <div class="uk-container uk-flex uk-grid uk-grid-match uk-padding" uk-grid>
                <div class="uk-width-expand@s">
                    <h3 class="uk-text-center uk-text-bold">Who should<span class="uk-text-success"> Join</span></h3>
                    <p class="uk-text-emphasis"><span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        If you are a wellness holiday provider<br>
                        <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        If you value quality of service and committed to ensure customer delight<br>
                        <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        If you follow Sustainable Tourism Practices<br>
                    </p>
                    <h3 class="uk-text-center uk-text-bold">What you need <span class="uk-text-success">Minimum</span></h3>
                    <p class="uk-text-emphasis"><span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        Qualify platform’s selection criteria<br>
                        <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        Follow sustainable tourism guidelines<br>
                        <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                        Follow supplier code of conduct<br>
                    </p>
                </div>
                <div class="uk-width-1-3@s">
                    <p class="uk-text-center">
                        <button class="uk-button uk-button-success">Join Us</button>
                    </p>
                    <img class="uk-background-cover uk-align-top" src="{{URL::asset('images/undraw_welcome.webp')}}" alt="image" uk-img>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-container uk-preserve-color uk-padding-remove-top">
        <h3 class="uk-text-bold uk-text-center"><span class="uk-text-success">Advantages</span>for Being with Us</h3>
        <div class="uk-padding uk-padding-remove-top uk-width-1-1@s">
            <div class="uk-text-left uk-padding-small">
                <p>By being associated with us, you will save time and money. You will be free to focus on your Core Competency to design best of holidays experience as we offer you the direct access to global market and easy opportunity to showcase what best you have.
                </p>
            </div>
            <div class="uk-container uk-flex-center uk-grid uk-grid-match uk-padding uk-padding-remove-top" uk-grid>
                <div class=" uk-padding-small uk-width-1-3@s uk-align-center">
                    <img src="{{URL::asset('images/undraw_agreement.webp')}}" width="200">
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-text-left uk-padding-small">
                        <p>Direct and digital access to International market<br>
                            Unified representation of your holidays<br>
                            Quick time to market for your holidays<br>
                            Adjust prices easily as per revenue management policies<br>
                            Abilities to run promotions as per business needs<br>
                            Brand visibility<br>
                            Transparency on your name as operator<br>
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-text-left">
                        <h4>No platform fees</h4>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-text-center">
                        <h4>No risk and cost</h4>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-text-right">
                        <h4>No limit on holidays </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
