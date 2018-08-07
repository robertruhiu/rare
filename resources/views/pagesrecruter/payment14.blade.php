@extends('layouts.recruter')
@section('content')
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Payment </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->
                        {{--<div id="wizard" class="form_wizard wizard_horizontal">--}}
                            {{--<ul class="wizard_steps">--}}
                                {{--<li>--}}
                                    {{--<a href="#step-1">--}}
                                        {{--<span class="step_no">1</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 1<br />--}}
                                              {{--<small>CHOOSE ASSESSMENT</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#step-2">--}}
                                        {{--<span class="step_no">2</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 2<br />--}}
                                              {{--<small>FRAMEWORK / LANGUAGE</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#step-3">--}}
                                        {{--<span class="step_no">3</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 3<br />--}}
                                              {{--<small>REQUIREMENT PROJECT</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#step-4">--}}
                                        {{--<span class="step_no">4</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 4<br />--}}
                                              {{--<small>CANDIDATE</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#step-5">--}}
                                        {{--<span class="step_no">5</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 5<br />--}}
                                              {{--<small>SEND INVITATION</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#step-6">--}}
                                        {{--<span class="step_no">6</span>--}}
                                        {{--<span class="step_descr">--}}
                                              {{--Step 6<br />--}}
                                              {{--<small>PAYMENT</small>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- End SmartWizard Content -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="card2">
                            <div class="text-center">
                                <h3>Receipt</h3>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>candidates</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-9"><h4>GAZELLE-PROXY</h4></td>
                                    <td class="col-md-1" style="text-align: center"> 20 </td>
                                    <td class="col-md-1 text-center">$20</td>
                                    <td class="col-md-1 text-center">$400</td>
                                </tr>

                                <tr>
                                    <td>   </td>
                                    <td>   </td>

                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                    <td class="text-center text-danger"><h4><strong>$400</strong></h4></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="card2" style="width: 80%">
                            <div class="card-header" style="background: white">
                                <div class="row">

                                    <img style="height: 50px" class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                                </div>
                            </div>
                            <form action="/project">

                            <div class="card-block">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>CARD NUMBER</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                                <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <input type="tel" class="form-control" placeholder="MM / YY" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 float-xs-right">
                                        <div class="form-group">
                                            <label>CV CODE</label>
                                            <input type="tel" class="form-control" placeholder="CVC" />
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer" style="background: white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-warning btn-lg btn-block btn btn-next" style="background: #f0ad4e">Process payment</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop