<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{ $site->titreteam }}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ Storage::disk('image')->url($user[2]->profil->image) }}" alt="">
                    <h2>{{ $user[2]->profil->nom }}</h2>
                    <h3>{{ $user[2]->role->name }}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ Storage::disk('image')->url($user[0]->profil->image) }}" alt="">
                    <h2>{{ $user[0]->profil->nom }}</h2>
                    <h3>{{ $user[0]->role->name }}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ Storage::disk('image')->url($user[1]->profil->image) }}" alt="">
                    <h2>{{ $user[1]->profil->nom }}</h2>
                    <h3>{{ $user[1]->role->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->