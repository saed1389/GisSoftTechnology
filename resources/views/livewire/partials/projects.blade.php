<div>
    @if($projects->count() > 0)
        <section class="cube-portfolio1 text-center no-transition" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-area mx-570 mb-lg-4 mb-3">
                            <span class="sub-title">Gis Soft Technology</span>
                            {!! __('home.project title') !!}
                            <p class="para">{{ __('home.project description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeIn">
                    <div class="col-md-12">
                        <div class="cbp-l-filters-button" id="js-filters-mosaic-flat">
                            <div class="cbp-filter-item-active cbp-filter-item" data-filter="*">{{ __('home.all') }}</div>
                            <span class="text-blue">/</span>
                            @foreach($categories as $category)
                                <div class="cbp-filter-item" data-filter=".{{ $category->slug }}">{{ app()->getLocale() == 'tr' ? $category->title : $category->title_en }}</div>
                                <span class="text-blue"> / </span>
                            @endforeach
                        </div>
                        <div class="cbp cbp-l-grid-mosaic-flat" id="js-grid-mosaic-flat">
                            @foreach($projects as $project)
                                <div class="cbp-item {{ $project->project->slug }}">
                                    <a class="cbp-caption cbp-lightbox" href="{{ asset($project->image)}}">
                                        <div class="cbp-caption-defaultWrap">
                                            <img alt="port-{{ $loop->index + 1 }}" src="{{ asset($project->image)}}" loading="lazy">
                                        </div>
                                        <div class="cbp-caption-activeWrap"></div>
                                        <div class="cbp-l-caption-alignCenter center-block">
                                            <div class="cbp-l-caption-body">
                                                <div class="plus"></div>
                                                <h5 class="text-white mb-1">Latest Work</h5>
                                                <p class="text-white">See Our Amazing Work</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
