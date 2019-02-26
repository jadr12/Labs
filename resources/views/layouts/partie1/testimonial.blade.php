<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{ $site->titretestimonial }}</h2>
                </div>
                
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonial as $item)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{ $item->commentairetesti }}.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{ Storage::disk('image')->url($item->imagetesti)}}" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{ $item->nomtesti }}</h2>
                                <p>{{ $item->entreprise }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->
