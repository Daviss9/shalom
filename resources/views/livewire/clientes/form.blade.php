@include('common.modalHead')
                                
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Cliente</label>
                                        <input type="text" wire:model.lazy="cliente" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Razon Social" />
                                        @error('cliente') <span class="text-danger er">{{ $message }}</span> @enderror    
                                    </div>
                                    
                                    <div class="mb-1">
                                        <label class="form-label">RUC</label>
                                        <input type="number" wire:model.lazy="ruc"  class="form-control dt-post" placeholder="N° de RUC" />
                                        @error('ruc') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Direccion</label>
                                        <input type="text" wire:model.lazy="direccion"  class="form-control dt-post" placeholder="Direccion" />
                                        @error('direccion') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" wire:model.lazy="email" id="basic-icon-default-email" class="form-control dt-email" placeholder="ejemplo@jemplo.com" aria-label="ejemplo@jemplo.com" />
                                        <!-- <small class="form-text"> formato: ejemplo@dominio.com </small> -->
                                        @error('email') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Persona Contacto</label>
                                        <input type="text" wire:model.lazy="personaContacto"  class="form-control dt-post" placeholder="Personal de Contacto" />
                                        @error('personaContacto') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Cargo Contacto</label>
                                        <input type="text" wire:model.lazy="cargoContacto"  class="form-control dt-post" placeholder="Cargo de personal" />
                                        @error('cargoContacto') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Telefono Contacto</label>
                                        <input type="text" wire:model.lazy="telefonoContacto"  class="form-control dt-post" placeholder="Telefono del contacto" />
                                        @error('telefonoContacto') <span class="text-danger er">{{ $message }}</span> @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Email Contacto</label>
                                        <input type="text" wire:model.lazy="emailContacto"  class="form-control dt-email" placeholder="ejemplo@jemplo.com" aria-label="ejemplo@jemplo.com" />
                                        @error('emailContacto') <span class="text-danger er">{{ $message }}</span> @enderror 
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
                                    

@include('common.modalFooter')