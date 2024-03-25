$('body').addClass('hidetax hidenote hidedate');

// configuracion nota en el reporte de testbowie
$('#config_note').on('change',function(){
  $('body').toggleClass('shownote hidenote');
});






var newRow = '<tr><td><a class="control removeRow" href="#">x</a><span >12345</span></td>   <td><select id="SelectCoderumed" name="SelectCoderumed">{{--@foreach ($coderumed as $coderumed)<option value="{{ $coderumed->id }}">{{ $coderumed->coderumed_id }}</option> @endforeach--}}    <option selected disabled>-- Seleccionar la envoltura-- </option> <option value="Contenedor Rigido"> v1  </option><option value="Papel Mixto"> a1 </option>    <option value="Tela NO Tejida"> c1 </option> <option value="Tela Tejida"> d4</option></select></td><td class="package_type"><div class="form-group form-focus select-focus"><select class="select floating "id="datatime_expiration "name="datatime_expiration"><option selected disabled>-- Seleccionar la emboltura--</option><option value="Contenedor Rigido"> Contenedor Rigido </option><option value="Papel Mixto"> Papel Mixto </option><option value="Tela NO Tejida"> Tela NO Tejida </option><option value="Tela Tejida"> Tela Tejida  </option> </select></div></td></tr>';

$('.selectRumed-body').on('keyup','input',function(){
  calculate();
});
$('.newRow').on('click',function(e){
    $('.selectRumed-body tbody').append(newRow);
    e.preventDefault();
    calculate();

  });
  
  $('body').on('click','.removeRow',function(e){
    $(this).closest('tr').remove();
    e.preventDefault();

  });