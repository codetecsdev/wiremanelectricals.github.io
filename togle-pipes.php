<?php 
include('togle-bar.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wireman</title>
</head>
<body style="padding-bottom:90px">
<div class="container mt-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-3">
               <form action="manage-cart-wireman.php" method="POST">
                <div class="card">
                  <img src="pics\20mmpvc.png" class="card-img-top" class="card-img-top img-fluid" alt="...">
                  <div class="card-body text-center">
                    <h5>pvc pipes</h5>
                    <input type="hidden" name="size[]" value="20mm">
                    <label for="">20mm</label><br>
                    <input type="hidden" name="Item_Name" value="20mm pvc pipe">
                    <label for="">ksh 60</label><br>
                    <input type="hidden" name="price" value="60"><br>
                    <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                  </div>
                </div>
               </form> 
            </div>
            <div class="col-lg-3">
               <form action="manage-cart-wireman.php" method="POST">
                <div class="card">
                  <img src="pics\20mmcopler.jpg" class="card-img-top" class="card-img-top img-fluid" alt="...">
                  <div class="card-body text-center">
                    <h5>coupler</h5>
                    <label for="">20mm</label><br>
                    <input type="hidden" name="Item_Name" value="20mm coupler">
                    <label for="">ksh 5</label><br>
                    <input type="hidden" name="price" value="5"><br>
                    <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                  </div>
                </div>
               </form> 
            </div>
            <div class="col-lg-3">
               <form action="manage-cart-wireman.php" method="POST">
                <div class="card">
                  <img src="pics\25mmcopler.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5>coupler</h5>
                    <label for="">25mm</label><br>
                    <input type="hidden" name="Item_Name" value="25mm coupler">
                    <label for="">ksh 10 </label><br>
                    <input type="hidden" name="price" value="10"><br>
                    <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                  </div>
                </div>
               </form> 
            </div>
        </div>
    </div>
</body>
</html>