<script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/countdown.min.js') }}"></script>
<script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
<script src="{{ asset('frontend/js/nice-select.js') }}"></script>
<script src="{{ asset('frontend/js/countdown.js') }}"></script>
<script src="{{ asset('frontend/js/accordion.js') }}"></script>
<script src="{{ asset('frontend/js/venobox.js') }}"></script>
<script src="{{ asset('frontend/js/slick.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script>
    var PUBLIC = '{{ asset('public') . '/' }}';
</script>
<script>
    CKEDITOR.replace('editor', {
        plugins: 'wysiwygarea,sourcearea,basicstyles,toolbar,undo',
        on: {
            instanceReady: function() {
                // Show textarea for dev purposes.
                this.element.show();
            },
            change: function() {
                // Sync textarea.
                this.updateElement();

                // Fire keyup on <textarea> here?
            }
        }
    });
</script>
{{-- <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script> --}}
<script src="{{ asset('backend/ckfinder/ckfinder.js') }}"></script>
<script src="{{ asset('backend/js/myscript.js') }}"></script>
<script>
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        // const name = document.querySelector("#ok")
        // passes on every "a" tag
        $("a.navbar-link").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).addClass("active");
            }
        });
        $("input#ok").click(function() {
            $(this).addClass("activetimkiem");

        });
        $(".hero-button").click(function() {
            $(".popup-form").addClass("activelogin");



        });
        $(".hero-button").on("click", (
        function() {
            $(".backdrop").fadeIn(), $("a.close-formlogin").on("click", (function() {

                $('.popup-form').removeClass("activelogin"),
                $(".backdrop").fadeOut(), $(".nav-sidebar").removeClass("active"), $(
                        ".cart-sidebar").removeClass("active"), $(".category-sidebar")
                    .removeClass("active")
            }))
        }))
        $(".hero-button").hover(function() {

            $("#hidden-login").toggleClass("active-login")
                //   .stop( true, true )
                .slideToggle();

        });



        // $('button.product-add').click(function(){
        //     var url = route('cart.add');
        //     var token = $('#crsf').val();
        //     alert(url);
        // });

        //     //xu ly cho su kien click vào nut test
        $('#btntest').click(function() {
            //.css: dinh dang style
            //.html: lay ra va ghi vao noi dung html
            //.text: lay ra va ghi vào noi dung la text
            //.val: lay ra va ghi vao value cho input
            // $('.title').css('color','red');
            // $('#ten').val('chao text');
            // GOI XU LY O SERVER VER THONG QUA AJAX
            //ROUTE, METHOD, PARAMS
            var url = 'http://127.0.0.1:8000/form2';
            var token = $('#csrf').val();
            // alert(token);
            var data = {
                _token: token
            };
            $.post(url, data)
                .done(function(dulieu) { //chi nhan duy nhat 1 trang thai 200

                    // $('#kq').val(dulieu.so);
                    // $('#ten').val(dulieu.str);
                    // $('.title').css('color',dulieu.color);
                })
                .fail(function(dulieu) {
                    console.log(dulieu);
                })
            // $.ajax({
            //     'url':url,
            //     'method':'POST'
            // });
        });
    });
</script>
<script>
    function AddCart(id) {

        var token = $('#csrf').val();
        var cart
        // alert(id);
        $.ajax({
            url: '{{ route('cart.add') }}',
            type: 'get',
            data: {
                _token: token,
                id: id
            },
            // dataType: 'HTML',
            // e.preventDefault();
        }).done(function(response) {
            $('.d-flex.justify-content-center.align-items-center').addClass('active');
            swal({
                    title: "Thêm Sản phẩm Thành Công",
                    //   text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "success",
                    buttons: true,
                    buttons: "Xem giỏ hàng",
                    //   buttons: "Hủy",
                    //   dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(location).attr("href", "{{ route('cart.index') }}");
                    }
                });
            var loadminicart = $('.cart-sidebar').load("{{ route('f.f1') }}");
            if (loadminicart) {

                $('.covertjson').load("{{ route('f.minicart') }}");
            }
            //    $('.header-part.active').load("{{ route('f.minicart') }}");
            // clearInterval(refreshIntervalId);
            //     $('.cart-list').addClass("active");
            //      console.log(response);
            // return response;

            //  response.preventDefault();
            // return JSON.parse(response);
            // html = "";
            //         html += '<ul class="list-unstyled">';
            //         $.each(response.data, function( index, value ) {
            //             html += '<li class="my-2 text-capitalize" style="cursor:pointer" data-id="'+ value.ma +'">' + value.ten +'</li>';
            //         });
            //         html += '</ul>';
            //         $('#speakerResponse').empty('').append(html);
            //         console.log(html);
            // e.preventDefault();
            // $('aside.cart-sidebar.active').reload();
            //     $('.cart-sidebar.active').each(function(){
            //       $(this).load(this.href);
            //    })
            // window.location.href='http://127.0.0.1:8000/';
            //  alert(response);
            //  return response;
            // $('.cart-list').empty();
            // $('.cart-list').text("");
            // $('.cart-list').text(response);
            //  $('.cart-list').empty();
            // $('.cart-list').html('<li>'+response.ten+'</li>')
            //  $('#ten').text(response.ten);

            //         $('#hinh').html(response.hinh);
            //         $('#gia').html(response.gia);

            //         $('#soluongmua').html(response.soluongmua);
            // console.log(response);
        });



    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .activetimkiem {
        box-shadow: 0px 3px 9px var(--primary);
        /* background: #fff; */
    }

    .active {
        color: var(--primary);
        border-bottom: 1px solid var(--primary);
    }

    /* .dropdown-position-list .active a{
        color: red;
    } */
    .header-part::after {
        width: 100% !important;
        position: fixed !important;
        z-index: 3000 !important;
    }

</style>
