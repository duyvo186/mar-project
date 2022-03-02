@extends('frontend.master')
@section('content')


<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="#" style="display: inline-block;"></a>

<aside class="category-sidebar">
    <div class="category-header">
        <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
            class="category-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="category-list">
        <li class="category-item"><a class="category-link " href="#">
            </i><span>Trang Chủ</span></a>

        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><span>Cửa Hàng</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Cây Bóng Mát</a></li>
                <li><a href="#">Dairy & Eggs</a></li>
                <li><a href="#">Oil & Fat</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fruit"></i><span>fruits</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Orange</a></li>
                <li><a href="#">Strawberry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-dairy-products"></i><span>dairy farm</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Egg</a></li>
                <li><a href="#">milk</a></li>
                <li><a href="#">butter</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-crab"></i><span>sea
                    foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Lobster</a></li>
                <li><a href="#">Octopus</a></li>
                <li><a href="#">Shrimp</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-salad"></i><span>diet foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Salmon</a></li>
                <li><a href="#">Potatoes</a></li>
                <li><a href="#">Greens</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-dried-fruit"></i><span>dry foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">noodles</a></li>
                <li><a href="#">Powdered milk</a></li>
                <li><a href="#">nut & yeast</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fast-food"></i><span>fast foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">mango</a></li>
                <li><a href="#">plumsor</a></li>
                <li><a href="#">raisins</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-cheers"></i><span>drinks</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Wine</a></li>
                <li><a href="#">Juice</a></li>
                <li><a href="#">Water</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-beverage"></i><span>coffee</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Cappuchino</a></li>
                <li><a href="#">Espresso</a></li>
                <li><a href="#">Latte</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-barbecue"></i><span>meats</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Meatball</a></li>
                <li><a href="#">Sausage</a></li>
                <li><a href="#">Poultry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                    class="flaticon-fish"></i><span>fishes</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Agujjim</a></li>
                <li><a href="#">saltfish</a></li>
                <li><a href="#">pazza</a></li>
            </ul>
        </li>
    </ul>
    <div class="category-footer">
        <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
    </div>
</aside>

{{-- <aside class="nav-sidebar">
    <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i
                class="icofont-close"></i></button></div>
    <div class="nav-content">
        <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                    here</span></a></div>
        <div class="nav-select-group">
            <div class="nav-select"><i class="icofont-world"></i><select class="select">
                    <option value="english" selected>English</option>
                    <option value="bangali">Bangali</option>
                    <option value="arabic">Arabic</option>
                </select></div>
            <div class="nav-select"><i class="icofont-money"></i><select class="select">
                    <option value="english" selected>Doller</option>
                    <option value="bangali">Pound</option>
                    <option value="arabic">Taka</option>
                </select></div>
        </div>
        <ul class="nav-list">
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                <ul class="dropdown-list">
                    <li><a href="home-grid.html">Home grid</a></li>
                    <li><a href="index.html">Home index</a></li>
                    <li><a href="home-classic.html">Home classic</a></li>
                    <li><a href="home-standard.html">Home standard</a></li>
                    <li><a href="home-category.html">Home category</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                <ul class="dropdown-list">
                    <li><a href="shop-5column.html">shop 5 column</a></li>
                    <li><a href="shop-4column.html">shop 4 column</a></li>
                    <li><a href="shop-3column.html">shop 3 column</a></li>
                    <li><a href="shop-2column.html">shop 2 column</a></li>
                    <li><a href="shop-1column.html">shop 1 column</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                <ul class="dropdown-list">
                    <li><a href="product-tab.html">product tab</a></li>
                    <li><a href="product-grid.html">product grid</a></li>
                    <li><a href="product-video.html">product video</a></li>
                    <li><a href="product-simple.html">product simple</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                <ul class="dropdown-list">
                    <li><a href="profile.html">profile</a></li>
                    <li><a href="wallet.html">wallet</a></li>
                    <li><a href="wishlist.html">wishlist</a></li>
                    <li><a href="compare.html">compare</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="orderlist.html">order history</a></li>
                    <li><a href="invoice.html">order invoice</a></li>
                    <li><a href="email-template.html">email template</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                <ul class="dropdown-list">
                    <li><a href="login.html">login</a></li>
                    <li><a href="register.html">register</a></li>
                    <li><a href="reset-password.html">reset password</a></li>
                    <li><a href="change-password.html">change password</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                <ul class="dropdown-list">
                    <li><a href="blog-grid.html">blog grid</a></li>
                    <li><a href="blog-standard.html">blog standard</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li><a href="blog-author.html">blog author</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
            <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
            <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
            <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
            <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
            <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
            <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
            <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
        </ul>
        <div class="nav-info-group">
            <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
            </div>
            <div class="nav-info"><i class="icofont-ui-email"></i>
                <p><small>email us</small><span>support@greeny.com</span></p>
            </div>
        </div>
        <div class="nav-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </div>
</aside> --}}
<div class="mobile-menu"><button
        class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button>
        <a href="index.html" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a>
        <button
        class="cart-btn" title="Cartlist"><i
            class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button></div>
{{-- <div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group"><label class="view-label new">new</label><label
                                    class="view-label off">-10%</label></div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                            <div class="view-meta">
                                <p>SKU:<span>1234567</span></p>
                                <p>BRAND:<a href="#">radhuni</a></p>
                            </div>
                            <div class="view-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 reviews)</a></div>
                            <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                            <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                reprehenderit fuga</p>
                            <div class="view-list-group"><label class="view-list-title">tags:</label>
                                <ul class="view-tag-list">
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">vegetable</a></li>
                                    <li><a href="#">chilis</a></li>
                                </ul>
                            </div>
                            <div class="view-list-group"><label class="view-list-title">Share:</label>
                                <ul class="view-share-list">
                                    <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                    <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                    <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                </ul>
                            </div>
                            <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                            <div class="view-action-group"><a class="view-wish wish" href="#"
                                    title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                        wish</span></a><a class="view-compare" href="compare.html"
                                    title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                        This</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <section class="home-classic-slider slider-arrow">
    <div class="banner-part" style="background: url({{asset('frontend/images/slider_2_image.jpg')}}) no-repeat center;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="banner-content">
                        <h1>we are delivered organic fresh fruits.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                            necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                            excepturi</p>
                        <div class="banner-btn"><a class="btn btn-inline" href="shop-4column.html"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                class="btn btn-outline" href="offer.html"><i class="icofont-sale-discount"></i><span>get
                                    offer</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-part" style="background: url({{asset('frontend/images/slider_3_image.jpg')}}) no-repeat center;">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-7 mx-auto">
                    <div class="banner-content text-center">
                        <h1>we are delivered organic fresh fruits.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                            necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                            excepturi</p>
                        <div class="banner-btn">
                            <a class="btn btn-inline" href="shop-4column.html"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                class="btn btn-outline" href="offer.html"><i class="icofont-sale-discount"></i><span>get
                                    offer</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-part" style="background: url({{asset('frontend/images/slider_4_image.jpg')}}) no-repeat center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-6"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="banner-content">
                        <h1>we are delivered organic fresh fruits.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                            necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                            excepturi</p>
                        <div class="banner-btn"><a class="btn btn-inline" href="shop-4column.html"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                class="btn btn-outline" href="offer.html"><i class="icofont-sale-discount"></i><span>get
                                    offer</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}
<section class="home-index-slider slider-arrow slider-dots">
    <div class="banner-part banner-1" style="background: url({{asset('frontend/images/slider_4_image.jpg')}}) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="banner-content">
                        <h1>free home delivery within 24 hours now.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                            necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                            excepturi</p>
                        <div class="banner-btn">
                            {{-- <a class="btn btn-inline" href="shop-4column.html"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                class="btn btn-outline" href="offer.html"><i
                                    class="icofont-sale-discount"></i><span>get offer</span></a> --}}
                                </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-6">
                    <div class="banner-img"><img src="{{asset('frontend/images/slider_4_image.jpg')}}" alt="index"></div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="banner-part banner-2" style="background: url({{asset('frontend/images/slider_3_image.jpg')}}) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-md-6 col-lg-6">
                    <div class="banner-img"><img src="{{asset('frontend/images/slider_4_image.jpg')}}" alt="index"></div>
                </div> --}}
                <div class="col-md-6 col-lg-6">
                    <div class="banner-content">
                        <h1>free home delivery within 24 hours now.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                            necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                            excepturi</p>
                        <div class="banner-btn">
                            {{-- <a class="btn btn-inline" href="shop-4column.html"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                class="btn btn-outline" href="offer.html"><i
                                    class="icofont-sale-discount"></i><span>get offer</span></a> --}}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .banner-content h1,
    .banner-content p {
        visibility: hidden;
    }
