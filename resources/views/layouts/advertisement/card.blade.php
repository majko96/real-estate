<div class="col-md-6 col-12">
    <a href="#">
        <div class="card p-2 mt-4">
            <img src="{{ asset('images/house.png') }}" class="card-img-top" alt="{{ $advert['title'] }}">
            <div class="card-body">
                <p class="card-text fw-bold">${{ number_format($advert['price']) }}</p>
                <p class="card-text fw-light text-truncate">{{ $advert['address'] }}</p>
                <div class="d-flex bottom-card-text">
                    <span>
                        <i class="fa-solid fa-bath me-1"></i>
                            {{ $advert['bathrooms'] }}
                    </span>
                    <span>
                        <i class="fa-solid fa-bed me-1"></i>
                            {{ $advert['bedrooms'] }}
                    </span>
                    <span>
                        <i class="fa-solid fa-layer-group me-1"></i>
                            {{ $advert['square_size'] }}
                        <span class="superscript">2</span> ft
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>
