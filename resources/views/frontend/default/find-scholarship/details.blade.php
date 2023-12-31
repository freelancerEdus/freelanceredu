@extends('frontend.default.layouts.app')

@section('meta_title'){{ $scholarship->meta_title }}@stop

@section('meta_description'){{ $scholarship->meta_description }}@stop

@section('meta_keywords'){{ $scholarship->meta_keywords }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $scholarship->meta_title }}">
    <meta itemprop="description" content="{{ $scholarship->meta_description }}">
    <meta itemprop="image" content="{{ custom_asset($scholarship->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $scholarship->meta_title }}">
    <meta name="twitter:description" content="{{ $scholarship->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ custom_asset($scholarship->meta_img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $scholarship->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('scholarship', $scholarship->slug) }}" />
    <meta property="og:image" content="{{ custom_asset($scholarship->meta_img) }}" />
    <meta property="og:description" content="{{ $scholarship->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endsection

@section('content')

<section class="py-4">
    <div class="container">
        <div class="mb-4">
            <img
                src="{{ custom_asset($scholarship->banner) }}"
                alt="{{ $scholarship->title }}"
                class="img-fluid lazyload w-100"
            >
        </div>
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="bg-white rounded-2 border-1 border-gray-light p-4">
                    <div class="border-bottom">
                        <h1 class="h4">
                            {{ $scholarship->title }}
                        </h1>

                        @if($scholarship->category != null)
                        <div class="mb-2 opacity-50">
                            <i>{{ $scholarship->category->category_name }}</i>
                        </div>
                        @endif
                    </div>
                    <div class="mb-4 overflow-hidden">
                        {!! $scholarship->description !!}
                    </div>

                    <div class="row no-gutters my-4">
                        <div class="col-sm-2">
                            <div class="opacity-50 my-2">{{ translate('Share') }}:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="aiz-share"></div>
                        </div>
                    </div>

                    @if (get_setting('fb_comment_activation_checkbox') == 1)
                    <div>
                        <div class="fb-comments" data-href="{{ route("scholarship",$scholarship->slug) }}" data-width="" data-numposts="5"></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('script')
    @if (get_setting('fb_comment_activation_checkbox') == 1)
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId={{ env('FACEBOOK_COMMENT_APP_ID') }}&autoLogAppEvents=1" nonce="ji6tXwgZ"></script>
    @endif
@endsection
