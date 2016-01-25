@extends('master.master')

@section('title', ':: ZAVELOP Technology ::')

@section('content')
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="company_logo wow slideInDown">
                        <h2>ZAVELOP Technology</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="company_address wow slideInDown Contact">
                        <h2>Call Me !!!</h2>
                        <p>
                        <table>
                            <tr>
                                <td><h3>Email</h3></td>
                                <td>:</td>
                                <td><input type="text" class="txt_nobdr"/></td>
                            </tr>
                            <tr>
                                <td><h3>Name</h3></td>
                                <td>:</td>
                                <td><input type="text" class="txt_nobdr"/></td>
                            </tr>
                            <tr>
                                <td><h3>Subject</h3></td>
                                <td>:</td>
                                <td><input type="text" class="txt_nobdr"/></td>
                            </tr>
                            <tr>
                                <td><h3>Message</h3></td>
                                <td>:</td>
                                <td><textarea class="txt_nobdr"></textarea></td>
                            </tr>
                        </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection