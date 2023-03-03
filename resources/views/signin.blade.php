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
                            <div>Egmore Connect<span class="text-info"></span></div>
                        </div>
                    </div>
                </div>
                <div class="panel mw320">
                    <form method="post" action="{{route('admin.login')}}">
                        {{ csrf_field() }}
                        <div class="panel-body pn mv10">
                            <div class="section">
                                <label for="password" class="field prepend-icon"></label>
                                <div class="flex items-center justify-end mt-4">
                                    <span class="hidden-label"><label for="kpr-search-val">Email</label></span>
                                    <div class="kpr-searchbox-section">
                                        <input id="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Enter Email" type="email" required />
                                    </div>
                                    <span class="hidden-label"><label for="kpr-search-val">Password</label></span>
                                    <div class="kpr-searchbox-section">
                                        <input id="password" value="{{old('password')}}" class="form-control" name="password" placeholder="Enter Password" type="password" required />
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