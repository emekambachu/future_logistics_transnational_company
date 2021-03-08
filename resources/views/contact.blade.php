@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('contents')
    <div class="breadcrumb-area  margin-bottom-20" style="background-image:url({{ asset('assets/img/breadcrumb/01.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Contact us</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inner-contact-section m-bottom padding-top-50">
        <div class="container">
            <div class="inner-contact-wrapper bg-white">

                <div class="row">
                    <div class="col-md-12">

                        @include('includes.alerts')

                        <div class="content-area padding-top-50 padding-bottom-50">
                            <div class="section-title padding-bottom-15">
                                <h4 class="title">keep in touch <br> with us</h4>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-map"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Address
                                </span>
                                    <p class="details">475/W 13th Street, Cooper New York, <br> United States</p>
                                </div>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Phone</span>
                                    <p class="details">+15068001777</p>
                                </div>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Mail US</span>
                                    <p class="details">info@fltransnational.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="contact-section padding-bottom-120 padding-top-350 bg-image" style="background-image: url({{ asset('assets/img/bg/09.png') }});">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="contact-info">

                        <form action="{{ route('contact.form.submit') }}" method="post" class="contact-page-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="mobile" type="text" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="send_message" class="form-control" cols="4" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="btn-wrapper desktop-center">
                                        <button class="boxed-btn reverse-color"><span>Send Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
