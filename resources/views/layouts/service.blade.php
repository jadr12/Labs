<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($service as $item)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{ $item->iconeservice }}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $item->titreservice }}</h2>
                        <p>{{ $item->descriptionservice }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- single service -->
            <!-- single service -->
            <!-- single service -->
        </div>
        {{-- {{ dd(Route::getCurrentRoute()->uri()) }} --}}
        @if(Route::getCurrentRoute()->uri() == 'services')
                 <div class="text-center">
                    {{ $service->links() }}
                </div> 
                @endif
            <!-- single service -->
            <!-- single service -->
            <!-- single service -->
            <!-- single service -->
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->
