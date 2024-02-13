<div>
    <button class="btn bnt-primary" wire:class='imprimir'> IMPRIMIR QR</button>
    @section('scripts')
        <script>
            Livewire.on('print_on', accion => {
                var id = accion[0]
                var tipo = accion[1]
                var data = accion[2]
                var ruta = "{{ route('printer_qr') }}";
                var variable = '/' + id + '/' + tipo + '/' + data;
                var url = ruta + variable;
                window.open(url, 'TRAZALEM QR', 'width=800,height=650', 'toolbar=no');
            })
        </script>
    @endsection
</div>
