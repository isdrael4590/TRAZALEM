<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REPORTE DE INGRESO </title>
    <link rel="stylesheet" href="mainimpresiones.css">
</head>

<body>
    <div class="control-bar">
        <div class="container">
            <div class="row">
                <div class="col-2-4">
                    <div class="slogan">REPORTE INGRESO DE MATERIAL</div>


                    <label for="config_note">Nota:
                        <input type="checkbox" id="config_note" />
                    </label>

                </div>
                <div class="col-4 text-right">
                    <a href="javascript:window.print()">Imprimir</a>
                </div><!--.col-->
            </div><!--.row-->
        </div><!--.container-->

    </div><!--.control-bar-->
    <header class="text-align">
        <table>
            <tr>
                <td rowspan="2">
                    <div class="logoholder text-align">
                        <img src="logohe1.png" IMA>
                    </div><!--.logoholder-->
                </td>
                <td class="text-center">
                    <h1>HOSPITAL DE ESPECIALIDADES DE LAS FUERZAS ARMADAS HE-1</h1>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <h2>Central de Esterilización</h2>
                </td>
                
            </tr>
        </table>

        <div class="me">
            <p class="text-center">

                Av. Gran Colombia y Ladron de Guevara
                Quito - Ecuador
            </p>
        </div><!--.me-->


    </header>


    <div class="row section">
        <div class="col-2">
            <h1>RESULTADO DE CICLO ESTERIL</h1>
        </div><!--.col-->


        <div class="col-2 text-right details">
            <p>
                Fecha Elaboración: <input type="text" class="datePicker" /><br>
                Fecha de Vencimiento: <input class="twoweeks" type="text" /> <br>
                Temperatura Ambiente: 26,5°
            </p>
        </div><!--.col-->

        <div class="col-1">
            <table>
                <thead>
                    <tr>
                        <th width="25%" style="text-align">OPERARIO</th>
                        <th>Fernando Jácome</th>
                    </tr>
                    <tr>
                        <th width="25%" style="text-center">EQUIPO</th>
                        <th>MATACHANA </th>
                    </tr>
                </thead>

            </table>
            <br><br><br>
        </div><!--.col-->
    </div><!--.row-->

    <div class="row section" style="margin-top:-1rem">
        <div class="col-1">
            <table style='width:100%'>
                <thead>
                    <tr class="invoice_detail">
                        <th width="5%" style="text-align">Item</th>
                        <th width="10%">Código </th>
                        <th width="20%">Descripción </th>
                        <th width="5%">Temperatura </th>
                        <th width="10%">Lot. Ind. Biológico </th>
                        <th width="10%">Tipo de Ciclo</th>
                        <th width="10%">Validación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="5%" style="text-align">1</td>
                        <td width="10%"> v1121</td>
                        <th width="20%">laprascopia 1 </th>
                        <td width="5%">134</td>
                        <td width="10%">L534_M345</td>
                        <td width="10%">Contenedores</td>
                        <th width="10%">ERROR</th>
                    </tr>
                    <tr class="invoice_detail">
                        <td width="5%" style="text-align">1</td>
                        <td width="10%"> v1121</td>
                        <th width="20%">laprascopia 1 </th>
                        <td width="5%">134</td>
                        <td width="10%">L534_M345</td>
                        <td width="10%">Contenedores</td>
                        <th width="10%">ERROR</th>
                    </tr>
                    
                    <tr class="invoice_detail">
                        <td width="5%" style="text-align">1</td>
                        <td width="10%"> v1121</td>
                        <th width="20%">laprascopia 1 </th>
                        <td width="5%">134</td>
                        <td width="10%">L534_M345</td>
                        <td width="10%">Contenedores</td>
                        <th width="10%">ERROR</th>
                    </tr>
                    <tr class="invoice_detail">
                        <td width="5%" style="text-align">1</td>
                        <td width="10%"> v1121</td>
                        <th width="20%">laprascopia 1 </th>
                        <td width="5%">134</td>
                        <td width="10%">L534_M345</td>
                        <td width="10%">Contenedores</td>
                        <th width="10%">ERROR</th>
                    </tr>
                    <tr class="invoice_detail">
                        <td width="5%" style="text-align">1</td>
                        <td width="10%"> v1121</td>
                        <th width="20%">laprascopia 1 </th>
                        <td width="5%">134</td>
                        <td width="10%">L534_M345</td>
                        <td width="10%">Contenedores</td>
                        <th width="10%">ERROR</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>

    </div><!--.row-->
    <br>
    <div class="logoholder">
        
            <img src="espacio_impresionciclo.png" height="520">
    </div><!--.logoholder-->


    <br>

    <div class="note" contenteditable>
        <h2>Nota:</h2>
        <p>jnsocsuhdcosdn</p>
    </div><!--.note-->


    <footer class="row">
        <div class="col-1 text-center">
            <br><br>
            <p>------------------------------------</p>
            <p>Responsable</p>
            <br>
            <p class="notaxrelated" contenteditable> Nota: Revisar los paquetes el estado para su uso.

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="main.js"></script>
</body>

</html>