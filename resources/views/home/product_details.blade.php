<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
        .design_foto
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .detail-box
        {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
    
    </div>

<!-- Kalo mw edit css nya ada di public/css/style.css (bukan scss) -->
<section class="shop_section layout_padding_details">
    <div class="container">
        <div class="row">
            <!-- kalo mau gedein container dari descnya -->
            <div class="col-md-12">
                <div class="box">

                    <!-- design_foto ada style di atas -->
                    <div class="design_foto">
                        <img width="400" src="/products/{{$data->image}}">
                    </div>

                    <!-- Untuk penjelasan detailnya bagain bawah -->
                    <div class="detail-box">
                        <h6>{{$data->title}}</h6>
                        <h6><span>{{$data->price}}</span></h6>
                    </div>
                    <div class="detail-box">
                        <h6>Category: {{$data->category}}</h6>
                        <h6>Available Quantity: <span>{{$data->quantity}}</span></h6>
                    </div>
                    <div class="detail-box">
                        <p>{{$data->description}}</p>
                    </div>
                    <!-- Close detail bagain bawah -->
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Product Details -->

    
    <!-- info section -->
        @include('home.footer')
    <!-- end info section -->

</body>

</html>