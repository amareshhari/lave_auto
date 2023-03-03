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
                            <li class="breadcrumb-link">
                                <a href="{{route('user.index')}}">Users</a>
                            </li>
                            <li class="breadcrumb-current-item">Edit User</li>
                        </ol>
                    </div>
                </header>
                <div class="center-block row mt10">
                    <!-- Spec Form -->
                    <div class="allcp-form col-xs-12">
                        <div class="panel">
                            <div class="panel-heading pbn mb20">
                                <div class="panel-title pln ptn">Create New User</div>
                            </div>
                            <div class="panel-body pn">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <p><strong>Opps Something went wrong</strong></p>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="javascript:void(0);" id="form-ui" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Basic -->
                                    <div class="row mn mln15">
                                        <div class="col-md-6">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                <input type="text" name="name" id="name" class="gui-input"
                                                       placeholder="Full Name" maxlength="200" minlength="2" required value="{{old('name')?old('name'):$user->name}}">
                                                <span class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                <input type="email" name="email" id="email" class="gui-input"
                                                       placeholder="Email" maxlength="200" required value="{{old('email')?old('email'):$user->email}}">
                                                <span class="field-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                <input type="text" name="mobile" id="mobile" class="gui-input"
                                                       placeholder="Mobile Number" maxlength="10" required value="{{old('mobile')?old('mobile'):$user->mobile}}">
                                                <span class="field-icon">
                                                    <i class="fa fa-mobile"></i>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                        @if(old('role'))
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="role" name="role"  required>
                                                            <option value="">Select Role</option>
                                                            {{-- <option value="0" {{(old('role')==0)?'selected':''}}>Super Admin</option> --}}
                                                            <option value="1" {{(old('role')==1)?'selected':''}}>School Admin</option>
                                                            <option value="2" {{(old('role')==2)?'selected':''}}>Teacher</option>
                                                            {{-- <option value="3" {{(old('role')==3)?'selected':''}}>Coordinator</option> --}}
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="role" name="role"  required>
                                                            <option value="">Select Role</option>
                                                            {{-- <option value="0" {{($user->role==0)?'selected':''}}>Super Admin</option> --}}
                                                            <option value="1" {{($user->role==1)?'selected':''}}>School Admin</option>
                                                            <option value="2" {{($user->role==2)?'selected':''}}>Teacher</option>
                                                            {{-- <option value="3" {{($user->role==3)?'selected':''}}>Coordinator</option> --}}
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-md-6 school-admin-section {{($user->role==2)?'d-none':''}}">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                <input type="text" name="department" id="department" class="gui-input"
                                                       placeholder="Department" maxlength="200" value="{{old('department')}}">
                                                <span class="field-icon">
                                                    <i class="fa fa-building-o"></i>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 {{($user->role!=2)?'d-none':''}} teacher-admin-section">
                                            <div class="section">
                                                <label class="field select">
                                                    
                                                    <i class="arrow"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                    <input type="file" class="dropify" name="image" data-allowed-file-extensions="jpeg jpg png"
                                                        accept="image/*" data-default-file="{{($user->image)?url('storage/images/admins/'.$user->image):''}}" data-max-file-size="2M"/>
                                                </label>
                                                <input type="hidden" name="image_delete" id="image-delete">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /section -->
                                    <button type="submit" class="btn btn-bordered btn-success btn-block">Update</button>
                                </form>
                                <!-- /form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Column Center -->
        </section>
    </section>
@endsection
@push('custom-script')
    <script>
        var drEvent = $('.dropify').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            $('#image-delete').val(1);
        });
        $('#role').on('change', function () {
            $('#sections').val('');
            $('#department').val('');
            if($(this).val() == "1"){
                $('.school-admin-section').removeClass('d-none');
                $('.teacher-admin-section').addClass('d-none');
            }else{
                $('.school-admin-section').addClass('d-none');
                $('.teacher-admin-section').removeClass('d-none');
            }
        });
    </script>
@endpush