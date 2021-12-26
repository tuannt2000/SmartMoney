@extends("layout.index")

@section("title")

<title>Ngân sách</title>

@endsection

@section("content")
<div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.header')
            <!--    End header  -->
            <!--    Main      -->
            @if (session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
            @endif
            <div>
                <div class="_2ylm">
                    <div class="_2AsN">
                        <section>
                            <h2>Ngân sách</h2>
                            <div class="oTaE">
                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                    <div class="_3fS2 o-cw" style="padding: 0.5rem;">
                                        <div class="oTaE">
                                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                                @foreach ($budgets as $index=>$value)
                                                <div class="_3fS2 o-cw _1ubS _1B3o" style="padding: 0.5rem;">
                                                    <a href="budgetsDetail/{{$value->id}}" class="_1MqG ">
                                                        <div draggable="true">
                                                            <article class="_2Ku2">
                                                                <h3 class="_3ow9">{{$value->title}}</h3>
                                                                <span class="vBKU">Tất cả các ví</span>
                                                                <span class="_3JW3">
                                                                    @if (number_format((float)($value->amount + $sums[$index]), 2, '.', '') >= 0)
                                                                    <span>
                                                                        <span class="_2djs _2UNd">{{number_format((float)($value->amount + $sums[$index]), 2, '.', '')}} VND</span> 
                                                                        left
                                                                    </span>
                                                                    @else
                                                                    <span>
                                                                        <span class="_2djs _2UNd" style="color: #fe6b5c;">{{abs(number_format((float)($value->amount + $sums[$index]), 2, '.', ''))}} VND</span> 
                                                                        overspent
                                                                    </span>
                                                                    @endif
                                                                </span>
                                                                <span class="_2f--">From {{$value->amount}} VND</span>
                                                                <div class="s0y4 _15eb">
                                                                    <div class="wW2c _15eb">
                                                                        @if (round(abs($sums[$index])*100/$value->amount,1) < 70)
                                                                        <div class="_3ugj" style="width: {{round(abs($sums[$index])*100/$value->amount,1)}}%;">
                                                                            <span class="wD7J">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        </div>
                                                                        <span class="wD7J lz4G _15eb">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        @elseif(round(abs($sums[$index])*100/$value->amount,1) < 85)
                                                                        <div class="_3ugj" style="width: {{round(abs($sums[$index])*100/$value->amount,1)}}%;background: #fac35f;">
                                                                            <span class="wD7J">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        </div>
                                                                        <span class="wD7J lz4G _15eb">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        @elseif(round(abs($sums[$index])*100/$value->amount,1) < 95)
                                                                        <div class="_3ugj" style="width: {{round(abs($sums[$index])*100/$value->amount,1)}}%;background: #f9973f;">
                                                                            <span class="wD7J">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        </div>
                                                                        <span class="wD7J lz4G _15eb">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        @else
                                                                        <div class="_3ugj" style="width: {{round(abs($sums[$index])*100/$value->amount,1)}}%;background: #fe6b5c;">
                                                                            <span class="wD7J">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        </div>
                                                                        <span class="wD7J lz4G _15eb">{{round(abs($sums[$index])*100/$value->amount,1)}}%</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="nKyy">
                                                                        <span>{{$value->start_date}}</span>
                                                                        <span>{{$value->end_date}}</span>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </a>
                                                </div>  
                                                @endforeach
                                                <div class="_3fS2 o-cw _1ubS _1B3o" style="padding: 0.5rem;">
                                                    <div class="_3wsj _3GOa">
                                                        <p>Take control of your expenses and save more money with budgets!</p>
                                                        <button class="_3SdL _2_oj ">Create a New Budget</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!--    End main    -->
        </div>
    </div>

    <div class="ReactModalPortal">
        <div class="ReactModal__Overlay">
            <div class="ReactModal__Content ReactModal__Content--after-open _2RxW otWy" style="z-index: 1000;">
                <div class="_3EUw">
                    <form action="wallet/{{$wallet->id}}/budgets/create" method="post">
                    {{csrf_field()}}

                        <article class="_2ZwS _3U03 _2VOV">
                            <div class="_36Dk">
                                <button type="button" class="egUi B8bm ">
                                    <span class="_2nf9">
                                        <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="import-step-1" transform="translate(-1252.000000, -166.000000)" fill="currentColor"><g id="import-dialog" transform="translate(420.000000, 158.000000)"><g transform="translate(824.000000, 0.000000)"><path d="M13,13 L8.00684547,13 C7.44994876,13 7,13.4477153 7,14 C7,14.5561352 7.45078007,15 8.00684547,15 L13,15 L13,19.9931545 C13,20.5500512 13.4477153,21 14,21 C14.5561352,21 15,20.5492199 15,19.9931545 L15,15 L19.9931545,15 C20.5500512,15 21,14.5522847 21,14 C21,13.4438648 20.5492199,13 19.9931545,13 L15,13 L15,8.00684547 C15,7.44994876 14.5522847,7 14,7 C13.4438648,7 13,7.45078007 13,8.00684547 L13,13 Z" id="Combined-Shape" transform="translate(14.000000, 14.000000) rotate(45.000000) translate(-14.000000, -14.000000) "></path></g></g></g></g></svg>
                                    </span>
                                </button>
                            </div>
                            <h1 class="_1Fvn _2VOV">Add New Budget</h1>
                            <div class="_13pY">
                                <div class="j4fJ">
                                    <div class="_2BJz">
                                        <h3 class="_1Zok">
                                            <svg width="22" height="24" viewBox="0 0 22 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M21.0008858,15.6980755 C21.9053995,17.8455386 21.7793607,20.1236358 20.6659057,21.7918854 C19.7297138,23.1948679 18.1842221,24 16.4264191,24 L10.7998317,24 L5.17391843,24 C3.41544139,24 1.86994968,23.1948679 0.93443181,21.7918854 C-0.179697185,20.1236358 -0.305061972,17.8455386 0.598777703,15.6980755 C2.17122958,11.9643422 4.75670981,8.45188703 7.31118585,6.53703241 L7.29770576,6.51637091 L6.76928644,5.68257936 C6.57989125,5.37665584 6.39251808,5.08472882 6.21525497,4.8087978 C5.27501906,3.34383071 4.59494879,2.28542864 5.03574756,1.26568358 C5.27636707,0.707823044 5.79265431,0.349912522 6.56843318,0.202616013 C6.70795206,0.175956011 7.77153074,0 8.37746054,0 C8.52641548,0 8.64773624,0.00999750062 8.75827293,0.0306590019 C9.14717337,0.104640507 9.47271742,0.255936016 9.75916922,0.389902524 C9.86094385,0.437224027 9.96069648,0.48387903 10.0624711,0.524535533 C10.2478223,0.599183537 10.4972038,0.653836541 10.7998317,0.690494043 C11.1024596,0.653836541 11.3525152,0.599183537 11.5378664,0.524535533 C11.638967,0.48387903 11.7393936,0.437224027 11.8404943,0.389902524 C12.1276201,0.255936016 12.4524901,0.104640507 12.8420646,0.0306590019 C12.9526013,0.00999750062 13.073248,0 13.222203,0 C13.8281328,0 14.8923854,0.175956011 15.0319043,0.202616013 C15.8076832,0.349912522 16.3239704,0.707823044 16.5645899,1.26568358 C17.0047147,2.28542864 16.3253184,3.34383071 15.3844085,4.8087978 C15.2071454,5.08472882 15.0197722,5.37665584 14.8310511,5.68257936 L14.3026317,6.51637091 L14.2884777,6.53703241 C16.8429537,8.45188703 19.4291079,11.9643422 21.0008858,15.6980755 Z M10.0311057,20.1138162 L11.18043,20.1138162 L11.18043,18.8165189 C12.9188651,18.6407351 13.68333,17.6119784 13.68333,16.3153297 C13.68333,14.7157622 12.4105354,14.5795459 11.18043,14.2759784 L11.18043,12.2080865 C11.7130597,12.3371676 12.2975732,12.5849514 12.7238084,12.9702486 L13.4941841,11.8539243 C12.8551597,11.2701405 12.1419219,10.9198703 11.1837138,10.8147892 L11.18043,9.73543784 L10.0724814,9.73543784 L10.0311057,10.7894919 C8.43518676,10.9529514 7.42706514,11.9590054 7.42706514,13.1388973 C7.42706514,14.7267892 8.77210297,15.2813838 9.99038676,15.5732757 L9.99038676,17.4783568 C9.19833811,17.3388973 8.36294351,16.8368432 7.92554351,16.3814919 L7.16764622,17.5769514 C7.81783541,18.2191135 8.76881919,18.7114378 10.0107462,18.8165189 L10.0311057,20.1138162 Z M8.83383811,13.0584649 C8.83383811,12.5557622 9.31064351,12.2859243 9.96937054,12.1970595 L9.99038676,13.8407351 C9.37566243,13.6480865 8.83383811,13.4878703 8.83383811,13.0584649 Z M12.1563705,16.5170595 C12.1563705,16.9801946 11.9278192,17.4348973 11.18043,17.5801946 L11.1653246,15.5356541 C11.8089462,15.7380324 12.1563705,16.0403027 12.1563705,16.5170595 Z" id="budget-path-1"></path></defs><g id="Budgets" fill="none" fill-rule="evenodd"><g id="Budgets---create" transform="translate(-560 -210)"><g id="New-budget-dialog" transform="translate(420 110)"><g id="general-info" transform="translate(140 100)"><mask id="mask-2" fill="#fff"><use xlink:href="#budget-path-1"></use></mask><use id="Budget" fill="#12C48B" xlink:href="#budget-path-1"></use></g></g></g></g></svg>
                                            General Info
                                        </h3>
                                        <div class="_2wfn">
                                            <div class="_2Gra required _1rNF">
                                                <div class="_2Aam">
                                                    <label class="_1Hry _6bvf">Tên Ngân sách</label>
                                                </div>
                                                <div class="_1DjS required">
                                                    <div class="_3fMh">
                                                        <input class="_U5w" type="text" name="title" value="">
                                                    </div>
                                                    <div>
                                                        <div class="_3kJd hasContent"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2wfn">
                                            <div class="_2Gra required _1rNF">
                                                <div class="_2Aam">
                                                    <label class="_1Hry _6bvf">Số lượng</label>
                                                </div>
                                                <div class="_1DjS required">
                                                    <div class="_3fMh">
                                                        <input class="_U5w" type="number" name="amount" step="0.01" value="">
                                                    </div>
                                                    <div>
                                                        <div class="_3kJd hasContent"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2Gra required _1rNF">
                                                <div class="_2Aam">
                                                    <label class="_1Hry _6bvf">Đơn vị tiền tệ</label>
                                                </div>
                                                <div class="_1DjS required">
                                                    <div class="_3fMh">
                                                        <div class="Select-control">
                                                            <span class="Select-multi-value-wrapper" id="react-select-4--value">
                                                                <div class="Select-value">
                                                                    <span class="Select-value-label" id="react-select-4--value-item">Vietnamese đồng</span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="_1Zok">
                                            <svg width="22" height="24" viewBox="0 0 22 24" xmlns="http://www.w3.org/2000/svg"><g id="Budgets" fill="none" fill-rule="evenodd"><g id="Budgets---create" transform="translate(-560 -401)" fill="#12C48B"><g id="New-budget-dialog" transform="translate(420 110)"><g id="filters" transform="translate(140 291)"><path d="M18.3156383,5.50638899 C20.5763211,5.8726894 22,6.40611579 22,7 L22,9.28447676 C22,9.42204109 21.9433228,9.55352842 21.8433118,9.64798333 L13.1566882,17.8520167 C13.0566772,17.9464716 13,18.0779589 13,18.2155232 L13,21.690983 C13,21.880369 12.8929988,22.0535006 12.7236068,22.1381966 L9.7236068,23.6381966 C9.47661755,23.7616912 9.17628103,23.6615791 9.0527864,23.4145898 C9.01807255,23.3451621 9,23.2686056 9,23.190983 L9,18.2155232 C9,18.0779589 8.94332285,17.9464716 8.84331177,17.8520167 L0.156688234,9.64798333 C0.0566771509,9.55352842 -1.83911081e-14,9.42204109 -1.74305015e-14,9.28447676 L0,7 C0,6.00350764 4.00826495,5.17722992 9.25329997,5.02507497 C9.59539948,4.41347271 10.2494139,4 11,4 C11.7505861,4 12.4046005,4.41347271 12.7467,5.02507497 C13.6652512,5.05172153 14.545871,5.09904324 15.3736733,5.16433357 C15.1384691,4.83638624 15,4.43436372 15,4 C15,2.8954305 15.8954305,2 17,2 C18.1045695,2 19,2.8954305 19,4 C19,4.600827 18.7350617,5.13977436 18.3156383,5.50638899 Z M9.00022041,6.02999872 C4.43562995,6.16896705 1,6.77430095 1,7.5 C1,8.32842712 5.4771525,9 11,9 C16.5228475,9 21,8.32842712 21,7.5 C21,6.77430095 17.56437,6.16896705 12.9997796,6.02999872 C12.9837421,7.12073654 12.0945526,8 11,8 C9.90544745,8 9.01625788,7.12073654 9.00022041,6.02999872 Z M6,4 C4.8954305,4 4,3.1045695 4,2 C4,0.8954305 4.8954305,0 6,0 C7.1045695,0 8,0.8954305 8,2 C8,3.1045695 7.1045695,4 6,4 Z" id="Filter"></path></g></g></g></g></svg>
                                            Budget Filter
                                        </h3>
                                        <div class="_2wfn">
                                            <div class="_2Gra required _1rNF">
                                                <div class="_2Aam">
                                                    <label class="_1Hry _6bvf">Budgeted for</label>
                                                </div>
                                                <div class="_1DjS required">
                                                    <div class="_3fMh">
                                                        <div class="Select-control">
                                                            <span class="Select-multi-value-wrapper" id="react-select-5--value">
                                                                <div class="Select-value">
                                                                    <span class="Select-value-label" id="react-select-5--value-0">
                                                                        <div class="_8Sy_" style="margin-left: -3px;">
                                                                            <div class="_3q8K">
                                                                                <span class="w0QU _3FJM" style="background-color: rgb(123, 147, 164); color: rgb(255, 255, 255);">
                                                                                    <span>{{count($outcome)}}</span>
                                                                                </span>
                                                                            </div>
                                                                            <span class="_3UJt">
                                                                                <span class="_3rmc">
                                                                                    <span>Tất cả các danh mục</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="Select-input" style="border: 0px; width: 1px; display: inline-block;"></div>
                                                            </span>
                                                            <span class="Select-arrow-zone">
                                                                <span class="Select-arrow"></span>
                                                            </span>
                                                        </div>
                                                        <div class="Select-menu-outer-wrapper">
                                                            <div class="all">
                                                                <label class="allCategory">
                                                                    <input id="keepAdding" name="keepAdding" type="checkbox" value="false" checked>
                                                                    <span class="_1yjd">
                                                                        <span class="_3Go8"></span>
                                                                    </span>
                                                                    Tất cả các danh mục
                                                                </label>
                                                            </div>
                                                            <div class="listCategory">
                                                                @foreach ($outcome as $index=>$value)
                                                                <div class="childcategory">
                                                                    <label class="Category">
                                                                        <input id="keepAdding" name="category_id[]" type="checkbox" value="{{$value->id}}" checked>
                                                                        <span class="_1yjd">
                                                                            <span class="_3Go8"></span>
                                                                        </span>
                                                                        <span class="_3-9b _1Oob" style="background-color: {{$value->color}}">
                                                                            <img alt="{{$value->title}}" src="{{$value->icon}}">
                                                                        </span>
                                                                        <span class="KKUC">{{$value->title}}</span>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_2axu">
                                <button class="_3WuR _3SdL _2_oj" type="submit" disabled="">Tạo Ngân sách</button>
                            </div>
                        </article>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")

<script src="src/js/wallet/budgets.js"></script>

@endsection