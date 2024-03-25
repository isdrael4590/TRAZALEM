<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    <span>{{ session('message') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        @endif

        <div class="table-responsive position-relative">
            <div wire:loading.flex class="col-12 position-absolute justify-content-center align-items-center"
                style="top:0;right:0;left:0;bottom:0;background-color: rgba(255,255,255,0.5);z-index: 99;">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle">Código</th>
                        <th class="align-middle text-center">DescripCión</th>
                        <th class="align-middle text-center">Envoltura</th>
                        <th class="align-middle text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($cart_items->isNotEmpty())
                        @foreach ($cart_items as $cart_item)
                            <tr>
                                <td class="align-middle">
                                    {{ $cart_item->name_coderumed }} <br>
                                    {{-- @include('livewire.includes.coderumed-cart-modal') --}}
                                </td>
                                <td class="align-middle">
                                    {{ $cart_item->options->code_coderumed }}
                                </td>

                                <td>
                                    <select class="select floating" id="package_wrap" name="package_wrap">
                                        <option selected disabled>-- Seleccionar la envoltura--
                                        </option>
                                        <option value="Contenedor Rigido"> Contenedor Rigido
                                        </option>
                                        <option value="Papel Mixto"> Papel Mixto </option>
                                        <option value="Tela NO Tejida"> Tela NO Tejida </option>
                                        <option value="Tela Tejida"> Tela Tejida </option>
                                    </select>
                                </td>



                                <td class="align-middle text-center">
                                    {{--                                    <a href="#" wire:click.prevent="removeItem('{{ $cart_item->rowId }}')"> --}}
                                    {{--                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> --}}
                                    {{--                                        Del --}}
                                    {{--                                    </a> --}}

                                    <a href="#" wire:click.prevent="removeItem('{{ $cart_item->rowId }}')"
                                        class="btn btn-icon btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">
                                <span class="text-danger">
                                    Por favor Buscar y Seleccionar el producto!
                                </span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
