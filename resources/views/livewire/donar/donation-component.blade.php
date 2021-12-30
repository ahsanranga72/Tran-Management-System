<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="row">
                    <ul class="product-list grid-products equal-container">

                        @foreach ($trans as $tran)
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="{{ $tran->title }}">
                                            <figure><img src="{{ asset('assets/images/products') }}/{{ $tran->image }}" alt="{{ $tran->title }}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{ $tran->title }}</span></a>

                                        <a href="{{ route('donar.trandetails', ['slug'=>$tran->slug])}}" class="btn add-to-cart">See Details</a>


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
