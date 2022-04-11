<?php
    include "connection.php";

    $name =$_POST["name"];
    $phone =$_POST["phone"];
    $seats =$_POST["seats"];
    $date =$_POST["date"];

    if($conn->connect_error){
        die("connection Failed:" .$conn->connect_error);
    }else{
        ?>
        <script>
        alert("Your data is successfully registered");
        </script>
        <?php
        $insertquery = $conn->prepare("insert into booking(name, phone, seats, date) values(?,?,?,?)");
        $insertquery->bind_param("siis",$name,$phone,$seats,$date);
        $insertquery->execute();
        $insertquery->close();
    }
    
    ?>

<html>
 <head>
 <style>
     body{
         background-color:black;
     }
     h1{
        text-align:center;
        font-family:sans-serif;
        color:#2194e0;
        padding-top: 15px;
        font-weight: 100;
        text-transform:uppercase;
     }
    .button{
        display:block;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
    .record{
        padding:0.75em 2em;
        text-align:center;
        text-decoration:none;
        font-family:sans-serif;
        color:#2194e0;
        font-size:32px;
        display:inline-block;
        border:2px solid #2194e0;
        border-radius:0.3em;
        transition:all 0.2s ease-in-out;
        position:relative;
        overflow:hidden;
        top:-225px;
    }

    .record:before{
        content:"";
        background-color: rgba(225,255,255,0.5);
        height:100%;
        width:3em;
        display:block;
        position:absolute;
        top:0;
        left:-4.5em;
        transform: skewX(-45deg) translateX(0);
        transition:none;
    }

    .record:hover{
        background-color: #2194e0;
        color:#fff;
        border-bottom: 4px solid #1977b5;
    }
    
    .record:before{
        transform:skewX(-45deg) translateX(13.5em);
        transition:all 0.5s ease-in-out;
    }

    @keyframes sheen{
        0%{
            transform:skewY(-45deg) translateX(0);
        }
        100%{
            transform: skewY(-45deg) translateX(12.5em);
        }
    }
 </style>
</head>
 <h1>Your details has been recorded</h1>
 <div class="button">
 <a href="display.php" class='record'>RECORD</a>
 </div>
</html>