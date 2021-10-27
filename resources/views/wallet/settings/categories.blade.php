@extends("layout.index")

@section("title")

<title>Cài đặt danh mục</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.header')
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
                                                        <fieldset class="_33IL _3TLW">
                                                            <legend class="wqjZ">
                                                                <span class="_3RzU">Tạo một danh mục mới</span>
                                                            </legend>
                                                            <div>
                                                                <div class="_2XTe"></div>
                                                                <div class="_33BO">
                                                                    <div class="_3PIU _3RzU">
                                                                        <form action="">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I _2N9Y" style="margin: 0px -0.25rem;">
                                                                                    <div class="_3fS2 o-cw _1B3o" style="padding: 0rem 0.25rem 0.5rem;">
                                                                                        <div class="LB4I" style="margin: 0px -0.25rem;">
                                                                                            <div class="_3fS2 _1ubS" style="padding: 0rem 0.25rem;">
                                                                                                <div class="iLEV IhHS">
                                                                                                    <div class="BVod">
                                                                                                        <label for="icon" class="_1Baa inline IhHS">Biểu tượng </label>
                                                                                                    </div>
                                                                                                    <div class="_3Iet IhHS">
                                                                                                        <div class="_2ieP">
                                                                                                            <div>
                                                                                                                <div class="_10jr">
                                                                                                                    <div class="_1BZ3">
                                                                                                                        <button type="button" class="_2s9x">
                                                                                                                            <span class="_3-9b _2_Bp" style="background-color: rgb(123, 147, 164);">
                                                                                                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8,0H6.74A7.94,7.94,0,0,0,5.07.55l.37.93A7,7,0,0,1,8,1V0ZM3.32,1.51A8,8,0,0,0,1.56,3.26H1.45l0,0H1.37l-.1.16.84.54a7,7,0,0,1,1.8-1.9l-.59-.81Zm-2.91,4A8,8,0,0,0,0,7.18H0v0H0v0H0v0H0v.05H0v0H0v0H0q0,.12,0,.24H0v.05l1-.05Q1,8.19,1,8a7,7,0,0,1,.36-2.21L.41,5.48Zm.91,4.62-1,.3h0a8,8,0,0,0,1,2h.16l0,.06h0l.15.19.78-.63a7,7,0,0,1-1.23-2.3Zm2.49,3.51-.6.8a8,8,0,0,0,.82.54H4l.11.06h0l.12.06h0l.1.05h0a7.94,7.94,0,0,0,1.41.53l.26-1a6.94,6.94,0,0,1-2.34-1.15Zm6.64,1A7,7,0,0,1,8,15H7.88l0,1h.91a8,8,0,0,0,1.86-.41h.16l-.35-.94Zm3.37-2.68A7,7,0,0,1,12,13.75l.57.82h.06l.08-.06H13a8,8,0,0,0,1.57-1.7h.06l-.83-.56ZM16,7.7l-1,0q0,.13,0,.26a7,7,0,0,1-.39,2.32l.94.33A8,8,0,0,0,16,8.76h0v0h0v0h0v0h0v0h0v0h0s0-.09,0-.14ZM14.31,3.08l-.79.62A7,7,0,0,1,14.72,6l1-.28h0v0h0a8,8,0,0,0-.52-1.21h0l0,0h0L15,4.12h0l0-.08h0l0-.08h0a8,8,0,0,0-.49-.7ZM10.24.32l-.28,1a7,7,0,0,1,2.32,1.19l.61-.79,0,0h-.05l0,0h-.12l-.05,0h-.05A8,8,0,0,0,10.24.32ZM8,0V1h.24l0-1H8Z"></path></svg>
                                                                                                                            </span>
                                                                                                                        </button>
                                                                                                                        <span class="_24dr">
                                                                                                                            <span class="_1lxA"></span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_3fS2 _1ubS" style="padding: 0rem 0.25rem;">
                                                                                                <div class="iLEV IhHS">
                                                                                                    <div class="BVod">
                                                                                                        <label for="color" class="_1Baa inline IhHS">Màu sắc </label>
                                                                                                    </div>
                                                                                                    <div class="_3Iet IhHS">
                                                                                                        <div class="_2ieP">
                                                                                                            <div>
                                                                                                                <div class="_10jr">
                                                                                                                    <div class="_1BZ3">
                                                                                                                        <button type="button" class="_2s9x">
                                                                                                                            <span style="color: rgb(123, 147, 164);">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" style="display: block;"><path fill="#7b93a4" fill-rule="evenodd" d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm0-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></svg>
                                                                                                                            </span>
                                                                                                                        </button>
                                                                                                                        <span class="_24dr">
                                                                                                                            <span class="_1lxA"></span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 o-cw _1Nti" style="padding: 0rem 0.25rem 0.5rem;">
                                                                                        <div class="iLEV IhHS">
                                                                                            <div class="BVod">
                                                                                                <label for="name" class="_1Baa inline IhHS">Tên </label>
                                                                                            </div>
                                                                                            <div class="_3Iet IhHS">
                                                                                                <div class="_2ieP">
                                                                                                    <input class="_1mYU required" id="name" name="name" placeholder="Tên danh mục mới" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 o-cw _5CwE" style="padding: 0rem 0.25rem 0.5rem;">
                                                                                        <div class="iLEV IhHS">
                                                                                            <div class="BVod">
                                                                                                <label for="type" class="_1Baa inline IhHS">Loại </label>
                                                                                            </div>
                                                                                            <div class="_3Iet IhHS">
                                                                                                <div class="_2ieP">
                                                                                                    <div class="Select-control">
                                                                                                        <span class="Select-multi-value-wrapper" id="react-select-ControlSelectselect--value">
                                                                                                            <div class="Select-value">
                                                                                                                <span class="Select-value-label" id="react-select-ControlSelectselect--value-item">
                                                                                                                    <span>Chi phí</span>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </span>
                                                                                                        <span class="Select-arrow-zone">
                                                                                                            <span class="Select-arrow"></span>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <input type="hidden">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 o-cw _1B3o _259J" style="padding: 0rem 0.25rem 0.5rem;">
                                                                                        <button type="submit" disabled="" class="_3SdL _2_oj ">Tạo danh mục</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="UzPn _2pdK" style="top: 30px;">
                                                            <fieldset class="_33IL _2f5h">
                                                                <legend class="wqjZ">Quản lý các danh mục</legend>
                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                    <div class="_3fS2 zmS5" style="padding: 0.5rem;">
                                                                        <div>
                                                                            <button disabled class="_3SdL _3j13 ">Hợp nhất các danh mục</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_3fS2 zmS5" style="padding: 0.5rem;">
                                                                        <div>
                                                                            <button disabled class="_3SdL DfeI ">Xóa các danh mục</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_3fS2 zmS5" style="padding: 0.5rem;">
                                                                        <button class="_3SdL _2_oj ">Tạo một danh mục mới</button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <fieldset class="_33IL">
                                                            <legend class="wqjZ">Các danh mục thu nhập</legend>
                                                            <div class="category1">
                                                                <div draggable="true" class="childcategory">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(24, 178, 114);">
                                                                                            <img alt="Gifts" src="https://api.spendee.com/categories/cat_26.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Gifts</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>0 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div draggable="true" class="childcategory">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(114, 197, 65);">
                                                                                            <img alt="Extra Income" src="https://api.spendee.com/categories/cat_5.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Extra Income</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>1 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div draggable="true" class="childcategory">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(24, 178, 114);">
                                                                                            <img alt="Gifts" src="https://api.spendee.com/categories/cat_26.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Gifts</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>0 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div draggable="true" class="childcategory">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(114, 197, 65);">
                                                                                            <img alt="Extra Income" src="https://api.spendee.com/categories/cat_5.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Extra Income</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>1 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="_33IL">
                                                            <legend class="wqjZ">Các danh mục chi phí</legend>
                                                            <div class="category2">
                                                                <div class="">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(24, 178, 114);">
                                                                                            <img alt="Gifts" src="https://api.spendee.com/categories/cat_26.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Gifts</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>0 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(114, 197, 65);">
                                                                                            <img alt="Extra Income" src="https://api.spendee.com/categories/cat_5.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Extra Income</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>1 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(24, 178, 114);">
                                                                                            <img alt="Gifts" src="https://api.spendee.com/categories/cat_26.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Gifts</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>0 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="jcQj">
                                                                        <div class="_3Vhx">
                                                                            <div class="oTaE">
                                                                                <div class="LB4I" style="margin: 0px -0.5rem;">
                                                                                    <div class="_3fS2 _1Vxc _17rK" style="padding: 0.5rem;">
                                                                                        <div class="_2k7K">
                                                                                            <span class="_17Fo">
                                                                                                <span class="_4Nff"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1Vxc" style="padding: 0.5rem;">
                                                                                        <span class="_3-9b _1Oob" style="background-color: rgb(114, 197, 65);">
                                                                                            <img alt="Extra Income" src="https://api.spendee.com/categories/cat_5.svg">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="_3fS2 _25CJ _2i70" style="padding: 0.5rem;">
                                                                                        <div class="_2ji_">
                                                                                            <div class="_1a7-">
                                                                                                <span class="-ESZ">
                                                                                                    <span class="_1BDz">
                                                                                                        <span class="KKUC">Extra Income</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="_2eNp">
                                                                                                <span class="_2bvF">
                                                                                                    <span>1 giao dịch</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _1SCp" style="padding: 0.5rem;">
                                                                                        <div class="xTNW">
                                                                                            <div class="_3_DJ">
                                                                                                <svg width="14" height="22" viewBox="0 0 14 22" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#BBCDD8" stroke-width="2" d="M11.992 13.049L6.02 19.02 0 13M11.992 6.951L6.02.98 0 7"></path><circle fill="#BBCDD8" cx="6" cy="10" r="2"></circle></g></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI IY3U" style="padding: 0.5rem;">
                                                                                        <button type="button" class="egUi settings _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.113 8.784c.032-.256.057-.512.057-.784s-.025-.528-.057-.784l1.735-1.32a.396.396 0 0 0 .099-.512l-1.645-2.768c-.099-.176-.321-.24-.502-.176l-2.048.8a6.052 6.052 0 0 0-1.39-.784L10.05.336A.398.398 0 0 0 9.647 0h-3.29a.398.398 0 0 0-.403.336l-.313 2.12c-.501.2-.962.472-1.39.784l-2.047-.8a.406.406 0 0 0-.502.176L.057 5.384a.387.387 0 0 0 .099.512l1.735 1.32c-.033.256-.058.52-.058.784s.025.528.058.784l-1.735 1.32a.396.396 0 0 0-.099.512l1.645 2.768c.099.176.32.24.502.176l2.047-.8c.428.32.889.584 1.39.784l.313 2.12a.398.398 0 0 0 .403.336h3.29a.398.398 0 0 0 .403-.336l.312-2.12c.502-.2.962-.472 1.39-.784l2.048.8c.19.072.403 0 .502-.176l1.645-2.768a.396.396 0 0 0-.1-.512l-1.734-1.32zM8.002 10.8c-1.587 0-2.879-1.256-2.879-2.8 0-1.544 1.292-2.8 2.879-2.8S10.88 6.456 10.88 8c0 1.544-1.29 2.8-2.878 2.8z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI" style="padding: 0.5rem;">
                                                                                        <form action="">
                                                                                            <button type="submit" class="_3SdL _3j13 ">
                                                                                                <svg width="18" height="16" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-7.000000, -10.000000)"><g transform="translate(7.000000, 9.000000)"><g><path d="M9,3c3.4,0,6.6,1.9,8.9,5.1C18,8.3,18,8.7,17.9,9C15.6,12.1,12.4,14,9,14 S2.4,12.1,0.1,9C0,8.7,0,8.3,0.1,8.1C2.4,5,5.6,3,9,3z M9,12c1.9,0,3.5-1.6,3.5-3.5S10.9,5,9,5S5.5,6.6,5.5,8.5S7.1,12,9,12z M9,10.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S10.1,10.5,9,10.5z"></path></g></g></g></g></svg>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="_3fS2 _qSI _3wbh" style="padding: 0.5rem;">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2XTe"></div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
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

<script src="src/js/wallet/settings/categories.js"></script>

@endsection