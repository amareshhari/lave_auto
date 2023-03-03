@extends('layouts.admin')
@section('content')
    <section id="content_wrapper">
        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->
        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">
            <!-- Column Center -->
            <div class="chute chute-center">
                <!-- AllCP Info -->
                <div class="allcp-panels fade-onload">
                    <div class="row">
                    <div class="greeting-field">Performance</div>
                        <!-- AllCP Grid -->
                        <div class="col-md-12 allcp-grid">
                            <div class="panel mb10" data-panel-title="false">
                                <div class="panel-body mtn pn">
                                    <div class="row">
                                        <!-- Chart -->
                                        <div class="col-md-12 phn mb10">
                                            <div id="high-area" style="" class="pln prn high-area-style-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /AllCP Grid -->
                    </div>
                    <!-- Quick Links -->
                    <div class="row quick-links">
                        <div class="greeting-field">Welcome back, <span>Douglas</span>!</div>
                        <div class="col-sm-6 col-md-3 col-xl-3">
                            <div class="panel panel-tile info-block">
                                <div class="panel-body">
                                    <div class="info-block-top">
                                        <i class="icon-tool"></i>
                                        <div class="title">Tickets Answered</div>
                                    </div>
                                    <div class="info-block-middle text-center">
                                        <h2>6.794%</h2>
                                    </div>
                                    <div class="info-block-bottom text-center">
                                        <h6>Answered</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xl-3">
                            <div class="panel panel-tile info-block">
                                <div class="panel-body">
                                    <div class="info-block-top">
                                        <i class="icon-social"></i>
                                        <div class="title">Users</div>
                                    </div>
                                    <div class="info-block-middle text-center">
                                        <h2>457%</h2>
                                    </div>
                                    <div class="info-block-bottom text-center">
                                        <h6>Users</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xl-3">
                            <div class="panel panel-tile info-block">
                                <div class="panel-body">
                                    <div class="info-block-top">
                                        <i class="icon-transport"></i>
                                        <div class="title">Projects Launched</div>
                                    </div>
                                    <div class="info-block-middle text-center">
                                        <h2>1678%</h2>
                                    </div>
                                    <div class="info-block-bottom text-center">
                                        <h6>Projects</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xl-3">
                            <div class="panel panel-tile info-block">
                                <div class="panel-body">
                                    <div class="info-block-top">
                                        <i class="icon-check"></i>
                                        <div class="title">Sales</div>
                                    </div>
                                    <div class="info-block-middle text-center">
                                        <h2>5627%</h2>
                                    </div>
                                    <div class="info-block-bottom text-center">
                                        <h6>Orders</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-custom-section">
                            <!-- Poll -->
                            <div class="panel" id="spy1">
                                <div class="panel-heading ">
                                    <i class="icon-graphic-1"></i>
                                    <span class="panel-title">Poll</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div id="donut-chart1" style="height: 350px; width: 100%;"></div>
                                    <div class="donut-description">
                                    <h6 class="panel-title mv20 pn">Donec augue massa, pharetra sit amet feugiat at?</h6>
                                    <ul>
                                        <li class="radio-custom">
                                        <input type="radio" data-index="0" name="weblator-chart-options" id="option-7" data-poll-id="1" value="7">
                                        <label for="option-7">Option 1: Semper magna mauris ac dolor</label>
                                        </li>
                                        <li class="radio-custom">
                                        <input type="radio" data-index="1" name="weblator-chart-options" id="option-8" data-poll-id="1" value="8">
                                        <label for="option-8">Option 2: Curabitur ex massa</label>
                                        </li>
                                        <li class="radio-custom">
                                        <input type="radio" data-index="2" name="weblator-chart-options" id="option-9" data-poll-id="1" value="9">
                                        <label for="option-9">Option 3: Quisque aliquam consecte</label>
                                        </li>
                                    </ul>
                                    <div class="button-vote">
                                        <button class="btn btn-dark">Vote</button>
                                        <button class="btn btn-default">Hide Results</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Task-list -->
                            <div class="panel panel-widget task-widget" id="spy11">
                                <div class="panel-heading cursor ">
                                    <i class="icon-square1"></i>
                                    <span class="panel-title">Task-List Widget</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <h6 class="text-muted mn mb20 fs13"><span class="pl5 ff-2nd">Personal Tasks</span></h6>
                                    <ul class="task-list task-current mb25">
                                        <li class="task-item">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task0">
                                                    <label for="task0"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Remove announcement
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task1">
                                                    <label for="task1"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Post an announcement
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task2">
                                                    <label for="task2"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Add new products
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task3">
                                                    <label for="task3"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Ban a few users
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task4">
                                                    <label for="task4"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Clean comments
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                    </ul>
                                    <h6 class="text-muted mn mb20"><span class="pl5 ff-2nd">Complete Tasks</span></h6>
                                    <ul class="task-list task-completed">
                                        <li class="task-item item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task7">
                                                    <label for="task7"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Add article review</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task8">
                                                    <label for="task8"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Add iPad review</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task9">
                                                    <label for="task9"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Ban THATuser user</div>
                                            <div class="task-menu"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Veisitors Map -->
                            <div class="panel bg-none no-boxshadow pn" id="spy15">
                                <div class="panel-heading br5  bg-white pl30 pr30 pt20">
                                    <i class="icon-flag"></i>
                                    <span class="panel-title">Visitors Map</span>
                                </div>
                                <div class="panel-body mt20 pn">
                                    <div id="map1" style="width: 100%; height: 270px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom-section">
                            <!-- Server Status -->
                            <div class="panel" id="spy10">
                                <div class="panel-heading ">
                                    <i class="icon-graphic"></i>
                                    <span class="panel-title">Server Status</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <label>Memory Used</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="pull-right ph10">55%</span>
                                        </div>
                                    </div>
                                    <label>Disk dev/sda1</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="pull-right ph10">60%</span>
                                        </div>
                                    </div>
                                    <label>Disk dev/sda2</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            <span class="pull-right ph10">80%</span>
                                        </div>
                                    </div>
                                    <label>Disk dev/sda3</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                            <span class="pull-right ph10">66%</span>
                                        </div>
                                    </div>
                                    <label>Disk dev/sda4</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="pull-right ph10">45%</span>
                                        </div>
                                    </div>
                                    <label>Disk dev/sda5</label>
                                    <div class="progress progress-bar-lg br12 no-boxshadow">
                                        <div class="progress-bar progress-bar-gradient-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                            <span class="pull-right ph10">78%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Traphic Sources -->
                            <div class="panel" id="spy7">
                                <div class="panel-heading ">
                                    <i class="icon-tool2"></i>
                                    <span class="panel-title">Traffic Source</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="row">
                                        <div class="col-sm-4 text-center ph10 xsmb15">
                                            <div class="info-circle" id="c1" data-value="65" data-circle-color="info-dr"></div>
                                            <div class="text-muted fw500 fs13">Google</div>
                                        </div>
                                        <div class="col-sm-4 text-center ph10 xsmb15">
                                            <div class="info-circle" id="c2" data-value="15" data-circle-color="info-dr"></div>
                                            <div class="text-muted fw500 fs13">Bing</div>
                                        </div>
                                        <div class="col-sm-4 text-center ph10">
                                            <div class="info-circle" id="c3" data-value="40" data-circle-color="info-dr"></div>
                                            <div class="text-muted fw500 fs13">Twitter</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- User Project List -->
                            <div class="panel" id="spy6">
                                <div class="panel-heading ">
                                    <i class="icon-clock"></i>
                                    <span class="panel-title">User Project List Schedule</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="bs-component">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-style-1 btn-gradient-grey">
                                                <thead class="">
                                                    <tr>
                                                        <th class="">Project</th>
                                                        <th class=" hidden-xs">Start Date</th>
                                                        <th class="">Deadline</th>
                                                        <th class="">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wp25">#4551</td>
                                                        <td class="hidden-xs">10.02.2016</td>
                                                        <td>10.02.2016</td>
                                                        <td><span class="label label-info">in progress</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">#4532</td>
                                                        <td class="hidden-xs">23.12.2015</td>
                                                        <td>11.01.2016</td>
                                                        <td><span class="label label-primary">Done</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">#4536</td>
                                                        <td class="hidden-xs">16.05.2015</td>
                                                        <td>18.06.2015</td>
                                                        <td><span class="label label-danger">Failed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">#4552</td>
                                                        <td class="hidden-xs">10.02.2016</td>
                                                        <td>10.02.2016</td>
                                                        <td><span class="label label-info">In Progress</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Graph -->
                            <div class="panel" id="spy9">
                                <div class="panel-heading ">
                                    <i class="icon-arrows"></i>
                                    <span class="panel-title">Traffic Source</span>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="row mn">
                                        <div class="col-sm-5 prn mt50 xsmt25">
                                            <div class="progress progress-bar-lg br12 no-boxshadow mb15">
                                                <div class="progress-bar progress-bar-gradient-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                    <span>Google</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-bar-lg br12 no-boxshadow mb15">
                                                <div class="progress-bar progress-bar-gradient-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                    <span>Bing</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-bar-lg br12 no-boxshadow">
                                                <div class="progress-bar progress-bar-gradient-alert" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                    <span>Twitter</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 pl35 xsph10">
                                            <div class="allcp-form mt10">
                                                <!-- Block Widget -->
                                                <div class="smart-widget br-b sm-right">
                                                    <label class="field"><input type="text" name="sub" id="sub" class="gui-input br-n pn" placeholder="Add Data Source"></label>
                                                    <button type="submit" class="button br-n pn"><i class="allcp-icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="legend-widget">
                                                <ul class="legend-list">
                                                    <li class="legend-item danger mn mb15 h-20">
                                                        <div class="legend-handle">
                                                            <i class="fa fa-circle fs21"></i>
                                                        </div>
                                                        <div class="legend-desc pl25">
                                                            Google
                                                            <span class="legend-date">85%</span>
                                                        </div>
                                                    </li>
                                                    <li class="legend-item info mn mb15 h-20">
                                                        <div class="legend-handle">
                                                            <i class="fa fa-circle fs21"></i>
                                                        </div>
                                                        <div class="legend-desc pl25">
                                                            Bing
                                                            <span class="legend-date">35%</span>
                                                        </div>
                                                    </li>
                                                    <li class="legend-item alert mn mb15 h-20">
                                                        <div class="legend-handle">
                                                            <i class="fa fa-circle fs21"></i>
                                                        </div>
                                                        <div class="legend-desc pl25">
                                                            Twitter
                                                            <span class="legend-date">65%</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                </div>
            </div>
            <!-- /Column Center -->
        </section>
        <!-- /Content -->
        <footer id="content-footer" class="footer-light">
            <div class="row">
                <div class="col-xs-12 text-center">
                    &copy; 2016 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>
                </div>
                <a href="#content" class="footer-return-top">
                    <span class="fa fa-angle-up"></span>
                </a>
            </div>
        </footer>
    </section>
@endsection