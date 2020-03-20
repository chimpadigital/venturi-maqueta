<?php
$currentPage = 'contacto';
include("header.php");
?> 
<div class="page-title parallax parallax1-contacto style1">
    <div class="overlay overlay1"></div>
    <div class="container wrap-page-title">
        <div class="page-title-content">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </div>
        <div class="page-title-heading">
            <h1>Contacto</h1>
        </div>
    </div>
</div>
<div class="main-contact">
    <section class="flat-map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
                <div class="title-section style2">
                    <h1 class="title-border">Red Comercial</h1>
                </div>
            </div>
        </div>
    </section> 
    <section class="flat-contact bg-one-third">
       <div class="container">
           <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    
                    <div class="title-section style2">
                       <h1 class="title-border">Contacto</h1>
                    </div>
                    <div class="spacer" data-desktop_height="47" data-mobile_height="40" data-smobile_height="40"></div>
                    <div class="form-submit">
                        <form class="comment-form">
                            <p class="comment-form-author">
                                <!-- <label>Name *</label> -->
                                <input  name="author" type="text" placeholder="Nombre y Apellido" required="required">
                            </p>
                            <p class="comment-form-email">
                                <!-- <label>Email *</label> -->
                                <input  name="email" type="email" placeholder="Email" required="required">
                            </p>
                            <p class="comment-form-author">
                                <!-- <label>Name *</label> -->
                                <input  name="author" type="text" placeholder="Teléfono" required="required">
                            </p>
                            <p class="comment-form-email">
                                <!-- <label>Email *</label> -->
                                <input  name="email" type="text" placeholder="Ubicación" required="required">
                            </p>
                            <p class="comment-form-email">
                                <!-- <label>Email *</label> -->
                                <select name="tipo" id="tipo">
                                    <option value="Elegir" selected disabled>Seleccionar tipo de cliente</option>
                                    <option value="Casa de repuesto">Casa de repuesto</option>
                                    <option value="Oferta Laboral">Oferta Laboral</option>
                                    <option value="Usuario">Usuario</option>
                                    <option value="Proveedor">Proveedor</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </p>
                            <p class="comment-form-email">
                                <!-- <label>Email *</label> -->
                                <select name="tema" id="tema">
                                    <option value="Elegir" selected disabled>Seleccionar tipo de consulta</option>
                                    <option value="Cotización">Cotización</option>
                                    <option value="Información Técnica">Información Técnica</option>
                                    <option value="Cursos">Cursos</option>
                                    <option value="Eventos">Eventos</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </p>
                            <div class="clearfix"></div>
                            <p class="">
                                <!-- <label>Email *</label> -->
                                <select name="como" id="como">
                                    <option value="Elegir" selected disabled>¿Cómo nos conoció?</option>
                                    <option value="Exposiciones">Exposiciones</option>
                                    <option value="Revista">Revista</option>
                                    <option value="Diario">Diario</option>
                                    <option value="TV">TV</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Vía Pública">Vía Pública</option>
                                    <option value="Otros">Otros</option>
                                </select>
                                
                            </p>
                            <p class="comment-form-comment">
                                <!-- <label>Comment</label>  -->
                                <textarea  name="comment" placeholder="Consulta" required="required"></textarea>
                            </p>
                            <p class="submit-form">
                                <button name="submit" type="submit"  class="submit hvr-shutter-out-verticall" >Enviar</button>
                            </p>
                        </form>
                        <div class="spacer" data-desktop_height="81" data-mobile_height="100" data-smobile_height="100"></div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sidebar-info">
                        <div class="content-box" data-desktop_padding="117px 0px 111px 50px" data-mobile_padding="70px 0px 70px 0px" data-smobile_padding="70px 0px 70px 0px">
                            <div class="widget_text widget widget_custom_html">
                                <div class="textwidget custom-html-widget">
                                    <div class="flat-widget_text">
                                        <ul>
                                            <li>
                                                <i class=""><img src="image/page/contacto/direccion.svg" alt=""></i>
                                                <div class="info-content">
                                                    <h5 class="title text-white">Dirección</h5>
                                                    <p class="text-white">Camino a Monte Cristo Km. 4.5</p>
                                                </div>
                                            </li>
                                            <li>
                                                <i class=""><img src="image/page/contacto/mail.svg" alt=""></i>
                                                <div class="info-content">
                                                    <h5 class="title text-white">Mail</h5>
                                                    <p>
                                                        <a href="mailto:info@venturi.com.ar" class="text-white">info@venturi.com.ar</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <i class=""><img src="image/page/contacto/telefono.svg" alt=""></i>
                                                <div class="info-content">
                                                    <h5 class="title text-white">Teléfono</h5>
                                                    <p>
                                                        <a href="" class="text-white">(00-54-351) 4962030/1262</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
</div>
<?php include("footer.php"); ?> 