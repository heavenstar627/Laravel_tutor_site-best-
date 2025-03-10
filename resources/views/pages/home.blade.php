@extends('layouts.default')

@section('content')

<!-- ======= Hero Section ======= -->


<div class="main1">
    <div class="complex-search row">
        <div class="col-md-4 col-xs-4">
            <label for="inputSubject">I want to learn...</label>
            <select class="form-control select2 select2-hidden-accessible tutor_major" name="tutor_major" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class="place-holder" value="" selected="selected"> Select a subject... </option>
                @foreach ($subjects as $subject)
                <option style="margin: auto;" value="{!! $subject->major !!}"> {!! $subject->major !!} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 col-xs-4">
            <label>Tutor's Country</label>
            <select class="form-control select2 select2-hidden-accessible tutor_country" name="tutor_country" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option class="place-holder" value="" selected="selected"> Select country... </option>
                @foreach ($countries as $country)
                <option style="margin:auto;" value="{!! $country->country !!}"> {!! $country->country !!} </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label>Tutor's Native Language </span></label>
                <select class="form-control select2 select2-hidden-accessible tutor_language" name="tutor_language" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option class="place-holder" value="" selected="selected"> Select language... </option>
                    @foreach ($languages as $language)
                    <option class="place-holder"  style="margin:auto;" value="{!! $language->language !!}"> {!! $language->language !!} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label>Tutor also speaks...</label>
                <select class="form-control select2 select2-hidden-accessible tutor_also" name="tutor_also" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option class="place-holder" value="" selected="selected"> Also... </option>
                    @foreach ($alsospeaks as $alsospeak)
                    <option style="margin: auto;" value="{!! $alsospeak->language !!}"> {!! $alsospeak->language !!} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <label for="inputPhone" class="label_tuition">Tuition (1$~40$/h)</label>
            <div class="slider_range">
                <input type="text" class="js-range-slider " name="my_range" value="" />
            </div>
        </div>

        <div class="col-md-4 col-xs-4" style="display: flex; justify-content: center; align-items: center;">
            <div class="container-search">
                <div class="input-group">
                    <input type="text" class="form-control" name="tutor_name" id="search">
                    <div>
                        <!-- <span class="input-group-btn"> -->
                        <button class="btn btn-search btn-search" type="button"><i class="fa fa-search fa-fw"></i>
                            Search</button>
                        <!-- </span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container2" id="tutor_results">
        <ul class="profile">
            @foreach ($t_data as $Tutors)
            <li class="tutor row tutor1 tutor_success">
                <div class="photo col-md-2 col-sm-8 col-xs-8">
                    <span class="online_badge"> featured </span>
                    <div class="on_badge"> </div>
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="public\images\{{ $Tutors->id }}.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc"> {{ $Tutors->character }} Tutor</div>
                    </div>
                </div>

                <div class="description col-md-7 col-sm-8">
                    <div class="first-line">
                        <h4 class="Name"> {{ $Tutors->name }}</h4>
                        <img alt="Russia" class="CountryFlagImg___83cde CountryFlagImgEnabled___39BAf" src="https://static.preply.com/images/new/flags-svg/4x3/ru.svg" width="16px" height="12px">
                        <svg class="VerifiedTutorIcon___1Sswo" width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.538 1.76A11.153 11.153 0 0 1 8.026 0a11.21 11.21 0 0 1-2.53 1.76A11.445 11.445 0 0 1 0 2.983c0 1.69.052 3.076.11 4.059.02.635.08 1.269.177 1.897a13.62 13.62 0 0 0 .972 3.133 12.522 12.522 0 0 0 3.726 4.6 13.745 13.745 0 0 0 3.024 1.759 13.739 13.739 0 0 0 3.03-1.788 12.52 12.52 0 0 0 3.725-4.6c.44-.998.759-2.046.949-3.121.097-.629.156-1.262.178-1.897.057-.984.109-2.37.109-4.06-1.892.055-3.77-.36-5.462-1.207v.002zM9.05 11.43l-1.385 1.373L6.29 11.43 3.87 8.992l1.373-1.374 2.42 2.443 3.916-3.915 1.391 1.362-3.92 3.921v.001z" fill="#3BB3BD"></path>
                        </svg>
                    </div>

                    <div class="second-line">
                        <svg class="SubjectsIcon___HZRQn" width="13" height="10" viewBox="129 34 13 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M135.399 34L129 37.2l6.399 3.199 5.235-2.618v4.944h1.163V37.2L135.4 34zm0 7.7l-4.654-2.327v1.3L135.4 43l4.653-2.327v-1.3l-4.653 2.326z" fill="#6F757B" fill-rule="evenodd"></path>
                        </svg>
                        <span class="lang_display"> {{ $Tutors->major }} </span>
                    </div>

                    <div class="third-line">
                        <svg class="ActiveStudentsIcon___3gdmX" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.582 4.834a2.42 2.42 0 0 0 2.417-2.417A2.42 2.42 0 0 0 4.582 0a2.42 2.42 0 0 0-2.417 2.417 2.42 2.42 0 0 0 2.417 2.417zm4.45 4.999a4.456 4.456 0 0 0-4.45-4.423 4.456 4.456 0 0 0-4.45 4.451c0 .077.061.139.138.139h8.627a.139.139 0 0 0 .136-.167z">
                            </path>
                        </svg>
                        <span> 7 active students </span><span class="StatsSeparator____rLk1">·</span>
                        <span class="TotalLessons___nLIm9"> 725 lessons</span>
                        <ul class="lang_sel">
                            <span class="intro"> speaks:</span>
                            <li class="SpeaksItem___28ZUB">{{ $Tutors->native_language }}:Native &nbsp &nbsp
                                {{ $Tutors->also }} (also)<span class="SpeaksLevel___2Fg_I SpeaksLevelGreen___3JBst"></span>
                            </li>

                        </ul>
                    </div>

                    <div class="forth-line">
                        <div>
                            <p><span class="Headline___7WVvy">Hi.</span>&nbsp;
                                <span class="ShortBio___1gIDW">{{ $Tutors->des }}</span>
                            </p>
                            <a class="SeoSnippetViewProfileCTA___2DxQQ" target="_blank" data-clickable-element="true">View full profile<svg class="NewTabArrow___3JMhK" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="#">
                                    <path d="M6 1.75l4.243 4.243m0 0H1.757m8.486 0L6 10.235" stroke="#3BB3BD" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="content col-md-3">
                    <div class="CoreIndicatorsWrap____8r4Z">
                        <div class="CoreIndicatorsItem___1niNK">
                            <div class="RatingIndicator___1x9Q_">
                                <div class="RatingIndicatorRating___374zP"><svg height="23" viewBox="0 0 24 23" width="24" xmlns="http://www.w3.org/2000/svg" class="RatingStarIcon___1RRIx">
                                        <path d="M23.97 8.721a.597.597 0 0 0-.507-.413l-7.744-.822-3.172-7.16c-.192-.435-.903-.435-1.095 0l-3.17 7.16-7.745.822a.601.601 0 0 0-.508.413.606.606 0 0 0 .17.635l5.785 5.248-1.616 7.667a.605.605 0 0 0 .586.729.595.595 0 0 0 .3-.081L12 19.003l6.747 3.916c.204.119.46.105.652-.035a.606.606 0 0 0 .234-.613l-1.616-7.668 5.786-5.248a.606.606 0 0 0 .168-.634z">
                                        </path>
                                    </svg>5</div>
                                <button class="RatingIndicatorText___2oEyE RatingLink___ZkkaE" data-clickable-element="true">
                                    <div class="ReviewsNumber___1enrU">0</div>
                                    <div class="RatingText___hLXRo"> reviews</div>
                                </button>
                            </div>
                        </div>
                        <div class="CoreIndicatorsItem___1niNK">
                            <div class="PriceIndicator___1doEU">
                                <div class="PriceIndicatorPrice___w9jW1">
                                    <div class="">$</div>
                                    <div class="PriceIndicatorValue___1kV4p PriceIndicatorValueSecond___1vI6H" data-qa-group="tutor-price-value">{{ $Tutors->tuition }}</div>
                                </div>
                                <div class="PriceIndicatorDuration___u6cQX">per hour</div>
                            </div>
                        </div>
                    </div>

                    <div class="btns row">
                        <div class="btn_1 col-md-12 "> <a href="/zoom" class="btn btn-primary btn-2">Link Zoom</a>
                        </div>
                        <div class="btn_1 col-md-12 "> <a href="/payment_select" class="btn btn-success btn-2">Make
                                a Payment</a> </div>
                        <div class="btn_1 col-md-12 "> <button type="button" class="btn btn-info btn-2">Timetable</button> </div>
                    </div>
                </div>

            </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {!! $t_data->appends(Request::all())->links() !!}
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        var from = 0,
            to = 40;

        function general_search(major, country, native_lang, also, name, from, to, page) {
            $.ajax({
                url: "/general_search",
                type: 'GET',
                data: {
                    major: major,
                    country: country,
                    native_lang: native_lang,
                    also: also,
                    name: name,
                    from: from,
                    to: to,
                    page: page
                },
                success: function(data) {
                    $("#tutor_results").html(data);
                    $('.page-link').removeAttr('href');
                },
                error: function(response) {
                    console.log(response);
                }
            })
        };

        $('#tutor_results').on('click', '.page-link', function() {
            if (!$(this).hasClass('active')) {
                var major = $('.tutor_major').val();
                var name = $('.tutor_name').val();
                var country = $('.tutor_country').val();
                var native_lang = $('.tutor_lang').val();
                var also = $('.tutor_also').val();
                var tuition = $('.tutor_tuition').val();
                var page = Number($(this).text());

                general_search(major, country, native_lang, also, name, from, to, page);
            }
        });

        $(document).on('keyup', '#search', function() {
            var name = $(this).val();
            var major = $('.tutor_major').val();
            var country = $('.tutor_country').val();
            var native_lang = $('.tutor_lang').val();
            var also = $('.tutor_also').val();
            var tuition = $('.tutor_tuition').val();
            general_search(major, country, native_lang, also, name, from, to, 1);
        });


        $('.tutor_major').on('change', function(e) {
            var name = $('.tutor_name').val();
            var major = $(this).val();
            var country = $('.tutor_country').val();
            var native_lang = $('.tutor_lang').val();
            var also = $('.tutor_also').val();
            var tuition = $('.tutor_tuition').val();
            general_search(major, country, native_lang, also, name, from, to, 1);
        });

        $('.tutor_country').on('change', function(e) {
            var name = $('.tutor_name').val();
            var country = $(this).val();
            var major = $('.tutor_major').val();
            var native_lang = $('.tutor_lang').val();
            var also = $('.tutor_also').val();
            var tuition = $('.tutor_tuition').val();
            general_search(major, country, native_lang, also, name, from, to, 1);
        });

        $('.tutor_language').on('change', function(e) {
            var name = $('.tutor_name').val();
            var native_lang = $(this).val();
            var major = $('.tutor_major').val();
            var country = $('.tutor_country').val();
            var also = $('.tutor_also').val();
            var tuition = $('.tutor_tuition').val();
            general_search(major, country, native_lang, also, name, from, to, 1);
        });


        $('.tutor_also').on('change', function(e) {
            var name = $('.tutor_name').val();
            var also = $(this).val();
            var major = $('.tutor_major').val();
            var native_lang = $('.tutor_lang').val();
            var country = $('.tutor_country').val();
            var tuition = $('.tutor_tuition').val();
            general_search(major, country, native_lang, also, name, from, to, 1);
        });

        $(".js-range-slider").ionRangeSlider({
            type: "double",
            skin: "big",
            min: 0,
            max: 40,
            from: 0,
            to: 40,
            prefix: "$",
            onFinish: function(data) {
                console.log('---------------', data);
                from = data.from;
                to = data.to;
                var name = $('.tutor_name').val();
                var major = $('.tutor_major').val();
                var native_lang = $('.tutor_lang').val();
                var country = $('.tutor_country').val();
                var tuition = $('.tutor_tuition').val();
                var also = $('.tutor_also').val();
                general_search(major, country, native_lang, also, name, from, to, 1);
            },
        });
    });
</script>

@endpush
@endsection