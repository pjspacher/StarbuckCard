<!DOCTYPE html>
<?php require 'connect.php'; ?>
<html>
<head>
	<meta charset="utf-8">
	<title>STARBUCK</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    <style type="text/css">
      html {
        height: 100%;
      }
      body {
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      body{
        background-color:#fff;
      }
      .header{
       background: linear-gradient(to bottom, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 65%, rgba(117,137,12,1) 100%);
       height: 46px;
       background-repeat: no-repeat;
      }
      .header h3{
        margin: 0;
        line-height: 41px;
        color: #fff;
      }
      .acc332{
        color: #acc332;
      }
      .fff{
        color: #FFF;
      }
      .c989898{
        color: #989898;
      }
      .c130328{
        color: #130328;
      }
      .ccc{
        color: #ccc;
      }
      .b7b7b7{
        color: #888888;
      }
      .vertical-center {
        min-height: 114px;
        display: flex;
        align-items: center;
      }
      .font-weight-bold{
        font-weight: bold;
      }
      .nonhover:hover{
        color: #fff;
      }
      footer {
       width: 100%;
      position: fixed;
      bottom: 0;
      left: 0;
      z-index: 99;

      }

      #footer-content {
        display: none;  
      }
      #footer-right {
        width: 90%;
        height: 240px;
        background-color: #fff;
        opacity: 0.9; 
        margin: 0 auto;
        border-radius: 15px;
        margin-bottom:20px;
        box-shadow: 0 3px 57px 0 rgba(0, 0, 0, 0.2), 0 18px 67px 0 rgba(0, 0, 0, 0.19);
      }

      .toggle-footer {
          width: 48px;
          margin: 0 auto;
          padding: 4px;
          cursor: pointer;
          text-align: center;
          background-color: #000; 
          opacity: 0.3;
          border-top-left-radius:  8px;
          border-top-right-radius: 8px;
      } 
      .dropdown-toggle{
        border-radius: 0 22px 22px 0;
        background-color: #888787;
        color: #fff;
        width: 120px;
        float: left;
        font-size: 13px;
         color: #fff;
      }
    </style>
</head>
<body>
  <div class="header">
  <div class="col-xs-2 text-center">
    <a href="index.php" class="fff nonhover"><i class="fa fa-angle-left fa-3x"></i></a>
  </div>
  <div class="col-xs-9 text-center">
    <h3>My Benefit</h3>
  </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="col-xs-2">
          <img src="img/sc-sm.png" style="float: right;    margin-right: -33px;
" width="40px;">
        </div>
        <div class="col-xs-10">
          <div class="col-xs-12 b7b7b7" style="margin-top: 5px;">12 Drinks Purchase Until Your Next Free Tail Drink</div>
          <div class="col-xs-12" style="height: 20px; margin-top: 10px;">
          <div class="col-xs-11" style="background-color:#b6b6b6; height: 100%; position: absolute;"></div>
            <div class="col-xs-1" style="background-color:#96895b; height: 100%;">
            </div>
          </div>
          <div class="col-xs-12 text-center b7b7b7">
            1/12 (Expires In 2017-05-18)
          </div>
        </div>
      </div>
         <div class="col-xs-12" style="margin-top: 20px; margin-bottom: 20px;">
         <div class="col-xs-4"></div>
          <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius: 22px 0 0 22px; width: 80px; border-right:2px solid #ccc; color: #fff;">Filter By:
          </div>
         <div class="dropdown toggle-up">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="color: #fff;">Active
          <span class="caret"></span></button>
          </div>
         </div>
      <div class="col-xs-12 text-center b7b7b7" style="height: 30px; border-bottom:2px solid #9acf80;">You are currently eligibleto redeem the following reward(s):</div>
    </div>
  </div>

  <div class="container" style="margin-top: 60px;">
    <div class="row">
      <div class="col-xs-12">
        <img src="img/sc-lg.png" width="60px;" class="center-block">
      </div>
      <div class="col-xs-12 text-center">
      <div class="col-xs-1"></div>
      <div class="col-xs-10">
        <h4 style="color: #238463;" class="font-weight-bold">You don't have any earned Rewords at the moment.</h4>
        </div>
        <div class="col-xs-1"></div>
      </div>
      <div class="col-xs-1"></div>
      <div class="col-xs-10" style="height: 18px; border-bottom:2px solid #9acf80;"></div>
      <div class="col-xs-1"></div>

    </div>
  </div>
  <div class="container" style="margin-top: 18px;">
    <div class="row">
      <div class="col-xs-1"></div>
      <div class="col-xs-10 b7b7b7" style="padding: 0; padding-left: 10px;">Collect Stars, get more rewords with your registered Starbucks Card and earn 1 Star for envery THB 100 purchase.<br>
      For a complete information of My Starbucks Rewords&trade;,visit<br>
      <a href="https://www.starbuckscard.in.th/cards/" style="color: #9acf80;"><u>https://www.starbuckscard.in.th/cards/</u></a>
      </div>
      <div class="col-xs-1"></div>
    </div>
  </div>

  <footer>
    <div id="footer-content">
        <div id="footer-right">
           <div class="rows">
             <a style="cursor: pointer;"><div class="col-xs-12 text-center font-weight-bold bghover toggle-up"><h3>Active</h3></div></a>
             <a style="cursor: pointer;"><div class="col-xs-12 text-center font-weight-bold bghover1" style="border-style: solid;
              border-bottom-width: 1px;
              border-color: #ccc;
              border-top-width: 1px;
              border-left: 0;
              border-right: 0;"><h3>Redeemed</h3></div></a>
              <a style="cursor: pointer;"><div class="col-xs-12 text-center font-weight-bold bghover1" style="border-style: solid;
              border-bottom-width: 1px;
              border-color: #ccc;
              border-top-width: 0;
              border-left: 0;
              border-right: 0;"><h3>Expired</h3></div></a>
             <a class="toggle-up" style="cursor: pointer;"><div class="col-xs-12 text-center font-weight-bold bghover2"><h3>Cancle</h3></div></a>
           </div>
        </div>
    </div>
</footer>

</body>
</html>