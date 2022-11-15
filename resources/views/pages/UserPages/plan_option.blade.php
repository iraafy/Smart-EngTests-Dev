@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h4 class="text-center" style="color: #CA6035"><b>Account Information</b></h4>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-lg-6 col-sm-12">
            <div class="card m-5">
                <div class="card-body">
                    <h4 class="fw-bold" style="color: #646464">
                        MONTHLY PREMIUM
                    </h4>
                    <h4 class="fw-bold mb-4 text-color-primary">
                        99k
                    </h4>
                    <p>
                        <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Generate Question (5 max)
                    </p>
                    <p>
                        <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Join Computer Based Test Simulation
                    </p>
                    <p>
                        <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Create Computer Based Test Simulation
                    </p>
                    <p>
                        <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Add question from Question Collection to CBT
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="row pt-3">
                <div class="mt-3">
                    <label class="form-label fw-bold text-color-primary">Name</label>
                    <input type="text" class="form-control" disabled value="lorem" name="name">
                </div>
                <div class="mt-3">
                    <label class="form-label fw-bold text-color-primary">Start Plan</label>
                    <input type="date" class="form-control" disabled name="start">
                </div>
                <div class="mt-3">
                    <label class="form-label fw-bold text-color-primary">End Plan</label>
                    <input type="date" class="form-control" disabled name="end">
                </div>
            </div>
        </div>
    </div>
    <nav class="nav fixed-bottom p-5 pt-4 pb-4 bg-white" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10);">
        <div class="container ms-auto">
            <a href="/upgrade-account/payment" class="nav-link">
                <button class="btn bg-color-primary text-white ps-5 pe-5" style="float: right;">Next</button>
            </a>
        </div>
    </nav>
</div>
@endsection