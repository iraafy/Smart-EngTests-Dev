@extends('layouts.logged-navbar')

@section('content')
<div class="container">
    <div style="color: #CA6035;" class="row mb-5 pt-5 mt-3 text-center">
        <h3>
            <b>
                Error Identification
            </b>
        </h3>
    </div>

    @foreach ($questions as $question)
    @if ($question->category == 'Error Identification')
    <div class="card p-3 mt-3 shadow-md">
        {{$question->passage_id}}
        <br>
        {{$question->question}}
        <br>
        {{$question->answer}}
        <br>
        <div class="row mt-4">
            <div class="col">
                <span>
                    <a href="/add-question-to-test/{{$id}}/{{$question->id}}">
                        <button class="btn btn-light" style="border: 1px solid lightgrey;">
                            <iconify-icon inline icon="fluent:add-16-filled" style="color: green;"></iconify-icon>
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection