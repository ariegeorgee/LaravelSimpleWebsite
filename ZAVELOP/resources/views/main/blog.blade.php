@extends('master.master')

@section('title', ':: ZAVELOP Technology ::')

@section('content')
<section id="clients_say_area" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Blog you’ll love</h2>
            </div>
        </div>
        <div class="row">
            @foreach($dataBlog as $rowBlog)
                    <div class="col-sm-6">
                        <h3><a href="#">{{$rowBlog->judul}}</a></h3>
                        <div class="clients_say wow slideInUp">
                            <p>{{$rowBlog->konten}}</p>
                            <div class="clients_say_list fix">
                                <div class="say floatleft">
                                    <h5>Joe Doe</h5>
                                    <h6>Creative Deirector at Gmoogle.com</h6>
                                </div>
                                <div class="c_img floatright">
                                    <img src="images/client.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>
@endsection