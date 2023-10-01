<div class="head-label">

    <!-- <div class="input-group mb-0">
        <span class="input-group-text" id="basic-addon-search1">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </span>
        <input type="search" wire:model="search" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="basic-addon-search1">
    </div> -->
    <div class="input-group">
        <button class="btn btn-outline-primary waves-effect" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>
        <input type="text" wire:model="search" class="form-control" placeholder="Ingrese texto" aria-label="Amount">
        <button class="btn btn-outline-primary waves-effect" type="button">Buscar</button>
    </div>
</div>