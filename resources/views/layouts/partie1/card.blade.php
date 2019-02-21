<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($service->take(3) as $item)
                    
                <div class="col-md-4 col-sm-6">   
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $item->iconeservice }}"></i>
                        </div>
                        <h2>{{ $item->descriptionservice }}</h2>
                        <p>{{ $item->textservice }}</p>
                    </div>
                    
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- card section end-->