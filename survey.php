<?php
session_start();
$page = "survey"; 		//used to find the active page for the menu; used in includes/menu/php
?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/logo/icons811.png" />
<!--favicon -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmniCompare Survey</title>
    <!-- Bootsrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script> -->
    <script src=https://kit.fontawesome.com/a076d05399.js> </script> <!-- <script
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script> -->

    <link href="style\style.css" rel="stylesheet">
    <link href="style\survey.css" rel="stylesheet">
    <link href="style\survey1.css" rel="stylesheet">

    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->

    <!-- Bootsrap 4.5.0 -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->


<body>

    <!-- php connecting to database -->
    <?php
include 'includes/connect_to_db.php'
?>



    <!-- Navigation -->

    <?php
include 'includes/menu.php'
?>

    <!-- getting the price ranges from the sb to use those as options -->
    <?php
 $minimumPriceY = mysqli_query($conn, "SELECT min(priceY) from service");
 if ($minimumPriceY) {
     while ($row = mysqli_fetch_assoc($minimumPriceY)) {
             $m =  $row["min(priceY)"];
     }
 } 

$maximumPriceY = mysqli_query ($conn, "SELECT max(priceY) from service");
if ($maximumPriceY){
    while ($row = mysqli_fetch_assoc($maximumPriceY)){
        $mx = $row["max(priceY)"];
    }
}

$avgPriceY = mysqli_query ($conn, "SELECT ROUND(avg(priceY)) as avarage from service");

if ($avgPriceY){
    while ($row = mysqli_fetch_assoc($avgPriceY)){
        $a = $row["avarage"];
    } 
}else echo "no";
$optionValues = array (
    'free' => 'Free',
    'minimum' => '$'.$m.' - $'.$a,
    'avarage' => '$'.$a.' - $'.$mx
   // 'maximum' => $mx
)

 ?>

    <div class="container1">
        <h2 class="smoll">Complete this survey so we can make the perfect list for you! </h2>
    </div>
    <div class="container">
        <img id="surveyImage" src=".\img\pictures\form.png" alt="Complete the form">




        <!-- MultiStep Form -->
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <form id="msform" action="result.php" method="post">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" id="account"><strong>Your team</strong></li>
                    <li id="personal"><strong>Payments</strong></li>
                    <li id="payment"><strong>Preferences</strong></li>
                    <li id="confirm"><strong>Finish</strong></li>
                </ul> <!-- fieldsets -->
                <fieldset>
                    <div class="form-card">
                        <h2 class="fs-title">Tell us about your team</h2>
                        <label for="nrHosts">How many people will be <b>hosting</b> meetings</label>
                        <input class="form-control" id="nrHosts" name="nrHosts" type="number"
                            placeholder="Number of people hosting meetings" required>
                            <p id="hostError" class="formError"></p>
                        <label for="nrAttend">How many people will be <b>attending</b> your
                            meetings</label>
                        <input class="form-control" id="nrAttend" name="nrAttend" type="number"
                            placeholder="Number of people attending meetings">
                            <p id="attendError" class="formError"></p>
                    </div> <input type="button" name="next" id="next1" class="next action-button" value="Next Step" />
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h2 class="fs-title">Payments, budget</h2>
                        <label for="priceSelect"><b>Price range</b></label>
                        <?php 
$html= '<select name="range" class="form-control" id="priceSelect" >';
foreach($optionValues as $value => $display){
        $html .= '<option value="'.$value.'" selected>'.$display.'</option>';
}

$html .= '</select>';


echo $html;
?>

                        How <b>frequently </b> do you want to pay? <br>
                        <input class="form-check-input" type="radio" name="gridRadios" id="monthlyRadio" value="monthly"
                            checked>
                        <label class="form-check-label" for="monthlyRadio">
                            Monthly
                        </label><br>
                        <input class="form-check-input" type="radio" name="gridRadios" id="yearlyRadio" value="yearly">
                        <label class="form-check-label" for="yearlyRadio">
                            Yearly
                        </label><br>

                    </div> <input type="button" name="previous" class="previous action-button-previous"
                        value="Previous" /> <input type="button" name="next" class="next action-button"
                        value="Next Step" />
                </fieldset>
                <fieldset>
                    <div class="form-card ">
                        <h2 class="fs-title">Preferences</h2>
                        <b>Select</b> all that you find <b>important </b>
                        <div class="form-check">
                        <input type="hidden" class="form-check-input" type="checkbox" name="hand[]" id="checkbox2" value="webinar" checked>
                           <!-- <label type="hidden" class="form-check-label" for="hand">webinar</label><br> fix: hand[] cant be empty otherwise php breaks -->
                            <?php 
                       $features = mysqli_query($conn, "select featureName from features");
                       $i=0;
                       while($serviceStack = mysqli_fetch_assoc($features)){
                           ?>
                            <input class="form-check-input" type="checkbox" name="hand[]" id="checkbox"
                                value="<?=$serviceStack["featureName"];?>">
                            <label class="form-check-label" for="hand" ><?=$serviceStack["featureName"];?></label><br>
                            <?php 
                           $i++;}?>
                        </div>

                    </div> <input type="button" name="previous" class="previous action-button-previous"
                        value="Previous" /> <input type="button" name="finish" class="next action-button"
                        value="Confirm" />
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h2 class="fs-title text-center">Congrats!</h2> <br><br>
                        <div class="row justify-content-center">
                            <div class="col-6"> <img src=".\img\succ.png" class="fit-image"> </div>
                        </div> <br><br>
                        <div class="row justify-content-center">
                            <div class="col-7 text-center">
                                <h5>We have created your personalized list</h5>
                                <button type="submit" class="btn btn-primary">See my list</button>
                            </div>

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>



    <!--- Footer -->
    <?php
include 'includes/footer.php'
?>

<script src="./formValidation.js"> </script>


</body>

</html>