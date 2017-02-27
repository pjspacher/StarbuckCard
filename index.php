<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>STARBUCK</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.js">
    </script>
    <script src="gen_validatorv4.js" type="text/javascript"></script>
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
        background: radial-gradient(ellipse at center, rgba(94,94,94,1) 0%, rgba(32,32,32,1) 100%);
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
      #reword{
        background-color: #494c35;
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
      .c215f08{
        color: #215f08;
      }
      .cards{
        width: 500px;
        height: 300px;
        display: inline-block;
        width: 425px;
        height: 247px;
        cursor: pointer;
      }
      .cardspay{
        position: relative;
        margin-right: 9px; 
        margin-left: 13px;
        z-index: 2;
      }
      .cardsadd{
        position: relative;
        z-index: 1;
      }
      .cards1{
        width: 100%;
        height: 100%;
        background-color: #fff;
        background-size: cover;
      }
      .cards1-banner{
        background-image: url("img/carts.png");
      }
      .cards1-flip{
        background-image: url("img/cartsflip.png");
      }
      .vertical-center {
        min-height: 114px;
        display: flex;
        align-items: center;
      }
      .scroll::-webkit-scrollbar {
        width: 12px;
      }
      .touch{
        width: 100px;
        height: 100px;
        background: linear-gradient(to bottom, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 65%, rgba(117,137,12,1) 100%);
        position: absolute;
        right: -27px;
        bottom: -33px;
         cursor: pointer;
      }
      .touch:hover{
        background: linear-gradient(to bottom, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%, rgba(117,137,12,1) 100%) ;
      }
      .font-weight-bold{
        font-weight: bold;
      }
      .btn-default{
        height: 43px;
        border: 0;
        background: linear-gradient(135deg, rgba(151,152,164,1) 0%, rgba(151,152,164,1) 46%, rgba(102,98,115,1) 100%);
 
      }
      .btn-default:hover{
        background: linear-gradient(135deg, rgba(151,152,164,1) 0%, rgba(125,121,138,1) 22%, rgba(38,28,69,1) 100%);
        color: #fff; 
      }
      .btn-submit{
        background-color: #3f7369; 
        margin-top: 10px;
        margin-left: -17px;
        transition: 0.2s ease;
      }
      .btn-submit:hover{
        color: #fff;
        background-color: #559488;
      }
      /*--------------------------------------------------------*/
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
        height: 182px;
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
}/*---------------------------------------*/

      .btn-cancle{
        background-color: #559488;
        color: #fff;
      }
      .btn-cancle:hover{
        color: #fff;
      }
    </style>
