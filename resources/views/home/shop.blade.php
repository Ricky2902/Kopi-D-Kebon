<style>
    .large-img {
        width: 150px;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        /* padding: 20px; */
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f9f9f9;
        margin-bottom: 20px; /* Ensure there is a gap between rows */
    }
    .detail-box {
        text-align: center;
        margin-top: -30px;
    }
    .button-container {
        text-align: center;
        margin-top: 10px;
    }
    .col-spacing {
        margin-bottom: 15px; /* Add space between columns */
    }
</style>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                SERBA 5000
            </h2>
        </div>
        <div class="row">
            @foreach ($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-3 col-spacing">
                <div class="box">
                    <a href="{{url('product_details', $products->id)}}">
                        <div class="img-box">
                            <img src="products/{{$products->image}}" alt="" class="large-img">
                        </div>
                    </a>
                    <div class="detail-box">
                        <h6>{{$products->title}}</h6>
                    </div>
                    <div class="button-container">
                        <a class="btn btn-primary" href="{{url('add_cart', $products->id)}}">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


