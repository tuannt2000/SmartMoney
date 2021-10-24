@extends("layout.index")

@section("title")

<title>Giao dịch</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.header')
            <!--    End header  -->
            <!--    Main      -->
            <div>
                <div class="UzPn _10vh">
                    <div class="_2AsN">
                        <div class="oTaE">
                            <div class="LB4I panel">
                                <div class="_3fS2 _1GHs">
                                    <div style="position: relative; transition: z-index 0.35s step-end 0s; z-index: 1;">
                                        <button type="button" class="egUi addInverse _3SdL _2_oj _1mpn _3dgm ">
                                            <span class="_2nf9">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.833 9.167V5H9.167v4.167H5v1.666h4.167V15h1.666v-4.167H15V9.167h-4.167zM10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z"></path></svg>
                                            </span>
                                            <span class="A4xM">Thêm giao dịch</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="_3fS2 _1Izi" style="padding: 0.5rem;">
                                    <div>
                                        <a class="_3rfO TFIa ">Xóa (1)</a>
                                    </div>
                                </div>
                                <div class="_3fS2 _1Izi" style="padding: 0.5rem;">
                                    <div>
                                        <a class="_3rfO TFIa ">Sửa (1)</a>
                                    </div>
                                </div>
                                <div class="_3fS2">
                                    <form action="">
                                        <div class="body">
                                            <div class="_6Szy _2pOY">
                                                <svg width="7" height="13" viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg"><g stroke-width="1"><path d="M0.2,13.5l12.5,12.3c0.3,0.3,0.8,0.3,1.1,0c0.3-0.3,0.3-0.8,0-1L1.8,13l12-11.7c0.3-0.3,0.3-0.8,0-1 C13.6,0.1,13.4,0,13.3,0s-0.4,0.1-0.5,0.2L0.2,12.5C-0.1,12.8-0.1,13.2,0.2,13.5z"></path></g></svg>
                                            </div>
                                            <div class="Kevi">
                                                <button type="button" class="A3jv">
                                                    <div class="GK__">
                                                        <span class="Olv6"></span>
                                                        <div role="presentation">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"><path fill="#B1BFC7" fill-rule="evenodd" d="M11 2h1.993C13.55 2 14 2.447 14 2.999V14c0 .552-.45.999-1.007.999H1.007A1.003 1.003 0 0 1 0 14.001V3C0 2.447.45 2 1.007 2H3V.49A.5.5 0 0 1 3.5 0c.276 0 .5.215.5.49V2h6V.49a.5.5 0 0 1 .5-.49c.276 0 .5.215.5.49V2zm0 1v.51a.5.5 0 0 1-.5.49.492.492 0 0 1-.5-.49V3H4v.51a.5.5 0 0 1-.5.49.492.492 0 0 1-.5-.49V3H1.5c-.271 0-.5.222-.5.495v2.01c0 .28.224.495.5.495h11c.271 0 .5-.222.5-.495v-2.01A.494.494 0 0 0 12.5 3H11zM1 7.503v5.994c0 .27.224.503.5.503h11c.271 0 .5-.225.5-.503V7.503A.507.507 0 0 0 12.5 7h-11c-.271 0-.5.225-.5.503zM3 8.5c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 3 8.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 6 8.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 9 8.5zm-6 2c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 3 10.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 6 10.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 9 10.5zm-6 2c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 3 12.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 6 12.5zm3 0c0-.276.214-.5.505-.5h.99c.279 0 .505.232.505.5 0 .276-.214.5-.505.5h-.99A.508.508 0 0 1 9 12.5z"></path></svg>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="_6Szy _2sWB">
                                                <svg width="7" height="13" viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg"><g stroke-width="1"><path d="M13.7840764,12.4816891 L1.28162613,0.216587206 C0.987254795,-0.0721957353 0.51514983,-0.0721957353 0.220778499,0.216587206 C-0.0735928328,0.505370147 -0.0735928328,0.9685126 0.220778499,1.25729554 L12.1900279,12.9993189 L0.220778499,24.7413423 C-0.0735928328,25.0301252 -0.0735928328,25.4932677 0.220778499,25.7820506 C0.365187076,25.9237177 0.559583238,26 0.748425225,26 C0.937267211,26 1.13166337,25.9291664 1.27607195,25.7820506 L13.7785223,13.5169487 C14.0728936,13.2336145 14.0728936,12.7650233 13.7840764,12.4816891 Z"></path></g></svg>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--   Đã có giao dịch   -->
                <div class="_2AsN">
                    <div class="LB4I">
                        <div class="_3fS2 o-cw">
                            <form action="">
                                <div class="oTaE">
                                    <div class="_3wsj ">
                                        <div class="LB4I">
                                            <div class="_3fS2 _1SIO _3Bus">Bộ lọc</div>
                                            <div class="_3fS2 _1SIO _1ZVM">
                                                <a class="_3WuR _1gOp ">Đặt lại bộ lọc</a>
                                            </div>
                                        </div>
                                        <div class="LB4I">
                                            <div class="_3fS2 _2pKn">
                                                <div class="iLEV IhHS">
                                                    <div class="BVod">
                                                        <label for="" class="_1Baa inline IhHS">Theo danh mục</label>
                                                    </div>
                                                    <div class="_3Iet IhHS">
                                                        <div class="_2ieP">
                                                            <div class="Select-control">
                                                                <div class="Select-value">
                                                                    <div class="_8Sy_">
                                                                        <div class="_3q8K">
                                                                            <span class="w0QU _3FJM">
                                                                                <span>3</span>
                                                                            </span>
                                                                        </div>
                                                                        <span class="_3UJt">
                                                                            <span class="_3rmc">
                                                                                <span>Tất cả các danh mục</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <span class="Select-arrow-zone">
                                                                    <span class="Select-arrow"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_3fS2 _2pKn">
                                                <div class="iLEV IhHS">
                                                    <div class="BVod">
                                                        <label for="" class="_1Baa inline IhHS">Theo người</label>
                                                    </div>
                                                    <div class="_3Iet IhHS">
                                                        <div class="_2ieP">
                                                            <div class="Select-control">
                                                                <div class="Select-value">
                                                                    <div class="_8Sy_">
                                                                        <div class="_3q8K">
                                                                            <span class="w0QU _3FJM">
                                                                                <span><img src="src/img/unnamed.png" alt=""></span>
                                                                            </span>
                                                                        </div>
                                                                        <span class="_3UJt">
                                                                            <span class="_3rmc">
                                                                                <span>{{Auth::user()->email}}</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <span class="Select-arrow-zone">
                                                                    <span class="Select-arrow"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_3fS2 _2pKn">
                                                <div class="iLEV IhHS">
                                                    <div class="BVod">
                                                        <label for="" class="_1Baa inline IhHS">Theo ghi chú</label>
                                                    </div>
                                                    <div class="_3Iet IhHS">
                                                        <div class="_2ieP">
                                                            <input class="_1mYU required" id="note" name="note" placeholder="Lọc theo từ khóa đặc trưng" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_3fS2 _2pKn">
                                                <div class="iLEV IhHS">
                                                    <div class="BVod">
                                                        <label for="" class="_1Baa inline IhHS">Theo số tiền</label>
                                                    </div>
                                                    <div class="_3Iet _31bC IhHS">
                                                        <div class="_2ieP">
                                                            <div class="_1HPY">
                                                                <div class="_2Slh">
                                                                    <div class="rc-slider">
                                                                        <div class="rc-slider-rail"></div>
                                                                        <div class="rc-slider-track rc-slider-track-1"></div>
                                                                        <div class="rc-slider-step"></div>
                                                                        <div class="rc-slider-handle rc-slider-handle-1"></div>
                                                                        <div class="rc-slider-handle rc-slider-handle-2"></div>
                                                                        <div class="rc-slider-mark"></div>
                                                                    </div>
                                                                </div>
                                                                <span class="_3rYq">
                                                                    <span class="_261b">-1000000</span>
                                                                    <span class="_3RqA">-150000</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End đã có giao dịch-->

                <div class="_2AsN _3EiL">
                    <div class="oTaE _1n3H">
                        <div class="LB4I _3BdS">
                            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                                <div class="_3wsj _1eTa">
                                    <span class="_1zZy">Số dư Ví hiện tại</span>
                                    <span class="_2Tip _39n0">+10,000,000.00 VND</span>
                                </div>
                            </div>
                            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                                <div class="_3wsj _1eTa">
                                    <span class="_1zZy">Tổng Thay Đổi Theo Kì</span>
                                    <span class="_2Tip _39n0">0.00 VND</span>
                                </div>
                            </div>
                            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                                <div class="_3wsj _1eTa">
                                    <span class="_1zZy">Tổng Chi Phí Theo Kì</span>
                                    <span class="_2Tip _39n0">0.00 VND</span>
                                </div>
                            </div>
                            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                                <div class="_3wsj _1eTa">
                                    <span class="_1zZy">Tổng Thu Nhập Theo Kì</span>
                                    <span class="_2Tip _39n0">0.00 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chưa có giao dịch nào -->
                <!-- <div class="_2AsN">
                    <div class="_2jqr">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="194" height="148" viewBox="0 0 194 148"><defs><filter id="empty-wallet-a" width="100%" height="100%" x="0%" y="0%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceGraphic"></feGaussianBlur></filter><path id="empty-wallet-b" d="M15 10c0-2.21 1.796-4.122 3.99-4.271L97.01.426C99.214.276 101 1.952 101 4.163v37.829A4.008 4.008 0 0 1 96.996 46H19.004A4.006 4.006 0 0 1 15 42V10z"></path><path id="empty-wallet-c" d="M92.628 40.061c.534-.818 1.362-1.454 2.288-1.666l10.168-2.321c1.61-.368 2.916.676 2.916 2.331v9.003c0 1.104-1.31 2.299-2.916 2.666l-3.16.721a6.984 6.984 0 0 1-5.918 3.266h-9.012c-3.862 0-6.994-3.142-6.994-7 0-3.866 3.126-7 6.994-7h5.634z"></path><path id="empty-wallet-d" d="M15 24.7V9c0 1.55 1.778 2.954 3.983 3.14l82.034 6.882c2.2.184 3.983 2.132 3.983 4.328v61.207c0 2.206-1.778 3.845-3.983 3.66l-82.034-6.883C16.783 81.15 15 79.206 15 76.996V24.701z"></path><filter id="empty-wallet-e" width="106.7%" height="107.6%" x="-3.3%" y="-3.8%" filterUnits="objectBoundingBox"><feOffset dx="-6" dy="-4" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"></feComposite><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0.898039216 0 0 0 0 0.921568627 0 0 0 0 0.933333333 0 0 0 0.5 0"></feColorMatrix></filter><path id="empty-wallet-f" d="M94.763 42.474c.069.004.139.011.209.02l10.056 1.354c1.641.221 2.972-.938 2.972-1.39v12.783c0 1.661-1.337 2.827-2.972 2.607l-8.709-1.172a6.128 6.128 0 0 1-.258-.029L86.94 55.43A7.996 7.996 0 0 1 80 47.504a6.128 6.128 0 0 1 6.939-6.074l7.824 1.044z"></path><filter id="empty-wallet-g" width="110.7%" height="118.2%" x="-5.4%" y="-9.1%" filterUnits="objectBoundingBox"><feOffset dx="-3" dy="-3" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"></feComposite><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0.898039216 0 0 0 0 0.921568627 0 0 0 0 0.933333333 0 0 0 0.5 0"></feColorMatrix></filter><path id="empty-wallet-h" d="M40.785 17.85c-3.19.089-6.155-.375-8.894-1.394-4.109-1.527-4.643-3.474-7.846-3.282-3.202.193-15.002 2.712-17.934 6.834-1.954 2.748.4 3.124 7.061 1.128-1.613 1.085-2.197 1.984-1.75 2.697.445.712 2.608.356 6.486-1.069-1.734 1.39-2.49 2.362-2.268 2.915.222.553 2.714.277 7.475-.83-.96 1.04-1.2 1.689-.72 1.946.72.385 6.222-.93 8.683-1.946 2.461-1.016 5.683-3.121 8.678-3.084 1.998.024 2.34-1.28 1.029-3.916z"></path><filter id="empty-wallet-i" width="108.3%" height="121.9%" x="-4.2%" y="-11%" filterUnits="objectBoundingBox"><feOffset dx="-1" dy="-2" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"></feComposite><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0.898039216 0 0 0 0 0.921568627 0 0 0 0 0.933333333 0 0 0 0.5 0"></feColorMatrix></filter><path id="empty-wallet-j" d="M45.543 71.571c-3.19.09-6.155-.375-8.894-1.393-4.108-1.527-4.643-3.474-7.845-3.282-3.203.192-15.002 2.712-17.934 6.834-1.955 2.748.399 3.124 7.06 1.128-1.613 1.085-2.196 1.984-1.75 2.697.446.712 2.608.356 6.487-1.069-1.734 1.39-2.49 2.362-2.269 2.915.222.553 2.714.277 7.476-.83-.96 1.04-1.2 1.688-.72 1.945.72.386 6.221-.93 8.682-1.945 2.461-1.016 5.683-3.122 8.679-3.084 1.997.024 2.34-1.28 1.028-3.916z"></path><filter id="empty-wallet-k" width="116.6%" height="143.8%" x="-8.3%" y="-21.9%" filterUnits="objectBoundingBox"><feOffset dx="5" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"></feComposite><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0.898039216 0 0 0 0 0.921568627 0 0 0 0 0.933333333 0 0 0 0.5 0"></feColorMatrix></filter><path id="empty-wallet-l" d="M3.524 33.927s16 1.126 24.364.3c8.364-.826 33.467-7.665 33.467-7.665l.12 28.432s-27.461 3-40.958 3.583C7.021 59.16 2.9 57.492 2.9 57.492l.624-23.565z"></path></defs><g fill="none" fill-rule="evenodd"><g transform="translate(0 54)"><ellipse cx="60" cy="83" fill="#E5EBEE" fill-opacity=".5" filter="url(#empty-wallet-a)" rx="60" ry="11"></ellipse><use fill="#E5EBEE" xlink:href="#empty-wallet-b"></use><path stroke="#BACDD7" d="M15.5 10v32c0 1.93 1.57 3.5 3.504 3.5h77.992a3.508 3.508 0 0 0 3.504-3.508V4.163c0-1.923-1.542-3.368-3.456-3.238l-78.02 5.303C17.089 6.359 15.5 8.058 15.5 10z"></path><g transform="matrix(1 0 0 -1 0 90.061)"><use fill="#E5EBEE" xlink:href="#empty-wallet-c"></use><path stroke="#BACDD7" d="M93.046 40.335l-.148.226h-5.904a6.494 6.494 0 0 0-6.494 6.5c0 3.585 2.91 6.5 6.494 6.5h9.012a6.483 6.483 0 0 0 5.495-3.033l.11-.174 3.362-.768c1.404-.32 2.527-1.346 2.527-2.178v-9.003c0-1.335-1.007-2.14-2.305-1.844l-10.168 2.322c-.77.176-1.499.714-1.98 1.452z"></path></g><use fill="#FFF" xlink:href="#empty-wallet-d"></use><use fill="#000" filter="url(#empty-wallet-e)" xlink:href="#empty-wallet-d"></use><path stroke="#BACDD7" d="M15.5 11.163v65.833c0 1.951 1.585 3.677 3.525 3.84l82.033 6.882c1.913.16 3.442-1.246 3.442-3.161V23.35c0-1.94-1.588-3.667-3.525-3.83l-82.033-6.882c-1.382-.116-2.625-.675-3.442-1.475z"></path><g><use fill="#FFF" xlink:href="#empty-wallet-f"></use><use fill="#000" filter="url(#empty-wallet-g)" xlink:href="#empty-wallet-f"></use><path stroke="#BACDD7" d="M107.5 43.768c-.694.428-1.65.695-2.539.576L94.905 42.99a2.503 2.503 0 0 0-.174-.017l-.035-.004-7.824-1.044a5.628 5.628 0 0 0-6.372 5.579 7.496 7.496 0 0 0 6.505 7.43l9.123 1.217c.078.01.157.02.258.03l8.709 1.172c1.337.18 2.405-.756 2.405-2.112V43.768z"></path></g><circle cx="87" cy="48.3" r="4" fill="#BACDD7"></circle></g><path stroke="#BACDD7" stroke-dasharray="4,3" d="M105 88c19.548-12.065 21.149-20.945 21.542-24.893.393-3.948-3.308-8.122-8.098-6.181-4.79 1.94-4.685 5.52-1.953 8.666 2.733 3.146 14.364 5.496 21.202-1.262 4.558-4.505 7.525-7.89 8.903-10.154"></path><g transform="rotate(18 74.168 394.156)"><use fill="#FFF" xlink:href="#empty-wallet-h"></use><use fill="#000" filter="url(#empty-wallet-i)" xlink:href="#empty-wallet-h"></use><use stroke="#BACDD7" xlink:href="#empty-wallet-h"></use></g><g transform="scale(-1 1) rotate(-57 -93.456 260.207)"><use fill="#FFF" xlink:href="#empty-wallet-j"></use><use fill="#000" filter="url(#empty-wallet-k)" xlink:href="#empty-wallet-j"></use><use stroke="#BACDD7" xlink:href="#empty-wallet-j"></use></g><g transform="rotate(-46 85.683 -117.768)"><use fill="#FFF" xlink:href="#empty-wallet-l"></use><path stroke="#BACDD7" d="M4.01 34.46l-.6 22.673c.067.02.144.041.23.065.513.137 1.17.275 1.983.404 3.39.54 8.266.761 14.873.475 4.157-.18 9.89-.598 16.8-1.204a985.45 985.45 0 0 0 5.898-.536 1341.917 1341.917 0 0 0 17.78-1.791l-.117-27.331-.607.163a654.093 654.093 0 0 1-13.796 3.543c-1.042.255-2.061.5-3.055.737-7.051 1.676-12.42 2.766-15.462 3.066-2.506.248-5.822.337-9.755.296-2.99-.031-6.187-.137-9.417-.292a300.445 300.445 0 0 1-4.755-.267z"></path></g><path fill="#E5EBEE" d="M171.015 29.316a7.647 7.647 0 0 0-10.816.185c-2.933 3.039-2.846 7.883.195 10.82a7.647 7.647 0 0 0 10.815-.186 7.654 7.654 0 0 0-.194-10.819m-12.352 28.192c-2.385-2.304-5.59-2.247-7.893.137l-5.765-5.797c2.301-2.384 1.883-5.941-.503-8.245 0 0 9.49-9.447 13.728-15.133 4.31-5.78 11.916-19.267 11.916-19.267 2.385 2.304 6.308 2.234 8.61-.15l7.098 6.87c-2.301 2.385-2.423 6.063-.038 8.366 0 0-8.87 12.244-13.547 17.966-4.374 5.35-13.606 15.253-13.606 15.253z"></path><path fill="none" d="M-107-36h330v194h-330z"></path></g></svg>
                        <span>Bạn không có giao dịch nào.</span>
                    </div>
                </div> -->
                <!-- End chưa có giao dịch -->

                <!-- Đã có giao dịch -->
                <div class="_2AsN">
                    <div class="LB4I">
                        <div class="_3fS2 o-cw">
                            <div>
                                <div class="oTaE">
                                    <div>
                                        <div class="_289Q">
                                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                                <div class="_3fS2 _1SIO _22vv _3Qdf _3wdJ" style="padding: 0.5rem;">
                                                    <span class="_1kYs">Th10 24, 2021</span>
                                                </div>
                                                <div class="_3fS2 _1SIO _22vv _229f _1B3o" style="padding: 0.5rem;">
                                                    <div class="_1SEH">-1,100,000.00 VND</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Giao dịch -->
                                        <div class="_1BwG _1tO1">
                                            <div class="jcQj">
                                                <div class="_262O">
                                                    <div class="XuJI">
                                                        <div class="LB4I _3J0T" style="margin: 0px -0.5rem;">
                                                            <div class="_3fS2 pwUH cuNy" style="padding: 0rem 0.5rem;">
                                                                <div class="_2k7K">
                                                                    <span class="_17Fo _2Tq6">
                                                                        <span class="_4Nff"></span>
                                                                    </span>
                                                                </div>
                                                                <span class="_3-9b _1Oob" style="background-color: rgb(227, 106, 239);">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px" viewBox="0 0 34 34" version="1.1">
                                                                        <g id="Category-icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <g id="category_icon_shopping">
                                                                                <g id="bag" transform="translate(8.000000, 8.000000)">
                                                                                    <path d="M12.5071759,6.97195017 L12.4968325,6.9718841 C12.4968325,6.77947576 12.4968325,6.60794612 12.4968325,6.42123002 C12.4968325,3.42047452 10.9312266,0.987881542 8.99995397,0.987881542 C7.06868129,0.987881542 5.50307545,3.42047452 5.50307545,6.42123002 C5.50307545,6.58737043 5.50307545,6.74100723 5.50307545,6.91517079 C5.50307545,6.91918698 5.50307894,6.92320187 5.50308591,6.92721546 L5.49797623,6.92718283 C5.48046717,7.18402547 5.2642127,7.38699933 5.00001239,7.38699933 C4.73363392,7.38699933 4.51599511,7.18066488 4.50165611,6.92081939 L4.5,6.92080881 C4.50001076,6.92000929 4.50002151,6.91920986 4.50003225,6.91841051 C4.50233524,6.74691629 4.5039673,6.57953469 4.5039673,6.42123002 C4.5039673,2.87488261 6.5168891,0 8.99995397,0 C11.4830188,0 13.4959406,2.87488261 13.4959406,6.42123002 C13.4959406,6.61203712 13.4980335,6.79771073 13.5010769,6.97829815 L13.4917906,6.97823884 C13.4511557,7.21041471 13.2464402,7.38699933 13.0000124,7.38699933 C12.7513645,7.38699933 12.5451838,7.20721857 12.5071759,6.97195017 Z M16.9976807,17.0080261 C17.1317871,17.8714764 16.1494293,18 16.1494293,18 L1.8495663,18 C0.851092178,18.0054626 0.978120604,17.6427813 0.996798355,17.0080261 L2.4,5.22717957 C2.4,5.10717957 2.52,4.98717957 2.7,4.98717957 L4.09038173,4.98717957 C4.03289054,5.30837748 4.00414495,5.65652869 4.00414495,6.03163318 C4.00414495,6.40673768 4.00414495,6.72991842 4.00414495,7.00117538 C4.00414495,7.48117538 4.52342334,7.90117538 5.00342334,7.90117538 C5.45791827,7.90117538 5.95436545,7.52462342 5.99566525,7.07712836 C5.99654204,7.06762807 5.99729735,7.64152682 5.99793116,7.00117538 C5.99875385,6.16999355 6.0834808,5.49866161 6.25211199,4.98717957 L11.7816348,4.98717957 C11.9272116,5.4715234 12,6.14285534 12,7.00117538 C12,7.48117538 12.52,7.90117538 13,7.90117538 C13.48,7.90117538 14.0198457,7.48117538 14.0198457,7.00117538 C14.0198457,6.76726778 14.0198457,6.4403596 14.0198457,6.02045085 C14.0198457,5.6005421 13.9694776,5.25611834 13.8687413,4.98717957 L15.3,4.98717957 C15.42,4.98717957 15.6,5.10717957 15.6,5.22717957 L16.9976807,17.0080261 Z M9.4,14.3672 C10.312,14.2184 11,13.5728 11,12.8008 C11,12.0504 10.476,11.5456 9.4,11.2808 L9.4,9.6496 C9.8408,9.7576 10.1744,10.032 10.2016,10.3568 C10.22,10.5768 10.42,10.7464 10.6336,10.7216 C10.8536,10.7032 11.0168,10.5096 10.9984,10.2896 C10.936,9.5488 10.2752,8.968 9.4,8.8312 L9.4,8.4 C9.4,8.1792 9.2208,8 9,8 C8.7792,8 8.6,8.1792 8.6,8.4 L8.6,8.8328 C7.688,8.9816 7,9.6272 7,10.4 C7,11.1488 7.524,11.6544 8.6,11.9192 L8.6,13.5504 C8.1592,13.4432 7.8256,13.168 7.7984,12.8432 C7.78,12.6232 7.5896,12.4616 7.3664,12.4784 C7.1464,12.4968 6.9832,12.6904 7.0016,12.9104 C7.0632,13.6504 7.7248,14.232 8.6,14.3688 L8.6,14.8 C8.6,15.0208 8.7792,15.2 9,15.2 C9.2208,15.2 9.4,15.0208 9.4,14.8 L9.4,14.3672 Z M9.4,12.1064 C9.9336,12.2608 10.2,12.4824 10.2,12.8 C10.2,13.14 9.86,13.436 9.4,13.5488 L9.4,12.1064 Z M7.8,10.4 C7.8,10.06 8.14,9.764 8.6,9.6512 L8.6,11.0936 C8.0672,10.9392 7.8,10.7176 7.8,10.4 Z" id="Combined-Shape" fill="#FFFFFF"/>
                                                                                    <g id="Group" transform="translate(0.000000, 4.200000)"/>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="LB4I YM-8" style="margin: 0px -0.5rem;">
                                                                <div class="_3fS2 pwUH _3eZo" style="padding: 0rem 0.5rem;">
                                                                    <span class="-ESZ">
                                                                        <span class="_1BDz">
                                                                            <span class="KKUC">Shopping</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="_3fS2 pwUH _15HY" style="padding: 0rem 0.5rem;">
                                                                    <span class="_1SwE">
                                                                        <div class="_3YUi"></div>
                                                                    </span>
                                                                </div>
                                                                <div class="_3fS2 pwUH _2Be4" style="padding: 0rem 0.5rem;"></div>
                                                                <div class="_3fS2 pwUH cycle" style="padding: 0rem 0.5rem;"></div>
                                                                <div class="_3fS2 pwUH reminder" style="padding: 0rem 0.5rem;"></div>
                                                            </div>
                                                            <div class="_3fS2 _5CwE _2u24 pwUH _17bJ" style="padding: 0rem 0.5rem;">
                                                                <div class="VSBN">
                                                                    <div class="_3Tj5 _210-">-1,000,000.00 VND</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2XTe"></div>
                                        </div>
                                        <div class="_1BwG _1tO1">
                                            <div class="jcQj">
                                                <div class="_262O">
                                                    <div class="XuJI">
                                                        <div class="LB4I _3J0T" style="margin: 0px -0.5rem;">
                                                            <div class="_3fS2 pwUH cuNy" style="padding: 0rem 0.5rem;">
                                                                <div class="_2k7K">
                                                                    <span class="_17Fo _2Tq6">
                                                                        <span class="_4Nff"></span>
                                                                    </span>
                                                                </div>
                                                                <span class="_3-9b _1Oob" style="background-color: rgb(227, 106, 239);">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px" viewBox="0 0 34 34" version="1.1">
                                                                        <g id="Category-icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <g id="category_icon_shopping">
                                                                                <g id="bag" transform="translate(8.000000, 8.000000)">
                                                                                    <path d="M12.5071759,6.97195017 L12.4968325,6.9718841 C12.4968325,6.77947576 12.4968325,6.60794612 12.4968325,6.42123002 C12.4968325,3.42047452 10.9312266,0.987881542 8.99995397,0.987881542 C7.06868129,0.987881542 5.50307545,3.42047452 5.50307545,6.42123002 C5.50307545,6.58737043 5.50307545,6.74100723 5.50307545,6.91517079 C5.50307545,6.91918698 5.50307894,6.92320187 5.50308591,6.92721546 L5.49797623,6.92718283 C5.48046717,7.18402547 5.2642127,7.38699933 5.00001239,7.38699933 C4.73363392,7.38699933 4.51599511,7.18066488 4.50165611,6.92081939 L4.5,6.92080881 C4.50001076,6.92000929 4.50002151,6.91920986 4.50003225,6.91841051 C4.50233524,6.74691629 4.5039673,6.57953469 4.5039673,6.42123002 C4.5039673,2.87488261 6.5168891,0 8.99995397,0 C11.4830188,0 13.4959406,2.87488261 13.4959406,6.42123002 C13.4959406,6.61203712 13.4980335,6.79771073 13.5010769,6.97829815 L13.4917906,6.97823884 C13.4511557,7.21041471 13.2464402,7.38699933 13.0000124,7.38699933 C12.7513645,7.38699933 12.5451838,7.20721857 12.5071759,6.97195017 Z M16.9976807,17.0080261 C17.1317871,17.8714764 16.1494293,18 16.1494293,18 L1.8495663,18 C0.851092178,18.0054626 0.978120604,17.6427813 0.996798355,17.0080261 L2.4,5.22717957 C2.4,5.10717957 2.52,4.98717957 2.7,4.98717957 L4.09038173,4.98717957 C4.03289054,5.30837748 4.00414495,5.65652869 4.00414495,6.03163318 C4.00414495,6.40673768 4.00414495,6.72991842 4.00414495,7.00117538 C4.00414495,7.48117538 4.52342334,7.90117538 5.00342334,7.90117538 C5.45791827,7.90117538 5.95436545,7.52462342 5.99566525,7.07712836 C5.99654204,7.06762807 5.99729735,7.64152682 5.99793116,7.00117538 C5.99875385,6.16999355 6.0834808,5.49866161 6.25211199,4.98717957 L11.7816348,4.98717957 C11.9272116,5.4715234 12,6.14285534 12,7.00117538 C12,7.48117538 12.52,7.90117538 13,7.90117538 C13.48,7.90117538 14.0198457,7.48117538 14.0198457,7.00117538 C14.0198457,6.76726778 14.0198457,6.4403596 14.0198457,6.02045085 C14.0198457,5.6005421 13.9694776,5.25611834 13.8687413,4.98717957 L15.3,4.98717957 C15.42,4.98717957 15.6,5.10717957 15.6,5.22717957 L16.9976807,17.0080261 Z M9.4,14.3672 C10.312,14.2184 11,13.5728 11,12.8008 C11,12.0504 10.476,11.5456 9.4,11.2808 L9.4,9.6496 C9.8408,9.7576 10.1744,10.032 10.2016,10.3568 C10.22,10.5768 10.42,10.7464 10.6336,10.7216 C10.8536,10.7032 11.0168,10.5096 10.9984,10.2896 C10.936,9.5488 10.2752,8.968 9.4,8.8312 L9.4,8.4 C9.4,8.1792 9.2208,8 9,8 C8.7792,8 8.6,8.1792 8.6,8.4 L8.6,8.8328 C7.688,8.9816 7,9.6272 7,10.4 C7,11.1488 7.524,11.6544 8.6,11.9192 L8.6,13.5504 C8.1592,13.4432 7.8256,13.168 7.7984,12.8432 C7.78,12.6232 7.5896,12.4616 7.3664,12.4784 C7.1464,12.4968 6.9832,12.6904 7.0016,12.9104 C7.0632,13.6504 7.7248,14.232 8.6,14.3688 L8.6,14.8 C8.6,15.0208 8.7792,15.2 9,15.2 C9.2208,15.2 9.4,15.0208 9.4,14.8 L9.4,14.3672 Z M9.4,12.1064 C9.9336,12.2608 10.2,12.4824 10.2,12.8 C10.2,13.14 9.86,13.436 9.4,13.5488 L9.4,12.1064 Z M7.8,10.4 C7.8,10.06 8.14,9.764 8.6,9.6512 L8.6,11.0936 C8.0672,10.9392 7.8,10.7176 7.8,10.4 Z" id="Combined-Shape" fill="#FFFFFF"/>
                                                                                    <g id="Group" transform="translate(0.000000, 4.200000)"/>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="LB4I YM-8" style="margin: 0px -0.5rem;">
                                                                <div class="_3fS2 pwUH _3eZo" style="padding: 0rem 0.5rem;">
                                                                    <span class="-ESZ">
                                                                        <span class="_1BDz">
                                                                            <span class="KKUC">Shopping</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="_3fS2 pwUH _15HY" style="padding: 0rem 0.5rem;">
                                                                    <span class="_1SwE">
                                                                        <div class="_3YUi"></div>
                                                                    </span>
                                                                </div>
                                                                <div class="_3fS2 pwUH _2Be4" style="padding: 0rem 0.5rem;"></div>
                                                                <div class="_3fS2 pwUH cycle" style="padding: 0rem 0.5rem;"></div>
                                                                <div class="_3fS2 pwUH reminder" style="padding: 0rem 0.5rem;"></div>
                                                            </div>
                                                            <div class="_3fS2 _5CwE _2u24 pwUH _17bJ" style="padding: 0rem 0.5rem;">
                                                                <div class="VSBN">
                                                                    <div class="_3Tj5 _210-">-1,000,000.00 VND</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2XTe"></div>
                                        </div>
                                        <!-- End giao dịch -->
                                        <div class="_2Pnj"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End chưa có giao dịch -->
            </div>
            <!--    End main    -->
        </div>

    </div>
    
@endsection

@section("script")

<script src="src/js/wallet/transactions.js"></script>

@endsection