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
                    @include('layout.logo')
                    <!--    End logo   -->

                    <!--    Nav menu   -->
                    <div class="_3C1k">
                        <div class="_1e_t">
                            <nav>
                                <ul class="ZfY8">
                                    <li><a href="dashboard" class="_3WuR _1gOp"><span>Bảng điều khiển</span></a></li>
                                    <li><a href="budgets" class="_3WuR _1gOp "><span>Ngân sách</span></a></li>
                                    <li><a href="dealsAllYear" class="_3WuR _1gOp "><span>Giao dịch cả năm</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--    End Nav menu -->

                    <!--    Account   -->
                   @include('layout.account')
                    <!--    End Account -->
                </header>
            </div>
            <!--    End header  -->
            <!--    Main      -->

            <!--    End main    -->
        </div>
    </div>
@endsection

@section("script")
    <script src="src/js/dealsAllYear.js"></script>
@endsection