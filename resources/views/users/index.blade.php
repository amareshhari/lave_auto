@extends('layouts.admin')
@section('content')
<section id="content_wrapper">
    <section id="content" class="table-layout animated fadeIn">
        <!-- Column Center -->
        <div class="chute chute-center">
            <!-- Topbar -->
            <header id="topbar" class="alt">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-link">
                            <a href="index.html">Admin</a>
                        </li> --}}
                        <li class="breadcrumb-current-item">Users</li>
                    </ol>
                </div>
            </header>
            <!-- /Topbar -->
            <div class="row mt10">
                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy6">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="panel-title hidden-xs">
                                       Users
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <a href="{{route('user.create')}}">
                                        <button type="button" class="btn btn-primary btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Create Admin</button>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="panel-body pn mt20">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="va-m">Name</th>
                                            <th class="va-m">Email</th>
                                            <th class="va-m">Mobile</th>
                                            {{-- <th class="hidden-xs va-m">Role</th> --}}
                                            <th class="hidden-xs va-m">Created At</th>
                                            <th class="hidden-xs va-m">Status</th>
                                            <th class="hidden-xs va-m">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $admin)
                                            <tr>
                                                <td>{{$admin->name}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->mobile}}</td>
                                                {{-- <td class="hidden-xs">{{$admin->role_name}}</td> --}}
                                                <td class="hidden-xs">{{date('d/m/Y h:i a', strtotime($admin->created_at))}}</td>
                                                <td>
                                                    <div class="mb20">
                                                        @if ($admin->status == 1)
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-danger">Inactive</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu bg-system" role="menu">
                                                            <li>
                                                                <a href="{{route('user.show',$admin->id)}}">View</a>
                                                            </li>
                                                            <li>
                                                                {{-- <a href="{{route('user.edit',$admin->uuid)}}">Edit</a> --}}
                                                            </li>
                                                            <li>
                                                                {{-- <a href="javascript:void();" data-url="{{route('user.index')}}" data-name={{$admin->name}} class="change-status">Change Status</a> --}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Column Center -->
    </section>
</section>
<div id="modal-panel" class="popup-basic bg-none mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            Change Status
        </div>
        <div class="panel-body">
            <h3>Do you want change status of <span id="admin-name"></span>?</h3>
        </div>
        <div class="panel-footer">
            <form id="status-form" method="POST" action="">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger" type="button">Yes</button>
                <button class="btn btn-warning" id="reject-btn" type="button">No</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('custom-script')
    <script>
        $('#datatable2').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "order": [], 
            "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "assets/js/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });
        $('.change-status').click(function(){
            $('#status-form').attr('action',$(this).data('url'));
            $('#admin-name').text($(this).data('name'));
            $.magnificPopup.open({
                removalDelay: 500,
                items: {
                    src: "#modal-panel"
                },
                callbacks: {
                    beforeOpen: function (e) {
                        var Animation = "mfp-fullscale";
                        this.st.mainClass = Animation;
                    }
                },
                midClick: true
            });
        })
        $('#reject-btn').click(function(){
            $('.mfp-close').click();
        });
    </script>
@endpush