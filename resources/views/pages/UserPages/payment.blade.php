@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h4 class="text-center" style="color: #CA6035"><b>Account Information</b></h4>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-lg-6 col-sm-12">
            <div class="card pt-3">
                <div class="card-body">
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/ovo.png" alt="" style="width: 25px;"> OVO
                        </label>
                        <input class="form-check-input float-end" type="radio" name="ovo">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/paypal.png" alt="" style="width: 25px;"> Paypal
                        </label>
                        <input class="form-check-input float-end" type="radio" name="paypal">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/credit.png" alt="" style="width: 25px;"> Credit Card
                        </label>
                        <input class="form-check-input float-end" type="radio" name="credit" checked>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/ovo.png" alt="" style="width: 25px;"> OVO
                        </label>
                        <input class="form-check-input float-end" type="radio" name="ovo">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/paypal.png" alt="" style="width: 25px;"> Paypal
                        </label>
                        <input class="form-check-input float-end" type="radio" name="paypal">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="row">
                <div class="card">
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Name On Card</label>
                        <input type="text" class="form-control" name="credit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav fixed-bottom p-5 pt-4 pb-4 bg-white" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10);">
        <div class="container ms-auto">
            <a href="" class="nav-link">
                <button class="btn bg-color-primary text-white ps-5 pe-5" style="float: right;">Next</button>
            </a>
        </div>
    </nav>
</div>
@endsection