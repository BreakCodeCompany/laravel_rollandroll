@extends('base')    @section('title', 'Registrar Producto')

@section('css')
    <link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main')

<div class="row">
    <div class="col-12">
        <form id="form_ingresar_producto" class="needs-validation" novalidate="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registrar Producto</h4>
                    <p class="card-title-desc">Complete toda la información a continuación</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="select_cod" class="form-label">Código de Barra</label>
                                    <input id="select_cod" name="select_cod" type="number" class="form-control" placeholder="Código de Barra" value="" required="">
                                    <div class="invalid-tooltip">Por favor, ingrese un código correcto</div>
                                </div>
                                <div class="mb-3">
                                    <label for="select_nombre" class="form-label">Nombre del Producto</label>
                                    <input id="select_nombre" name="select_nombre" type="text" class="form-control" placeholder="Nombre del Producto" required>
                                    <div class="invalid-tooltip">Por favor, ingrese un nombre correcto</div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input id="" name="" type="text" class="form-control" placeholder=""required>
                                    <div class="invalid-tooltip">Por favor, ingrese un código correcto</div>
                                </div>
                                <div class="mb-3" class="form-label">
                                    <label class="control-label">Unidad de Medida</label>
                                    <select id="select_medida" name="select_medida" class="form-control select2" required>
                                        <option value="0" >Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Categoria</label>
                                    <select id="select_categoria" name="select_categoria" class="form-control select2" required>
                                        <option value="0" >Seleccionar</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Proveedor</label>
                                    <select id="select_proveedor" name="select_proveedor" class="form-control select2" required>
                                        <option value="0" >Seleccionar</option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="select_descripcion">Product Description</label>
                                    <textarea class="form-control" id="select_descripcion" name="select_descripcion" rows="5" placeholder="Product Description" required></textarea>
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Product Images</h4>
                    <div class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>
                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button id="btn_ingresar_producto" type="button" class="btn btn-primary waves-effect waves-light">Guardar</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                    </div>
                </div>
            </div>
        </form> 
    </div> 
</div> 


@endsection

@section('src')

        <script src="{{ asset('libs/select2/js/select2.min.js')}}"></script>
        <script src="{{ asset('libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('js/pages/ecommerce-select2.init.js')}}"></script>
        <script src="{{ asset('libs/parsleyjs/parsley.min.js')}}"></script>
        <script src="{{ asset('js/pages/form-validation.init.js')}}"></script>

        <script > 
            
            var proveedor = @json($proveedor);
            var categoria_prod = @json($categoria_prod);
            var medida = @json($medida);

            $("#select_proveedor").select2({
                data: proveedor
            });
            $("#select_categoria").select2({
                data: categoria_prod
            });
            $("#select_medida").select2({
                data: medida
            });

            $("#btn_ingresar_producto").click(function(){
                /*Validar en input que no venga vacio*/
                let form = $('#form_ingresar_producto').serializeArray();
                console.log(form);

                var url = '{{ route('productos.add') }}';

                $.ajax({
                    
                    url: url, 
                    type: 'POST',
                    data: form,
                    success:function(data){  
                        
                    }
                }).done(function() {
                    $('#form_ingresar_producto')[0].reset();
                    
                });

            });


        </script>   
       
@endsection