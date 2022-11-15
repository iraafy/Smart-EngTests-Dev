@extends('layouts.logged-navbar')

@section('content')
<div class="container-fluid mt-5">
    <div style="color: #CA6035;" class="row p-4 pb-0 pt-5">
        <h3>
            <b>
                Add Question to Your Test!
            </b>
        </h3>
        <p style="color: black;">
            Below is your question collection. You can add the question that’s been generated to the test.
        </p>
        <div class="mb-2">
            <a href="cbt_test.php">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Test Preview</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="accordion accordion-flush m-0" id="accordionFlushExample">

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        User Input Question
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-5" style="background-color: white !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illo iure, culpa sapiente, nulla minus perspiciatis mollitia neque praesentium alias beatae maiores possimus modi iste veniam? Eveniet similique autem quae?</div>
                </div>
            </div>

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Short Answer Question
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-5" style="background-color: white !important;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit amet ipsa repudiandae porro illum quis nulla nobis, inventore laborum rem tempore architecto. Commodi nam numquam non. Est deleniti eum provident!</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection