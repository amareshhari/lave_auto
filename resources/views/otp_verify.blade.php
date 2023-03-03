@extends('layouts.default')
@section('content')
    <section id="content_wrapper">
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>
        <!-- Content -->
        <section id="content">
            <!-- Login Form -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <!-- <img src="assets/img/logo.png" alt=""/> -->
                    <div class="logo-widget">
                        <a class="logo-image mtn" href="index.html">
                            <!-- <img src="assets/img/logo.png" alt="" class="img-responsive"> -->
                        </a>
                        <div class="logo-slogan mtn">
                            <div>Plot Booking<span class="text-info"></span></div>
                        </div>
                    </div>
                </div>
                <div class="panel mw320">
                    <form method="post" action="{{route('user.otp_verify',[$user->uuid])}}">
                        {{ csrf_field() }}
                        <div class="panel-body pn mv10">
                            <div class="section">
                                <label for="password" class="field prepend-icon"></label>
                                <div class="flex items-center justify-end mt-4">
                                    <span class="hidden-label"><label for="kpr-search-val">OTP</label></span>
                                    <div class="kpr-searchbox-section">
                                        <input id="mobile_number" value="{{$user->primary_mobile_number}}" class="form-control" name="mobile_number" type="hidden" />
                                        <input id="otp" value="{{old('otp')}}" class="form-control" name="otp" placeholder="Enter OTP" type="number" data-parsley-type="digits" data-parsley-minlength="6" data-parsley-maxlength="6" required />
                                    </div>
                                    <div class="kpr-searchbox-iconsection btn_Wrap_Primary">
                                        <div class="form-group">
                                            <input class="kpr_btnCta kpr_primaryBtn kpr-searchbox-icon btn btn-info" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /section -->
                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Spec Form -->
        </section>
        <!-- /Content -->
    </section>
@endsection