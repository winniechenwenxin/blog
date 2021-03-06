@extends('layouts.layout')

@section('stylesheet')
        <!-- Plugins For This Page -->
<link media="all" type="text/css" rel="stylesheet"
      href="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">

<link media="all" type="text/css" rel="stylesheet"
      href="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">

<link media="all" type="text/css" rel="stylesheet"
      href="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-responsive/dataTables.responsive.css">

<!-- Inline -->
<link media="all" type="text/css" rel="stylesheet"
      href="https://appletree.someline.com/vendors/remark/assets/examples/css/tables/datatable.css">

@endsection

@section('contents')

    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">Devices List</h1>
        </div>

        <!-- Panel Table Individual column searching -->
        <div class="panel">

            <div class="panel-body">
                <table class="table table-hover dataTable table-striped width-full" id="device_table">
                    <thead>
                    <tr>
                        <th>device_id</th>
                        <th>type_id</th>
                        <th>device_model</th>
                        <th>os_version</th>
                        <th>uuid</th>
                        <th>is_normal</th>
                        <th>is_valid</th>
                        <th>status_id</th>
                        <th>created_at</th>
                        <th>created_ip</th>
                        <th>updated_at</th>
                        <th>updated_ip</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>device_id</th>
                        <th>type_id</th>
                        <th>device_model</th>
                        <th>os_version</th>
                        <th>uuid</th>
                        <th>is_normal</th>
                        <th>is_valid</th>
                        <th>status_id</th>
                        <th>created_at</th>
                        <th>created_ip</th>
                        <th>updated_at</th>
                        <th>updated_ip</th>
                    </tr>
                    </tfoot>
                    {{--<tbody>--}}
                    {{--@foreach($devices as $device)--}}

                    {{--<tr>--}}
                    {{--<td> {{$device->device_id}}</td>--}}
                    {{--<td> {{$device->type_id}}</td>--}}
                    {{--<td> {{$device->device_model}}</td>--}}
                    {{--<td> {{$device->os_version}}</td>--}}
                    {{--<td> {{$device->uuid}}</td>--}}
                    {{--<td> {{$device->is_normal}}</td>--}}
                    {{--<td> {{$device->is_valid}}</td>--}}
                    {{--<td> {{$device->status_id}}</td>--}}
                    {{--<td> {{$device->created_at}}</td>--}}
                    {{--<td> {{$device->created_ip}}</td>--}}
                    {{--<td> {{$device->updated_at}}</td>--}}
                    {{--<td> {{$device->updated_ip}}</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                </table>
            </div>
        </div>
        <!-- End Panel Table Individual column searching -->
    </div>


@endsection

@section('javascript')

    <script>
        (function (document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function () {
                Site.run();
            });
        })(document, window, jQuery);
    </script>

    <!-- Plugins For This Page -->
    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables/jquery.dataTables.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/asrange/jquery-asRange.min.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/bootbox/bootbox.js"></script>


    <!-- Scripts For This Page -->
    <script src="https://appletree.someline.com/vendors/remark/assets/js/components/datatables.js"></script>


    <script src="https://appletree.someline.com/vendors/remark/assets/examples/js/tables/datatable.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/examples/js/uikit/icon.js"></script>


    <script>
        $(document).ready(function () {
            $('#device_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":{
                  //  "url":"/datatable_intermediate",
                    "type":"GET"
                },
                "device": [[0, "desc"]],

            });
        });
    </script>
@endsection