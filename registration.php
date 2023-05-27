<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />

  <link rel="stylesheet" href="css/coustom.css" />
  <style>
    .img {
      height: 100%;
    }

    @media (min-width: 1025px) {
      .h-custom-2 {
        height: 100%;
      }
    }
  </style>
</head>

<body>


  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="img/regcover.jpg" alt="Sample photo" class="img-fluid w-100 vh-100"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>

              <div class="col-xl-6 mb-6">
                <form action="registerAction.php" method="POST">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-6 text-uppercase">Registration form</h3>

                    <div class="row ">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="firstName" id="form3Example1m"
                            class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">First name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n" name="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n">Last name</label>
                        </div>
                      </div>
                    </div>





                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example97" name="r_Email" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example97">Email ID</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example8" name="r_mobilenumber"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Mobile Number</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example90" name="r_Pass" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example90">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example99" name="r_ConPass" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example99">Confirm Password</label>
                    </div>


                    <!-- <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2">Register</button>
                </div> -->



                    <div class="d-flex justify-content-center">


                      <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4">Register</button>

                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                        class="fw-bold text-body"><u>Login here</u></a></p>

                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

</body>

</html>