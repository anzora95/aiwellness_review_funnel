@extends('layouts.app')

@section('extra_links')

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


{{--data tables scripts and links--}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>


{{--    TABS--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



@stop

@section('banner')

    @extends('banners.banner2')

@endsection

@section('content')

{{--    <p>{{$now}}</p>--}}
    <div id="tabs">
    <ul>
        <li><a href="#tabs-1">All</a></li>
        <li><a href="#tabs-2">Orders Today</a></li>
    </ul>

    <div class="container-fluid" id="tabs-1">

        <div class="row">
            <div class="col-lg-12">

                <table id="table_id" class="display nowrap" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address1</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zipcode</th>
                        <th>Country</th>
                        <th>Item</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{$row->First_Name}} {{$row->Last_Name}}</td>
                            <td>{{$row->Shipping1}}</td>
                            <td>{{$row->City}}</td>
                            <td>{{$row->St}}</td>
                            <td>{{$row->Zip}}</td>
                            <td>United State</td>
                            <td>{{$row->Product}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <div class="container-fluid" id="tabs-2">

        <div class="row">
            <div class="col-lg-12">

                <table id="table2" class="display nowrap" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address1</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zipcode</th>
                        <th>Country</th>
                        <th>Item</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($today as $row)
                        <tr>
                            <td>{{$row->First_Name}} {{$row->Last_Name}}</td>
                            <td>{{$row->Shipping1}}</td>
                            <td>{{$row->City}}</td>
                            <td>{{$row->St}}</td>
                            <td>{{$row->Zip}}</td>
                            <td>United State</td>
                            <td>{{$row->Product}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

        </div>
<script>
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
</script>

    <script>




        $( function() {
            $( "#tabs" ).tabs();
        } );

        $(document).ready( function () {
            $('#table_id').DataTable({
                dom: 'rtip',
                searching:false,
                rowReorder:{
                    selector: 'td:nth-child(2)'
                },
                responsive:true,
                ordering: false,
            });
        } );


        $(document).ready( function () {



            $('#table2').DataTable({
                dom: 'Brtip',
                searching:false,
                rowReorder:{
                    selector: 'td:nth-child(2)'
                },
                responsive:true,
                buttons: [{
                    extend : 'csv',
                    filename: 'report',
                    text: 'Bobship CSV',
                    className: 'btn csv_button',
                }],

            });
        } );


    </script>

@endsection

@section('footer')

    @include('banners.footer')

    @endsection
