<style>
  .logo-text{
    width: 100;
    height: 3rem;
  }
  .logo-text h2{
    font-size: 20px;
  }
  .logoimg{
    /* display: flex;
    justify-content: start!important; */
    margin-right: 56.7rem;
    width: 13rem;
    height: 100%;
  }
  .logoimg img{
    width: 100%;
    height: 100%;
  }
  .navsection{
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;
  }
  .search_section{
    display: flex;
    text-align: end;
    flex-direction: row-reverse;
  }
  .search_section ul li{
    float: right;
  }
</style>
<div class="header_section">
         <div class="container">
            <nav class="navbar navsection navbar-dark bg-dark">
              <div class="logo-text">
                <div class="logoimg">
                  <img src="{{url('frontend/images/kinbeShobai.jpg')}} " alt="">
                </div>

              </div>

               <a class="logo" href="index.html"><img src=""></a>
               <div class="search_section mt-4 w-50">
                  <ul>

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

                     <li ><a class="addcart" href="{{route('cart.view')}}">Cart({{session()->get('myCart')? count(session()->get('myCart')) : 0}})<i class="bi bi-cart"></i></a></li>
                     
                  </ul>
                  
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse w-50 mt-4" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="category.html">Category</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="clients.html">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                     </li>
                  </ul>
               </div>
            </nav>
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

