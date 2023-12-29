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
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section>
                    <!-- <pre>{{$contrato}}</pre> -->
                    <div class="row match-height">
                        <!-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="../../../app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">

                                            <h6 class="mb-0">{{\Carbon\Carbon::parse($contrato[0]->fechaContrato)->format('M')}}</h6>
                                            <h3 class="mb-0">{{\Carbon\Carbon::parse($contrato[0]->fechaContrato)->format('Y')}}</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">{{$contrato[0]->cliente}}</h4>
                                            <p class="card-text mb-0">{{$contrato[0]->nombreProceso}}</p>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <div class="more-info">
                                            <h6 class="mb-0">{{$contrato[0]->objetoProceso}}</h6>
                                            <small>Objeto del Proceso</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">{{\Carbon\Carbon::parse($contrato[0]->fechaContrato)->format('d M Y')}}</h6>
                                            <small>Fecha de Contrato</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">{{$contrato[0]->tipoProceso}}</h6>
                                            <small>Tipo de Proceso</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">{{$contrato[0]->ordenCompra}}</h6>
                                            <small>orden de Compra</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">{{$contrato[0]->tipoProceso}}</h6>
                                            <small>Tipo de Proceso</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-12">
                            <div class="cardMaster rounded border p-2 mb-1">
                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="card-information">
                                        <!-- <img class="mb-1 img-fluid" src="../../../app-assets/images/icons/payments/mastercard.png" alt="Master Card"> -->
                                        <div class="d-flex align-items-center mb-50">
                                            <h4 class="mb-0">{{$contrato[0]->nombreProceso}}</h4> <br>
                                            <!-- <h6 class="mb-0">{{$contrato[0]->objetoProceso}}</h6> -->
                                            <span class="badge badge-light-success ms-50">{{$contrato[0]->cliente}}</span>
                                        </div>
                                        <span class="card-number">{{$contrato[0]->objetoProceso}}</span>
                                    </div>
                                    <div class="d-flex flex-column text-start text-lg-end">
                                        <div class="d-flex order-sm-0 order-1 mt-1 mt-sm-0">
                                            <button class="btn btn-outline-secondary waves-effect">Volver</button>
                                        </div>
                                        <!-- <span class="mt-2">Card expires at 12/24</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card card-company-table">
                                <div class="card-body">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-bs-toggle="pill" href="#home" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                Personal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                                Cargos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-bs-toggle="pill" href="#about" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                Areas</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-1">
                                                    <div class="input-group">
                                                        <button class="btn btn-outline-primary waves-effect" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg>
                                                        </button>
                                                        <input type="text" class="form-control" placeholder="Buscar persona" aria-label="Amount">
                                                        <button class="btn btn-outline-primary waves-effect" type="button">Buscar</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12 mb-1 text-end">
                                                    <button class="dt-button btn btn-outline-primary waves-effect " tabindex="0" type="button" data-bs-toggle="modal" data-bs-target="#modal1">
                                                        <span>
                                                            <!-- <i data-feather="plus"></i> -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            </svg>
                                                            Nuevo Registro
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <section>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Apellidos y Nombres</th>
                                                            <th>Sexo</th>
                                                            <th>Cargo</th>
                                                            <th>Area</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="fw-bolder">Paterno - Materno</div>
                                                                        <div class="font-small-2 text-muted">Nombre</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar bg-light-success me-1">
                                                                        <div class="avatar-content">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3">
                                                                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                                                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                                                                <line x1="14" y1="1" x2="14" y2="4"></line>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span>Sexo</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="d-flex flex-column">
                                                                    <span class="fw-bolder mb-25">Cargo</span>
                                                                    <!-- <span class="font-small-2 text-muted">in 2 days</span> -->
                                                                </div>
                                                            </td>
                                                            <td>Area</td>
                                                            <td>Accion</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                        @include('livewire.tallajeDetalle.formCargo')
                                        </div>
                                        <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                            <p>
                                                Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                                                tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.
                                                Toffee jelly-o pastry cake dessert chocolate bar jelly beans fruitcake. Dragée sweet fruitcake dragée
                                                biscuit halvah wafer gingerbread dessert. Gummies fruitcake brownie gummies tart pudding.
                                            </p>
                                        </div>
                                        <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                            <p>
                                                Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                                                cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                                                tootsie roll cake.Chocolate bonbon chocolate chocolate cake halvah tootsie roll marshmallow. Brownie
                                                chocolate toffee toffee jelly beans bonbon sesame snaps sugar plum candy canes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                @include('livewire.tallajeDetalle.formPersona')

            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',function(){
        window.livewire.on('persona-agregar',msg=>{
            $('#modal1').modal('hide');
            Swal.fire(
            'Guardado!',
            'Persona registrado',
            'success'
            )
        })
    })
</script>