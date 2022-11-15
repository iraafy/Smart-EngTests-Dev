@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h4 class="text-center" style="color: #CA6035"><b>Account Information</b></h4>
    </div>
    <div class="row pt-3">
        <div class="mt-3">
            <label class="form-label fw-bold text-color-primary">Name</label>
            <input type="text" class="form-control" disabled value="lorem" name="name">
        </div>
        <div class="mt-3">
            <label class="form-label fw-bold text-color-primary">Email</label>
            <input type="email" class="form-control" disabled value="lorem@mail.com" name="email">
        </div>
    </div>
    <nav class="nav fixed-bottom p-5 pt-4 pb-4" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10)">
        <div class="container ms-auto">
            <a href="/upgrade-account/plan-option" class="nav-link">
                <button class="btn bg-color-primary text-white ps-5 pe-5" style="float: right;">Next</button>
            </a>
        </div>
    </nav>
</div>
@endsection