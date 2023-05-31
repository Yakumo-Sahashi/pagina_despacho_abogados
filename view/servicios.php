<?php $title = ' | SERVICIOS'; ?>
<div class="container mt-4 mb-4 rounded-5 fondo">
    <div class="row justify-content-center">
        <div class="col-md-8 py-4 text-center" data-aos="fade-down" data-aos-duration="3000">
            <h1 class="display-4 text-gold"><b>SERVICIOS</b></h1>
        </div>
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-6"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="card  d-flex flex-column justify-content-center border-0 img-card"
                        data-bs-toggle="modal" data-bs-target="#juridico">
                        <h3 class=""><b>JURÍDICO</b></h3>
                        <img src="<?=DEP_IMG?>servicios/servicio03.webp" title="JURÍDICO" alt="JURÍDICO">
                    </div>
                </div>
                <div class="col-md-6"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="card  d-flex flex-column justify-content-center border-0 img-card" data-bs-toggle="modal" data-bs-target="#notarial">
                        <h3 class=""><b>GESTIÓN NOTARIAL</b></h3>
                        <img src="<?=DEP_IMG?>servicios/servicio13.webp" title="GESTIÓN NOTARIAL" alt="GESTIÓN NOTARIAL">
                    </div>
                </div>

                <div class="col-md-6"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="card  d-flex flex-column justify-content-center border-0 img-card" data-bs-toggle="modal" data-bs-target="#contable">
                        <h3 class=""><b>CONTABLE</b></h3>
                        <img src="<?=DEP_IMG?>servicios/servicio02.webp" title="CONTABLE" alt="CONTABLE">
                    </div>
                </div>
                <div class="col-md-6"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="card  d-flex flex-column justify-content-center border-0 img-card" data-bs-toggle="modal" data-bs-target="#pensiones">
                        <h3 class=""><b>PENSIONES Y JUBILACIONES </b></h3>
                        <img src="<?=DEP_IMG?>servicios/servicio14.webp" title="PENSIONES Y JUBILACIONES" alt="PENSIONES Y JUBILACIONES">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="juridico" tabindex="-1" aria-labelledby="juridicoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-gold w-100 text-center" id="juridicoLabel"><b>DEFENSA JURÍDICO FISCAL</b></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body parrafo">
                <p class="h3"><b>Medios de defensa</b></p>
                <p>
                    <ul>
                        <li>
                            <b>JUICIOS DE NULIDAD CONTRA:</b>
                            <ul>
                                <li>Créditos fiscales por: concepto de COP y RCV.</li>
                            </ul>
                        </li>
                        <li>
                            <b>JUICIOS DE AMPARO DIRECTO E INDIRECTO:</b>
                            <ul>
                                <li>Bloqueo de cuentas bancarias.</li>
                                <li>Restablecimiento de registro patronal.</li>
                            </ul>
                        </li>
                        <li>
                            <b>REPSE</b>
                            <ul>
                                <li>Trámite de inscripción.</li>
                                <li>Alta de registro REPSE.</li>
                                <li>SIROC ( SATIC).</li>
                            </ul>
                        </li>
                    </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gold" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contable" tabindex="-1" aria-labelledby="contableLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-gold w-100 text-center" id="contableLabel"><b>REGISTROS CONTABLES DE ACUERDO A LAS DISPOSICIONES FISCALES, ART. 18 DEL C.F.F</b></h3>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body parrafo">
                <p>
                    <ul>
                        <li>Análisis y depuración de cuotas mensuales.</li>
                        <li>Cálculo de impuestos y conciliaciones bancarias.</li>
                        <li>Declaraciones mensuales de los impuestos federales ISR e IVA.</li>
                        <li>Retenciones de ISR e IVA.</li>
                        <li>Informativas DIOT, DIM.</li>
                        <li>Declaraciones anuales.</li>
                        <li>Elaboración de nómina.</li>
                        <li>Altas, bajas y modificaciones de IBSE, SUA, SIPARE.</li>
                        <li>Elaboración de recibos de nómina.</li>
                        <li>Cálculo y pago de impuestos sobre nómina ante la Secretaria de Finanzas.</li>
                        <li>Apoyo en el trámite de la fiel. </li>
                        <li>Auditorias financieras. </li>
                        <li>Apoyo en las empresas con inventarios, activos fijos y mercancía en general.</li>
                        <li>Declaraciones cuatrimestrales de ICSOE (IMSS) y SISUB (INFONAVIT).</li>
                    </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gold" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="notarial" tabindex="-1" aria-labelledby="notarialLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-gold w-100 text-center" id="notarialLabel"><b>NOTARIAL</b></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body parrafo">
                <p>
                    <ul>
                        <li>Protocolización de actas de asamblea.</li>
                        <li>Creación de sociedades mercantiles.</li>
                        <li>Cambio de socios y apoderados.</li>
                        <li>Cambio de objeto social. </li>
                        <li>Aumento de capital constitutivo.</li>
                        <li>Copias certificadas.</li>
                        <li>
                            <b>GESTIÓN RPP</b>
                           <ul>
                                <li>Certificados de libertad de gravamen.</li>
                                <li>Cambio de propietario.</li>
                           </ul>
                        </li>
                    </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gold" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pensiones" tabindex="-1" aria-labelledby="pensionesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-gold w-100 text-center" id="pensionesLabel"><b>PENSIONES Y JUBILACIONES</b></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body parrafo">
                <p>
                    <ul>
                        <li>Cálculo de pensiones.</li>
                        <li>Apoyos por desempleo, AFORE</li>
                    </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gold" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>