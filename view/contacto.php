<?php $title = ' | CONTACTO'; ?>
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 fondo rounded-5">
                <div class="card-body">
                    <form id="frm_contacto" method="post" class="row justify-content-center">
                        <div class="col-md-12 text-center mt-3" data-aos="fade-down" data-aos-duration="3000">
                            <h1 class="display-4 text-gold"><b>Contáctanos</b></h1>
                            <img src="<?=DEP_IMG?>logo_gold.png" width="20%" alt="LOGO">
                        </div>
                        <div class="col-md-6 mb-1 align-self-center text-center"  data-aos="zoom-in" data-aos-duration="3000">
                            <label for="">Mapa de ubicación</label>
                            <a href="<?=Router::redirigir('ubicacion')?>" class="btn btn-gold btn-block"><i class="fas fa-map"></i> Ubicación</a>
                        </div>
                        <div class="col-md-6 mb-1 align-self-center text-center"  data-aos="zoom-in" data-aos-duration="3000">
                            <label for="">Núm. Telefónico</label>
                            <span class="btn btn-gold btn-block" id="tel" data-bs-toggle="tooltip" data-bs-placement="top" title="click para copiar"><i class="fas fa-phone-alt"></i> 5590436367</span>
                        </div>
                        <div class="col-md-12 mb-3" data-aos="fade-up" data-aos-duration="3000">
                            <hr>
                            <label for="nombre" class="h5">Nombre completo</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-address-card text-gold"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" require>
                            </div> 
                            
                            <label for="correo" class="h5">Correo electrónico</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope text-gold"></i></span>
                                <input type="email" class="form-control" placeholder="correo@ejemplo.com" name="correo" id="correo" require>
                            </div> 
                    
                            <label for="telefono" class="h5">Número telefónico</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone text-gold"></i></span>
                                <input type="text" class="form-control" placeholder="5555555555" minlength="10" maxlength="10" size="10" name="telefono" id="telefono" require>
                            </div> 
                    
                            <label for="" class="h5">Mensaje <i class="fas fa-comment-alt text-gold"></i></label>
                            <div class="form-floating">
                                <textarea class="form-control" name="mensaje" id="mensaje" style="height: 130px"></textarea>
                                <label for="mensaje">Redacta tu mensaje</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="row justify-content-end">
                                <div class="col-md-5">
                                    <button type="button" id="btn_contacto" class="btn btn-gold btn-block">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>