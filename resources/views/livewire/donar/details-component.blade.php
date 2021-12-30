<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="product-gallery">
                        <ul class="slides">
                            <li data-thumb="{{ asset('assets/images/products') }}/{{ $tran->image }}">
                                <img src="{{ asset('assets/images/products') }}/{{ $tran->image }}" alt="{{ $tran->title }}" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail-info">

                    <h2 class="product-name">{{ $tran->title }}</h2>
                    <div class="short-desc">
                        {{ $tran->desc }}
                    </div>
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart" wire:click.prevent="donate({{$tran->id}})">Donate Now</a> 
                    </div>
                </div>
            </div>
    </div>
</div>
