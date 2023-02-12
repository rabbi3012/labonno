
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>www.Kibaynsobai.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
  </style>
</head>
<body>
<section class="vh-100">
  
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
         <form action="{{route('regform.submit')}}" method="post">
         
         @csrf

         @if($errors->any())
   @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{ $error }}</p>
  @endforeach
@endif

          <div class="divider d-flex align-items-center my-4">
            <h2><p class="text-center fw-bold mx-3 mb-0">Registration</p></h2>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label for="name">Name :</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name">
          
          </div>
          <div class="form-outline mb-4">
          
            <label for="name">Email :</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
           
        </div>
        
        <div class="form-outline mb-4">
          
        <div class="form-group">
            <label for="name">Mobile Namber :</label>
            <input type="number" name="mobile_number" class="form-control" placeholder="Enter your mobile Number">
           
          </div>
      </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          <label for="name">password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password">

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>