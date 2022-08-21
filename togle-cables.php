<?php
 session_start();
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
<body style="padding-bottom:90px;">

<!---->
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
            <form action="manage-cart-wireman.php" method="POST">
               <div class="card">
               <img src="pics\25mmred.jpg" class="card-img-top img-fluid" alt="cable">
                <div class="card-body text-center">
                    <input type="hidden" name="Item_Name" value="2.5mmred">
                    <input type="hidden" name="color[]" value="red">
                    <label for="">SIZE 2.5mm</label><br>
                    <input type="hidden" name="size[]" value="2.5">
                    <label for="">price <br>ksh 4500 </label><br>
                    <input type="hidden" name="price" value="4500"><br>
                    <button class="btn  btn-success" name="Add_To_Cart">Add To Cart</button>
                    </label>
                </div>
                </div>
             </form>
            </div>

            <div class="col-lg-3 col-md-6">
            <form action="manage-cart-wireman.php" method="POST">
               <div class="card">
                  <img src="pics\25mmtwin.png" class="card-img-top img-fluid" alt="cable">
                  <div class="card-body text-center">
                     <input type="hidden" name="Item_Name" value="twinwhite">
                      <input type="hidden" name="color[]" value="white">
                     <label for="">SIZE 2.5mm twin</label><br>
                     <input type="hidden" name="size[]" value="2.5">
                     <label for="">price <br>ksh 5500</label><br>
                     <input type="hidden" name="price" value="5500"><br>
                     <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                  </div>
                </div>
              </form>
            </div>
       
        <div class="col-lg-3">
        <form action="manage-cart-wireman.php" method="POST">
            <div class="card">
               <img src="pics\25mmred.jpg" class="card-img-top img-fluid" alt="cable">
               <div class="card-body text-center">
               <input type="hidden" name="Item_Name" value="1.5red">
               <input type="hidden" value="red">
               <label class="cab">SIZE 1.5mm</label><br>
               <input type="hidden" name="size[]" value="1.5">
               <label for="">price <br>ksh 3000</label><br>
               <input type="hidden" name="price" value="3000"><br>
               <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
               </div>
            </div>
         </form>
         </div>
         <!---->
         <div class="col-lg-3">
         <form action="manage-cart-wireman.php" method="POST">
          <div class="card">
             <img src="pics\6mmtwin.jpeg" class="card-img-top img-fluid" alt="cable">
             <div class="card-body text-center">
                <input type="hidden" name="Item_Name" value="6mmtwin">
                <input type="hidden" name="color[]" value="black">
                <!--<h5>HAMAD</h5>-->
                <label class="cab">SIZE 6mm twin</label><br>
                <input type="hidden" name="size[]" value="6">
                <label for="">price <br>ksh 7000</label><br>
                <input type="hidden" name="price" value="7000"><br>
                <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
             </div>
            </div>
        </form>
        </div>
         <!---->
        </div>
      </div>

        <div class="container mt-5 ">
            <div class="row justify-content-center">
               <div class="col-lg-3">
               <form action="manage-cart-wireman.php" method="POST">
                   <div class="card">
                    <img src="pics\25mmtwin.png" class="card-img-top img-fluid" alt="cable" >
                    <div class="card-body text-center">
                        <input type="hidden" name="Item_Name" value="1.5twin">
                        <input type="hidden" name="color[]" value="white">
                        <label class="cab">SIZE 1.5mm twin</label><br>
                        <input type="hidden" name="size[]" value="1.5">
                        <label for="">price <br>ksh 3700</label><br>
                        <input type="hidden" name="price" value="3700"><br>
                        <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                    </div>
                    </div>
                 </form>
                </div>

                <div class="col-lg-3">
                <form action="manage-cart-wireman.php" method="POST">
                    <div class="card" >
                        <img src="pics\25mmblue.jpg" class="card-img-top img-fluid" alt="cable">
                        <div class="card-body text-center">
                        <input type="hidden" name="Item_Name" value="2.5blue">
                        <input type="hidden" name="color[]" value="blue">
                        <label for="">SIZE 2.5mm</label><br>
                        <input type="hidden" name="size[]" value="2.5">
                        <label for="">price <br>ksh 6000</label><br>
                        <input type="hidden" name="price" value="6000"><br>
                        <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                        </div>
                    </div>
                 </form>
                </div>


                <div class="col-lg-3">
                <form action="manage-cart-wireman.php" method="POST">
                    <div class="card">
                        <img src="pics\6mmblack.jpg" class="card-img-top img-fluid" alt="cable">
                        <div class="card-body text-center">
                            <input type="hidden" name="Item_Name" value="6mmblack">
                            <input type="hidden" name="color[]" value="black">
                            <label for="">SIZE 6mm</label><br>
                            <input type="hidden" name="size[]" value="6">
                            <label for="">price <br>ksh 6000</label><br>
                            <input type="hidden" name="price" value="6000"><br>
                            <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                        </div>
                    </div>
                 </form>
                </div>
                <!---->
                <div class="col-lg-3">
                    <form action="manage-cart-wireman.php" method="POST">
                       <div class="card">
                           <img src="pics\25mmearth.jpg" class="card-img-top img-fluid" alt="cable">
                           <div class="card-body text-center" >
                           <!--<h5>EARTH WIRE</h5>-->
                           <input type="hidden" name="Item_Name" value="earth">
                           <input type="hidden" name="color[]" value="green">
                           <label class="cab">SIZE 2.5mm</label><br>
                           <input type="hidden" name="size[]" value="2.5">
                           <label for="">price <br>ksh 4500</label><br>
                           <input type="hidden" name="price" value="4500"><br>
                           <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                           </div>
                       </div>
                   </form>
                </div>
                <!---->
            </div>
     </div>

     <!--<div class="container mt-5 my-5">
        <div class="row justify-content-center">
        <div class="col-lg-3">
        <form action="manage-cart-wireman.php" method="POST">
           <div class="card">
              <img src="pics\25mmearth.jpg" class="card-img-top img-fluid" alt="cable">
              <div class="card-body text-center" >
                <input type="hidden" name="Item_Name" value="earth">
                <input type="hidden" name="color[]" value="green">
                <label class="cab">SIZE 2.5mm</label><br>
                <input type="hidden" name="size[]" value="2.5">
                <label for="">price <br>ksh 4500</label><br>
                <input type="hidden" name="price" value="4500"><br>
                <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
               </div>
            </div>
         </form>
        </div>--->
         <!---->
         <!--<div class="col-lg-3">
         <form action="manage-cart-wireman.php" method="POST">
            <div class="card">
               <img src="pics\15multistrand.jpg" class="card-img-top" alt="...">
               <div class="card-body text-center">
                  <input type="hidden" name="Item_Name" value="1.5YWR">
                  <input type="hidden" name="color[]" value="YWR">
                  <label class="cab">SIZE 1.5mm</label><br>
                  <input type="hidden" name="size[]" value="1.5">
                  <p class="card-text">Price: ksh 3000</p>
                  <input type="hidden" name="price" value="3000"><br>
                  <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
                </div> 
            </div>
          </form>
         </div>-->
         <!---->
       <!--<div class="col-lg-3">
        <form action="manage-cart-wireman.php" method="POST">
          <div class="card">
             <img src="pics\6mmtwin.jpeg" class="card-img-top img-fluid" alt="cable">
             <div class="card-body text-center">
                <input type="hidden" name="Item_Name" value="6mmtwin">
                <input type="hidden" name="color[]" value="black">
                <label class="cab">SIZE 6mm twin</label><br>
                <input type="hidden" name="size[]" value="6">
                <label for="">price <br>ksh 7000</label><br>
                <input type="hidden" name="price" value="7000"><br>
                <button class="btn btn-primary btn-success" name="Add_To_Cart">Add To Cart</button>
             </div>
            </div>
        </form>
       </div>
      </div>
    </div>-->
</body>
</html>