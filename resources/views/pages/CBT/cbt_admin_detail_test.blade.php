@extends('layouts.logged-navbar')

@section('content')
<div class="container p-4 pt-5 mt-5">
    <h3 style="color: #3E6D81;">
        <b>
            Detail Test
        </b>
    </h3>
    <p class="mb-3">
        {{ $description}}
    </p>
    <hr>
    <form method="post" action="">
        <table class="table table-borderless">
            <tr>
                <td width="15%">Test Name</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$title}}">
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$date}}">
                </td>
            </tr>
            <tr>
                <td>Start Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$start_time}} ">
                </td>
            </tr>
            <tr>
                <td>End Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$end_time}}">
                </td>
            </tr>
            <tr>
                <td>End Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$code}}">
                </td>
            </tr>
            <tr>
                <td>End Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": {{$password}}">
                </td>
            </tr>
        </table>

        <div class="mb-2 mt-2">
            <a href="{{ url('cbt/select-question', $id) }}">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81;">Add Question</button>
            </a>
            &emsp;
            <a href="<?= url('cbt/preview-test'); ?>">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81;">Preview</button>
            </a>
        </div>
    </form>
</div>
@endsection