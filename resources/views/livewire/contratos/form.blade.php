@include('common.modalLargeHead')
                                
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Cliente</label>
                                        <!-- <input type="text" wire:model.lazy="cliente_id" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Razon Social" /> -->
                                        <select wire:model = "cliente_id" class="form-select dt-post">
                                            <option value = 0 disabled>SELECCIONE CLIENTE</option>
                                            @foreach($clientes as $cli)
                                            <option value = "{{$cli->id}}">{{$cli->cliente}}</option>
                                            @endforeach
                                        </select>
                                        @error('cliente_id') <span class="text-danger er">{{ $message }}</span> @enderror    
                                    </div>
                                    
                                    <div class="mb-1">
                                        <label class="form-label">Nombre Proceso</label>
                                        <input type="text" wire:model.lazy="nombreProceso"  class="form-control dt-post" placeholder="Nombre del Proceso" />
                                        @error('nombreProceso') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Objeto del Proceso</label>
                                        <input type="text" wire:model.lazy="objetoProceso"  class="form-control dt-post" placeholder="Objeto del Proceso" />
                                        @error('objetoProceso') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Tipo Proceso</label>
                                        <!-- <input type="text" wire:model.lazy="tipoProceso" class="form-control dt-email" /> -->
                                        <select wire:model = "tipoProceso" class="form-select dt-post">
                                            <option value = 0 disabled>SELECCIONE TIPO PROCESO</option>
                                            <option value="ADJUDICACION SIMPLIFICADA">ADJUDICACION SIMPLIFICADA</option>
                                            <option value="CONCURSO PUBLICO">CONCURSO PUBLICO</option>
                                            <option value="CONTRATACION DIRECTA">CONTRATACION DIRECTA</option>
                                            <option value="COMPARACION DE PRECIOS">COMPRACION DE PRECIOS</option>
                                            <option value="LICITACION PUBLICA">LICITACION PUBLICA</option>
                                            <option value="VENTA">VENTA</option>
                                        </select>
                                        <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
                                        @error('tipoProceso') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Nro Contrato</label>
                                        <input type="text" wire:model.lazy="nroContrato"  class="form-control dt-post" placeholder="Nro Contrato" />
                                        @error('nroContrato') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">N° Orden de Compra</label>
                                        <input type="text" wire:model.lazy="ordenCompra"  class="form-control dt-post" placeholder="Nro O/C" />
                                        @error('ordenCompra') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Fecha de Contrato/Orden</label>
                                        <input type="date" wire:model.lazy="fechaContrato"  class="form-control dt-post" placeholder="Telefono del contacto" />
                                        @error('fechaContrato') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Moneda</label>
                                        <select wire:model = "moneda" class="form-select dt-post">
                                            <option value = 0 disabled>SELECCIONE MONEDA</option>
                                            <option value="SOLES">SOLES</option>
                                            <option value="DOLARES">DOLARES</option>
                                        </select>
                                        <!-- <input type="text" wire:model = "moneda"  class="form-control dt-post" value="SOLES" placeholder="SOLES" readonly> -->
                                        @error('moneda') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Monto Contrato/Orden</label>
                                        <input type="number" wire:model.lazy="montoTotal"  class="form-control dt-post" placeholder="0.00" step=".01" />
                                        @error('montoTotal') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Plazo de Entrega</label>
                                        <input type="text" wire:model.lazy="plazoEntrega"  class="form-control dt-post" placeholder="Nro dias" />
                                        @error('plazoEntrega') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Fecha de Entrega</label>
                                        <input type="date" wire:model.lazy="fechaEntrega"  class="form-control dt-post" placeholder="Telefono del contacto" />
                                        @error('fechaEntrega') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Observacion</label>
                                        <input type="text" wire:model.lazy="observacion"  class="form-control dt-email" placeholder="Anote las observaciones" />
                                        @error('observacion') <span class="text-danger er">{{ $message }}</span> @enderror 
                                        <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
                                    </div>
                                    <!-- <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                    </div> -->
                                    

@include('common.modalLargeFooter')