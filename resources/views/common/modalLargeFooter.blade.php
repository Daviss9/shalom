<div class="modal-footer">
@if($selected_id < 1) 
    <button type="button" wire:click.prevent="Store()" class="btn btn-primary me-1">Guardar</button>
    @else
    <button type="button" wire:click.prevent="Update()" class="btn btn-info data-submit me-1 close-modal">Actualizar</button>
    @endif
    <button type="reset" wire:click.prevent="resetUI()" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>