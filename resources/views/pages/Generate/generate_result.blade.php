@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-3 pt-3">
        <h4 class="text-center mb-5 mt-4" style="color: #CA6035"><b>Preview Question</b></h4>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat incidunt fugiat laudantium eos! Quas minus saepe tenetur nesciunt veniam ipsam quod, quidem nisi tempore facilis quaerat rerum, modi reiciendis! Sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est praesentium delectus reiciendis! Fuga officia libero deserunt? Molestiae, non, atque debitis placeat amet maiores earum optio distinctio odio corrupti tenetur at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a quasi tempore consectetur recusandae, excepturi delectus totam quo at voluptate debitis iusto vel autem distinctio nam corrupti voluptas nostrum neque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quae neque unde eaque. Voluptatibus, voluptate deleniti a eveniet nemo molestiae ea nostrum dolore doloremque neque recusandae, officiis fuga nobis alias?
        </p>
    </div>
    <div class="row ps-4 pe-4">
        <div class="card p-4 ps-3" style="box-shadow:none;">
            <div class="row">
                <div class="col">
                    <p>
                        1. In paragraph 1, why does the writer include information about the Cherokee language? <br>
                        &emsp;A. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;B. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;C. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;D. To show how simple, traditional cultures can have complicated grammar structures <br>
                        <span class="fw-bold">
                            &emsp;Ans: A
                        </span>
                    </p>
                </div>
                <div class="col-1">
                    <button class="float-end btn bg-color-primary text-white">
                        <iconify-icon inline icon="clarity:note-edit-line"></iconify-icon>
                    </button>
                    <button class="float-end btn bg-color-secondary text-white mt-2">
                        <iconify-icon inline icon="fluent:delete-20-regular"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row ps-4 pe-4">
        <div class="card p-4 ps-3" style="box-shadow:none;">
            <div class="row">
                <div class="col">
                    <p>
                        1. In paragraph 1, why does the writer include information about the Cherokee language? <br>
                        &emsp;A. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;B. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;C. To show how simple, traditional cultures can have complicated grammar structures <br>
                        &emsp;D. To show how simple, traditional cultures can have complicated grammar structures <br>
                        <span class="fw-bold">
                            &emsp;Ans: A
                        </span>
                    </p>
                </div>
                <div class="col-1">
                    <button class="float-end btn bg-color-primary text-white">
                        <iconify-icon inline icon="clarity:note-edit-line"></iconify-icon>
                    </button>
                    <button class="float-end btn bg-color-secondary text-white mt-2">
                        <iconify-icon inline icon="fluent:delete-20-regular"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <a href="/question-collection">
        <button class="btn bg-color-primary text-white float-end ps-5 pe-5 mt-3 me-2 mb-5 fw-bold">Save</button>
    </a>
</div>
@endsection