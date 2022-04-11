<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Booking</title>
</head>
<body>
    <div class="container">
    <div class="box">
            <h2>TABLE RESERVATION</h2>
            <div class="panel-body">
                <form action="saveData.php" method="post" style="font-size: 24px;">
                   <div class="form-group row">
                   <label for="inputName" class="col-sm-2 col-form-label-lg">NAME</label>
                   <div class="col-sm-12">
                     <input type="text" class="form-control" id="inputName" name='name' placeholder='Enter your Name'  style="width: 75% ;height: 22px;" required>
                   </div>
                 </div>
                   <div class="form-group row">
                   <label for="inputPhone" class="col-sm-2 col-form-label-lg">PHONE NUMBER</label>
                   <div class="col-sm-12">
                     <input type="number"   class="form-control" id="inputPhone" name='phone' placeholder='Enter your Number' style="width: 75%; height: 22px;" required>
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputSeats" class="col-sm-2 col-form-label-lg">NUMBER OF SEATS</label>
                   <div class="col-sm-12">
                     <input type="number" class="form-control" id="inputSeats" name='seats' placeholder='Number of Seats' style="width: 75%; height: 22px;" required>
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputDate" class="col-sm-2 col-form-label-lg">DATE</label>
                   <div class="col-sm-12">
                     <input type="date" class="form-control" id="inputAddress3" name='date' placeholder='' style="width: 75%; height: 22px;" required>
                   </div>
                 </div>
                 <div class="form-group row">
                   <div class="wrapper">
                     <button type="submit" class="btn">SUBMIT</button>
                   </div>
                 </div>
               </form>
    </div>
    </div>
  
    
</body>
</html>

<?php
include "connection.php";
?>