@php
    $tabs = [];
    $quantity = min((int) $shortcode->quantity, 20);

    if ($quantity) {
        for ($i = 1; $i <= $quantity; $i++) {
            $tabs[] = [
                'title' => $shortcode->{'title_' . $i},
                'image' => $shortcode->{'image_' . $i},
                'description' => $shortcode->{'description_' . $i},
                'primary_button_text' => $shortcode->{'primary_button_text_' . $i},
                'primary_slider_button_url' => $shortcode->{'primary_slider_button_url_' . $i},
                'secondary_button_text' => $shortcode->{'secondary_button_text_' . $i},
                'secondary_slider_button_url' => $shortcode->{'secondary_slider_button_url_' . $i},
            ];
        }
    }
@endphp

@foreach ($tabs as $tag)
    <div class="single-banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">{{ $tag['title'] }}</span>
                        <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">{!! $tag['description'] !!}</h1>
                        <ul>
                            @if ($tag['primary_slider_button_url'] && $tag['primary_button_text'])
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="{{ url($tag['primary_slider_button_url']) }}" title="{{ $tag['primary_button_text'] }}">{{ $tag['primary_button_text'] }}</a>
                                </li>
                            @endif
                            @if ($tag['secondary_slider_button_url'] && $tag['secondary_button_text'])
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="{{ url($tag['secondary_slider_button_url']) }}" title="{{ $tag['secondary_button_text'] }}">{{ $tag['secondary_button_text'] }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background Video Section -->
        <!-- <div class="banner-bg" style="position: relative; z-index: 9999;">
            <video autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                <source src="{{ asset('bg-hero.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="banner-overly" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 9998;"></div> -->
    </div>
@endforeach

