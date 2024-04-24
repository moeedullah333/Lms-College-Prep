

<!-- Bootstrap Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<!-- Fontawesome links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<!-- swiper links -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- AOS links -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<!--<script type="text/javascript" src="slick/slick.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{asset('web/js/custom.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function cart_item_count() {
        if (localStorage.getItem("cart_items") !== null) {
            array = JSON.parse(localStorage.getItem("cart_items"));
            let count = 0;

            array.forEach(element => {
                count += element.qty;
            });
            $('.cart_item_number:not(.item_check)').html(count);
        }
    }
    $(document).ready(function() {
        cart_item_count()
    });
</script>
@stack('js')