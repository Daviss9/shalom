@include('common.modalHead')

<div class="mb-1">
    <label class="form-label" for="basic-icon-default-fullname">Apellido Paterno</label>
    <input type="text" wire:model.lazy="paterno" class="form-control @error('paterno') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Apellido Paterno" />
    @error('paterno') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label" for="basic-icon-default-fullname">Apellido Materno</label>
    <input type="text" wire:model.lazy="materno" class="form-control @error('materno') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Apellido Materno" />
    @error('materno') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label" for="basic-icon-default-fullname">Nombre</label>
    <input type="text" wire:model.lazy="nombre" class="form-control @error('nombre') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Nombre" />
    @error('nombre') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label" for="basic-icon-default-email">Sexo</label>
    <select wire:model="sexo" class="form-select @error('sexo') is-invalid @enderror"">
        <option value = 0 disabled>Seleccione sexo</option>
        <option value=" F">FEMENINO</option>
        <option value="M">MASCULINO</option>
    </select>
    <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
    @error('sexo') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label">Numero DNI</label>
    <input type="number" wire:model.lazy="dni" class="form-control @error('dni') is-invalid @enderror" maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="N° de DNI" />
    @error('dni') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div>
    <div class="mb-1" wire:ignore>
        <label class="form-label" for="basic-icon-default-fullname">Cargo</label>
        <select id="selCargo" class="select2 form-select @error('cargo_id') is-invalid @enderror">
            @foreach($listacargo as $c)
            <option value="{{$c->id}}">{{$c->cargo}}</option>
            @endforeach
        </select>

    </div>
    @error('cargo_id')
    <div class="demo-spacing-0">
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <div class="alert-body d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span class="text-danger er">{{ $message }}</span>
            </div>
        </div>
    </div>
    @enderror
</div>
<div >
    <div class="mb-1" wire:ignore>
        <label class="form-label" for="basic-icon-default-fullname">Area</label>
        <select id="selArea" class="select2 form-select @error('area_id') is-invalid @enderror">
            @foreach($areas as $a)
            <option value="{{$a->id}}">{{$a->area}}</option>
            @endforeach
        </select>
        
    </div>
    @error('area_id') 
    <div class="demo-spacing-0">
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <div class="alert-body d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span class="text-danger er">{{ $message }}</span>
            </div>
        </div>
    </div>
    @enderror
</div>
<div class="mb-1">
    <label class="form-label">Numero de Celular</label>
    <input type="number" wire:model.lazy="celular" class="form-control @error('celular') is-invalid @enderror" maxlength="9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="N° Celular" />
    @error('celular') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label" for="basic-icon-default-email">Email</label>
    <input type="text" wire:model.lazy="email" id="basic-icon-default-email" class="form-control @error('email') is-invalid @enderror" placeholder="ejemplo@jemplo.com" aria-label="ejemplo@jemplo.com" />
    <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
    @error('email') <span class="text-danger er">{{ $message }}</span> @enderror
</div>
<div class="mb-1">
    <label class="form-label">Observacion</label>
    <input type="text" wire:model.lazy="observacion" class="form-control dt-email" placeholder="observacion" />
    @error('observacion') <span class="text-danger er">{{ $message }}</span> @enderror
    <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#selCargo').select2({
            //Agregar para que el select2 funcione en el modal
            dropdownParent: $('#modal1 .modal-body'),
            language: {
                noResults: function() {
                    return "No hay resultado";
                },
                searching: function() {
                    return "Buscando..";
                }
            }
        });
        $('#selCargo').on('change', function(e) {
            var cargoID = $('#selCargo').select2("val")
            @this.set('cargo_id', cargoID)
        });
        //Select Area
        $('#selArea').select2({
            //Agregar para que el select2 funcione en el modal
            dropdownParent: $('#modal1 .modal-body'),
            language: {
                noResults: function() {
                    return "No hay resultado";
                },
                searching: function() {
                    return "Buscando..";
                }
            }
        });
        $('#selArea').on('change', function(e) {
            var areaID = $('#selArea').select2("val")
            @this.set('area_id', areaID)
        });

    })
</script>
@include('common.modalFooter')