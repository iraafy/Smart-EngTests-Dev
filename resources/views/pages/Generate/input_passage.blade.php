@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h4 class="text-center" style="color: #CA6035"><b>Generate Sumary Question</b></h4>
    </div>
    <p>
        Summary questions ask about the passage as a whole. They ask you to summarize the main ideas. Specifically, there will be three main points that you have to choose. This type of question appears at the end of almost every reading passage.
    </p>
    <div class="row pt-3">
        <div class="p-2 pb-1">
            <label for="option" class="form-label fw-bold text-color-primary">Input Method</label>
            <select class="form-select" aria-label="option" id="option_form" name="option_form" onchange="showDiv(this)">
                <option value="link">Link</option>
                <option value="file">File</option>
            </select>
        </div>
        <div class="mt-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold text-color-primary">Title Passage</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mt-3" id="hidden_link" style="display:block;">
            <label for="exampleFormControlInput1" class="form-label fw-bold text-color-primary">Input Link</label>
            <input type="text" class="form-control">
        </div>
        <div class="mt-3" id="hidden_file" style="display:none;">
            <label for="exampleFormControlInput1" class="form-label fw-bold text-color-primary">Input File</label>
            <input class="form-control" type="file" id="formFile">
        </div>
    </div>
    <a href="/generate/preview-passage">
        <button class="btn bg-color-primary text-white float-end ps-5 pe-5 mt-5">Generate</button>
    </a>
</div>

<script type="text/javascript">
    var name = document.getElementById('firstName').value;
    window.localStorage.setItem('name', name);

    function showDiv(select) {
        if (select.value == "file") {
            document.getElementById('hidden_file').style.display = "block";
            document.getElementById('hidden_link').style.display = "none";
        } else {
            document.getElementById('hidden_file').style.display = "none";
            document.getElementById('hidden_link').style.display = "block";
        }
    }
</script>

@endsection