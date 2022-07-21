<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luxury Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
<?php
      include('Menu Bar.php')
  ?><br>
<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-12">
      <h1 id="font">{ Luxury Hotel }</h1><br>
      <p class="text-justify">Luxury is a hotel situated in Machakos County, one kilometer from Machakos town. 
        It provides accommodation, food and beverage and different types of services. It started in the year 2015 with 15 employees 
        but currently has more than hundred and twenty employees.
</p>
<h1 align="center"id="font">[ Services ]</h1><br>
<p class="text-justify">The system working will be improved within the due working of the system. The manager of Luxury Hotel should maintain cleanliness of the environment and rooms by mobilizing workers. The cleanliness of environment and rooms impress guest to the hotel as this increase the growth of the hotel
The manager should also add more employees who are computer literate and also train those who are computer illiterate. Many employees with computer skills make the working process of the hotel to run smoothly and efficiently as everything are computerized. The manager should also do more research on causes of theft in the hotel and how to control these problems.
Finally, the manager should conduct refreshing events and entertainment shows on regular basis to attract more customers as most of the tourists who stay in a hotel room expect refreshing events and entertainment programs for getting relaxation from the stressful condition</p>
    </div>
  </div><br><br>
  <div class="row"align="center">
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>      
<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>Machakos</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>(+254) 712 345 678</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
              <b>hotel@gmail.com</b>
        </div>
  </div><br><br>
</div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>
