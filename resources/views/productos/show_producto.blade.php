@extends('base')    @section('title', 'Mostrar Producto')

@section('css')


@endsection

@section('main')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Product Detail</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-detai-imgs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-4">
                                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                            <img src="{{asset('images/product/img-7.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <img src="{{asset('images/product/img-7.png')}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                            <div>
                                                <img src="{{asset('images/product/img-8.png')}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                            <div>
                                                <img src="{{asset('images/product/img-7.png')}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                            <div>
                                                <img src="{{asset('images/product/img-8.png')}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                            <i class="mdi-set mdi-book-edit me-2"></i> Editar
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mt-4 mt-xl-3">
                            <h4 class="mt-1 mb-3" id="producto" name="producto" ></h4>
                            <p class="text-muted mb-4" id="descripcion" name="descripcion"></p>
                            <div class="mt-5">
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width: 300px;">Codigo</th>
                                            <td id="codigo" name="codigo"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 300px;">Unidad de Medida</th>
                                            <td id="medida" name="medida"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 300px;">Categoria</th>
                                            <td id="categoria" name="categoria"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 300px;">Proveedor</th>
                                            <td id="proveedor" name="proveedor"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 300px;">Stock</th>
                                            <td id="stock" name="stock"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>



@endsection

@section('src')

<script > 
        var  detail_producto = @json($detail_producto);
        document.getElementById('codigo').innerHTML=detail_producto[0].codigo;
        document.getElementById('producto').innerHTML=detail_producto[0].nombre;
        document.getElementById('medida').innerHTML=detail_producto[0].show_medida.nombre;
        document.getElementById('stock').innerHTML=detail_producto[0].stock;
        document.getElementById('proveedor').innerHTML=detail_producto[0].show_proveedor.nombre;
        document.getElementById('categoria').innerHTML=detail_producto[0].show_categoria_producto.nombre;
        document.getElementById('descripcion').innerHTML=detail_producto[0].descripcion;

        

       

    </script>   


       
@endsection