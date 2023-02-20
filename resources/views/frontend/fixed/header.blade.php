<style>
  .navbar-nav {
    padding-left: 1rem;
    width: 35%;
    background-color: #CEC4C4;
    border-radius: 10px;
  }

  .nav-link {
    color: black;
    transition: all 0.5s ease-in-out;
  }

  .nav-link:hover {
    background-color: white;
  }

  .logo-text {
    width: 100%;
    height: 4rem;
  }

  .logo-text h2 {
    font-size: 20px;
  }

  .logoimg {
    margin-right: 56.7rem;
    width: 13rem;
    height: 100%;
  }

  @media screen and (max-width: 1200px) {
    .logoimg {
      margin-right: 45rem !important;
    }
  }

  @media screen and (max-width: 991px) {
    .logoimg {
      margin-right: 25rem !important;
    }
  }

  @media screen and (max-width: 767px) {
    .logoimg {
      margin-right: 14rem !important;
    }
  }

  .logoimg img {
    width: 100%;
    height: 100%;
  }

  .search_section {
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: end;
  }

  .search_section ul {
    height: 100%;
  }

  .search_section ul li {
    float: right;
  }
</style>
<div class="logo-text container">
  <div class="logoimg">
    <img src="{{url('frontend/images/kinbeShobai.jpg')}} " alt="">
  </div>

</div>
<div class="header_section">
  <div class="container main-navigation">
    <nav class="navbar navsection navbar-dark w-100">
      <div class="w-50">
        <button class="navbar-toggler menu-button" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="search_section">
        @if(auth()->user())
        <li><a class="addcart" href="{{route('cart.view')}}">Cart({{session()->get('myCart')? count(session()->get('myCart')) : 0}})<i class="bi bi-cart"></i></a></li>
        @endif
        <ul >
          @guest
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registration">
            Registration
          </button>

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">
            Login
          </button>

          @endguest

          @auth
          <button class="btn btn-success">{{auth()->user()->name}}</button>
          <button class="btn btn-success"><a href="{{route('front.logout')}}">Log Out</a></button>
          @endauth
        </ul>

      </div>

    </nav>
  </div>
  <div class="container collapse  mt-4 @if(request()->route()->getName == 'home') navbar-collapse @endif" id="navbarsExample01">
    <ul class="navbar-nav mr-auto  ">
      <li class="nav-item active">
        <a class="nav-link text-dark" style="font-weight: 700;" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" style="font-weight: 700;" href="category.html">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" style="font-weight: 700;" href="">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" style="font-weight: 700;" href="clients.html">Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" style="font-weight: 700;" href="{{route('contact')}}">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" style="font-weight: 700;" href="{{route('about')}}">About</a>
      </li>
    </ul>
  </div>

  <!--banner section start -->


  @if(request()->route()->getName()=='home')

  @include('frontend.fixed.banner.banner')

  @endif


  <!--banner section end -->
</div>

<!-- Button trigger modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->

<!-- Button trigger modal -->
<!-- Button trigger modal -->

<!-- register -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('reg.submit')}}" method="POST">

          @csrf
          <div class="form-group">
            <label for="">Neme</label>
            <input type="text" name="name" class="form-control" id="exampleInputNameHelp" aria-describedby="nameHelp" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('front.login')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>