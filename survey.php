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

    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link href="style\style.css" rel="stylesheet">
    <link href="style\survey.css" rel="stylesheet">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->

    <!-- Bootsrap 4.5.0 -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->


    <style>
        .modal-header,
        h4,
        .close {
            background-color: #5cb85c;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }

        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>

</head>

<body>

    <!-- php connecting to database -->
    <?php
include 'includes/connect_to_db.php'
?>



    <!-- Navigation -->

    <?php
include 'includes/menu.php'
?>
<div class="container1">
<p>Complete this survey so we can make the perfect list for you! </p>
</div>
    <div class="container">
    <img id="surveyImage" src=".\img\pictures\form.png" alt="Complete the form">

        <!-- Button trigger modal1 -->
        <button type="button" class="btn btn-primary shift" data-toggle="modal" data-target="#teamModal">
            I. Your team
        </button>

        <!-- Modal 1-->
        <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#6648b1;">
                        <h5 class="modal-title" id="teamModalLabel">Your team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- the actual survey for the your team part -->
                        <form>
                            <div class="form-group">
                                <label for="nrHosts">How many people will be <b>hosting</b> meetings</label>
                                <input class="form-control" id="nrHosts" type="number"
                                    placeholder="Number of people hosting meetings">
                            </div>
                            <div class="form-group">
                                <label for="nrAttend">How many people will be <b>attending</b> your meetings</label>
                                <input class="form-control" id="nrAttend" type="number"
                                    placeholder="Number of people attending meetings">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- Button trigger modal2 -->
        <button type="button" class="btn btn-primary shift" data-toggle="modal" data-target="#paymentsModal">
            II. Payments, budget
        </button>

        <!-- Modal2 -->
        <div class="modal fade" id="paymentsModal" tabindex="-1" role="dialog" aria-labelledby="paymentsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#6648b1;">
                        <h5 class="modal-title" id="paymentsModalLabel">Budget</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- the actual survey for the budget part -->
                        <form>
                            <div class="form-group">
                                <label for="priceSelect"><b>Price range</b></label>
                                <select multiple class="form-control" id="priceSelect">
                                    <option>Free</option>
                                    <option>0 - min</option>
                                    <option>min - middle</option>
                                    <option>middle - max</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal3 -->
        <button type="button" class="btn btn-primary shift" data-toggle="modal" data-target="#prefModal">
            III. Preferences
        </button>

        <!-- Modal3 -->
        <div class="modal fade" id="prefModal" tabindex="-1" role="dialog" aria-labelledby="prefModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header " style="background-color:#6648b1;">
                        <h5 class="modal-title" id="prefModalLabel">Preferences</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- the actual survey for the preferences part -->
                        <form>
                            <b>Select</b> all that you find <b>important </b>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="hand" name="hand">
                                <label class="form-check-label" for="hand"> Raise hand</label><br>
                                <input class="form-check-input" type="checkbox" name="record" value="record">
                                <label class="form-check-label" for="record"> Record meeting</label><br>
                                <input class="form-check-input" type="checkbox" name="privacy" value="pricacy">
                                <label class="form-check-label" for="hand"> Privacy</label><br>
                                <input class="form-check-input" type="checkbox" name="screenshare" value="screenshare">
                                <label class="form-check-label" for="hand"> Screensharing</label><br>
                                <input class="form-check-input" type="checkbox" name="hand" value="Bike">
                                <label class="form-check-label" for="hand"> Raise hand</label><br>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>