</style>
{{-- <section class="section brand-part">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>shop by brands</h2>
                </div>
            </div>
        </div>
        <div class="brand-slider slider-arrow">
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/01.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>natural greeny</h4>
                    <p>(45 items)</p>
                </div>
            </div>
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/02.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>vegan lover</h4>
                    <p>(45 items)</p>
                </div>
            </div>
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/03.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>organic foody</h4>
                    <p>(45 items)</p>
                </div>
            </div>
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/04.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>ecomart limited</h4>
                    <p>(45 items)</p>
                </div>
            </div>
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/05.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>fresh fortune</h4>
                    <p>(45 items)</p>
                </div>
            </div>
            <div class="brand-wrap">
                <div class="brand-media"><img src="images/brand/06.jpg" alt="brand">
                    <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                </div>
                <div class="brand-meta">
                    <h4>econature</h4>
                    <p>(45 items)</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-50"><a href="brand-list.html" class="btn btn-outline"><i
                            class="fas fa-eye"></i><span>view all brands</span></a></div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <div class="section promo-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="promo-img"><a href="#"><img src="images/promo/home/06.jpg" alt="promo"></a></div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="promo-img"><a href="#"><img src="images/promo/home/07.jpg" alt="promo"></a></div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="promo-img"><a href="#"><img src="images/promo/home/08.jpg" alt="promo"></a></div>
            </div>
        </div>
    </div>
</div> --}}
<section style="margin-top:50px;"class="inner-section contact-part">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-location-pin"></i>
                    <h4>head office</h4>
                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active"><i class="icofont-phone"></i>
                    <h4>phone number</h4>
                    <p><a href="#">009-215-5596 <span>(toll free)</span></a><a href="#">009-215-5595</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-email"></i>
                    <h4>Support mail</h4>
                    <p><a href="#">contact@example.com</a><a href="#">info@example.com</a></p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-lg-6">
                <div class="contact-map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"
                        aria-hidden="false" tabindex="0"></iframe></div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form">
                    <h4>Drop Your Thoughts</h4>
                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text" placeholder="Your Name"><i
                                class="icofont-user-alt-3"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text"
                                placeholder="Your Email"><i class="icofont-email"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text"
                                placeholder="Your Subject"><i class="icofont-book-mark"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><textarea class="form-control"
                                placeholder="Your Message"></textarea><i class="icofont-paragraph"></i></div>
                    </div><button type="submit" class="form-btn-group"><i class="fas fa-envelope"></i><span>send
                            message</span></button>
                </form>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Danh mục loại cây</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="branch-card"><img src="{{asset('frontend/images/nothat.png')}}" alt="branch">
                    <div class="branch-overlay">

                        <p style="
                            letter-spacing: 2px;
    font-weight: 500;
                    ">CÂY NỘI THẤT</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="branch-card"><img src="{{asset('frontend/images/cayvanphong.jpg')}}" alt="branch">
                    <div class="branch-overlay">

                        <p style="
                           letter-spacing: 2px;
    font-weight: 500;
                    ">CÂY VĂN PHÒNG</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="branch-card"><img src="{{asset('frontend/images/bongmat.jpg')}}" alt="branch">
                    <div class="branch-overlay">

                        <p style="
                          letter-spacing: 2px;
    font-weight: 500;
                    ">CÂY BÓNG MÁT</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="branch-card"><img src="{{asset('frontend/images/caytrongtrongnuoc.jpg')}}" alt="branch">
                    <div class="branch-overlay">

                        <p style="
                           letter-spacing: 2px;
    font-weight: 500;
                    ">CÂY TRỒNG TRONG NƯỚC</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="branch-card"><img src="images/branch/04.jpg" alt="branch">
                    <div class="branch-overlay">

                        <p>begumganj, 3737 shonaimuri, noakhli.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<section class="section deals-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Cây Ăn Quả</h2>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            @foreach ($anqua as $item)
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label"></div><button class="product-wish wish"></i></button><a
                            class="product-image" href="product-video.html"><img id="hinhdaidien" src="{{$item->hinhdaidien}}"
                                alt="product"></a>
                        <div class="product-widget">


                            <form action="{{route('pg.add')}}" method="post">
                                <fieldset>
                                <input type="hidden" name="id" value="{{$item->ma}}"  />
                                    @csrf
                            <button type="submit" ><a  title="Product View" class="fas fa-eye" ></a></button>
                            {{-- <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p> --}}
                            </fieldset>
                            </form>

                        </div>
                    </div>
                    <div class="product-content">
                        <fieldset>
                            {{-- <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div> --}}
                            <h6 style="    border-bottom: 1px solid #ddd;
                            padding: 10px 0;
                            height: 55px;
                            font-size: 14px;
                            font-weight: bold;" class="product-name"><a style="color:#548C01; "
                                    href="product-video.html" id="ten">{{$item->ten}}</a></h6>
                            <h6 style="color: var(--red); font-weight:bold; font-size:18px"id="gia" class="product-price">
                                {{number_format($item->gia)}}đ<span></span></h6>
                            {{-- <del>$34</del> : function discount--}}

                            {{-- <form class="meta-prod" > --}}
                                 {{-- <fieldset> --}}


                                     <input   type="hidden" name="id" value="{{$item->ma}}" />
                                    {{-- @csrf --}}
                                    {{-- {{csrf_field()}} --}}
                                    <input id="csrf" type="hidden" value="{{csrf_token()}}"/>
                                    <button onclick="AddCart({{$item->ma}})"  class="product-add" title="Add to Cart">
                                        <i  class="fas fa-shopping-basket"></i><span>Thêm Giỏ Hàng</span>
                                    </button>
                                {{-- </fieldset> --}}
                             {{-- </form> --}}


                            {{-- <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input id="soluonggoc"class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div> --}}
                        {{-- </fieldset> --}}
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>

