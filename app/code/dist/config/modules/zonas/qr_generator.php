

        
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">GENERADOR DE ETIQUETA</h2>
                                    <p class="item-intro text-muted"> PREVIO A LA GENERACIÓN DE ETIQUETAS SELECIONAR LISTA DE INSTRUMENTAL, TEMPERATURA, TIPO DE CICLO, ENTRE OTROS.  </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/m5.jpg" alt="..." />


                                    <table class="table table-bordered text-center">
                                        <tr class="bg-dark text-white">
                                            <td>TIPO TEMPERATURA</td>
                                            <td>TIPO DE CARGA</td>
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
                                        </tr> 
                                    </table>


                                    <table class="table table-bordered text-center">
                                        <tr class="bg-dark text-white">
                                                <td>LOTE DE ESTERILIZACIÓN</td>
                                                <td>TIEMPO DE EXPIRACIÓN</td>
                                        </tr>
                                        <tr>
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
                                    
                                    <form action="" method="post">
                                                <label for= "rumed_code"> BUSCAR: </label>
                                                <input type="text" name="campo" id="rumed_code">
                                    </form>
                                    <p></p>
                                    <table class="table table-bordered text-center">
                                        
                                        <thead class="bg-dark text-white">
                                                <th>ID</th>                                                    
                                                <th>CODE</th>
                                                <th>DESCRIPCION</th>
                                                <th>SELECCIONAR</th>
                                                <th>QR GENERADO</th>
                                        </thead>
                                        <tbody id='form_code_instrumental' >  
                                          
                                            
                                        </tbody>
                                    
                                    </table>
                                    <script>
                                        getData()
                                        document.getElementById("rumed_code").addEventListener("keyup", getData)
                                        function getData(){
                                            let input =document.getElementById("rumed_code").value
                                            let content = document.getElementById("form_code_instrumental")
                                            let url = "load.php"
                                            let formData = new FormData()
                                            formData.append('rumed_code', input)

                                            fetch(url, {
                                                method:"POST",
                                                body:FormData
                                            }).then(Response => Response.json())
                                            .then(data => {
                                                content.innerHTML = data.data
                                            }).catch(err => console.log(err))
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>