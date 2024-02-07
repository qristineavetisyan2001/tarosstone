@extends("layouts.app")

@section("content")
    <div class="title_container">
        <div class="title_content">
            <div class="title">Ստեղծում ենք յուրօրինակը</div>
            <button class="more_button">ավելին</button>
        </div>
    </div>
    <div class="info_statistic_container">
        <div class="info_statistic d-flex">
            <div class="info_statistic_item">
                <div class="info_statistic_item_icon">
                    <img src="{{asset("images/antique-elegant-building-with-columns_1_.png")}}" alt="">
                </div>
                <div class="info_statistic_item_info mt-3">
                    <span class="statistic_number">1995</span>
                    <span class="statistic_title">Հիմնադրման տարին</span>
                </div>
            </div>
            <div class="info_statistic_item">
                <div class="info_statistic_item_icon">
                    <img src="{{asset("images/Path_121_1_.png")}}" alt="">
                </div>
                <div class="info_statistic_item_info mt-3">
                    <span class="statistic_number">414</span>
                    <span class="statistic_title">Ավարտված նախագծեր</span>
                </div>
            </div>
            <div class="info_statistic_item">
                <div class="info_statistic_item_icon">
                    <img src="{{asset("images/Group 427320748.png")}}" alt="">
                </div>
                <div class="info_statistic_item_info mt-3">
                    <span class="statistic_number">37000</span>
                    <span class="statistic_title">քառ. մշակված քար</span>
                </div>
            </div>
            <div class="info_statistic_item">
                <div class="info_statistic_item_icon">
                    <img src="{{asset("images/_18126058801577437001_1_.png")}}" alt="">
                </div>
                <div class="info_statistic_item_info mt-3">
                    <span class="statistic_number">3</span>
                    <span class="statistic_title">Ստացված մրցանակներ</span>
                </div>
            </div>
        </div>
    </div>
@endsection