</head>
<body>
  <div class="header text-center h">
  <div class="front">
    <h3>My cards</h3>
    </div>
    <div class="back">
    <button class="btn btn-cancle" style="position: absolute; left: 23px;
    top: 6px;">Cancle</button>
    <h3>Add cards</h3>
    </div>
    </div>
  <?php
        $sql = "SELECT * FROM member";
        $query = mysqli_query($object_connect,$sql);
        while ($rows = mysqli_fetch_array($query)) {
        ?>

  <div class="container" id="reword" style="background-color:<?php
        if($rows ['rewords']>=0 && $rows ['rewords']<100){
              echo "#525252";
        }
        else if($rows ['rewords']>100 && $rows ['rewords']<150){
              echo "#494c35";
        }else if($rows ['rewords']>150){
              echo "#d5bd77";
        }
      ?>;">
    <div class="row"></div>
      <div class="col-xs-9">
      <div class="col-xs-8">
      <h4 class="font-weight-bold" style="color:<?php
        if($rows ['rewords']>=0 && $rows ['rewords']<100){
              echo "#c3c3c3";
        }
        else if($rows ['rewords']>100 && $rows ['rewords']<150){
              echo "#acc332";
        }else if($rows ['rewords']>150){
              echo "#ecb100";
        }
      ?>;"><i class="fa fa-star"></i> &nbsp&nbsp<?php
        if($rows ['rewords']>=0 && $rows ['rewords']<100){
              echo "Silver level";
        }
        else if($rows ['rewords']>100 && $rows ['rewords']<150){
              echo "Green level";
        }else if($rows ['rewords']>150){
              echo "Gold level";
        }
      ?></h4>
      <h5 class="fff">STARS YOU'RE EARNED</h5>
      </div>
      <div class="col-xs-4 font-weight-bold"><h1 class="acc332" style="color:<?php
        if($rows ['rewords']>=0 && $rows ['rewords']<100){
              echo "#c3c3c3";
        }
        else if($rows ['rewords']>100 && $rows ['rewords']<150){
              echo "#acc332";
        }else if($rows ['rewords']>150){
              echo "#ecb100";
        }
      ?>;"><?php echo $rows ['rewords']; ?></h1></div>
      

      <div class="col-xs-12 c989898">
        Your membership expary date is <?php echo $rows ['expary_date']; ?>,<br> 
        <?php
          if($rows ['rewords']>=0 && $rows ['rewords']<100){
              $lvup = 100 - $rows ['rewords'];
              echo $lvup;
        }else if($rows ['rewords']>100 && $rows ['rewords']<150){
               $lvup = 150 - $rows ['rewords'];
              echo $lvup;
        }else if($rows ['rewords']>150){
               $lvup = 200 - $rows ['rewords'];
              echo $lvup;
        }
        ?>

        more Stars to reach <?php
        if($rows ['rewords']>=0 && $rows ['rewords']<100){
              echo "Green level";
        }
        else if($rows ['rewords']>100 && $rows ['rewords']<150){
              echo "Gold level";
        }
      ?><p>
      </div>
      </div>
      <div class="col-xs-3">
        <div class="col-xs-12 vertical-center">
          <a href="mybenefit.php"><button type="button" class="btn btn-default fff">Rewords</button></a>
      </div>
      </div>
  </div>
   <?php
      }
        ?>
  <div class="container" style="margin-top:30px;">
    <div class="row">
      <div class="col-xs-12 scroll" style="overflow: auto;
    white-space: nowrap; height: 500px;">
    <!-- ----------------------------------------------------------- -->
    <?php
        $sql = "SELECT * FROM member";
        $query = mysqli_query($object_connect,$sql);
        while ($rows = mysqli_fetch_array($query)) {
        ?>
        <div class="cards img-rounded cardspay card">
        <div class="front">
              <div class="cards1 img-rounded cards1-banner"></div>
              <div class="touch img-circle text-center fff"><i class="fa fa-hand-pointer-o fa-3x" style="margin-top:10px;"></i><h5 class="font-weight-bold fff">Tounch to <br>Pay</h5></div>
              <div class="row"  style="margin-top: 50px;">
    <div class="col-xs-6 fff" style="margin-top: -26px;">
      <h2>Baht <?php echo $rows['value']?>.00<h5>As of <?php echo date("Y-m-d h:m");?></h5></h2>
    </div>
    <div class="col-xs-6 acc332 text-right">
      <h5>Registered<br>
          <h5><?php echo $rows['cardnumber']?></h5></h5>
    </div>
    <div class="col-xs-12"></div>
    <div class="col-xs-5">
      <button type="button" class="btn btn-default fff pull-right" style="width: 91.48px;" id="scroll">Menage</button>
    </div>
    <div class="col-xs-2"></div>
    <div class="col-xs-5">
      <button type="button" class="btn btn-default fff AddCart" id="scrollto">Add a Card</button>
    </div>
    </div>
        </div>
        <div class="back">
              <div class="cards1 img-rounded cards1-flip">
                <div class="col-xs-3"></div>
                <div class="col-xs-9 text-center">
                  <h5>Your Starbucks Card number is<br>
                  <h4><?php echo $rows ['cardnumber'] ?></h4>
                  </h5>
                </div>
                <div class="col-xs-3"></div>
                <div class="col-xs-9" style="margin-top: 36px;">
                <img src="img/<?php echo $rows ['cardnumber'] ?>.png" style="width: 100%;">
              </div>
               <div class="touch img-circle text-center fff"><h4 class="fff" style="margin-top:21px;">Tounch<br>when<br>done</h4></div>
        </div>
          <div class="col-xs-12"><img src="img/sc.png" style="opacity: 0.4;" class="center-block"></div>
            <div class="col-xs-12 text-center fff" style="opacity: 0.8"><h4>Scan now</h4></div>

        </div>
              </div>
              <?php
        }
      ?>
              <!-- ---------------------------------------------- -->
         <div class="cards img-rounded cardsadd" id="addcard">
        <div class="front">
              <div class="cards1 img-rounded">
                <div class="col-xs-12" style="margin-top: 60px;">
                  <img src="img/plus.png" class="center-block" width="80px;">
                </div>
                <div class="col-xs-12 c215f08 text-center" id="swap"><h4>Tap here to add a Card</h4></div>
              </div>
        </div>
        <div class="back">
              <div class="cards1 img-rounded cards1-flip">
              <div class="col-xs-4"></div>
                <div class="col-xs-8 text-left">
                  <h4>Enter the details found at the <br>back of your Card</h4>
                  </h5>
                </div>
                <div class="col-xs-4"></div>
                <div class="col-xs-8" style="margin-top: 22px;">
                <form action="addcard.php" method="post" id="myform">
                    <div class="form-group">
                      <div class="col-xs-12">
                      <input type="number" class="form-control" placeholder="Starbucks Card Number" name="cardnumber" id="cardnumber"></div>
                      <div class="col-xs-8" style="margin-top: 11px;">
                       <input type="text" class="form-control" placeholder="Security Code" name="seccode" id="seccode"></div>
                       <div class="col-xs-4">
                       <input type="submit" class="btn btn-submit fff">
                       </div>
                     </div>
                     
                  </form>
                </div>
        </div>
        </div>
              </div>

    </div>
  </div>

  <footer>
    <div class="toggle-footer toggle-up"><i class="fa fa-chevron-up " class="fff" style="font-size: 19px;"></i></div>
    
    <div id="footer-content">
        <div id="footer-right">
           <div class="rows">
             <a href="index.php"><div class="col-xs-12 text-center font-weight-bold bghover"><h3>Refrech Balance</h3></div></a>
             <a href="transaction.php"><div class="col-xs-12 text-center font-weight-bold bghover1" style="border-style: solid;
              border-bottom-width: 1px;
              border-color: #ccc;
              border-top-width: 1px;
              border-left: 0;
              border-right: 0;"><h3>Transaction History</h3></div></a>
             <a class="toggle-up" style="cursor: pointer;"><div class="col-xs-12 text-center font-weight-bold bghover2"><h3>Cancle</h3></div></a>
           </div>
        </div>
    </div>
