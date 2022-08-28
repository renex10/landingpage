@php
$sliders= DB::table('sliders')->get();
@endphp

<div class="slider-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">      
                
                <!-- Text Slider -->
                <div class="slider-container">
                    <div class="swiper-container text-slider">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide -->
                            @foreach ($sliders as $slider )
                                
                         
                            <div class="swiper-slide">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src= {{$slider->image}} alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <div class="text-wrapper">
                                    <div class="testimonial-text">{{$slider->description}}</div>
                                    <div class="testimonial-author">{{$slider->title}}</div>
                                </div> <!-- end of text-wrapper -->
                            </div> <!-- end of swiper-slide -->
                            @endforeach
                            <!-- end of slide -->

                            <!-- Slide -->
                          <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                           
                            <!-- end of slide -->

                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->
                        
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of text slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>