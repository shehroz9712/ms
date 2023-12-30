@extends('front.layouts.app')


@section('content')
     <section class="faqs-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-image-part rmb-55 wow fadeInUp delay-0-2s">
                            <div class="image-one">
                                <img src="{{ asset('assets/front/images/faqs/faq-one.jpg') }}" alt="FAQ">
                            </div>
                            <div class="image-two">
                                <img src="{{ asset('assets/front/images/faqs/faq-two.jpg') }}" alt="FAQ">
                            </div>
                            <div class="square-shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content-part rel z-2">
                            <div class="section-title mb-40 wow fadeInUp delay-0-4s">
                                <h2>Professional Solutions For Your <span>Digital Product</span> Design and development</h2>
                            </div>
                            <div class="accordion wow fadeInUp delay-0-4s" id="faq-accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            What Service We Provide ?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            How Many Years Of Experience ?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>At vero eos et accusamus dignissimos ducimus voluptatum corrupti quos dolores quas molestias excepturie</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            Have Any Professional Team Member ?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            Are You Awards Winning Agency ?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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