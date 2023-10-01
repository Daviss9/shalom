@include('common.modalLargeHead')
                                
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Cliente</label>
                                        <!-- <input type="text" wire:model.lazy="cliente_id" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Razon Social" /> -->
                                        <select wire:model = "cliente_id" class="form-select @error('cliente_id') is-invalid @enderror">
                                            <option value = 0 disabled>SELECCIONE CLIENTE</option>
                                            @foreach($clientes as $cli)
                                            <option value = "{{$cli->id}}">{{$cli->cliente}}</option>
                                            @endforeach
                                        </select>
                                        @error('cliente_id') <span class="text-danger er">{{ $message }}</span> @enderror    
                                    </div>
                                    
                                    <div class="mb-1">
                                        <label class="form-label">Nombre Proceso</label>
                                        <input type="text" wire:model.lazy="nombreProceso"  class="form-control @error('nombreProceso') is-invalid @enderror" placeholder="Nombre del Proceso" />
                                        @error('nombreProceso') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Objeto del Proceso</label>
                                        <input type="text" wire:model.lazy="objetoProceso"  class="form-control @error('objetoProceso') is-invalid @enderror" placeholder="Objeto del Proceso" />
                                        @error('objetoProceso') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Tipo Proceso</label>
                                        <!-- <input type="text" wire:model.lazy="tipoProceso" class="form-control dt-email" /> -->
                                        <select wire:model = "tipoProceso" class="form-select @error('tipoProceso') is-invalid @enderror"">
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
                                        <input type="text" wire:model.lazy="nroContrato"  class="form-control @error('nroContrato') is-invalid @enderror" placeholder="Nro Contrato" />
                                        @error('nroContrato') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">N° Orden de Compra</label>
                                        <input type="text" wire:model.lazy="ordenCompra"  class="form-control @error('ordenCompra') is-invalid @enderror" placeholder="Nro O/C" />
                                        @error('ordenCompra') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Fecha de Contrato/Orden</label>
                                        <input type="date" wire:model.lazy="fechaContrato"  class="form-control @error('fechaContrato') is-invalid @enderror" placeholder="Telefono del contacto" />
                                        @error('fechaContrato') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Moneda</label>
                                        <select wire:model = "moneda" class="form-select @error('moneda') is-invalid @enderror">
                                            <option value = 0 disabled>SELECCIONE MONEDA</option>
                                            <option value="SOLES">SOLES</option>
                                            <option value="DOLARES">DOLARES</option>
                                        </select>
                                        <!-- <input type="text" wire:model = "moneda"  class="form-control dt-post" value="SOLES" placeholder="SOLES" readonly> -->
                                        @error('moneda') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Monto Contrato/Orden</label>
                                        <input type="number" wire:model.lazy="montoTotal"  class="form-control @error('montoTotal') is-invalid @enderror" placeholder="0.00" step=".01" />
                                        @error('montoTotal') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Plazo de Entrega</label>
                                        <input type="text" wire:model.lazy="plazoEntrega"  class="form-control @error('plazoEntrega') is-invalid @enderror" placeholder="Nro dias" />
                                        @error('plazoEntrega') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Fecha de Entrega</label>
                                        <input type="date" wire:model.lazy="fechaEntrega"  class="form-control @error('fechaEntrega') is-invalid @enderror" placeholder="Telefono del contacto" />
                                        @error('fechaEntrega') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Observacion</label>
                                        <input type="text" wire:model.lazy="observacion"  class="form-control @error('observacion') is-invalid @enderror" placeholder="Anote las observaciones" />
                                        @error('observacion') <span class="text-danger er">{{ $message }}</span> @enderror 
                                        <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
                                    </div>
@include('common.modalLargeFooter')