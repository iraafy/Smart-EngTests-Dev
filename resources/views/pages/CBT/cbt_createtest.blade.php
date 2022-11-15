@extends('layouts.logged-navbar')

@section('content')
<div class="container p-4 pt-5">
    <div style="color: #CA6035;" class="mb-4 text-center">
        <h3>
            <b>
                Create Test
            </b>
        </h3>
        <p style="color: black;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, exercitationem consequatur.
        </p>
    </div>
    <form method="post" action="{{url('store-create-test')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label" style="color: #3E6D81; font-weight: bold;">Title Test</label>
            <input required type="text" name="title" class="form-control" id="title" placeholder="Input Title">
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label" style="color: #3E6D81; font-weight: bold;">Description</label>
            <input required type="text" name="description" class="form-control" id="tipe" placeholder="Description" maxlength="100">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label" style="color: #3E6D81; font-weight: bold;">Date</label>
            <input required type="date" name="date" class="form-control" id="start">
        </div>
        <div class="mb-3">
            <label for="start" class="form-label" style="color: #3E6D81; font-weight: bold;">Start Test</label>
            <input required type="time" name="start_time" class="form-control" id="start">
        </div>
        <div class="mb-3">
            <label for="end" class="form-label" style="color: #3E6D81; font-weight: bold;">End Test</label>
            <input required type="time" name="end_time" class="form-control" id="end">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label" style="color: #3E6D81; font-weight: bold;">Code Test</label>
            <input required type="text" name="code" class="form-control" id="code" placeholder="Test Code">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="color: #3E6D81; font-weight: bold;">Password Test</label>
            <input required type="text" name="password" class="form-control" id="password" placeholder="Password Test">
        </div>

        <div class="mb-5 mt-2">
            <button type="submit" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; width: 100%">Next</button>
        </div>
    </form>
</div>
@endsection