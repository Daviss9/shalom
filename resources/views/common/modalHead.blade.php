<div wire:ignore.self class="modal modal-slide-in fade" id="modal1">
    <div class="modal-dialog sidebar">
        <form class="add-new-record modal-content pt-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">{{$componentName}} |{{$selected_id>0 ? 'EDITAR':'NUEVO REGISTRO'}}</h5>
                <h6 class="text-center text-warning" wire:loading> Por favor Espere ...</h6>
            </div>
            <div class="modal-body flex-grow-1">