@extends("layout.index")

@section("title")

<title>Tài khoản</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('settings.layout.header')
            <!--    End header  -->
             <!--    Main      -->
             <div>
                <div class="_2ylm">
                    <div>
                        <div class="_2AsN">
                            <div class="_1BN0">
                                <div class="_2AsN">
                                    <div class="oTaE">
                                        <div class="LB4I">
                                            @include('settings.layout.sideBarLeft')
                                            <div class="_3fS2 o-cw _287O _1Ary">
                                                <div class="_1S3-">
                                                    <div class="_3AQP">
                                                        <div>
                                                            <form action="" enctype="multipart/form-data">
                                                                <fieldset class="_33IL">
                                                                    <legend class="wqjZ">Thiết lập tài khoản</legend>
                                                                    <div class="oTaE">
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 o-cw">
                                                                                <label class="_2vFQ">Ảnh cá nhân</label>
                                                                                <div class="_3yxU">
                                                                                    <div>
                                                                                       <div class="_3CNs">
                                                                                            <div class="_1vBK">
                                                                                                <div class="_2IY9">
                                                                                                    <img class="img" src="src/img/unnamed.png" alt="">
                                                                                                </div>
                                                                                                <div class="ZU-i">
                                                                                                    <span>Kéo ảnh vào đây</span>
                                                                                                </div>
                                                                                                <input class="inputimg" accept="image/*" name="hinh" type="file">
                                                                                            </div>
                                                                                       </div> 
                                                                                    </div>
                                                                                    <div>
                                                                                        <button class="egUi uploadAvatar _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="12" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M3.935 12h6L10 7h4L7 0 0 7h4l-.065 5zM0 14h14v2H0v-2z"></path></g></svg>
                                                                                            </span>
                                                                                            <span class="A4xM">Tải Ảnh đại diện</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button" class="egUi removeInverse _3SdL DfeI ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="12" height="16" viewBox="0 0 12 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M1 14.222C1 15.2 1.75 16 2.667 16h6.666C10.25 16 11 15.2 11 14.222V3.556H1v10.666zM12 1H9l-.857-1H3.857L3 1H0v1.667h12V1z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="firstname" class="_1Baa inline IhHS">Tên</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="firstname" type="text" id="firstname" placeholder="Tên" name="firstname">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="lastname" class="_1Baa inline IhHS">Họ</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="lastname" type="text" id="lastname" placeholder="Họ" name="lastname">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV">
                                                                                    <div class="BVod">
                                                                                        <label for="gender" class="_1Baa inline">
                                                                                            Giới tính
                                                                                            (tùy chọn)
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="_3Iet">
                                                                                        <div class="_2ieP">
                                                                                            <div class="Select-control">
                                                                                                <select name="gender">
                                                                                                    <option value="" disabled selected>Giới Tính</option>
                                                                                                    <option value="nam">Nam</option>
                                                                                                    <option value="nữ">Nữ</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                              
                                                                            </div>
                                                                            <div class="_3fS2 o-cw _1ubS">
                                                                                <div class="iLEV">
                                                                                    <div class="BVod">
                                                                                        <label for="birth_date" class="_1Baa inline">
                                                                                            Ngày sinh
                                                                                            (tùy chọn)
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="_3Iet _31bC">
                                                                                        <div class="_2ieP">
                                                                                            <div class="VvaX">
                                                                                                <div class="_8u65">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select disabled class="day" name="day" id="day">
                                                                                                                    <option value="">Chọn ngày</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="_1nm3">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select disabled class="month" name="month" id="month">
                                                                                                                   <option value="">Chọn tháng</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="APyj">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select class="year" name="year" id="year">

                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 o-cw _1ubS">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="email" class="_1Baa inline IhHS">Địa chỉ e-mail</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="email" type="email" name="email" placeholder="Địa chỉ e-mail" id="email" value="tuan.nh201612@gmail.com">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <div>
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 o-cw _1ubS">
                                                                            <button class="_3SdL _2_oj" disabled type="submit">Cập nhật cài đặt của tôi</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div>
                                                            <hr>
                                                            <div>
                                                                <a href="" class="_3WuR _1gOp ">Xóa tài khoản</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @include('settings.layout.footer')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--    End main    -->
        </div>
    </div>

    
@endsection

@section("script")

<script src="src/js/settings/account.js"></script>

@endsection