<?php 
#include("connection.php");

#$state_bd_rumed=$conn -> prepare("SELECT*FROM coderumed");
#$state_bd_rumed->execute();
#$code_bd_rumed=$state_bd_rumed->fetchALL(PDO:: FETCH_ASSOC);

#if ($code_bd_rumed>0) {
#	// show the publishers
#	foreach ($code_bd_rumed as $code_bd_rumed) {
#    #echo $code_bd_rumed['CODE'] . '<br>';
#	}
#}

?>        
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ESTERILIZADOR CISA VAPOR</h2>
                                    <p class="item-intro text-muted"> Tipo de programa 121°, 134°, B&D, VACIO.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/c2.jpg" alt="..." />
                                   <!-- <form action="/action_page.php">-->
                                        <table class="table table-bordered text-center">
                                            <form id='form_code_instrumental' name ='form_code_instrumental' method="GET">  
                                                <tr>
                                                    <label for="code">CÓDIGO:</label>
                                                    <input type="text" id="code" name="code" placeholder="Ingreso el código*" >    
                                                    <input type="submit" name='btnSubmit_code' value="BUSCAR">
                                                </tr>
                                                <tr class="bg-dark text-white">
                                                    <td>ID</td>                                                    
                                                    <td>CODE</td>
                                                    <td>DESCRIPCION</td>
                                                    <td>SELECCIONAR</td>
                                                </tr>
                                                <tbody>
                                                    <?php #foreach($code_rumed as $code_rumed) { ?>
                                                    <tr class="">
                                                    <td scope="row"><?php #echo $code_rumed["ID"];?></td>
                                                    <td><?php #echo $code_rumed["CODE"];?></td>
                                                    <td><?php #echo $code_rumed["DESCRIPTION"];?> </td>
                                                    <td><input type="checkbox" id="CODE_RUMED_SELEC" name="vehicle_3" value="BoaSDt"></td>
                                                    <?php #} ?>
                                                </tbody>
                                                
                                                </tr>
                                            </form>
                                        </table>
                                        <table class="table table-bordered text-center">
                                            <tr class="bg-dark text-white">
                                                <td>TIPO TEMPERATURA</td>
                                                <td>TIPO DE CARGA</td>
                                                <td> CANTIDAD DE PAQUETES DEL CICLO</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="temperature">Elegir Temperatura:</label>
                                                    <select name="temperature" id="temperature">
                                                        <option value="121°C">121°C</option>
                                                        <option value="134°C">134°C</option>
                                                    </select>
                                                    <!--   <br><br>
                                                    <input type="submit" value="Submit"> -->
                                                </td>
                                                <td>
                                                    <label for="temperature">Elegir Carga:</label>
                                                    <select name="temperature" id="temperature">
                                                        <option value="Estándar">Estándar </option>
                                                        <option value="Mixto ">Mixto </option>
                                                        <option value="Contendores ">Contendores </option>
                                                        <option value="Rapid ">Rapid 121°C</option>
                                                        <option value="Esporas ">Esporas </option>
                                                    </select>
                                                    <!--   <br><br>
                                                    <input type="submit" value="Submit"> -->
                                                </td>
                                                <td> <strong># Paquetes:</strong>
                                                    <input type="text" id="Npaquetes" name="Npaquetes" placeholder=" # paquetes/ciclo"><br/>
                                                </td>
                                            </tr> 
                                        </table>
                                        <table class="table table-bordered text-center">
                                            <tr class="bg-dark text-white">
                                                    <td>INCLUYE BIOLÓGICO</td>
                                                    <td>LOTE DE ESTERILIZACIÓN</td>
                                                    <td>TIEMPO DE EXPIRACIÓN</td>
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
                                                <td>
                                                    <label for="time_expiration">EXPIRACIÓN: </label>
                                                    <select name="time_exp" id="time_exp">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                    <label for="meses">MES(ES) </label>
                                                    <!--   <br><br>
                                                    <input type="submit" value="Submit"> -->
                                                </td>
                                            </tr>  
                                        </table>
                                        <li>
                                            <strong>OPERADOR:</strong>
                                            <input type="text" id="operator" placeholder="Ingrese sus nombres*"><br/><br/>
                                        </li>
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
