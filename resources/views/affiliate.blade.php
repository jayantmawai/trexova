@extends('master')
    @section('body')
        <div class="uk-section uk-container uk-preserve-color uk-padding-remove-bottom uk-padding-remove-top">
            <div class="uk-padding-large uk-padding-remove-top  uk-width-1-1@s">
                <div class="uk-container uk-flex uk-grid uk-grid-match uk-padding" uk-grid>
                    <div class="uk-width-1-2@s">
                        <h3 class="uk-text-center uk-text-bold"><span class="uk-text-success">Benefits</span> for being an affiliate</h3>
                        <p class="uk-text-emphasis"><span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                            Earn additional income from your sphere of influence.<br>
                            <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                            No Investment Or Fees to join the platform.<br>
                            <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                            Quick to set up, requires only very basic HTML knowledge.<br>
                            <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                            Dashboard to track your stats.<br>
                            <span class="uk-margin-small-right uk-icon-success" uk-icon="check"></span>
                            Monthly transfer to your account .<br>
                        </p>
                        <p class="uk-text-center">
                            <button class="uk-button uk-button-success">Join Us</button>
                        </p>
                    </div>
                    <div class="uk-width-1-2@s">
                        <img class="uk-background-cover uk-align-top" src="{{URL::asset('images/undraw_business_deal.webp')}}" alt="image" uk-img>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-container uk-preserve-color uk-padding-remove-bottom uk-padding-remove-top">
            <div class="uk-padding-large uk-padding-remove-top  uk-width-1-1@s">
                <h3 class="uk-text-center uk-text-bold">We offer friendly <span class="uk-text-success">Commission percentages</span> to grow together</h3>
                <div class="uk-container uk-flex-center uk-grid uk-width-1-2 uk-align-center ">
                <table class="uk-table uk-table-small uk-table-middle uk-table-divider">
                    <thead>
                    <tr>
                        <th class="uk-text-bold">Monthly Bookings</th>
                        <th class="uk-text-bold">%age of our Commission</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Upto 20</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>21 to 50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>51 to 200</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>more than 200</td>
                        <td>50</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <p>Note:<br>We are building the marketplace platform and it will be ready by 2019 December. Till that time we are taking manual bookings.
                </p>
            </div>
        </div>
    @endsection
