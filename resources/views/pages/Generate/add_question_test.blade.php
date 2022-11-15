@extends('layouts.logged-navbar')

@section('content')
<div class="container-fluid mb-5">
    <div class="row p-4 pb-0 pt-5">
        <h4 style="color: #CA6035;" class="text-center">
            <b>
                Add Question to Your Test!
            </b>
        </h4>

        <div class="row mt-5">
            <form>
                <label for="Passage">
                    <b>
                        Passage
                    </b>
                </label>
                <p class="mt-2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique corporis eveniet omnis soluta quod minima, doloremque commodi hic nostrum, earum aperiam labore id delectus, eos praesentium itaque aliquid. Officia, repellendus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique corporis eveniet omnis soluta quod minima, doloremque commodi hic nostrum, earum aperiam labore id delectus, eos praesentium itaque aliquid. Officia, repellendus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique corporis eveniet omnis soluta quod minima, doloremque commodi hic nostrum, earum aperiam labore id delectus, eos praesentium itaque aliquid. Officia, repellendus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique corporis eveniet omnis soluta quod minima, doloremque commodi hic nostrum, earum aperiam labore id delectus, eos praesentium itaque aliquid. Officia, repellendus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique corporis eveniet omnis soluta quod minima, doloremque commodi hic nostrum, earum aperiam labore id delectus, eos praesentium itaque aliquid. Officia, repellendus?
                </p>

                <div class="mb-4 mt-4">
                    <h6>
                        <b>
                            No. 1
                        </b>
                    </h6>
                    <label for="Question">
                        Question
                    </label>
                    <input class="form-control mb-1" type="text" name="question" id="question">

                    <label for="Answer">
                        Answer
                    </label>
                    <input class="form-control mb-1" type="text" name="answer" id="answer">
                </div>
                <div class="mb-4">
                    <h6>
                        <b>
                            No. 2
                        </b>
                    </h6>
                    <label for="Question">
                        Question
                    </label>
                    <input class="form-control mb-1" type="text" name="question" id="question">

                    <label for="Answer">
                        Answer
                    </label>
                    <input class="form-control mb-1" type="text" name="answer" id="answer">
                </div>
                <div class="mb-4">
                    <h6>
                        <b>
                            No. 3
                        </b>
                    </h6>
                    <label for="Question">
                        Question
                    </label>
                    <input class="form-control mb-1" type="text" name="question" id="question">

                    <label for="Answer">
                        Answer
                    </label>
                    <input class="form-control mb-1" type="text" name="answer" id="answer">
            </form>
            <a href="{{ asset('/question-collection') }}">
                <button class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Add Question</button>
            </a>
        </div>
    </div>
</div>
@endsection