<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  #form{
    border:1px solid black;
    padding: 50px;
    background-color: #f2f2f2;
  }
</style>
<body>

<form action="{{url('registration')}}" method="post" id="form">
  <div class="container">
    <div class="reg">
    <h1 style="text-align: center;color: red;font-weight: bold">REGISTRATION FORM</h1>
    </div>
    @csrf   
    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
    <br>

    <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
    <br>

    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
    <br>

    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
  
  <div class="container signin">
    <p>Already have an account? <a href="{{url('login')}}">Sign in</a>.</p>
  </div>