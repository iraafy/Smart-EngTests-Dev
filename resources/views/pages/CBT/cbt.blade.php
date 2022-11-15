@extends('layouts.logged-navbar')

@section('content')
<div class="container-fluid pt-5" style="background-color: #3E6D81; height: 100vh">
    <h2 class="mt-3 mb-5 text-center" style="color: white; font-weight:800">
        Computer Based Test
    </h2>

    <img class="mx-auto d-block" width="15%" src="assets/images/pronoun_reference.png" alt="">

    <p class="text-center mt-4" style="color: white">
        Turn your question collection into Computer Based Test with a few simple and easy step immediately. <br> Students can instantly join the test with the link and password you provide.
    </p>

    <div class="row mt-4">
        <div class="col-4"></div>
        <div class="col-2 text-center">
            <a href="<?= url('cbt/cbt-dashboard'); ?>">
                <button type="button" class="btn ps-4 pe-4 text-light" style="background-color: #5E7B87;">
                    Test Dashboard
                </button>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?= url('cbt/test-page'); ?>">
                <button type="button" class="btn ps-4 pe-4 text-light" style="background-color: #5E7B87;">
                    Start Test
                </button>
            </a>
        </div>
        <div class=" col-4">
        </div>
    </div>
</div>
@endsection