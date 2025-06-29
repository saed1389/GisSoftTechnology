<div>
    <section class="page-title cursor-light">
        <div class="pattern-layers">
            <div class="layer-one"></div>
            <div class="layer-two"></div>
        </div>
        <div class="auto-container">
            <h2 class="hide-cursor">{{ app()->getLocale() == 'tr' ? $blog->title : $blog->title_en }}</h2>
            <ul class="page-breadcrumb link">
                <li><a href="/"><span class="icon fas fa-home"></span> {{ __('home.Home') }}</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li>{{ app()->getLocale() == 'tr' ? $blog->title : $blog->title_en }}</li>
            </ul>
        </div>
    </section>
    <section class="blog-single">
        <h2 class="d-none">hidden</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-classic">
                        <div class="post-thumbnail">
                            <img src="{{ $blog->image }}" alt="{{ app()->getLocale() == 'tr' ? $blog->title : $blog->title_en }}" loading="lazy">
                        </div>
                        <div class="post-details alt-font">

                    <span class="post-categories">
                     <a href="{{ route('category', $blog->category->slug) }}" rel="category tag">{{ app()->getLocale() == 'tr' ? $blog->category->title : $blog->category->title_en }}</a>
                    </span>

                            <span class="post-author">By <a href="javascript:void(0);">Gis Soft Technology</a></span>
                            <span class="post-separator">/</span>
                            <span class="post-date">
                                {{ app()->getLocale() == 'tr'
                                    ? \Carbon\Carbon::parse($blog->created_at)->locale('tr')->translatedFormat('d F Y')
                                    : \Carbon\Carbon::parse($blog->created_at)->locale('en')->translatedFormat('F d, Y') }}
                            </span>
                        </div>
                        <h2 class="post-title"><a href="javascript:void(0);" rel="bookmark">{{ app()->getLocale() == 'tr' ? $blog->title : $blog->title_en }}</a></h2>
                        <div class="post-content">
                            {{ app()->getLocale() == 'tr' ? $blog->discription : $blog->description_en }}
                        </div>
                        <div class="footer-meta">
                            <div class="row">
                                <div class="col-6">
                                    <div class="post-social social-icon-bg">
                                        <ul class="share-icons">
                                            <li><a class="facebook" target="_blank" href="javascript:void(0);" title="Minimal Post With A Preview Image"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter" target="_blank" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="pinterest" target="_blank" href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="agency-widget" id="secondary" role="complementary">
                        <aside class="widget widget_categories">
                            <h3 class="widget-title">{{ __('home.Topics') }}</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li class="cat-item"><a href="{{ route('category', $category->slug) }}">{{ app()->getLocale() == 'tr' ? $category->title : $category->title_en }}</a> <span class="dots"></span></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget latest_post_widget">
                            <h3 class="widget-title">{{ __('home.Popular Post') }}</h3>
                            <ul class="blog-latest-post">
                                @foreach($related_blogs as $related_blog)
                                    <li>
                                        <figure>
                                            <a href="{{ route('blog.detail', $related_blog->slug) }}">
                                                <img width="150" height="150" src="{{ $related_blog->image }}" class="attachment-thumbnail" alt="{{ app()->getLocale() == 'tr' ? $related_blog->title : $related_blog->title_en }}" loading="lazy">
                                            </a>
                                        </figure>
                                        <div class="post-head">
                                            <a class="title" href="javascript:void(0);">{{ app()->getLocale() == 'tr' ? $related_blog->title : $related_blog->title_en }}</a>
                                            <span class="clearfix"></span>{{ app()->getLocale() == 'tr'
                                            ? \Carbon\Carbon::parse($related_blog->created_at)->locale('tr')->translatedFormat('d F Y')
                                            : \Carbon\Carbon::parse($related_blog->created_at)->locale('en')->translatedFormat('F d, Y') }} | by
                                            <a href="javascript:void(0);">Gis Soft Technology</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
