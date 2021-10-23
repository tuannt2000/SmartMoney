@extends("layout.index")

@section("title")

<title>Dashboard</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            <div class="_2dTk _1prg">
                <header class="_3KoQ">
                    <!--   Logo   -->
                    <div class="KaKx">
                        <nav class="_3GZ9">
                            <div class="_1khU">
                                <div class="_25bv">
                                    <a href="dashboard" class="_3WuR _1gOp">
                                        <svg width="141.75" height="36" viewBox="0 0 126 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M16.0441426,32 C7.18320732,32 0,24.836556 0,16 C0,7.163444 7.18320732,0 16.0441426,0 C24.9050779,0 32.0882852,7.163444 32.0882852,16 C32.0882852,24.836556 24.9050779,32 16.0441426,32 Z M16.0976231,24 C20.5576272,24 24.1731749,20.3943999 24.1731749,15.9466667 C24.1731749,11.4989335 20.5576272,7.89333333 16.0976231,7.89333333 C11.637619,7.89333333 8.02207131,11.4989335 8.02207131,15.9466667 C8.02207131,20.3943999 11.637619,24 16.0976231,24 Z" id="logo-full-a"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g><g id="kolac"><circle id="Oval-6" fill="#FFFFFF" cx="17" cy="16" r="10"></circle><mask id="logo-full-mask-2" fill="white"><use xlink:href="#logo-full-a"></use></mask><use id="Mask" fill-opacity="0.899999976" fill="#D8D8D8" xlink:href="#logo-full-a"></use><polygon id="Path-3" fill="#FF6FAF" mask="url(#logo-full-mask-2)" points="16.0441426 -0.730175139 16.0441426 16 34.1063075 3.50918751 20.1480198 -1.99954922"></polygon><polygon id="Path-2" fill="#00BC7C" mask="url(#logo-full-mask-2)" points="16.0208188 15.9182456 33.203099 3.94707882 33.1075857 19.1213724 28.7682783 29.9200783 25.5198717 29.1580738"></polygon><polygon id="Path" fill="#FE5A61" mask="url(#logo-full-mask-2)" points="16.0271308 15.9631392 27.4612222 31.2990737 16.1347917 33.3051551 7.53311181 30.6943158"></polygon><polygon id="Path" fill="#40C3F9" mask="url(#logo-full-mask-2)" points="16.108472 15.983092 7.21072447 32.1073971 -0.343285929 24.242931 -0.0336416493 19.9513112"></polygon><polygon id="Path-4" fill="#FFC053" mask="url(#logo-full-mask-2)" points="16.0056939 15.9893866 -3.32432669 21.1437247 -1.16777337 9.79204291 6.02002312 0.477440478 16.0611917 -1.38576505"></polygon><ellipse id="Oval-2" fill-opacity="0.0900000036" fill="#000000" mask="url(#logo-full-mask-2)" cx="16.0441426" cy="16" rx="9.94736842" ry="9.92"></ellipse></g><path d="M16.5624439,15.2679282 C18.3037122,15.7523532 18.9320883,16.2131781 18.9320883,17.6304318 C18.9320883,19.2582242 18.0203513,20.0587676 16.6577279,20.2084425 L16.6558596,21.192198 L15.4732171,21.192198 L15.4732171,20.2009898 C14.5029396,20.1183891 13.4548157,19.9084716 13.4548157,19.9084716 L13.5880888,18.8296943 C13.5880888,18.8296943 15.220372,19.0476856 16.0785507,19.0476856 C17.1067459,19.0476856 17.5781837,18.5874818 17.5781837,17.7148957 C17.5781837,17.0124794 17.2032755,16.7702669 15.933445,16.4671907 C14.1442234,16.0069869 13.3701188,15.4616982 13.3701188,14.0202232 C13.3701188,12.5352741 14.2388846,11.8247841 15.5940347,11.684425 L15.5940347,10.7733333 L16.7791683,10.7733333 L16.7791683,11.6862882 C17.727026,11.759573 18.7508619,11.9483746 18.7508619,11.9483746 L18.6418769,13.038952 C18.6418769,13.038952 16.9491848,12.845182 16.2479445,12.845182 C15.2322047,12.845182 14.7121907,13.2085007 14.7121907,13.9233382 C14.7121907,14.6984182 15.1475078,14.8803882 16.5624439,15.2679282 L16.5624439,15.2679282 Z" id="dolar" fill="#2A3E49"></path><path d="M45.6149861,14.6961191 C49.2009347,15.6937386 50.4950055,16.6427562 50.4950055,19.561433 C50.4950055,22.9136905 48.6173844,24.5623208 45.8112129,24.8705597 L45.8073653,26.8964948 L43.3718444,26.8964948 L43.3718444,24.8552117 C41.3736656,24.6851048 39.2151709,24.252803 39.2151709,24.252803 L39.4896319,22.0311809 C39.4896319,22.0311809 42.851138,22.4801097 44.6184617,22.4801097 C46.7359156,22.4801097 47.7067894,21.5323711 47.7067894,19.7353769 C47.7067894,18.2888285 46.9347075,17.7900187 44.3196327,17.165867 C40.6349295,16.2181284 39.040747,15.0951669 39.040747,12.1266091 C39.040747,9.06852145 40.8298737,7.60534608 43.6206549,7.3162922 L43.6206549,5.44 L46.0613059,5.44 L46.0613059,7.3201292 C48.0133136,7.47105113 50.1217898,7.85986697 50.1217898,7.85986697 L49.8973474,10.10579 C49.8973474,10.10579 46.411436,9.70674218 44.9673094,9.70674218 C42.8755061,9.70674218 41.8045951,10.4549569 41.8045951,11.9270852 C41.8045951,13.5232766 42.7010822,13.8980234 45.6149861,14.6961191 L45.6149861,14.6961191 Z M57.8913451,14.3226512 C56.5716237,14.3226512 55.1775156,15.0209849 55.1775156,15.0209849 L55.1775156,22.3816268 C55.3019208,22.4059278 56.497237,22.5798717 57.3693561,22.5798717 C59.6843194,22.5798717 60.3576466,21.3584272 60.3576466,18.2888285 C60.3576466,15.3701518 59.4355089,14.3226512 57.8913451,14.3226512 L57.8913451,14.3226512 Z M57.5424974,24.9255567 C56.5216051,24.9255567 55.3262889,24.7260328 55.1775156,24.7004528 L55.1775156,30.0159745 L52.4624036,30.0159745 L52.4624036,12.1764901 L55.1531476,12.1764901 L55.1531476,12.9502848 C55.1531476,12.9502848 56.8704527,11.9015052 58.364598,11.9015052 C61.6016989,11.9015052 63.1214947,13.7483805 63.1214947,18.2888285 C63.1214947,23.4291273 61.378539,24.9255567 57.5424974,24.9255567 L57.5424974,24.9255567 Z M70.3434104,14.1474283 C68.5004176,14.1474283 67.678317,15.0708659 67.653949,17.4664319 L72.9071841,17.4664319 C72.9071841,14.9711039 72.1607528,14.1474283 70.3434104,14.1474283 L70.3434104,14.1474283 Z M67.678317,19.561433 C67.7039676,21.5566721 68.450399,22.5555707 70.5178343,22.5555707 C72.4839498,22.5555707 75.0990246,22.2064038 75.0990246,22.2064038 L75.1490432,24.227223 C75.1490432,24.227223 72.309526,24.9255567 70.118968,24.9255567 C66.3829637,24.9255567 64.938837,22.9290385 64.938837,18.5382334 C64.938837,13.9734844 66.9062351,11.9015052 70.3434104,11.9015052 C73.8293218,11.9015052 75.5722775,13.7228005 75.5722775,17.6147958 L75.3978537,19.561433 L67.678317,19.561433 Z M85.4823722,18.0394236 C85.4823722,15.5453747 85.1591751,14.3226512 83.2674461,14.3226512 C81.8233195,14.3226512 80.4535795,14.9711039 80.4535795,14.9711039 L80.4535795,24.6505718 L77.7384675,24.6505718 L77.7384675,12.1764901 L80.4292114,12.1764901 L80.4292114,12.9502848 C80.4292114,12.9502848 82.2465538,11.9015052 83.8651042,11.9015052 C87.3266476,11.9015052 88.1731161,13.8724434 88.1731161,17.9652417 L88.1731161,24.6505718 L85.4823722,24.6505718 L85.4823722,18.0394236 Z M98.2576346,14.4965951 C98.1088613,14.4722941 96.6647347,14.2471902 95.6194743,14.2471902 C93.7751989,14.2471902 92.9787489,15.5952557 92.9787489,18.4384715 C92.9787489,21.6321331 93.850868,22.5044107 95.3693813,22.5044107 C96.7891399,22.5044107 98.2576346,21.881538 98.2576346,21.881538 L98.2576346,14.4965951 Z M98.2832852,24.0021191 C98.2832852,24.0021191 96.4659428,24.9255567 94.946147,24.9255567 C91.7590647,24.9255567 90.2392689,23.2539044 90.2392689,18.4384715 C90.2392689,13.9236034 91.8591019,11.9015052 95.4193999,11.9015052 C96.4159242,11.9015052 98.1088613,12.2007911 98.2576346,12.2263711 L98.2576346,6.98758934 L100.974029,6.98758934 L100.974029,24.6505718 L98.2832852,24.6505718 L98.2832852,24.0021191 Z M108.567878,14.1474283 C106.724885,14.1474283 105.902785,15.0708659 105.878417,17.4664319 L111.132934,17.4664319 C111.132934,14.9711039 110.38522,14.1474283 108.567878,14.1474283 L108.567878,14.1474283 Z M105.902785,19.561433 C105.928435,21.5566721 106.676149,22.5555707 108.742302,22.5555707 C110.7097,22.5555707 113.323492,22.2064038 113.323492,22.2064038 L113.374793,24.227223 C113.374793,24.227223 110.535276,24.9255567 108.344718,24.9255567 C104.608714,24.9255567 103.164587,22.9290385 103.164587,18.5382334 C103.164587,13.9734844 105.131985,11.9015052 108.567878,11.9015052 C112.053789,11.9015052 113.798028,13.7228005 113.798028,17.6147958 L113.623604,19.561433 L105.902785,19.561433 Z M120.76985,14.1474283 C118.92814,14.1474283 118.10604,15.0708659 118.080389,17.4664319 L123.334907,17.4664319 C123.334907,14.9711039 122.588475,14.1474283 120.76985,14.1474283 L120.76985,14.1474283 Z M125.825576,19.561433 L118.10604,19.561433 C118.13169,21.5566721 118.878121,22.5555707 120.944274,22.5555707 C122.911672,22.5555707 125.526747,22.2064038 125.526747,22.2064038 L125.576766,24.227223 C125.576766,24.227223 122.737249,24.9255567 120.545408,24.9255567 C116.810686,24.9255567 115.366559,22.9290385 115.366559,18.5382334 C115.366559,13.9734844 117.332675,11.9015052 120.76985,11.9015052 C124.257044,11.9015052 126,13.7228005 126,17.6147958 L125.825576,19.561433 Z" id="Spendee" fill="#2A3E49"></path></g></g></g></svg>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--    End logo   -->

                    <!--    Nav menu   -->
                    <div class="_3C1k">
                        <div class="_1e_t">
                            <nav>
                                <ul class="ZfY8">
                                    <li><a href="dashboard" class="_3WuR _1gOp selected"><span>Bảng điều khiển</span></a></li>
                                    <li><a href="" class="_3WuR _1gOp "><span>Ngân sách</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--    End Nav menu -->

                    <!--    Account   -->
                    <div class="_2dHu">
                        <div class="dropdownWrap">
                            <div class="uZrZ">
                                <div class="_1WaF">
                                    <div>
                                        <div class="UhKW">
                                            <div class="_1Gbf">
                                                <img class="imgAvt" src="src/img/unnamed.png" alt="">
                                            </div>
                                            <div class="_2jFV _1sxG">
                                                <div>
                                                    <span class="_1ypI">tuan.nh201612@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="_3hBn"></span>
                                    </div>
                                </div>
                                <ul class="_1zUK">
                                    <li class="navItem"><a href="settings/account" class="_3WuR _1gOp"><span>Cài đặt</span></a></li>
                                    <li class="navItem"><a href="" class="_3WuR _1gOp"><span>Sử dụng Premium Miễn phí</span></a></li>
                                    <li class="navItem"><a href="" class="_3WuR _1gOp"><span>Thuê bao</span></a></li>
                                    <li class="navItem"><a href="settings/support" class="_3WuR _1gOp"><span>Hỗ trợ</span></a></li>
                                    <li class="navItem"><a href="auth/login" class="_3WuR _1gOp"><span>Đăng xuất</span></a></li>
                                </ul>
                            </div>
                            <div class="_2XTe"></div>
                        </div>
                    </div>
                    <!--    End Account -->
                </header>
            </div>
            <!--    End header  -->
            <!--    Main      -->
            <div>
                <div class="_2ylm">
                    <div>
                        <div class="_2AsN">
                            <section>
                                <h2>Ví</h2>
                                <div class="oTaE">
                                    <div class="LB4I">
                                        <div class="_3fS2 o-cw _1ubS _1B3o">
                                            <a href="" class="_18y1 ">
                                                <div>
                                                    <article class="_9VMU grid">
                                                        <span class="_2jD1">
                                                            <span class="_47tA">
                                                                <svg width="22" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20"><path fill="#99704A" fill-rule="evenodd" d="M0 19V4h20.998A.996.996 0 0 1 22 5v14a1 1 0 0 1-1.002 1H1.002A.996.996 0 0 1 0 19zM18 .998V3H0C0 1.5 1.3-.003 3 0h13.998A.998.998 0 0 1 18 .999zM18 10c-1.101 0-2 .897-2 2 0 1.104.899 2 2 2 1.1 0 2-.896 2-2 0-1.103-.9-2-2-2zm0 3a1 1 0 1 1-.001-2.001A1 1 0 0 1 18 13z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <header class="_2G4T">
                                                            <span class="_3_HJ"><span class="_1dxB">Ví tiền mặt</span></span>
                                                            <span class="kpLm">Tiền mặt</span>
                                                            <span class="_22t9 _1j4d">+10,000,000.00 VND</span>
                                                        </header>
                                                    </article>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="_3fS2 o-cw _1ubS _1B3o">
                                            <div class="jcQj">
                                                <div class="_3_OS _1q5Q">
                                                    <button class="_3SdL _13Jl jsip ">Thêm Ví mới</button>
                                                    <button class="_3SdL _13Jl jsip ">Xóa ví</button>
                                                </div>                                              
                                            </div>
                                            <div class="_2XTe"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <section>

                        </section>
                    </div>
                </div>
                <section>
                    <div class="_2AsN">
                        <h2>Tổng quan</h2>
                    </div>
                    <div class="UzPn _10vh">
                        <div class="_2AsN">
                            <div class="oTaE">
                                <div class="LB4I panel">
                                    <div class="_3fS2 _1GHs">

                                    </div>
                                    <div class="_3fS2">
                                        <form action="">
                                            <div class="body">
                                                <!-- <div class="_6Szy _2pOY">
                                                    <svg width="7" height="13" viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg"><g stroke-width="1"><path d="M0.2,13.5l12.5,12.3c0.3,0.3,0.8,0.3,1.1,0c0.3-0.3,0.3-0.8,0-1L1.8,13l12-11.7c0.3-0.3,0.3-0.8,0-1 C13.6,0.1,13.4,0,13.3,0s-0.4,0.1-0.5,0.2L0.2,12.5C-0.1,12.8-0.1,13.2,0.2,13.5z"></path></g></svg>
                                                </div> -->
                                                <div class="Kevi">
                                                    <input type="date" value="2021-10-20">
                                                </div>
                                                <!-- <div class="_6Szy _2sWB">
                                                    <svg width="7" height="13" viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg"><g stroke-width="1"><path d="M13.7840764,12.4816891 L1.28162613,0.216587206 C0.987254795,-0.0721957353 0.51514983,-0.0721957353 0.220778499,0.216587206 C-0.0735928328,0.505370147 -0.0735928328,0.9685126 0.220778499,1.25729554 L12.1900279,12.9993189 L0.220778499,24.7413423 C-0.0735928328,25.0301252 -0.0735928328,25.4932677 0.220778499,25.7820506 C0.365187076,25.9237177 0.559583238,26 0.748425225,26 C0.937267211,26 1.13166337,25.9291664 1.27607195,25.7820506 L13.7785223,13.5169487 C14.0728936,13.2336145 14.0728936,12.7650233 13.7840764,12.4816891 Z"></path></g></svg>
                                                </div> -->
                                                <!-- <div class="_2XTe"></div> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <label for="" class="_1Baa inline IhHS">Bởi ví</label>
                                                        </div>
                                                        <div class="_3Iet IhHS">
                                                            <div class="_2ieP">
                                                                <div class="Select-control">
                                                                    <div class="Select-value">
                                                                        <span class="Select-value-label">Ví tiền mặt</span>
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

                    <div class="_2AsN _3EiL">
                        <div class="oTaE _1n3H">
                            <div class="LB4I _3BdS">
                                <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                                    <div class="_3wsj _1eTa">
                                        <span class="_1zZy">Tổng Số dư</span>
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
                    <div class="_2AsN">
                        <div class="_2jqr">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="154" height="155" viewBox="0 0 154 155"><defs><filter id="overview-empty-a" width="100%" height="100%" x="0%" y="0%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceGraphic"></feGaussianBlur></filter><rect id="overview-empty-b" width="96" height="128" rx="4"></rect><linearGradient id="overview-empty-d" x1="50%" x2="50%" y1="0%" y2="33.855%"><stop offset="0%" stop-color="#DAAB6F"></stop><stop offset="100%" stop-color="#B4753D"></stop></linearGradient><path id="overview-empty-c" d="M18 36C8.059 36 0 27.941 0 18S8.059 0 18 0s18 8.059 18 18-8.059 18-18 18zm0-8c5.523 0 10-4.477 10-10S23.523 8 18 8 8 12.477 8 18s4.477 10 10 10z"></path><linearGradient id="overview-empty-e" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#FFDD73"></stop><stop offset="100%" stop-color="#F1B742"></stop></linearGradient><linearGradient id="overview-empty-g" x1="0%" x2="102%" y1="0%" y2="101%"><stop offset="0%" stop-color="#3E87EF"></stop><stop offset="100%" stop-color="#86C8FF"></stop></linearGradient><linearGradient id="overview-empty-h" x1="28.281%" x2="49.28%" y1="2.682%" y2="78.405%"><stop offset="0%" stop-color="#FF7480"></stop><stop offset="100%" stop-color="#D4334B"></stop></linearGradient><linearGradient id="overview-empty-i" x1="54.215%" x2="54.215%" y1="19.122%" y2="86.792%"><stop offset="0%" stop-color="#60D08E"></stop><stop offset="100%" stop-color="#31A156"></stop></linearGradient><linearGradient id="overview-empty-j" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#AAA"></stop><stop offset="100%"></stop></linearGradient><path id="overview-empty-k" d="M68.032 0H4.002A4.003 4.003 0 0 0 0 4.007v119.986A4 4 0 0 0 4.003 128h87.994A4.003 4.003 0 0 0 96 123.993V28.03L68.035.03 68.032 0z"></path><path id="overview-empty-l" d="M96 28H71.998A4 4 0 0 1 68 24V0l28 28z"></path><path id="overview-empty-m" d="M18 36C8.059 36 0 27.941 0 18S8.059 0 18 0s18 8.059 18 18-8.059 18-18 18zm0-8c5.523 0 10-4.477 10-10S23.523 8 18 8 8 12.477 8 18s4.477 10 10 10z"></path></defs><g fill="none" fill-rule="evenodd" transform="translate(-1)"><ellipse cx="81" cy="148" fill="#EDF2F4" filter="url(#overview-empty-a)" rx="60" ry="7"></ellipse><g transform="rotate(-15 94.65 10.254)"><use fill="#FFF" xlink:href="#overview-empty-b"></use><rect width="95" height="127" x=".5" y=".5" stroke="#BACDD7" rx="4"></rect><g transform="translate(30 75)"><mask id="overview-empty-f" fill="#fff"><use xlink:href="#overview-empty-c"></use></mask><use fill="url(#overview-empty-d)" xlink:href="#overview-empty-c"></use><path fill="url(#overview-empty-e)" d="M18-1h21v32.359L18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-g)" d="M-1.17 34.982l26.527 6.595L39 31.359 18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-h)" d="M-1.17 34.982l-5.525-14.28 4.423-14.12L18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-i)" d="M11.464-2.796L.02.748l-2.24 5.933L18 18z" mask="url(#overview-empty-f)"></path><circle cx="18" cy="18" r="12" fill="url(#overview-empty-j)" fill-opacity=".16" mask="url(#overview-empty-f)"></circle></g><g transform="translate(66 79)"><circle cx="3" cy="3" r="3" fill="#F9CE60"></circle><rect width="12" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><g transform="translate(48 113)"><circle cx="3" cy="3" r="3" fill="#64A9F7"></circle><rect width="10" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><g transform="translate(8 92)"><circle cx="17" cy="3" r="3" fill="#E75063"></circle><rect width="12" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="translate(15 72)"><circle cx="19" cy="3" r="3" fill="#50C07B"></circle><rect width="14" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="translate(42 67)"><circle cx="3" cy="3" r="3" fill="#D19F64"></circle><rect width="8" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><path fill="#E5EBEE" d="M13 39.503c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6-6.012A1.5 1.5 0 0 1 20.5 32h1c.828 0 1.5.669 1.5 1.491V56.51A1.5 1.5 0 0 1 21.5 58h-1c-.828 0-1.5-.669-1.5-1.491V33.49zm6 10.014c0-.831.679-1.505 1.5-1.505h1c.828 0 1.5.667 1.5 1.505v12.99c0 .831-.679 1.505-1.5 1.505h-1c-.828 0-1.5-.667-1.5-1.505v-12.99zm6 8c0-.831.679-1.505 1.5-1.505h1a1.5 1.5 0 0 1 1.5 1.505v4.99c0 .831-.679 1.505-1.5 1.505h-1a1.5 1.5 0 0 1-1.5-1.505v-4.99zm6-5.014A1.5 1.5 0 0 1 38.5 45h1c.828 0 1.5.663 1.5 1.491V56.51A1.5 1.5 0 0 1 39.5 58h-1c-.828 0-1.5-.663-1.5-1.491V46.49zm6-6.988c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6-2.008c0-.826.679-1.495 1.5-1.495h1c.828 0 1.5.67 1.5 1.495v19.01c0 .826-.679 1.495-1.5 1.495h-1c-.828 0-1.5-.67-1.5-1.495v-19.01zm6 10c0-.825.679-1.495 1.5-1.495h1c.828 0 1.5.68 1.5 1.496v9.008C59 57.33 58.321 58 57.5 58h-1c-.828 0-1.5-.68-1.5-1.496v-9.008zm6-3.99c0-.831.679-1.505 1.5-1.505h1c.828 0 1.5.667 1.5 1.505v12.99c0 .831-.679 1.505-1.5 1.505h-1c-.828 0-1.5-.667-1.5-1.505v-12.99zm6 8c0-.831.679-1.505 1.5-1.505h1a1.5 1.5 0 0 1 1.5 1.505v4.99c0 .831-.679 1.505-1.5 1.505h-1a1.5 1.5 0 0 1-1.5-1.505v-4.99zm6-12.002c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6 7.993c0-.826.679-1.496 1.5-1.496h1c.828 0 1.5.68 1.5 1.496v9.008C83 57.33 82.321 58 81.5 58h-1c-.828 0-1.5-.68-1.5-1.496v-9.008z"></path><rect width="16" height="2" x="13" y="12" fill="#BACDD7" rx="1"></rect><rect width="22" height="2" x="13" y="16" fill="#BACDD7" rx="1"></rect></g><path fill="#324C5B" fill-opacity=".04" d="M57.478 9.64L36.076 119.534c-.421 2.164.947 4.427 3.069 5.06l39.772 11.85 5.38-1.503 23.357-68.726L71.502 6 57.478 9.64z"></path><g transform="rotate(15 34.35 260.914)"><use fill="#FFF" xlink:href="#overview-empty-k"></use><path stroke="#BACDD7" d="M67.798.5H4.003A3.503 3.503 0 0 0 .5 4.007v119.986a3.5 3.5 0 0 0 3.503 3.507h87.994a3.503 3.503 0 0 0 3.503-3.507V28.236L67.798.5z"></path></g><g transform="rotate(15 34.35 260.914)"><use fill="#EDF2F4" xlink:href="#overview-empty-l"></use><path stroke="#BACDD7" d="M94.793 27.5L68.5 1.207v22.794a3.5 3.5 0 0 0 3.498 3.499h22.795z"></path></g><g transform="rotate(15 -265.49 337.35)"><mask id="overview-empty-n" fill="#fff"><use xlink:href="#overview-empty-m"></use></mask><use fill="#E5EBEE" xlink:href="#overview-empty-m"></use><path fill="#E5EBEE" stroke="#FFF" d="M18-1h21v32.359L18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M-1.17 34.982l26.527 6.595L39 31.359 18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M-1.17 34.982l-5.525-14.28 4.423-14.12L18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M11.464-2.796L.02.748l-2.24 5.933L18 18z" mask="url(#overview-empty-n)"></path></g><g transform="rotate(15 -298.682 472.074)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="12" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -418.81 386.712)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="10" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -319.055 245.297)"><circle cx="17" cy="3" r="3" fill="#E5EBEE"></circle><rect width="12" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -246.597 281.882)"><circle cx="19" cy="3" r="3" fill="#E5EBEE"></circle><rect width="14" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -241.108 386.925)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="8" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><path fill="#E5EBEE" d="M74.14 29.928a1.505 1.505 0 0 1 1.837-1.06l.965.258a1.498 1.498 0 0 1 1.061 1.837l-7.505 28.011a1.505 1.505 0 0 1-1.838 1.061l-.965-.258a1.498 1.498 0 0 1-1.061-1.838l7.505-28.01zm-.418 24.74a1.507 1.507 0 0 1 1.84-1.066l.964.259a1.5 1.5 0 0 1 1.06 1.842l-1.292 4.82a1.507 1.507 0 0 1-1.839 1.065l-.964-.258a1.5 1.5 0 0 1-1.06-1.842l1.291-4.82zm6.315-.387a1.503 1.503 0 0 1 1.838-1.058l.964.259a1.5 1.5 0 0 1 1.062 1.834l-1.813 6.767a1.503 1.503 0 0 1-1.837 1.058l-.965-.258a1.5 1.5 0 0 1-1.062-1.835l1.813-6.767zm7.347-4.235a1.507 1.507 0 0 1 1.839-1.065l.964.258a1.499 1.499 0 0 1 1.06 1.843l-3.362 12.546a1.507 1.507 0 0 1-1.839 1.066l-.964-.258a1.499 1.499 0 0 1-1.06-1.843l3.362-12.547zm4.762 5.407a1.502 1.502 0 0 1 1.837-1.056l.965.259a1.505 1.505 0 0 1 1.062 1.833L93.68 65.19a1.502 1.502 0 0 1-1.837 1.056l-.965-.259a1.505 1.505 0 0 1-1.062-1.833l2.331-8.702zm8.9-10.032a1.505 1.505 0 0 1 1.839-1.062l.964.259a1.498 1.498 0 0 1 1.061 1.838l-5.434 20.282a1.505 1.505 0 0 1-1.839 1.062l-.964-.259a1.498 1.498 0 0 1-1.061-1.838l5.434-20.282zm3.209 11.21a1.504 1.504 0 0 1 1.837-1.06l.964.259c.801.214 1.275 1.04 1.062 1.835l-2.848 10.629a1.504 1.504 0 0 1-1.837 1.059l-.964-.259a1.502 1.502 0 0 1-1.062-1.835l2.848-10.629zm5.278 3.481a1.502 1.502 0 0 1 1.837-1.056l.964.258a1.505 1.505 0 0 1 1.063 1.833l-2.332 8.702a1.502 1.502 0 0 1-1.837 1.057l-.964-.259a1.505 1.505 0 0 1-1.063-1.833l2.332-8.702zm6.828-2.301a1.507 1.507 0 0 1 1.84-1.066l.964.259a1.499 1.499 0 0 1 1.06 1.842l-3.362 12.547a1.507 1.507 0 0 1-1.839 1.065l-.964-.258a1.499 1.499 0 0 1-1.06-1.842l3.361-12.547zm3.726 9.28a1.507 1.507 0 0 1 1.839-1.065l.964.258a1.5 1.5 0 0 1 1.06 1.842l-1.291 4.82a1.507 1.507 0 0 1-1.84 1.065l-.964-.258a1.5 1.5 0 0 1-1.06-1.842l1.292-4.82zm8.901-10.04a1.506 1.506 0 0 1 1.84-1.064l.963.259a1.497 1.497 0 0 1 1.061 1.84l-4.398 16.415a1.506 1.506 0 0 1-1.839 1.063l-.964-.258a1.497 1.497 0 0 1-1.06-1.84l4.397-16.415zm3.727 9.273a1.502 1.502 0 0 1 1.837-1.056l.964.258a1.505 1.505 0 0 1 1.063 1.833l-2.332 8.702a1.502 1.502 0 0 1-1.836 1.056l-.965-.258a1.505 1.505 0 0 1-1.062-1.833l2.331-8.702z"></path><g fill="#BACDD7" transform="rotate(15 -17.725 304.286)"><rect width="16" height="2" rx="1"></rect><rect width="22" height="2" y="4" rx="1"></rect></g></g></svg>
                            <span>Bạn không có giao dịch nào.</span>
                        </div>
                    </div>
                </section>
            </div>
            <!--    End main    -->
        </div>

    </div>


    
@endsection

@section("script")

<script src="src/js/dashboard.js"></script>

@endsection