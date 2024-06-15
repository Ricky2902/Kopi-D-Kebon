<style>
    .large-img {
        width: 150px;
        height: auto;
    }
</style>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Products
            </h2>
        </div>
        <div class="row">

            @foreach ( $product as $products )
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <div class="img-box">
                        <img src="products/{{$products->image}}" alt="" class="large-img">
                    </div>
                    <div class="detail-box">
                        <h6>{{$products->title}}</h6>
                        <h6><span>{{$products->price}}</span></h6>
                    </div>

                    <!-- NOTED -->
                    <!-- NANTI BAKAL DI GANTI KALO PENCET FOTONYA KEBUKA PRODUCT_DETAILS -->
                    <!-- NOTED -->
                    <div style="padding: 15px">
                        <a class="btn btn-danger" href="{{url('product_details', $products->id)}}">Details</a>
                    </div>
                </div>
            </div>
            @endforeach

            


            
        </div>
    </div>
</section>