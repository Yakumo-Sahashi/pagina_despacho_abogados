<?php $title = ' | UBICACION'; ?>
<div class="container mt-4 mb-4">
    <div class="row fondo justify-content-center rounded-5 text-center">
        <div class="col-md-12 mt-4 mb-3" data-aos="fade-down" data-aos-duration="3000">
            <div class="row">
                <div class="col-md-4 align-self-center order-1 order-md-1">
                    <p class="fs-1"><b>Dónde nos ubicamos</b></p>
                </div>
                <div class="col-md-4 align-self-center order-3 order-md-2">
                    <button class="btn btn-gold " data-bs-toggle="modal" data-bs-target="#exampleModal">Obtener código QR</button>
                </div>
                <div class="col-md-4 align-self-center order-2 order-md-3">
                    <p class="fs-3"><i class="fas fa-phone-alt text-gold"></i> 5590436367</p>            
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3 order-4 order-md-4" data-aos="fade-up" data-aos-duration="3000">
            <div class="map-responsive rounded-3 borde">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.8503094152385!2d-99.16015751188779!3d19.39506226417647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff0e4b017417%3A0x72929796ca678253!2sHeriberto%20Fr%C3%ADas%20428%2C%20Narvarte%20Poniente%2C%20Benito%20Ju%C3%A1rez%2C%2003020%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1645046014152!5m2!1ses-419!2smx"
                    width="90%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title text-gold w-100 text-center" id="exampleModalLabel"><b>Escanear QR</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-3 rounded borde">
                    <div class="row justify-content-center">
                        <div class="col-md-6 align-self-center">
                            <img class="img-fluid mx-auto d-block" src="<?=DEP_IMG?>ubicacion.webp" alt="QR" title="QR Ubicación">
                        </div>
                        <div class="col-md-5 align-self-center">
                            <div class="card-body">
                                <h3><b>Dirección</b></h3>
                                <p class="lead">
                                    Heriberto Frias No. 428, <b>Col.</b> Narvarte Poniente, <b>Alc.</b> Benito Juarez,
                                    <b>CP.</b> 03020, Ciudad de Mexico
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gold" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>