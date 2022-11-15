@extends('layouts.logged-navbar')

@section('content')
<div class="container p-4 pt-5 mt-5">
    <h3 style="color: #3E6D81;" class="pb-3">
        <b>
            Detail Test.
        </b>
    </h3>
    <form method="post" action="">
        <table class="table">
            <tr>
                <td width="15%">Test Name</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": English Test 1">
                </td>
            </tr>
            <tr>
                <td>Question Type</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="testcode" class="form-control" id="testcode" placeholder="Test Code" value=": Error Identification, Grammar Coorection, dst">
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": Sunday, Aug 15 2022">
                </td>
            </tr>
            <tr>
                <td>Start Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": 9:30 AM">
                </td>
            </tr>
            <tr>
                <td>End Time</td>
                <td>
                    <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": 10:30 AM">
                </td>
            </tr>
        </table>

        <div class="mb-2 mt-2">
            <a href="<?= url('cbt/start-test'); ?>">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Do Test</button>
            </a>
        </div>
    </form>
</div>
@endsection