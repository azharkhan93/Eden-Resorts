@for ($i = 1; $i <= 5; $i++)
    @if (theme_option('slider-image-' . $i))
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <div class="banner-content text-start">
                        <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">{!! theme_option('slider-description-' . $i) !!}</h1>
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">{{ theme_option('slider-title-' . $i) }}</span>
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="{{ theme_option('slider-primary-button-url-' . $i) }}">{{ theme_option('slider-primary-button-text-' . $i) }}</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="{{ theme_option('slider-secondary-button-url-' . $i) }}">{{ theme_option('slider-secondary-button-text-' . $i) }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div class="banner-bg">
            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="{{ asset('eden.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
            <!-- <div class="banner-bg" style="background-image: url({{ RvMedia::getImageUrl(theme_option('slider-image-' . $i)) }});"></div> -->
            <!-- <div class="banner-overly"></div> -->
        </div>
    @endif
@endfor
