@extends("layout.index")

@section("title")

<title>Cài đặt</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.Header')
            <!--    End header  -->
            <!--    Main      -->
            <div>
                <div class="_2ylm">
                    <div class="_2AsN">
                        <div class="_1BN0">
                            <div class="_2AsN">
                                <div class="oTaE">
                                    <div class="LB4I">
                                        <!-- sidebar -->
                                        @include('wallet.settings.layout.sidebar')
                                        <!-- end sidebar -->
                                        <div class="_3fS2 o-cw _287O _1Ary" style="padding: 0.5rem;">
                                            <!-- main content -->
                                            <div class="_1S3-">
                                                <div class="_3AQP">
                                                    <div>
                                                        <form action="" enctype="multipart/form-data">
                                                            <fieldset class="_33IL">
                                                                <legend class="wqjZ">Thông tin chung</legend>
                                                                <div class="oTaE">
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 _1SIO">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="wallet_name" class="_1Baa inline IhHS">Tên Ví</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="firstname" type="text" id="wallet_name" placeholder="Tên Ví" name="wallet_name">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 o-cw _1ubS">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="balance" class="_1Baa inline IhHS">Khởi tạo số dư</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="balance" type="number" name="balance" placeholder="Số tiền" id="balance" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_3fS2 _1SIO">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="currency" class="_1Baa inline IhHS">Đơn vị tiền</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="currency" type="text" disabled placeholder="VND"  id ="currency" name="currency">
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
                                                                        <button class="_3SdL _2_oj" disabled type="submit">Cập nhật cài đặt </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <fieldset class="_33IL">
                                                                <legend class="wqjZ">Ví thành viên</legend>
                                                                <div class="oTaE">
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 _1SIO">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="walletInviteNewMemberForm" class="_1Baa inline IhHS">Thêm ví thành viên</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="firstname" type="text" id="walletInviteNewMemberForm" placeholder="Mời ví thành viên qua Email" name="walletInviteNewMemberForm">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div>
                                                        <hr>
                                                        <div>
                                                            <a href="" class="_3WuR _1gOp ">Xóa Ví</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end main content -->
                                            <!-- footer -->
                                            @include('wallet.settings.layout.footer')
                                            <!-- end footer -->
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

<script src="src/js/wallet/settings/general.js"></script>

@endsection