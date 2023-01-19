<!doctype html>
<html lang="en">
  <head>
    <title>DiDauAnGi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="layoutUser/assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <header>
        <style>
          #intro {
            background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
            height: 100vh;
          }
    
          /* Height for devices larger than 576px */
          @media (min-width: 992px) {
            #intro {
              margin-top: -58.59px;
            }
          }
    
          .navbar .nav-link {
            color: #fff !important;
          }
        </style>
    
       
        <!-- Navbar -->
    
        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
          <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8); margin-top: 3%;">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                  <form action="{{ route('postregister') }}" class="bg-white  rounded-5 shadow-5-strong p-5" method="post">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-4">
                        <div class="logo" style="margin-left: 25%;margin-bottom: 10%;">
                            <a href="/"><img src="layoutUser/assets/img/logo/logo.png" alt=""></a>
                    </div>
                      <label class="form-label" for="form1Example1">User Name</label>

                      <input type="text" id="form1Example1" Required name="username" class="form-control" />
                    </div>
    
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form1Example2">Password</label>

                      <input type="password" id="form1Example2" Required name="password" class="form-control" />
                    </div>
    
                    <!-- 2 column grid layout for inline styling -->
                    
    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <!--Main Navigation-->
    
      <!--Footer-->
      
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>