</footer>

 <script type="text/javascript">
   $('#scrollto').click(function() {
    $('html,body').animate({
        scrollLeft: $('.sctocard').css('left')
    }, 800, function() {
    });
    });
  </script>
  <script type="text/javascript">
    $(".card").flip({
      axis: 'x',
      trigger: 'click'
      });
    // $("#addcard").flip({
    //   axis: 'x',
    //   trigger: 'click'
    // });
    $("#addcard").flip({
          axis: 'x',
          trigger: 'manual'
    });

    $(".AddCart").click(function(){
        $("#addcard").flip(true);
    });

    $("#addcard").click(function(){
        $("#addcard").flip(true);
    });

    $(".btn-cancle").click(function(){
        $("#addcard").flip(false);
    });

    $(".h").flip({
          axis: 'x',
          trigger: 'manual'
    });
     $(".AddCart").click(function(){
        $(".h").flip(true);
    });

     $(".btn-cancle").click(function(){
        $(".h").flip(false);
    });

      $("#addcard").click(function(){
        $(".h").flip(true);
    });


  </script>
  <script  type="text/javascript">
      var frmvalidator = new Validator("myform");
      frmvalidator.addValidation("cardnumber","req","กรุณากรอกข้อมูล");
      frmvalidator.addValidation("cardnumber","maxlen=16","ต้องมีเลข 16 ตัว");
    frmvalidator.addValidation("cardnumber","minlen=15","ต้องมีเลข 16 ตัว");
    frmvalidator.addValidation("seccode","req","กรุณากรอกข้อมูล");
      frmvalidator.addValidation("seccode","maxlen=6","ต้องมีตัวอักษรหรือตัวเลข 6 ตัว");
    frmvalidator.addValidation("seccode","minlen=5","ต้องมีตัวอักษรหรือตัวเลข 6 ตัว");
    
  </script>
</body>
</html>