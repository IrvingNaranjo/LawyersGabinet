<div class="container-fluid my-5">
    <div class="d-flex flex-row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-9 bg-grey-5 rounded-3 py-3">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="tab-registro" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-light fw-bold" id="tab-cliente-tab" data-bs-toggle="pill" data-bs-target="#tab-cliente" type="button" role="tab" aria-controls="tab-cliente" aria-selected="true">Soy cliente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-light fw-bold" id="tab-procurador-tab" data-bs-toggle="pill" data-bs-target="#tab-procurador" type="button" role="tab" aria-controls="tab-procurador" aria-selected="false">Soy procurador</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center my-1">
                    <h1 class="text-light fs-2 fw-bold">Inicia Sesión</h1>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="tab-content w-50" id="tab-contenido-registro">
                        <div class="tab-pane fade show active" id="tab-cliente" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label text-light fw-bold">Clave de elector</label>
                                    <input type="text" class="form-control" id="ine_cliente" required pattern="[A-Z0-9Ñ]{18}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light fw-bold">Contraseña</label>
                                    <input type="password" class="form-control" id="password_cliente" required>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn bg-yellow fw-bold">INICIAR SESIÓN</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab-procurador" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label text-light fw-bold">RFC</label>
                                    <input type="text" class="form-control" id="rfc_procurador" required pattern="[A-Z0-9Ñ]{13}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light fw-bold">Contraseña</label>
                                    <input type="password" class="form-control" id="password_procurador" required>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn bg-yellow fw-bold">INICIAR SESIÓN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center mt-1">
        <div class="col">
            <div class="d-flex flex-row justify-content-center mt-2 mb-1">
                <span class="fs-5 fw-bold">¿No tienes un cuenta aun?</span>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <a class="btn bg-yellow mx-1 text-dark fw-bold" aria-current="" href="?option=2">REGISTRARSE</a>
            </div>
        </div>
    </div>
</div>