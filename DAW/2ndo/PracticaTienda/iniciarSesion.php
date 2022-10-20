<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>Iniciar sesión</title>
</head>

<body class="bg-dark">
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                    Iniciar sesión
                  </p>

                  <form class="mx-1 mx-md-4" method="GET" action="inicio.php">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Email</label>
                        <input type="email" id="form3Example3c" class="form-control" required  name="email"/>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Contraseña</label>
                        <input type="password" id="form3Example4c" class="form-control" required name="contrasena"/>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-start mb-5">
                      <label class="form-check-label" for="form2Example3">
                        ¿No tienes cuenta?
                        <a href="registrarUsuario.html">Registrate </a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">
                        Iniciar sesión
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="assets/logo.png" class="img-fluid rounded-5" alt="Sample image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>