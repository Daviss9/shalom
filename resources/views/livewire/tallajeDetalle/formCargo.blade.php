<div class="row">
    <section>
        <div class="row">
            <div class="col-lg-4 col-12 order-2 order-lg-1">
                <div class="card-body">

                    <div class="mb-1">
                        <label class="form-label">Cargo</label>
                        <input type="text" wire:model="cargo" class="form-control"  placeholder="ingrese Cargo">
                    </div>

                    <button wire:click.prevent="addCargo()" class="btn btn-primary w-100 waves-effect waves-float waves-light">Agregar cargo</button>

                </div>
            </div>
            <div class="col-lg-8 col-12 order-2 order-lg-1">
                <div class="table-responsive">
                    <table id="tablaCargo" class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 200px;">Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listacargo as $c)
                            <tr>
                                <td>{{$c->cargo}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <style>
            .create-new {
                display: none;
            }
        </style>

    </section>
</div>