@extends('layouts.logged-navbar')

@section('content')
<div class="container p-4 pt-5 mt-5">
    <h3 style="color: #3E6D81;" class="pb-3">
        <b>
            Let`s Start The Test.
        </b>
    </h3>
    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label" style="color: #3E6D81; font-weight: bold;">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Input Name">
        </div>
        <div class="mb-3">
            <label for="testcode" class="form-label" style="color: #3E6D81; font-weight: bold;">Test Code</label>
            <input type="text" name="testcode" class="form-control" id="testcode" placeholder="Test Code">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="color: #3E6D81; font-weight: bold;">Password Test</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Input Password">
        </div>

        <div class="mb-2 mt-2">
            <a href="<?= url('cbt/test-detail'); ?>">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Check Detail Test</button>
            </a>
        </div>
    </form>
</div>
@endsection