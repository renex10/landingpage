

<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            @foreach ($images as $image )
                            <div class="swiper-slide">
                                <img class="img-fluid" src= "{{$image->image}}"  alt="alternative">
                        </div>
                            @endforeach
                            
                           
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> 