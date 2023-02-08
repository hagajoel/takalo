<section class="vh-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                      Se connecter en admin.
                    </p>
                    <form action="checkLoginAdmin" class="mx-1 mx-md-4" method="post">
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-floating flex-fill mb-0">
                          <input
                            type="email"
                            id="floatingInput"
                            class="form-control"
                            name="email"
                            value="admin@gmail.com"
                          />
                          <label for="floatingInput">Identifiant</label>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">

                        <div class="form-floating flex-fill mb-0">
                          <input
                            type="password"
                            id="floatingInput"
                            class="form-control"
                            name="pwd"
                            value="1234"
                          />
                          <label class="form-label" for="floatingInput">Mot de passe</label>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center  mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-md w-100">
                          Register
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>