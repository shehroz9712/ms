@extends('front.layouts.app')
@section('meta')
    <title>{{ $page->meta_title ?? '' }} </title>
    <meta name="description" content="{{ $page->meta_desc ?? '' }}">
    <meta name="keywords" content="{{ $page->meta_keyword ?? '' }}">
@endsection

@section('css')
  
@endsection
@section('content')
<section class="error-area pt-185 rpt-130 pb-130 rpb-100 rel z-1 text-center">
            <div class="container">
                <div class="error-content">
                    <div class="image mb-85 rmb-55 wow fadeInUp delay-0-2s">
                    <img src="{{ asset('assets/front/images/shape/404-error.png') }}" alt="Error">
                     </div>
                    <div class="section-title mb-40 wow fadeInUp delay-0-2s">
                        <h1>OPPS!</h1>
                        <h2>This Page Are Can't be Found</h2>
                    </div>
                    <a href="index.html" class="theme-btn wow fadeInUp delay-0-2s">Go To Homepage <i class="far fa-angle-right"></i></a>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
@endsection
