
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jobify | Inscription</title>
    <link rel="stylesheet" href="css/elzero.css" type="text/css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="">
  <nav>
    <div class="container">
      <a class="logo" href="/">Jobify</a>
      <ul class="links">
        <li><a>Articles</a></li>
        <li ><a href="/signIn" class="btn btn-primary" >Sign In  !</a></li>
      </ul>
    </div>
  </nav>
  <!--NavBar end-->
  <div class="container" style="display:flex; align-items:center;">
  <div class="register-image" style="max-width:500px;">
    <img style="max-width:100%;height:auto;"id="reg-img" src="/images/signUp.png" alt="...."/>
  </div>
      
        <div 0class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-4">
              <h3 class=" pb-2 pb-md-0 mb-md-4">Registration Form</h3>
              <form>

                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <label class="form-label" for="firstName">First Name</label>
                      <input type="text" id="firstName" class="form-control form-control-lg" />
                      
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <label class="form-label" for="lastName">Last Name</label>
                      <input type="text" id="lastName" class="form-control form-control-lg" />
                      
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <label for="birthdayDate" class="form-label">Birthday</label>
                      <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                      
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="lastName">CIN</label>
                      <input type="number" id="lastName" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6  pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="phoneNumber">Address</label>
                      <input type="text" id="phoneNumber" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-12 mb-3 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="emailAddress">Email</label>
                      <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-outline">
                          <label class="form-label" for="phoneNumber">Password</label>
                          <input type="password" id="phoneNumber" class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
  
  
                <div class="mt-2 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      
    
  </div>
</body>
</html>