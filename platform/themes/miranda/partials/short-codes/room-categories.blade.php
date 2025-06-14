<section
    class="room-type-section pt-115 pb-115"
    style="background-image: url({{ RvMedia::getImageUrl($background_image) }});"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title text-lg-left text-center">
                    <span class="title-tag">{!! BaseHelper::clean($title) !!}</span>
                    <h2>{!! BaseHelper::clean($sub_title ?: $subtitle) !!}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <ul
                    class="room-filter nav nav-pills justify-content-center justify-content-lg-end"
                    id="room-tab"
                    role="tablist"
                >
                    @foreach ($categories as $category)
                        <li class="nav-item" role="tab">
                            <a
                                class="nav-link @if ($loop->first) active @endif"
                                id="{{ Str::slug($category->name) }}-tab"
                                data-toggle="pill"
                                href="#{{ Str::slug($category->name) }}"
                            >
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div
            class="tab-content mt-65"
            id="room-tabContent"
        >
            @foreach ($categories as $index => $category)
                <div
                    class="tab-pane fade @if ($index == 0) show active @endif"
                    id="{{ Str::slug($category->name) }}"
                    role="tabpanel"
                >
                    @php
                        $roomsCount = $category->rooms->count();
                    @endphp
                    <div class="room-items">
                        <div class="row">
                            <div @class(['col-lg-8' => $roomsCount > 2, 'col-lg-6' => $roomsCount > 1, 'col-lg-12' => $roomsCount == 1])>
                                <div class="row">
                                    @if ($roomsCount)
                                        <div class="col-12">
                                            <div class="room-box extra-wide">
                                                <div
                                                    class="room-bg"
                                                    style="background-image: url({{ RvMedia::getImageUrl($category->rooms[0]->image, '775x280') }});"
                                                ></div>
                                                <div class="room-content">
                                                    <span class="room-count"><i
                                                            class="fal fa-th"></i>{{ $category->rooms[0]->number_of_rooms }}
                                                        {{ __('room(s)') }}</span>
                                                    <h3><a
                                                            href="{{ $category->rooms[0]->url }}">{{ $category->rooms[0]->name }}</a>
                                                    </h3>
                                                </div>
                                                <a
                                                    class="room-link"
                                                    href="{{ $category->rooms[0]->url }}"
                                                ><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($roomsCount > 2)
                                        <div @class(['col-lg-6' => $roomsCount > 3, 'col-lg-12' => $roomsCount <= 3])>
                                            <div class="room-box">
                                                <div
                                                    class="room-bg"
                                                    style="background-image: url({{ RvMedia::getImageUrl($category->rooms[2]->image, '380x280') }});"
                                                >
                                                </div>
                                                <div class="room-content">
                                                    <span class="room-count"><i
                                                            class="fal fa-th"></i>{{ $category->rooms[2]->number_of_rooms }}
                                                        {{ __('room(s)') }}</span>
                                                    <h3><a
                                                            href="{{ $category->rooms[2]->url }}">{{ $category->rooms[2]->name }}</a>
                                                    </h3>
                                                </div>
                                                <a
                                                    class="room-link"
                                                    href="{{ $category->rooms[2]->url }}"
                                                ><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($roomsCount > 3)
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="room-box">
                                                <div
                                                    class="room-bg"
                                                    style="background-image: url({{ RvMedia::getImageUrl($category->rooms[3]->image, '380x280') }});"
                                                >
                                                </div>
                                                <div class="room-content">
                                                    <span class="room-count"><i
                                                            class="fal fa-th"></i>{{ $category->rooms[3]->number_of_rooms }}
                                                        {{ __('room(s)') }}</span>
                                                    <h3><a
                                                            href="{{ $category->rooms[3]->url }}">{{ $category->rooms[3]->name }}</a>
                                                    </h3>
                                                </div>
                                                <a
                                                    class="room-link"
                                                    href="{{ $category->rooms[3]->url }}"
                                                ><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div @class(['col-lg-4' => $roomsCount > 2, 'col-lg-6' => $roomsCount <= 2])>
                                @if ($roomsCount > 1)
                                    <div @class(['room-box', 'extra-height' => $roomsCount > 2])>
                                        <div
                                            class="room-bg"
                                            style="background-image: url({{ RvMedia::getImageUrl($category->rooms[1]->image, '380x575') }});"
                                        >
                                        </div>
                                        <div class="room-content">
                                            <span class="room-count"><i
                                                    class="fal fa-th"></i>{{ $category->rooms[1]->number_of_rooms }}
                                                {{ __('room(s)') }}</span>
                                            <h3><a
                                                    href="{{ $category->rooms[1]->url }}">{{ $category->rooms[1]->name }}</a>
                                            </h3>
                                        </div>
                                        <a
                                            class="room-link"
                                            href="{{ $category->rooms[1]->url }}"
                                        ><i class="fal fa-arrow-right"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
