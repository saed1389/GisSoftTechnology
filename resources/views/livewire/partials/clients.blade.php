<div>
    <section class="gradient-bg2" id="client">
        <h2 class="d-none">hidden</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel partners-slider">
                        @foreach($clients as $client)
                            <div class="logo-item"><img alt="{{ $client->name }}" src="{{ asset($client->image) }}"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
