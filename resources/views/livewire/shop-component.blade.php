<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".strawberry">Strawberry</li>
                        <li data-filter=".berry">Berry</li>
                        <li data-filter=".lemon">Lemon</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            @foreach ($products as $product)


            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                            <img src="{{asset('assets/img/products')}}/{{$product->image}}" alt="{{$product->name}}">
                        </a>
                    </div>
                    <h3>{{$product->name}}</h3>
                    <p class="product-price"><span>Per Kg</span> {{$product->regular_price}}$ </p>
                    <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            {{$products->links('partials.paginate')}}
        </div>
    </div>
</div>
<!-- end products -->
