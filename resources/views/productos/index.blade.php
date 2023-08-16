@extends('base')    @section('title', 'Productos Maestros')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
@endsection

@section('main')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Listar productos</h4>
                <p class="card-title-desc">The Buttons extension for DataTables
                    provides a common set of options, API methods and styling to display
                    buttons on a page that will interact with a DataTable. The core library
                    provides the based framework upon which plug-ins can built.
                </p>

                <table id="list_productos" class="list_productos table table-bordered dt-responsive nowrap w-100">

                
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('src')
<script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/select2/js/select2.min.js')}}"></script>


        <script> 

            var productos = @json($productos);
            var proveedor = @json($proveedor);
            var medida = @json($medida);
            var categoria_prod = @json($categoria_prod);

            function ver_productos(cod) {

            $.ajax({
                
                url: '{{ route('productos.show_producto') }}', 
                type: 'POST',
                data: cod,
                success: function (result) {
                },
                error:function(error){  
                    console.log(error);
                }
            });
        }


        </script>    
        <script src="{{ asset('js/pages/datatables.init.js')}}"></script>

          
@endsection