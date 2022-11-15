@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row p-5">
        <h4 class="text-center" style="color: #CA6035"><b>Which question will you choose?</b></h4>
    </div>
    <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/images/error_identification.png" alt="">
                        <br><br>
                        <b>
                            Error Identification
                        </b>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/images/sentence_completion.png" alt="">
                        <br><br>
                        <b>
                            Sentence Completion
                        </b>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/images/vocabulary.png" alt="">
                        <br><br>
                        <b>
                            Vocabulary
                        </b>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection