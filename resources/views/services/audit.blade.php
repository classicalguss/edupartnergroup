@extends('layouts.app')
@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="text-center">School Audit</h3>
                <div class="row">
                    <div>
                        <img class="section-side-image" src="{{ asset('img/audit-graph-1.png') }}">
                        <p class="follow-up">
                            All aspects of Education, like other services and industries in the world, are being
                            standardized based on best practices. We believe that this global trend should be taken into
                            consideration to provide local schools and students with the best chances to be accredited
                            and recognized worldwide. Through the audit process we partner with our clients and provide
                            them with a frame of reference and a working model and set up locally accepted educational
                            standards and use it to evaluate schools performance, to ensure the quality of provided
                            education meets accepted standards
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section">
                <h3 class="">How does it work?</h3>
                <div class="row">
                    <img class="mx-auto d-block section-image" src="{{ asset('img/audit-graph2.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Type of audits</h3>
                <div class="row">
                    <div class="col-centered">
                        <table class="audit-chart table">
                            <thead class="audit-chart-head">
                                <tr>
                                    <th class="left">PRODUCT FEATURES</th>
                                    <th>Free Self-Audit</th>
                                    <th>Edupartner Consultants Audit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="a">
                                    <td>Audit Report</td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                </tr>
                                <tr class="b">
                                    <td>Graphical Representation</td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                </tr>
                                <tr class="a">
                                    <td>Evidence Based</td>
                                    <td><img src="{{asset('img/close.png')}}"></td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                </tr>
                                <tr class="b">
                                    <td>Uses Target-groups</td>
                                    <td><img src="{{asset('img/close.png')}}"></td>
                                    <td><img src="{{asset('img/check.png')}}"></td>
                                </tr>
                                <tr class="a">
                                    <td>Capabilities included</td>
                                    <td>5</td>
                                    <td>8</td>
                                </tr>
                                <tr class="b">
                                    <td>Reflective Statements</td>
                                    <td>120</td>
                                    <td>+400</td>
                                </tr>
                                <tr class="a">
                                    <td>Conducted By:</td>
                                    <td>Clients</td>
                                    <td>Our Educational Consultants</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="hide"></td>
                                    <td><a href="{{ url('/contact?service=free-audit') }}">CONTACT</a></td>
                                    <td><a href="{{ url('/contact?service=educational-consultants-audit') }}">CONTACT</a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
