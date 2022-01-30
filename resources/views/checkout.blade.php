@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">



                <x-pay-here-checkout-form :payable=$payment success-url="{{ route('checkout.success') }}"
                    cancelled-url="{{ route('checkout.cancelled') }}"
                    form-class="bg-white rounded w-full shadow-sm px-6 pt-2">

                    <input type="hidden" name="items" value="">

                    <div class="form-group mt-3">
                        <label for="first_name ">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John">
                    </div>

                    <div class="form-group mt-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id='last_name' placeholder="Dev">
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="johndev@gmail.com">
                    </div>

                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="077xxxxxxx">
                    </div>

                    <div class="form-group mt-3">
                        <label for="address">Address</label>
                        <input type="address" class="form-control" name="address" id="address"
                            placeholder="No05,Colombo 07">
                    </div>

                    <div class="form-group mt-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Colombo">
                    </div>

                    <div class="form-group mt-3">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Sri Lanka"
                            value="Sri Lanka">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Pay now</button>
                </x-pay-here-checkout-form>

            </div>
        </div>
    </div>
@endsection