<section class="section deals-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Cây Bóng Mát</h2>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            @foreach ($bongmat as $item)
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label"></div><button class="product-wish wish"></i></button><a
                            class="product-image" href="product-video.html"><img src="{{$item->hinhdaidien}}"
                                alt="product"></a>
                        <div class="product-widget">



<form action="{{route('pg.add')}}" method="post">
    <fieldset>
    <input type="hidden" name="id" value="{{$item->ma}}"  />
        @csrf
<button type="submit" ><a  title="Product View" class="fas fa-eye" ></a></button>
{{-- <p class="meta-prod d-flex">
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
</p> --}}
</fieldset>
</form>



                        </div>
                    </div>
                    <div class="product-content">
                        <fieldset>
                            {{-- <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div> --}}
                            <h6 style="    border-bottom: 1px solid #ddd;
                            padding: 10px 0;
                            height: 55px;
                            font-size: 14px;
                            font-weight: bold;" class="product-name"><a style="color:#548C01; "
                                    href="product-video.html" id="ten">{{$item->ten}}</a></h6>
                            <h6 style="color: var(--red); font-weight:bold; font-size:18px"id="gia" class="product-price">
                                {{number_format($item->gia)}}đ<span></span></h6>
                            {{-- <del>$34</del> : function discount--}}

                            {{-- <form class="meta-prod" > --}}
                                 {{-- <fieldset> --}}


                                     <input   type="hidden" name="id" value="{{$item->ma}}" />
                                    {{-- @csrf --}}
                                    {{-- {{csrf_field()}} --}}
                                    <input id="csrf" type="hidden" value="{{csrf_token()}}"/>
                                    <button onclick="AddCart({{$item->ma}})"  class="product-add" title="Add to Cart">
                                        <i  class="fas fa-shopping-basket"></i><span>Thêm Giỏ Hàng</span>
                                    </button>
                                {{-- </fieldset> --}}
                             {{-- </form> --}}


                            {{-- <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input id="soluonggoc"class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div> --}}
                        {{-- </fieldset> --}}
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
<section class="section deals-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Cây trồng trong nước</h2>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            @foreach ($trongnuoc as $item)
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label"></div><button class="product-wish wish"></i></button><a
                            class="product-image" href="product-video.html"><img src="{{$item->hinhdaidien}}"
                                alt="product"></a>
                        <div class="product-widget">



