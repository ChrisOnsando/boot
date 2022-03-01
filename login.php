<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>login</title>
    <link rel="stylesheet" href="login.css" />
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
  <body>
      <header class="header">
          <h1>Car-Rentals - Customer Panel</h1>
          <h2>Please LOGIN to continue</h2>
      </header>
    <section class="vh-100 gradient-custom">

      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-body text-dark" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                  <form action="handle_login.php" method="post">
                  <div class="form mb-4">
                      <label class="form-label d-flex text-success" for="typeEmailX">E-mail Address</label>
                    <input
                      type="email"
                      id="typeEmailX"
                      class="form-control form-control-lg"
                    />
                  </div>

                  <div class="form">
                      <label class="form-label d-flex text-success" for="Password"
                        >Password</label
                      >
                  </div>
                      <input
                      type="password"
                      id="typePasswordX"
                      class="form-control form-control-lg m-2"
                    />
                    <a class="text-success  justify-content-end" href="#!">Forgot password?</a>
</div>

                  <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="radio"

                                        id="Remember"
  />
                                      <label class="form-check-label text-success" for="Remember">Remember Me</label>
                                    </div>
                                      <a href="#"
                  <button
                    class="btn btn-success btn-lg px-5 text-white"
                    type="submit"
                  >
                    Login
                  </button>
</a>

                  <div
                    class="d-flex justify-content-center text-center mt-4 pt-1"
                  >
                    <a href="#!" class="text-success"
                      ><i class="fa fa-facebook-f fa-lg"></i
                    ></a>
                    <a href="#!" class="text-success"
                      ><i class="fa fa-twitter fa-lg mx-4 px-2"></i
                    ></a>
                    <a href="#!" class="text-success"
                      ><i class="fa fa-google fa-lg"></i
                    ></a>
                  </div>
                </div>

                <div class="row m-3">
                            <button onclick="window.location='<?php echo $login_url; ?>'" type="button" class="btn btn-success">
                                <span class="fa fa-google"></span>
                                   Login with Google? </a>
                        </div>

                <div>
                  <p class="mb-0 text-success">
                    Don't have an account?
                    <a href="sign.php" class="text-dark-50 fw-bold text-success">Create One</a>
                  </p>
                </div>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>