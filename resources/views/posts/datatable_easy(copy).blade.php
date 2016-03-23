@extends('layouts.layout')

@section('contents')

        <!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">DataTables</h1>

        <div class="page-header-actions">
            <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
               target="_blank">
                <i class="icon wb-link" aria-hidden="true"></i>
                <span class="hidden-xs">Official Website</span>
            </a>
        </div>
    </div>
    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Basic</h3>
            </header>
            <div class="panel-body">
                <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                    @foreach($devices as $device)

                    <thead>
                    <tr>
                        <th> {{$device->device_id}}</th>
                        <th> {{$device->type_id}}</th>
                        <th> {{$device->device_model}}</th>
                        <th> {{$device->os_version}}</th>
                        <th> {{$device->uuid}}</th>
                        <th> {{$device->is_normal}}</th>
                        <th> {{$device->is_valid}}</th>
                        <th> {{$device->status_id}}</th>
                        <th> {{$device->created_at}}</th>
                        <th> {{$device->created_ip}}</th>
                        <th> {{$device->updated_at}}</th>
                        <th> {{$device->updated_ip}}</th>

                    </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Panel Basic -->

@endsection