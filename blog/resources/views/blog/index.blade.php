@extends('layouts.foregroundCommon')
@section('index')
    <link rel="stylesheet" href="/css/blog/slick.css">
    <!-- main of the page -->
    <main id="main" role="main">
        <div class="home-box">
            <section class="slideshow">
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(/images/blog/img73.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Lifestyle</strong></div>
                                        <h1>在一个博客应用中，你可能会创建如下几个视图：</br>
                                            博客首页——展示最近的几项内容。</br>
                                            内容“详情”页——详细展示某项内容。</br>
                                            以年为单位的归档页——展示选中的年份里各个月份创建的内容。</br>
                                            以月为单位的归档页——展示选中的月份里各天创建的内容。</br>
                                            以天为单位的归档页——展示选中天里创建的所有内容。</br>
                                            评论处理器——用于响应为一项内容添加评论的操作。</h1>
                                        <a href="#">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(/images/blog/img01.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Sports</strong></div>
                                        <h1>The Best Fashion, <br>5 Outfits for a Party.</h1>
                                        <a href="#">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(/images/blog/img74.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Movies</strong></div>
                                        <h1>Thieves Of The Prison <br>Let there be no purpose.</h1>
                                        <a href="#">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(/images/blog/img75.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Internet</strong></div>
                                        <h1>I get up  <br>looking for adventure.</h1>
                                        <a href="#">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(/images/blog/img73.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Lifestyle</strong></div>
                                        <h1>Life is an adventure, <br>it’s not a package tour.</h1>
                                        <a href="#">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
            </section>
            <!-- switcher of the page -->
            <div class="switcher">
                <div class="center-block">
                    <!-- switcher mask of the page -->
                    <div class="switcher-mask">
                        <!-- switcher slide of the page -->
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="/images/blog/img02.jpg" alt="image description">
                                    </div>
                                    <h2><a href="#">Letter from the desk of an <br>unsuccessful designer</a></h2>
                                    <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                </div>
                            </div>
                        </div>
                        <!-- switcher slide of the page end -->
                        <!-- switcher slide of the page -->
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="/images/blog/img03.jpg" alt="image description">
                                    </div>
                                    <h2><a href="#">Letter from the desk of an <br>unsuccessful designer</a></h2>
                                    <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                </div>
                            </div>
                        </div>
                        <!-- switcher slide of the page end -->
                        <!-- switcher slide of the page -->
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="/images/blog/img04.jpg" alt="image description">
                                    </div>
                                    <h2><a href="#">Letter from the desk of an <br>unsuccessful designer</a></h2>
                                    <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                </div>
                            </div>
                        </div>
                        <!-- switcher slide of the page end -->
                        <!-- switcher slide of the page -->
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="/images/blog/img05.jpg" alt="image description">
                                    </div>
                                    <h2><a href="#">Letter from the desk of an <br>unsuccessful designer</a></h2>
                                    <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                </div>
                            </div>
                        </div>
                        <!-- switcher slide of the page end -->
                        <!-- switcher slide of the page -->
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="/images/blog/img02.jpg" alt="image description">
                                    </div>
                                    <h2><a href="#">Letter from the desk of an <br>unsuccessful designer</a></h2>
                                    <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                </div>
                            </div>
                        </div>
                        <!-- switcher slide of the page end -->
                    </div>
                    <!-- switcher mask of the page end -->
                </div>
            </div>
            <!-- slide of the page end -->
        </div>
        <!-- twocolumns of the page -->
        <div id="twocolumns">
            <div class="container">
                <div class="row">
                    <!-- Content of the page -->
                    <div id="content" class="col-xs-12 col-md-8">
                        <!-- widget of the page -->
                        <section class="widget profile-widget style1 hidden-md hidden-lg">
                            <div class="profile-pic">
                                <a href="#">
                                    <img src="/images/blog/img11.jpg" alt="John Aston">
                                </a>
                            </div>
                            <h3><a href="#">John Aston</a></h3>
                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                            <!-- Social networks of the page -->
                            <ul class="social-networks justify">
                                <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                            </ul>
                            <!-- Social networks of the page end -->
                        </section>
                        <!-- widget of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img06.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="#">I get up in the morning looking for adventure.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img07.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="#">Letter from the desk of an unsuccessful designer.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post fluid text-center wow fadeInUp" data-wow-delay="0.6s">
                                <div class="video-holder">
                                    <a href="" class="ico-play lightbox fancybox.iframe"></a>
                                    <img src="/images/blog/img72.jpg" alt="image description">
                                </div>
                                <div class="text-wrap text-center">
                                    <time datetime="2011-01-12">19th may - <a href="#">lifestyle</a></time>
                                    <h2><a href="#">Exploring the unknown truth about myself</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  elit, sed diam nonummy nibh euismod tincidunt enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis...</p>
                                    <a href="{{ url('archive') }}" class="link-more">read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols-holder of the page end -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img08.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="#">Holiday is awesome when loved one beside me.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img09.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Life</a></time>
                                    <h2><a href="#">The bitter truth that you should know.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- col holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post fluid text-center wow fadeInUp" data-wow-delay="0.6s">
                                <ul class="list-unstyled carousel">
                                    <li>
                                        <div class="slide">
                                            <img src="/images/blog/img10.jpg" alt="image description">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <img src="/images/blog/img72.jpg" alt="image description">
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-wrap text-center">
                                    <time datetime="2011-01-12">12th April - <a href="#">World</a></time>
                                    <h2><a href="#">The unseen beauty of nature.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  elit, sed diam nonummy nibh euismod tincidunt enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis...</p>
                                    <a href="{{ url('archive') }}" class="link-more">read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img06.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="#">I get up in the morning looking for adventure.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="#"><img src="/images/blog/img07.jpg" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">21st May - <a href="#">Travel</a></time>
                                    <h2><a href="#">Letter from the desk of an unsuccessful designer.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="{{ url('archive') }}" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- Navigation of the page -->
                        <nav role="navigation" class="navigation pagination">
                            <div class="nav-links">
                                <a href="#" class="prev page-numbers">Prev post.</a>
                                <a href="#" class="page-numbers">1</a>
                                <span class="page-numbers current">2</span>
                                <span class="page-numbers dots hidden">…</span>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">NEXT post.</a>
                            </div>
                        </nav>
                        <!-- Navigation of the page end -->
                    </div>
                    <!-- Content of the page end -->
                    <!-- Sidebar of the page -->
                    <aside id="sidebar" class="col-xs-12 col-md-4">
                        <!-- Widget of the page -->
                        <section class="widget profile-widget style1 hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
                            <div class="profile-pic">
                                <a href="#">
                                    <img src="/images/blog/img11.jpg" alt="John Aston">
                                </a>
                            </div>
                            <h3><a href="#">John Aston</a></h3>
                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                            <!-- Social network of the page -->
                            <ul class="social-networks justify">
                                <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                            </ul>
                            <!-- Social network of the page end -->
                        </section>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <section class="widget recent-posts-widget wow fadeInUp" data-wow-delay="0.6s">
                            <header class="widget-head">
                                <h3>Recent Posts</h3>
                                <p>post those are very recent in Dot</p>
                            </header>
                            <ol>
                                <li>
                                    <h4><a href="#">I get up in the morning looking <br>for an adventure.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
											<strong class="tag hot">HOT</strong>
										</span>
                                </li>
                                <li>
                                    <h4><a href="#">Letter from the desk of an <br>unsuccessful designer.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
											<strong class="tag">trending</strong>
										</span>
                                </li>
                                <li>
                                    <h4><a href="#">Exploring the unknow truth about myself - My Story.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
										</span>
                                </li>
                            </ol>
                        </section>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <div class="widget promo-widget wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#"><img src="/images/blog/ad-placeholder.jpg" alt="“Place your Advertisement here”"></a>
                        </div>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <div class="widget widget_categories tabs wow fadeInUp" data-wow-delay="0.6s">
                            <header class="widget-head">
                                <h3>Category</h3>
                                <p>browse all your favourite categories</p>
                            </header>
                            <div class="lists-holder">
                                <ul>
                                    <li class="cat-item cat-item-1"><a href="#">Lifestyle </a> (23)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Movie </a> (02)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Travel </a> (11)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Sports </a> (05)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Music </a> (01)</li>
                                </ul>
                                <ul>
                                    <li class="cat-item cat-item-1"><a href="#">Education </a> (15)</li>
                                    <li class="cat-item cat-item-1"><a href="#">International </a> (09)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Design </a> (26)</li>
                                    <li class="cat-item cat-item-1"><a href="#">News </a> (01)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Review </a> (14)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Widget of the page end -->
                    </aside>
                    <!-- Sidebar of the page end -->
                </div>
            </div>
        </div>
        <!-- twocolumns of the page end -->
        <!-- Instagram Slider of the page -->
        <div class="instagram-slider container-fluid">
            <div class="row">
                <div class="mask">
                    <div class="slideset">
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img30.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img31.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img35.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img32.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img33.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img36.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img34.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img30.jpg" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="/images/blog/img31.jpg" alt="image description"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slider of the page end -->
    </main>
    <!-- main of the page end -->
@endsection
