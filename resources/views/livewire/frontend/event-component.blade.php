<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="row">
                    <ul class="product-list grid-products equal-container">

                        @foreach ($events as $event)
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="{{ $event->title }}">
                                            <figure><img src="{{ asset('assets/images/products') }}/{{ $event->image }}" alt="{{ $event->title }}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{ $event->title }}</span></a>

                                        <a href="{{ route('donar.trandetails', ['slug'=>$event->slug])}}" class="btn add-to-cart">See Details</a>


                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
