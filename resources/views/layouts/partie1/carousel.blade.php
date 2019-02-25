<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            <p>{{ $site->titrecarousel }}</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
    @foreach ($carousel as $item)
    <div class="item  hero-item" data-bg="{{Storage::disk('image')->url($item->imagecarousel)}}"></div>
    @endforeach
    </div>
</div>