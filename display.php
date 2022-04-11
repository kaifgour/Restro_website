<!DOCTYPE html>
<html>
<head>
<title></title>
<style>

  body{
    background: antiquewhite;
  }
  h2{
      font-size:18px;
      text-align:center;

  }
  table{
     border-collapse:collapse;
     box-shadow:0 10px 20px 0 rgba(0,0,0,0.3);
     border-radius:10px;
     margin:auto;
  }
  th,td{
      border:1px solid #f2f2f2;
      padding:8px 30px;
      text-align:center;
      color:black;
  }
  th{
      font-weight:500;
  }
</style>
</head>
<body>

<div>
<h2>Your Entered Data</h2>
</div>
    <table>
     <thead>
       <tr>
           <th>SR</th>
           <th>NAME</th>
           <th>PHONE NO</th>
           <th>SEATS</th>
           <th>DATE</th>
           <th colspan="2">OPERATION</th>
       </tr>      
     </thead>
     <tbody>
    <?php

    include 'connection.php';
    
    $selectquery= "SELECT * from booking";
    $query = mysqli_query($conn,$selectquery);

    $res =mysqli_fetch_array($query);

    do{
    ?>
    <tr>
        <td><?php echo $res['Sr'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['phone'];?></td>
        <td><?php echo $res['seats'];?></td>
        <td><?php echo $res['date'];?></td>
        <td><a href="update.php?Sr=<?php echo $res['Sr']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class='fas fa-edit' style='font-size:24px; color:black;'></i></a></td>
        
  
     </tr>
     <?php
    }while($res = mysqli_fetch_array($query));
    ?> 
    </tbody>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </table>
    </body>
</html>