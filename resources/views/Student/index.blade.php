<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .container{
  	margin-left: 150px;
  	
  }
  .border {
    display: inline-block;
    width: 350px;
    height: 300px;
    margin: 6px;
    background-color: #ffcac7;
  }
  </style>
</head>
<body style="background-color: #f2f2f2">

  <h2 style="margin-left: 490px;font-weight: bold;font-size: 50px; color: red">BURGER MASTER</h2>
  <hr style="width: 100%;color: 10px solid black">
  <p style="margin-left: 480px;font-weight: bold;color: black">We are the india's biggest website for online shopping</p> 
  <hr>
<div class="container">
      @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="successMessage" style="text-align: center;width: 400px;margin-left:690px">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif
  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;color: red;"><p style="margin-top: 50px"><a href="{{url('login')}}" style="color: red">Book Movie Ticket</a></p></span>

  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;"><p style="margin-top: 50px"><a href="{{url('user/burgershow')}}" style="color: red"> Book Burger Online</a></p></span>

  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;color: red"><p style="margin-top: 50px"><a href="{{url('login')}}" style="color: red">Railways Reservation</a></p></span>

  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;color: red"><p style="margin-top: 50px"><a href="{{url('login')}}" style="color: red">Pay Electricity Bill</a></p></span>

  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;color: red"><p style="margin-top: 50px"><a href="{{url('login')}}" style="color: red">Mobile Recharge</a></p></span>

  <span class="border" style="text-align: center;font-size: 47px;font-weight: bold;color: red"><p style="margin-top: 50px"><a href="{{url('login')}}" style="color: red">Airplane Ticket Booking</a></p></span>
</div>

</body>
<script type="text/javascript">
  setTimeout(function() {
    $('#successMessage').fadeOut('slow');
}, 3000); 
</script>
</html>