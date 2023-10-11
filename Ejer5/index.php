<?php
include "cabecera.inc.php";
?>
<section class="text-center">
        <div class="card container py-5 h-100 " style="
                margin-top: 100px;
                background: hsla(0, 0%, 100%, 0.4);
                backdrop-filter: blur(10px);
                ">
            <div class="card-body py-1 px-md-1">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">LOGIN</h2>
                        <form method="POST" action="login.php" >
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                <input type="text" id="Usuario" name="Usuario" />
                                <label class="form-label" for="form3Example1">Usuario</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                <input type="password" id="Password" name="Password" />
                                <label class="form-label" for="form3Example2">Password</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="rol" id="rol">
                              <label class="form-check-label" for="rol">
                                Estudiante
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="rol" id="rol" checked>
                              <label class="form-check-label" for="rol">
                                Docente
                              </label>
                            </div>
                            <input type="color" name="color">
                            <!-- Submit button -->
                            <input class="btn btn-primary btn-block mb-4" type="submit" name="btn_submit" value="submit">
                            <!--
                            <input class="btn btn-primary btn-block mb-4" type="submit" value="Login" name="btn_submit">
                            -->
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    </body>
</html>
