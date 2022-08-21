<?php
include('togle-bar.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wireman</title>
</head>
<body>
<div class="container mt-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <form action="manage-cart-wireman.php" method="POST">
                    <div class="card">
                        <img src="3-way-switch.jpg" alt="">
                        <div class="card-body text-center">
                            <h6>3-WAY Switch</h6>
                            <input type="hidden" name="Item_Name" value="3-WAY SWITCH"><br>
                            <label for="">ksh 570</label><br>
                            <input type="hidden" name="price" value="570">
                            <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage-cart-wireman.php" method="POST">
                    <div class="card">
                        <img src="pics\20A-waterheaterswitch-700.jpg" alt="">
                        <div class="card-body text-center">
                            <h6>20A Water Heater </h6>
                            <input type="hidden" name="Item_Name" value="water heater switch"><br>
                            <label for="">ksh 700</label><br>
                            <input type="hidden" name="price" value="700">
                            <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage-cart-wireman.php" method="POST">
                    <div class="card">
                        <img src="pics\cooker_switch_white.jpg" alt="">
                        <div class="card-body text-center">
                            <h6>Cooker Switch</h6>
                            <input type="hidden" name="Item_Name" value="cooker-switch"><br>
                            <label for="">ksh 450</label><br>
                            <input type="hidden" name="price" value="450">
                            <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>