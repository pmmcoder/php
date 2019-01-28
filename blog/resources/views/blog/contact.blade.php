@extends('layouts.foregroundCommon')
@section('contact')
        <!-- Main of the page -->
        <main id="main" role="main">
            <!-- Page head of the page -->
            <header class="page-head wow fadeInUp" data-wow-delay="0.6s" style="background-image: url(/images/blog/img52.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Contact Us</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Page head of the page end -->
            <!-- Contact Sec of the page -->
            <div class="contact-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <!-- Comment respond of the page -->
                            <section class="comment-respond contact-form wow fadeInUp" data-wow-delay="0.6s">
                                <header class="header">
                                    <h3 id="reply-title" class="comment-reply-title">Get in touch</h3>
                                    <p>We will reply your message within 24 hours!</p>
                                </header>
                                <form action="{{ URL('contact') }}" method="post" id="commentform" class="comment-form">
                                    <div class="wrap form-group">
                                        <div class="comment-form-author">
                                            <label for="author">Your name <span class="required">*</span></label>
                                            <input type="text" id="author" name="author" size="30" aria-required="true" placeholder="enter your name here">
                                        </div>
                                        <div class="comment-form-email">
                                            <label for="email">Email address <span class="required">*</span></label>
                                            <input type="text" id="email" name="email" size="30" aria-required="true" placeholder="enter your email address">
                                        </div>
                                    </div>
                                    <div class="wrap form-group">
                                        <div class="comment-form-tel">
                                            <label for="nmber">Phone number <span class="required">*</span></label>
                                            <input type="tel" id="number" name="tel" placeholder="Phone number" size="30">
                                        </div>
                                        <div class="comment-form-url">
                                            <label for="url">Website <span class="text-light">(Optional)</span></label>
                                            <input type="text" id="url" name="url" size="30" value="">
                                        </div>
                                    </div>
                                    <div class="comment-form-comment">
                                        <label for="comment">Message * <span class="required">*</span></label>
                                        <textarea id="comment" name="comment" rows="3" cols="72" aria-required="true" placeholder="Write your message here"></textarea>
                                    </div>
                                    <p class="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a
                                            href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
                                            &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
                                            datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
                                            &lt;strong&gt; </code></p>
                                    <div class="form-submit">
                                        <input type="submit" name="submit" id="submit" value="Leave a comment">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </div>
                                </form>
                            </section>
                            <!-- Comment respond of the page end -->
                        </div>
                        <aside class="col-xs-12 col-md-4 pull-right">
                            <!-- Widget of the page -->
                            <section class="widget profile-widget version-ii wow fadeInUp" data-wow-delay="0.6s">
                                <div class="profile-pic">
                                    <a href="#">
                                        <img src="/images/blog/img11.jpg" alt="John Aston">
                                    </a>
                                </div>
                                <h3><a href="#"><img src="/images/blog/text-jhon-aston.png" alt="jhon aston"></a></h3>
                                <p>Hi, I'm Pan Meng. I'm in Beijing, China. I'm glad you saw my blog.</p>
                                <!-- Social Network of the page -->
                                <ul class="social-networks">
                                    <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                    <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                                </ul>
                                <!-- Social Network of the page end -->
                            </section>
                            <!-- Widget of the page end -->
                            <!-- Widget of the page -->
                            <div class="widget tel-widget version-ii contact-widget wow fadeInUp" data-wow-delay="0.6s">
                                <p>
                                    <a href="mailto:pmm_email@126.com"><span class="ico-card icon"></span>pmm_email@126.com</a>
                                    <br>
                                    <a href="tel:+0034524325"><span class="ico-mobile icon"></span>+86-13552755295</a>
                                </p>
                            </div>
                            <!-- Widget of the page end -->
                        </aside>
                    </div>
                </div>
            </div>
            <!-- Contact Sec of the page end -->
        </main>
@endsection