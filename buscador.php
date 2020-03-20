<?php include("header.php"); ?> 
<div class="page-title parallax parallax1-productos style1">
    <!-- <div class="overlay overlay1"></div> -->
    <div class="container wrap-page-title">
        <div class="page-title-content">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="servicios.php">servicios</a></li>
            </ul>
        </div>
        <div class="page-title-heading">
            <h1>Buscador de Productos</h1>
        </div>
    </div>
</div>
<div class="main-history">
    <section class="flat-founder">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="filter">
                        <h3 class="text-uppercase text-white">Buscador general</h3>
                        <p class="text-white">Si no conoce el producto puede utilizar el buscador general ingresando el tipo, marca, maquina, aplicación, etc.</p>
                        <div class="row mt-4">
                            <div class="col-9 pr-1">
                                
                                    <!-- <label>Name *</label> -->
                                    <input  name="general" type="text" placeholder="" required="required">
                                
                            </div>
                            <div class="col-3 pl-1">
                                <button name="submit" type="submit"  class="submit hvr-shutter-out-verticall p-3"><img src="image/navbar/search.svg" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="filter">
                        <h3 class="text-uppercase text-white">Buscador avanzado</h3>
                        <p class="text-white">Si ya conoce el producto puede utilizar el buscador avanzado con los filtros o ingresar el código correspondiente que posea</p>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-12 pr-1 pl-1 pl-lg-3">
                                <input  name="venturi" type="text" placeholder="Código Venturi" required="required">
                            </div>
                            <div class="col-lg-4 col-12 pr-1 pl-1">
                                <input  name="oem" type="text" placeholder="Código OEM" required="required">
                            </div>
                            <div class="col-lg-4 col-12 pr-lg-3 pr-1 pl-1">
                                <select name="descripcion" id="">
                                    <option value="Descripción Genérica" selected disabled>Descripción Genérica</option>
                                    <option value="Opción 1">Opción 1</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12 pr-1 pl-1 pl-lg-3">
                                <input  name="descripcion2" type="text" placeholder="Descripción" required="required">
                            </div>
                            <div class="col-lg-4 col-12 pr-1 pl-1">
                                <select name="maquina" id="">
                                    <option value="Marca de máquina / aplicación" selected disabled>Marca de máquina / aplicación</option>
                                    <option value="maquina 1">maquina 1</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12 pr-lg-3 pr-1 pl-1">
                                <select name="marca" id="">
                                    <option value="Marca genérica" selected disabled>Marca genérica</option>
                                    <option value="Marca 1">Marca 1</option>
                                </select>
                            </div>
                            <div class="col-lg-8 col-12 pr-1 pl-1 pl-lg-3">
                                <input  name="aplicacion" type="text" placeholder="Modelo aplicación" required="required">
                            </div>
                            <div class="col-lg-4 col-12 pr-lg-3 pr-1 pl-1">
                                <button name="submit" type="submit"  class="submit hvr-shutter-out-verticall p-3 btn-block">Buscar <img src="image/navbar/search.svg" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer" data-desktop_height="110" data-mobile_height="100" data-smobile_height="100"></div>
    </section>
    <section class="flat-founder">
        <div class="container">
            <div class="row align-items-center">
                <div class="table-wrapper">
                    <table class="tabla-buscador">
                        <thead class="border-bottom-buscador">
                            <tr class="columnas-buscador">
                                    <td width="15%">
                                        <h3>Tipo</h3>
                                    </td>
                                    <td width="10%">
                                        <h3>Marca</h3>
                                    </td>
                                    <td width="15%">
                                        <h3>Código de fabricante</h3>
                                    </td>
                                    <td width="15%">
                                        <h3>Código Venturi</h3>
                                    </td>
                                    <td width="10%">
                                        <h3>Máquina</h3>
                                    </td>
                                    <td width="20%">
                                        <h3>Descripción</h3>
                                    </td>
                                    <td width="15%">
                                        <h3>Aplicación</h3>
                                    </td>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h3 class="pb-2">Válvula de control</h3>
                                    <div class="d-flex img-wrapper justify-content-end" style="background-image: url(image/page/buscador/prod-buscador.jpg);background-size: cover;background-position: center;align-items: flex-end;">
                                        <a href="#" class="btn btn-pdf btn-primary hvr-shutter-out-verticall">PDF</a>
                                    </div>
                                </td>
                                <td class="align-middle">Achilli & Di Battista</td>
                                <td class="align-middle">4360728</td>                        
                                <td class="align-middle">90340116</td>                        
                                <td class="align-middle">Transmisión</td>                        
                                <td class="align-middle">Válvula control 3 puntos</td>                        
                                <td class="align-middle">Varios</td>                        
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="pb-2">Válvula de control</h3>
                                    <div class="d-flex img-wrapper justify-content-end" style="background-image: url(image/page/buscador/prod-buscador.jpg);background-size: cover;background-position: center;align-items: flex-end;">
                                        <a href="#" class="btn btn-pdf btn-primary hvr-shutter-out-verticall">PDF</a>
                                    </div>
                                </td>
                                <td class="align-middle">Achilli & Di Battista</td>
                                <td class="align-middle">4360728</td>                        
                                <td class="align-middle">90340116</td>                        
                                <td class="align-middle">Transmisión</td>                        
                                <td class="align-middle">Válvula control 3 puntos</td>                        
                                <td class="align-middle">Varios</td>                        
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-pagination">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
                            </li>
                            <li class="active">
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#">05</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer" data-desktop_height="110" data-mobile_height="100" data-smobile_height="100"></div>
    </section>
    
</div>
<?php include("footer.php"); ?> 