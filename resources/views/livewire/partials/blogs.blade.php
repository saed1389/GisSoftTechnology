<div>
    @if($blogs->count() > 0)
        <section class="bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading-area mx-570 pb-lg-5 mb-5">
                            <span class="sub-title">Gis Soft Technology</span>
                            {!! __('home.blog title') !!}
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="news-item">
                                <img alt="image" class="news-img" src="{{ asset($blog->image) }}">
                                <div class="news-text-box">
                                    <span class="date main-color">
                                        {{ app()->getLocale() == 'tr'
                                            ? \Carbon\Carbon::parse($blog->created_at)->locale('tr')->translatedFormat('d F Y')
                                            : \Carbon\Carbon::parse($blog->created_at)->locale('en')->translatedFormat('F d, Y') }}
                                    </span>
                                    <a href="{{ route('blog.detail', $blog->slug) }}"><h4 class="news-title">{{ app()->getLocale() == 'tr' ? $blog->title : $blog->title_en }}</h4></a>
                                    <p class="para">{!! app()->getLocale() == 'tr' ? \Illuminate\Support\Str::limit($blog->description, 50) : \Illuminate\Support\Str::limit($blog->description_en, 50) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
