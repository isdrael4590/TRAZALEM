{{--<?php
include("connection.php");




?>*/ --}}
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">ESTERILIZADOR MATACHANA VAPOR</h2>
                                        <p class="item-intro text-muted"> Tipo de programa 121°, 134°, B&D, VACIO.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/m1.jpg" alt="..."  height="103" width="102" />
                                    <!-- <form action="/action_page.php">-->

                                            <table class="table table-bordered text-center">
                                                <tr class="bg-dark text-white">
                                                        <td>INCLUYE BIOLÓGICO</td>
                                                        <td>LOTE DE ESTERILIZACIÓN</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="Biologico">INCLUIR BIOLOGICO: </label>
                                                        <select name="biologic" id="biologic">
                                                            <option value="SI"> SI   </option>
                                                            <option value="NO"> NO   </option>
                                                        </select>
                                                        <!--   <br><br>
                                                        <input type="submit" value="Submit"> -->
                                                    </td>
                                                    <td>
                                                        <strong>LOTE:</strong>
                                                        <input type="text" id="flote" name="flote" placeholder="Ingrese # lote del proceso"><br/>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table class="table table-bordered text-center">
                                                <form id='form_code_instrumental' name ='form_code_instrumental' >
                                                    <tr>
                                                        <label for="code">LEER CÓDIGO:</label>
                                                        <input type="text" id="code_rumed_input" name="code_rumed_input" placeholder="Ingreso de paquetes*" value= "<?php if (isset($_GET["CODE"])){echo $_GET["CODE"];}?>" >
                                                        <input type="submit" name='btnSubmit_code' value="GARGAR" >
                                                    </tr>
                                                    <tr class="bg-dark text-white">
                                                        <td>ID</td>
                                                        <td>QR LEIDO</td>
                                                        <td>CODE</td>
                                                        <td>DESCRIPCION</td>
                                                    </tr>

                                                    <tr class="user_input">

                                                    </tr>

                                                </form>
                                            </table>
                                    <!--  </form>-->
                                        <button class="btn btn-primary text-uppercase" data-bs-dismiss="modal" type="button">
                                            CERRAR
                                        </button>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                            IMPRIMIR
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
