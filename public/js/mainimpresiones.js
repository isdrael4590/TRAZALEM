
$('body').addClass('hidetax hidenote hidedate');


function init_date(){
  var now = new Date();
  var month = (now.getMonth() + 1);       
  var day = now.getDate();
  if (month < 10) {
    month = "0" + month;
  }
  if (day < 10) {
    day = "0" + day;
  }
  var today =  day +'-' + month + '-' + now.getFullYear().toString().substr(2,2);
  
  var intwoweeks = new Date(now.getTime() + 14 * 24 * 60 * 60 * 1000);
  var month = (intwoweeks.getMonth() + 1);       
  var day = intwoweeks.getDate();
  if (month < 10) {
    month = "0" + month;
  }
  if (day < 10) {
    day = "0" + day;
  }
  
  var twoweeks =  day +'-' + month + '-' + intwoweeks.getFullYear().toString().substr(2,2);
  
  

  $('.datePicker').val(today);
  $('.twoweeks').val(twoweeks);
}





$('.invoicelist-body').on('keyup','input',function(){
  calculate();
});





$('#config_note').on('change',function(){
  $('body').toggleClass('shownote hidenote');
});




$('#config_date').on('change',function(){
  $('body').toggleClass('hidedate showdate');
});


init_date();
calculate();