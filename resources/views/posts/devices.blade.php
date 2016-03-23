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
                <table id="data-table" class="table table-hover dataTable table-striped width-full">
                    <thead>
                    <tr>
                        <th>Device Id</th>
                        <th>UUID</th>
                        <th>OS Version</th>
                        <th>Device Model</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Device Id</th>
                        <th>UUID</th>
                        <th>OS Version</th>
                        <th>Device Model</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                    </tfoot>
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

    {{--<script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>--}}

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/asrange/jquery-asRange.min.js"></script>

    <script src="https://appletree.someline.com/vendors/remark/assets/vendor/bootbox/bootbox.js"></script>


    <!-- Scripts For This Page -->
    <script src="https://appletree.someline.com/vendors/remark/assets/js/components/datatables.js"></script>


    {{--<script src="https://appletree.someline.com/vendors/remark/assets/examples/js/tables/datatable.js"></script>--}}

    <script src="https://appletree.someline.com/vendors/remark/assets/examples/js/uikit/icon.js"></script>


    <script>
        $(document).ready(function () {

            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{url("devices/data")}}",
                    type: "GET"
                },
                columns: [
                    {data: 'device_id'},
                    {data: 'uuid'},
                    {data: 'os_version'},
                    {data: 'device_model'},
                    {data: 'created_at'},
                    {data: 'updated_at'}
                ]
            });
        });
    </script>
@endsection