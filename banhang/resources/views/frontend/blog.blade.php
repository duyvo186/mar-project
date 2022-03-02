@extends('frontend.master')
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/blog-grid.css')}}">

<section class="inner-section blog-grid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-filter">
                            <div class="filter-show"><label class="filter-label">Show :</label><select
                                    class="form-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select></div>
                            <div class="filter-short"><label class="filter-label">Short by :</label><select
                                    class="form-select filter-select">
                                    <option selected>default</option>
                                    <option value="3">recent</option>
                                    <option value="1">featured</option>
                                    <option value="2">recommend</option>
                                </select></div>
                            <div class="filter-action"><a href="blog-grid.html" class="active" title="Two Column"><i
                                        class="fas fa-th-large"></i></a><a href="blog-standard.html"
                                    title="One Column"><i class="fas fa-th-list"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ( $news as $item )
                    <div class="col-md-6 col-lg-6">

                                <div class="blog-card">
                                    <div class="blog-media">

                                        <form action="{{route('blog.add')}}" method="post">
                                            <fieldset>
                                            <input type="hidden" name="id" value="{{$item->ma}}"  />
                                                @csrf
                                        <button type="submit"><a class="blog-img" ><img src="{{asset($item->hinhdaidien) }}"
                                                alt="blog"></a></button>
                                            </fieldset>
                                        </form>
                                            </div>
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li><i class="fas fa-user"></i><span>admin</span></li>
                                            <li>{{$item->date}}</li>
                                        </ul>
                                        <h4 class="blog-title"><button type="submit"><a href="">{{$item->tieude }}</a></button></h4>
                                        @php
                                        $str= "";
                                        $str2 = substr($str, 1);

                                        if($item->mota)
                                            $str = $item->mota

                                        @endphp
                                        <p class="blog-desc">{{$str2 }} </p><a class="blog-btn"
                                            href="#"><span>đọc thêm</span><i class="icofont-arrow-right"></i></a>
                                    </div>
                                </div>
                        {{-- <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p> --}}



                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            {{-- <p class="page-info">Showing 12 of 60 Results</p>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">60</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                {{-- <div class="blog-widget">
                    <h3 class="blog-widget-title">Find blogs</h3>
                    <form class="blog-widget-form"><input type="text" placeholder="Search blogs"><button
                            class="icofont-search-1"></button></form>
                </div> --}}
                <div class="blog-widget">
                    <h3 class="blog-widget-title">tin tức liên quan</h3>
                    <ul class="blog-widget-feed">
                        <li><a class="blog-widget-media" href="#"><img src="{{asset($item->hinhdaidien) }}"
                                    alt="blog-widget"></a>
                            <h6 class="blog-widget-text"><a href="#">{{$item->tieude }}</a></h6>
                        </li>

                    </ul>
                </div>
                {{-- <div class="blog-widget">
                    <h3 class="blog-widget-title">top categories</h3>
                    <ul class="blog-widget-category">
                        <li><a href="#">farming <span>22</span></a></li>
                        <li><a href="#">agriculture <span>14</span></a></li>
                        <li><a href="#">organic food <span>35</span></a></li>
                        <li><a href="#">vegetables <span>67</span></a></li>
                        <li><a href="#">healthy life <span>89</span></a></li>
                    </ul>
                </div> --}}
                {{-- <div class="blog-widget">
                    <h3 class="blog-widget-title">popular tags</h3>
                    <ul class="blog-widget-tag">
                        <li><a href="#">farming</a></li>
                        <li><a href="#">organic</a></li>
                        <li><a href="#">food</a></li>
                        <li><a href="#">healthy</a></li>
                        <li><a href="#">agriculture</a></li>
                        <li><a href="#">vegetables</a></li>
                        <li><a href="#">grocery</a></li>
                        <li><a href="#">vegan</a></li>
                        <li><a href="#">life</a></li>
                        <li><a href="#">enjoy</a></li>
                    </ul>
                </div> --}}
                {{-- <div class="blog-widget">
                    <h3 class="blog-widget-title">follow us</h3>
                    <ul class="blog-widget-social">
                        <li><a href="#" class="icofont-facebook"></a></li>
                        <li><a href="#" class="icofont-twitter"></a></li>
                        <li><a href="#" class="icofont-linkedin"></a></li>
                        <li><a href="#" class="icofont-pinterest"></a></li>
                        <li><a href="#" class="icofont-instagram"></a></li>
                    </ul>
                </div> --}}
                <div class="blog-widget"><a href="#"><img class="img-fluid" src="images/promo/blog/01.jpg"
                            alt="promo"></a></div>
            </div>
        </div>
    </div>
</section>



  @endsection
