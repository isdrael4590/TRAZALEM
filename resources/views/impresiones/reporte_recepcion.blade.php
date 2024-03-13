<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REPORTE DE INGRESO DE INSTRUMENTAL </title>
    <link rel="stylesheet" href="{{ URL::to('assets/css/mainimpresiones.css') }}">
</head>

<body>
    <div class="control-bar">
        <div class="container">

            <div class="row">

                <div class="col-2-4">
                    <div class="col-4 text-right">
                        <a href="{{ route('ReceptionRumed') }}">RETORNAR</a>
                    </div>
                    <div class="slogan">INGRESO MATERIAL SUCIO </div>


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
                    <h1>{{ $institution->short_name }}</h1>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <h2>{{ $institution->company_area }}</h2>
                </td>

            </tr>
        </table>

        <div class="me">
            <p class="text-center">

                {{ $institution->address }}
                <br>
                {{ $institution->city }} - {{ $institution->country }}
            </p>
        </div><!--.me-->


    </header>


    <div class="row section">
        <div class="col-1">
            <h1>MATERIAL DE LA RUMED INGRESADO</h1>
        </div><!--.col-->


        <div class="col-1 text-right details">
            <p>
                Fecha Ingreso: <span>{{ $receptionrumed->date_reception }}
            </p>
        </div><!--.col-->

        <div class="col-1">
            <table>
                <thead>
                    <tr>
                        <th width="25%" style="text-align">OPERARIO QUIEN RECIBE</th>
                        <th><span>{{ $receptionrumed->operator }} </span></th>
                    </tr>
                    <tr>
                        <th width="25%" style="text-center">PERSONAL QUIEN ENTREGA</th>
                        <th><span>{{ $receptionrumed->delivery_staff }} </span></th>
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
                        <th width="10%" style="text-align">Item</th>
                        <th width="15%">Código del Instrumental </th>
                        <th width="10%">Descripción del instrumental </th>
                        <th width="20%">Nivel de Infección</th>
                        <th width="20%">Estado del Instrumental</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align">{{ $receptionrumed->id }}</td>
                        <td width="15%"> {{ $receptionrumed->coderumed }}</td>
                        <th width="10%">{{ $receptionrumed->name_coderumed }}</th>
                        <td width="20%">{{ $receptionrumed->type_dirt }}</td>
                        <td width="20%">{{ $receptionrumed->state_rumed }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br><br>

    </div><!--.row-->



    <br>

    <div class="note" contenteditable>
        <h2>Nota:</h2>
        <p>{{ $receptionrumed->observation }}<< /p>
    </div><!--.note-->


    <footer class="row">
        <div class="row section">
            <div class="col-4" class="text-center">
                <table>
                    <tr>
                        <td  class="text-center" >
                            <br>
                            <p>------------------------------------</p>
                            <p>Responsable</p>
                            <span>{{ $receptionrumed->operator }} </span>
                            <br>
                        </td>
                      <td> </td>
                      <td>   </td>
                      <td>    </td>
                      <td>     </td>
                      <td>    </td>
                        <td class="text-center">
                            <br>
                            <p>------------------------------------</p>
                            <p>Responsable</p>
                            <span>{{ $receptionrumed->operator }} </span>
                            <br>
                        </td>
                    </tr>
                </table>

            </div>

            <p class="notaxrelated"> Nota: El presente Documento valida la responsabilidad de ingreso y de
                recepción.</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')
    </script>
    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
</body>

</html>