<form action="{{route('pg.add')}}" method="post">
    <fieldset>
    <input type="hidden" name="id" value="{{$item->ma}}"  />
        @csrf
<button type="submit" ><a  title="Product View" class="fas fa-eye" ></a></button>
{{-- <p class="meta-prod d-flex">
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
</p> --}}
</fieldset>
</form>



                        </div>
                    </div>
                    <div class="product-content">
                        <fieldset>
                            {{-- <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div> --}}
                            <h6 style="    border-bottom: 1px solid #ddd;
                            padding: 10px 0;
                            height: 55px;
                            font-size: 14px;
                            font-weight: bold;" class="product-name"><a style="color:#548C01; "
                                    href="product-video.html" id="ten">{{$item->ten}}</a></h6>
                            <h6 style="color: var(--red); font-weight:bold; font-size:18px"id="gia" class="product-price">
                                {{number_format($item->gia)}}đ<span></span></h6>
                            {{-- <del>$34</del> : function discount--}}

                            {{-- <form class="meta-prod" > --}}
                                 {{-- <fieldset> --}}


                                     <input   type="hidden" name="id" value="{{$item->ma}}" />
                                    {{-- @csrf --}}
                                    {{-- {{csrf_field()}} --}}
                                    <input id="csrf" type="hidden" value="{{csrf_token()}}"/>
                                    <button onclick="AddCart({{$item->ma}})"  class="product-add" title="Add to Cart">
                                        <i  class="fas fa-shopping-basket"></i><span>Thêm Giỏ Hàng</span>
                                    </button>
                                {{-- </fieldset> --}}
                             {{-- </form> --}}


                            {{-- <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input id="soluonggoc"class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div> --}}
                        {{-- </fieldset> --}}
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
<section class="section deals-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Cây Nội Thất</h2>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            @foreach ($noithat as $item)
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label"></div><button class="product-wish wish"></i></button><a
                            class="product-image" href="product-video.html"><img src="{{$item->hinhdaidien}}"
                                alt="product"></a>
                        <div class="product-widget">



<form action="{{route('pg.add')}}" method="post">
    <fieldset>
    <input type="hidden" name="id" value="{{$item->ma}}"  />
        @csrf
