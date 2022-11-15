@extends('layouts.logged-navbar')

@section('content')
<div class="p-5 pb-3 font-poppins">
    <p id="demo" style="color: #3e6d81; font-size: 20px; font-weight: 600; text-align: right;"></p>
    <div class="row mb-4 mt-2 gap-4">
        <div class="col-lg-9 col-md-9 col-12 p-4" style="text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Cumque repellendus consequatur eveniet
                laborum. Rerum in perferendis labore officiis
                reprehenderit officia quas dolore minus, saepe
                repudiandae laudantium aliquam temporibus, inventore
                maxime? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Cumque repellendus consequatur
                eveniet laborum. Rerum in perferendis labore
                officiis reprehenderit officia quas dolore minus,
                saepe repudiandae laudantium aliquam temporibus,
                inventore maxime? Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Cumque repellendus
                consequatur eveniet laborum. Rerum in perferendis
                labore officiis reprehenderit officia quas dolore
                minus, saepe repudiandae laudantium aliquam
                temporibus, inventore maxime? Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Cumque
                repellendus consequatur eveniet laborum. Rerum in
                perferendis labore officiis reprehenderit officia
                quas dolore minus, saepe repudiandae laudantium
                aliquam temporibus, inventore maxime?
            </p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="option" value="A" />
                <label class="form-check-label">
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="option" value="B" />
                <label class="form-check-label">
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="option" value="C" />
                <label class="form-check-label">
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="option" value="D" />
                <label class="form-check-label">
                </label>
            </div>
            <div class="row mt-3" style="float: right">
                <a href="<?= url('cbt/test-result'); ?>">
                    <button class="btn" style="background-color: #3e6d81; width: 150px; color: white;">
                        Next
                    </button>
                </a>
            </div>
        </div>
        <div class="col-lg col-md col p-4" style="background-color: white;text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
            <!-- <div class="row row-cols-5 gap-3" style="text-align: center;">
                <a style="background-color: lightgray;" class="page-link">
            </div> -->
            <?php
            $total_question = 10;
            ?>
            <div class="row row-cols-5 gap-3" style="text-align: center;">
                <?php for ($x = 1; $x <= $total_question; $x++) { ?>
                    <a style="background-color: lightgray;" class="page-link" href="?question=<?php echo $x ?>">
                        <?php echo $x; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("September 22, 2022 17:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "<span class='iconify-inline' data-icon='fluent:timer-12-regular' style='color: #3e6d81;'></span>   " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
@endsection