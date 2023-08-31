<div>
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">{{$pageTitle}} de {{$componentName}}</h2>
                            <!-- <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Datatable</a>
                                    </li>
                                    <li class="breadcrumb-item active">Basic
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section>
                    <div class="row">
                        <div class="col-12">
                        
                        </div>
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header border-bottom p-1">
                                @include('common.searchbox')
                            <div class="dt-action-buttons text-end">
                                <div class="dt-buttons d-inline-flex"> 
                                    
                                    <!-- <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share font-small-4 me-50"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
                                        Export
                                        </span>
                                    </button>  -->
                                    <button class="dt-button btn btn-outline-primary waves-effect" tabindex="0"  type="button" data-bs-toggle="modal" data-bs-target="#modal2">
                                        <span>
                                        <!-- <i data-feather="plus"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                            Nuevo Registro
                                        </span>
                                    </button> 
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom p-1">
                           <div class="table-responsive">
                           <table id="tabla" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Estado</th>
                                            <th style="width: 200px;">Cliente</th>
                                            <th>Proceso y Objeto</th>
                                            <!-- <th>Tipo</th> -->
                                            <th>Contrato</th>
                                            <th>Fecha</th>
                                            <th>O/C</th>
                                            <th>Monto</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contratos as $con)
                                        <tr>
                                            <td>
                                                @if($con->deleted_at == null)
                                                <span class="badge rounded-pill badge-light-success">Activo</span>
                                                @else
                                                <span class="badge rounded-pill badge-light-danger">Inactivo</span>
                                                @endif
                                            </td> 
                                            <td> <h6 class="mb-0 text-left">{{$con->nCliente}}</h6></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center mb-1">
                                                    <!-- <div class="avatar me-1">
                                                    <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar img" height="40" width="40">
                                                    </div> -->
                                                <div class="profile-user-info">
                                                <h6 class="mb-0">{{$con->nombreProceso}}</h6> 
                                                <small class="text-muted">{{$con->objetoProceso}}</small> <br>
                                                <span class="badge bg-primary">{{$con->tipoProceso}}</span>
                                            </div>
                                            <!-- <div class="profile-star ms-auto">
                                                <i data-feather='bell'></i>
                                            </div> -->
                                             </div>
                                            </td>
                                            <!-- <td>{{$con->tipoProceso}}</td> -->
                                            <td>{{$con->nroContrato}}</td>
                                            <td>{{$con->fechaContrato}}</td>
                                            <td>{{$con->ordenCompra}}</td>
                                            <td>{{number_format($con->montoTotal,2,".",",")}}</td>
                                            <td>
                                                @if($con->deleted_at == null)
                                                    <a href="javascript:;" onclick="Desactivar('{{$con->id}}')" class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                                    </a>
                                                    &nbsp;
                                                    <a href="javascript:;" wire:click="Editar({{$con->id}})" class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                    </a>
                                                @else
                                                    <a href="javascript:;" onclick="Activar('{{$con->id}}')" class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </a>
                                                    &nbsp;
                                                @endif
                                                    
                                                    
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                           </div>
                                
                         </div>
                         <div class="pagination mt-3">
                                {{$contratos->links()}}
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>

                @include('livewire.contratos.form')

            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',function(){
        window.livewire.on('contrato-agregar',msg=>{
            $('#modal2').modal('hide');
            Swal.fire(
            'Guardado!',
            'Contrato registrado',
            'success'
            )
        })
        window.livewire.on('contrato-actualizar',msg=>{
            $('#modal2').modal('hide');
            Swal.fire(
            'Actualizado!',
            'Cliente actualizado',
            'success'
            )
        })
        
        window.livewire.on('hide-modal',msg=>{
            $('#modal2').modal('hide');
        })
        window.livewire.on('show-modal',msg=>{
            $('#modal2').modal('show');
        })
        window.livewire.on('hidden.bs.modal',msg=>{
            $('#modal2').modal('hide');
            $('.er').css('display','none');
        })
    });
    
    function Desactivar(id)
    {
        Swal.fire({
                title: 'Desactivar',
                text: "Esta seguro de Desactivar el registro",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, desactivar!',
                cancelButtonText: 'No, Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Desactivado!',
                    'el registro ha sido desactivado',
                    'success'
                    )
                    window.livewire.emit('desactivarRegistro',id)
                }
                })
    }
    function Activar(id)
    {
        Swal.fire({
                title: 'Activar',
                text: "Esta seguro de Activar el registro",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Activar!',
                cancelButtonText: 'No, Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Activado!',
                    'el registro ha sido Activado correctamente',
                    'success'
                    )
                    window.livewire.emit('activarRegistro',id)
                }
                })
    }
</script>