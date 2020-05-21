@include('sidebar/header')
<style>
body{
	background-color: #f2f2f2;
}
  .container{
  	margin-left: 150px;
  	
  }
  .img {
   
    background-color: #fff;
    margin-left:  40px; 
  }
  </style>
</head>
<body>

<img src="{{url(asset('/public/images/burger.jpg'))}}" style="width: 100%;height: 100vh">
<div class="container">
	<h1 style="margin-left: 400px;font-weight: bold">OUR OFFER</h1>

  <img src="{{asset('/public/images/burger1.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px;">

  <img src="{{asset('/public/images/burger2.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px">

  <img src="{{asset('/public/images/burger3.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px">

  <img src="{{asset('/public/images/burger4.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px">

  <img src="{{asset('/public/images/burger5.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px">

  <img src="{{asset('/public/images/burger6.jpg')}}" class="img" style="width: 300px;height: 250px;margin-bottom: 100px;border-radius: 10px">
</div>

</body>
</html>