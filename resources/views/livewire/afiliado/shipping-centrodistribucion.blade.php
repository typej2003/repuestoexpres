<div>
    <div class="row">
        <div class="col-md-12">
            <h4>Centro de distribución</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Seleccione el Centro de distribución</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {!! $centro !!} 
        </div>
        <div class="col-md-6">
            <button class='btn btn-success {{$class}}' wire:click.prevent="siguiente">Siguiente</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            @if($showEditModal)
                            <span>Editar Pedido</span>
                            @else
                            <span>Centros de distribución</span>
                            @endif
                        </h5>
                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="card" style="width: 100% !important;">
                                <div class="card-body">                                    
                                            @forelse ($centrosmodal as $index => $centro)
                                                <div class="row border border-1 my-1">
                                                    <div class="col-md-8">
                                                        {{ $centro->address }}
                                                        <br>
                                                        {{ $centro->contactphone}}
                                                        <br>
                                                        {{ $centro->horario}}
                                                    </div>
                                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                                        <button class="btn btn-secondary form-control " href="" wire:click.prevent="selectCentro({{ $centro }})">
                                                            Entregar aquí
                                                        </button>
                                                    </div>
                                                </div>
                                            @empty
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="mt-2">No se encontro resultados</p>
                                                </div>
                                            </div>
                                            @endforelse
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    </div>
                </div>
        </div>
    </div>
</div>