<button type="submit" ><a  title="Product View" class="fas fa-eye" ></a></button>
{{-- <p class="meta-prod d-flex">
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
</p> --}}
</fieldset>
</form>



                        </div>
                    </div>
                    <div class="product-content">
                        <fieldset>
                            {{-- <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div> --}}
                            <h6 style="    border-bottom: 1px solid #ddd;
                            padding: 10px 0;
                            height: 55px;
                            font-size: 14px;
                            font-weight: bold;" class="product-name"><a style="color:#548C01; "
                                    href="product-video.html" id="ten">{{$item->ten}}</a></h6>
                            <h6 style="color: var(--red); font-weight:bold; font-size:18px"id="gia" class="product-price">
                                {{number_format($item->gia)}}đ<span></span></h6>
                            {{-- <del>$34</del> : function discount--}}

                            {{-- <form class="meta-prod" > --}}
                                 {{-- <fieldset> --}}


                                     <input   type="hidden" name="id" value="{{$item->ma}}" />
                                    {{-- @csrf --}}
                                    {{-- {{csrf_field()}} --}}
                                    <input id="csrf" type="hidden" value="{{csrf_token()}}"/>
                                    <button onclick="AddCart({{$item->ma}})"  class="product-add" title="Add to Cart">
                                        <i  class="fas fa-shopping-basket"></i><span>Thêm Giỏ Hàng</span>
                                    </button>
                                {{-- </fieldset> --}}
                             {{-- </form> --}}


                            {{-- <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input id="soluonggoc"class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div> --}}
                        {{-- </fieldset> --}}
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
<div class="section promo-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="promo-img"><a href="#"><img src="{{asset('frontend/images/promotion2.png')}}"
                            alt="promo"></a></div>
            </div>
        </div>
    </div>
</div>

{{-- <section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>collected new items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="new-slider slider-arrow">
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/15.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/16.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/17.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/18.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/19.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">new</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/20.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                            class="fas fa-eye"></i><span>show more</span></a></div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <div class="section promo-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                <div class="promo-img"><a href="#"><img src="images/promo/home/01.jpg" alt="promo"></a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                <div class="promo-img"><a href="#"><img src="images/promo/home/02.jpg" alt="promo"></a></div>
            </div>
        </div>
    </div>
</div> --}}


<section class="section testimonial-part">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Đánh Giá</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-slider slider-arrow">
                    <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                        <p>Chất lượng dịch vụ tốt sản phẩm tuyệt vời</p>
                        <h5>Hữu Duy</h5>
                        <ul>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul><img src="{{asset('frontend/images/person_1.jpg')}}" alt="testimonial">
                    </div>
                    <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                        <p>Chất lượng dịch vụ tốt sản phẩm tuyệt vời</p>
                        <h5>Ngọc Đức</h5>
                        <ul>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul><img src="{{asset('frontend/images/person_2.jpg')}}" alt="testimonial">
                    </div>
                    <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                        <p>Chất lượng dịch vụ tốt sản phẩm tuyệt vời</p>
                        <h5>Thanh tuấn</h5>
                        <ul>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul><img src="{{asset('frontend/images/person_3.jpg')}}" alt="testimonial">

                    </div>
                </div>
            </div>
        </div>
</section>
<section class="section blog-part">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Tin Tức</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-slider slider-arrow">
                    @foreach ($news as $new )
                    <div class="blog-card">
                        <div class="blog-media">
                            
                            <a class="blog-img" href="#"><img src="{{$new->hinhdaidien}}"
                                    alt="blog"></a>
                                
                                </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fas fa-user"></i><span>admin</span></li>
                                <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                            </ul>
                            @php
                            $str= "";
                            $str2 = substr($str, 1);

                            if($new->mota)
                                $str = $new->mota

                            @endphp
                            <h4 class="blog-title"><a href="blog-details.html">{{$new->tieude}}</a></h4>
                            <p class="blog-desc">{{$str2}} </p><a class="blog-btn" href="#"><span>Đọc Thêm</span><i
                                    class="icofont-arrow-right"></i></a>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25"><a href="blog-grid.html" class="btn btn-outline"><i
                            class="fas fa-eye"></i><span>Xem tất cả tin tức</span></a></div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-text">
                    <h2>Nhận Thông Báo</h2>
                    <p>Về hoạt động khuyến mãi, sản phẩm mới của Vựa Cây Đẹp</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5">
                <form class="news-form"><input type="text" placeholder="Nhập Email"><button><span><i
                                class="icofont-ui-email"></i>Gửi</span></button></form>
            </div>
        </div>
    </div>
</section> --}}

<style>
    h2 {
        color: #085543;
    }
</style>
@endsection
