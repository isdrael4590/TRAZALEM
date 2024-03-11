<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REPORTE DE TEST DE BOWIE & DICK </title>
    <link rel="stylesheet"  href="{{ URL::to('assets/css/mainimpresiones.css') }}">
</head>

<body>
    <div class="control-bar">
        <div class="container">
  
            <div class="row">
               
                <div class="col-2-4">
                    <div class="col-4 text-right">
                        <a href="{{ route('zneManagement/testbowie') }}">RETORNAR</a>
                    </div>
                    <div class="slogan">REPORTE TEST DE BOWIE AND DICK </div>


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
                        <img src="{{ URL::to('assets/img/impresiones/logohe1.png') }}" IMA>
                    </div><!--.logoholder-->
                </td>
                <td class="text-center">
                    <h1>HOSPITAL DE ESPECIALIDADES DE LAS FUERZAS ARMADA HE-2</h1>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <h2>Central de Esterilización</h2>
                </td>
                <td>
                    <h3>LOTE: </h3>
                </td>
                <td>
                    <h2>  {{ $testbowie->lote_machine }} </h2>
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
            <h1>TEST DE BOWIE AND DICK</h1>
        </div><!--.col-->


        <div class="col-2 text-right details">
            <p>
                Fecha Elaboración: <span>{{ $testbowie->date_done_bd }} </span><br>
                Temperatura Ambiental: <span>{{ $testbowie->temp_ambiente }} </span>
            </p>
        </div><!--.col-->

        <div class="col-1">
            <table>
                <thead>
                    <tr>
                        <th width="25%" style="text-align">OPERARIO</th>
                        <th><span>{{ $testbowie->operator }} </span></th>
                    </tr>
                    <tr>
                        <th width="25%" style="text-center">EQUIPO</th>
                        <th><span>{{ $testbowie->machine_id }} </span></th>
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
                        <th width="25%" style="text-align">Item</th>
                        <th width="15%">Equipo </th>
                        <th width="10%">Temperatura </th>
                        <th width="20%">Lot. Insumo B&D</th>
                        <th width="20%">Validación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align">{{ $testbowie->id }}</td>
                        <td width="15%"> {{ $testbowie->machine_id }}</td>
                        <th width="10%">{{ $testbowie->temp_machine }}</th>
                        <td width="20%">{{ $testbowie->lote_bd }}</td>
                        <td width="20%">{{ $testbowie->validation_bd }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br><br>
        <div class="logoholder text-align">
            <img src="{{ URL::to('assets/img/impresiones/espacio_impresionbd.png') }}" height="420" IMA>
        </div><!--.logoholder-->
    </div><!--.row-->



    <br>

    <div class="note" contenteditable>
        <h2>Nota:</h2>
        <p>{{ $testbowie->observation }}<</p>
    </div><!--.note-->


    <footer class="row">
        <div class="col-1 text-center">
            <br><br>
            <p>------------------------------------</p>
            <p>Responsable</p>
            <br>
            <p class="notaxrelated" contenteditable> Nota: El presente ciclo no es ESTERIL.</p>

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
</body>

</html>