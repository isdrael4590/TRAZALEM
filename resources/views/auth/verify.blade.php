<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifique su correo</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('un link de verificaciòn ha sido enviado a su correo.') }}
                       </div>
                   @endif
                   <a href="{{ url('/reset-password/'.$token) }}">Clic AQUI</a>
               </div>
           </div>
       </div>
   </div>
</div>
