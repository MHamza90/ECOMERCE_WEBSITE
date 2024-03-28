<!--Javascript-->

<script src="{{ asset('front/assets/yap-new/code.jquery.com/jquery-3.6.3.min.js') }}"></script>



<script src="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js') }}"></script>

<script src="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/unpkg.com/tilt.js%401.2.1/dest/tilt.jquery.min.js') }}"></script>

<script src="{{ asset('front/assets/yap-new/unpkg.com/aos%402.3.1/dist/aos.js') }}"></script>

<script src="{{ asset('front/assets/yap-new/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/smooth-scroll.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/butter.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/audio.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/twitterFetcher_min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/assets/yap-new/js/placeholders.min.js') }}"></script>

<script src="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js') }}"></script>

<script src="{{ asset('front/assets/yap-new/js/script.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>


<script>
    jQuery(document).ready(function () {
        ;
        jQuery("#srch").click(function () {
            jQuery("#srchr").click();
        });
    });
</script>

<script type="text/javascript">
    var type = "{{ Session::get('type') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;

        }
</script>

<script>
    $(document).ready(function () {
            $("#search").keyup(function () {
                var name = $('#search').val();

            if (name == "") {
                $("#display").hide();
                $("#display").html("");
            } else {
                $.ajax({
                    type: "GET",
                    url: "{{ route('search.artist') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        search: name
                    },
                    success: function (res) {
                        console.log(res);
                        var html =''
                        html += `<ul>`
                            $.each(res, function (index, item) {
                            var url = '{{ route("single.blog", ":id") }}';
                            url = url.replace(':id', item.id);
                            html += `


                                <li>
                                    <a href="${url}" data-id="${item.id}"  >
                                        ${item.first_name}</a>
                                </li>


                            `

                        });
                        html += `</ul>`
                        $("#display").html(html).show();
                    }
                });
            }
        });
    });
</script>


<!-- Google analytics -->

<!-- End google analytics -->
@yield('extra_script')
