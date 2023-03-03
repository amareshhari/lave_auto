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
                        <li class="breadcrumb-current-item">{{$user->name}} Profile</li>
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
                                        User Profile
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <a href="{{route('user.edit',$user->id)}}">
                                        <button type="button" class="btn btn-primary btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Edit</button>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="panel-body pn mt20">
                            <div class="row">
                                <div class="col-sm-3 col-md-6 mb10 pln">
                                    @if (!empty($user->image))
                                        <a href="javascript:void()"><img class="media-object img-responsive" src="{{asset('/storage/images/admins/'.$user->image)}}" alt="Profile image"></a>
                                    @else
                                        <a href="javascript:void()"><img class="media-object img-responsive" src="{{asset('/images/default-user.jpg')}}" alt="Profile image"></a>
                                    @endif
                                </div>
                                <div class="col-sm-9 col-md-6 prn">
                                    <h2 class="media-heading fs30 mb20">{{$user->name}}</h2>
                                    <label for="admin-gender">Gender</label>
                                    <p class="fw400" id="admin-gender">{{$user->gender}}</p>
                                    <label for="admin-dob">Date of Birth</label>
                                    <p class="fw400" id="admin-dob">{{ Carbon\Carbon::parse($user->dob)->format('d-M-Y') }}</p>
                                    <label for="admin-email">Email</label>
                                    <p class="fw400" id="admin-email">{{$user->email}}</p>
                                    <label for="admin-mobile">Mobile</label>
                                    <p class="fw400" id="admin-mobile">{{($user->mobile)?$user->mobile:"NA"}}</p>
                                    <label for="admin-ward">Ward</label>
                                    <p class="fw400" id="admin-ward">{{$user->wards->name}}</p>
                                    <label for="admin-address">Address</label>
                                    <p class="fw400" id="admin-address">{{$user->address}}</p>
                                    <label for="admin-pincode">PIN Code</label>
                                    <p class="fw400" id="admin-pincode">{{$user->pincode}}</p>
                                    <label for="admin-pincode">Latitude</label>
                                    <p class="fw400" id="admin-pincode">{{!empty($user->latitude)?$user->latitude:'No Data Found'}}</p>
                                    <label for="admin-pincode">Longitude</label>
                                    <p class="fw400" id="admin-pincode">{{!empty($user->longitude)?$user->longitude:'No Data Found'}}</p>
                                    <label for="admin-created">Created At</label>
                                    <p class="fw400" id="admin-created">{{date('d/m/Y h:i a', strtotime($user->created_at))}}</p>
                                    <label for="admin-updated">Last Updated</label>
                                    <p class="fw400" id="admin-updated">{{date('d/m/Y h:i a', strtotime($user->updated_at))}}</p>
                                </div>
                                <div id = "sample" style = "width:580px; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Column Center -->
    </section>
</section>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
window.onload = loadMap;
function loadMap() {
    var mapOptions = {
        center:new google.maps.LatLng(9.9332954, 78.1046606),
        zoom:7
    }
    var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(17.088291, 78.442383),
        map: map,
    });
}
</script> -->
@endsection