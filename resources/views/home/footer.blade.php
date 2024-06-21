<style>
    .info_container .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .info_container .row {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .info_container .col-md-6.col-lg-3 {
        flex: 1;
        max-width: 33.33%; /* Adjusted to 33.33% for three columns */
        padding: 20px;
        text-align: center;
    }
</style>

<section class="info_section layout_padding2-top">
    <div class="social_container">
        <div class="social_box">
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="info_container">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6 col-lg-3">
                    <h6>ABOUT US</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6>NEED HELP</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6 style="margin-right:140px;">CONTACT US</h6>
                    <div class="info_link-box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Kopi d'kebon by SCmm</span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+01 12345678901</span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span> demo@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">Kelompok 12</a></p>
        </div>
    </footer>
    <!-- footer section -->
</section>

<!-- untuk kasih peringatan kalau mau delete -->
<script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');

        swal({
                title: "Are you sure to delete this",
                text: "This delete will be permanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
