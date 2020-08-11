<div class="slider-area pb-60">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
                  <div class="carousel-inner">
                    @foreach($Banner_data as $o)
                        @if($o->id > $min_id)
                    <div class="carousel-item ">
                            <img src="{{URL::asset('banner_image/'.$o->banner_image)}}" class="d-block w-100" alt="...">
                    </div>
                    @else
                        @continue
                        @endif
                    @endforeach
                    <div class="carousel-item active" style="">
                      <img src="{{URL::asset('banner_image/'.$first_banner_that_display->banner_image)}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </div>