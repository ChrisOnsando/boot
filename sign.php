<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Customer SIGN IN</title>

<!--Google font-->

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- font awesome icons -->

    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </head>
  </head>
  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-success">Create Your Account</h3>
                <form action="handle_signup.php" method="post">

                  <div class="row">
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" />
                        <label class="form-label text-success" for="firstname">First Name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" />
                        <label class="form-label text-success" for="lastname">Last Name</label>
                      </div>

                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fa fa-envelope text-success fa-lg me-3 fa-fw"></i>
<input class="form-control" type="email" name="emailaddress">
</div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-lock text-success fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" />
                      <label class="form-label text-success" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-key text-success fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" name="confirmpassword" class="form-control" />
                      <label class="form-label text-success" for="form3Example4cd">Confirm Password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                  <a href="#"
                  <button
                    class="btn btn-success btn-lg px-5 text-white"
                    type="submit"
                  >
                    SignUp Now
                  </button>
</a>
                  </div>
                </form>
                  <div>
                <p class="d-flex justify-content-end pt-2 mb-0 text-success">
                  If you have account, Please
                  <a href="login.php" class="text-dark-50 fw-bold text-success"> Login Now</a>
                </p>
              </div>

  </body>
</html>