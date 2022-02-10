@extends("layout.index")

@section("title")

<title>Giao dịch cả năm</title>

@endsection

@section("content")
    <input type="hidden" id="user_id" value="{{Auth::user()->id}}">
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
            <div>
                <section>
                    <div class="_2AsN">
                        <h2>Tổng quan</h2>
                    </div>

                    <!-- Đồ thị -->
                    <div class="_2AsN" @if ($count != 0)
                        style="display:block"
                        @else
                        style="display:none"
                    @endif>
                        <div class="oTaE">
                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                <div class="_3fS2 o-cw _2oRk" style="padding: 0.5rem;display: initial;">
                                    <div class="_3wsj _3QBC">
                                        <div class="oTaE">
                                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                                <div class="_3fS2 o-cw _22vv _1V5z _37kk" style="padding: 0rem 0.5rem 0.5rem;">
                                                    <h1 class="_1aWI">Thu nhập theo kỳ</h1>
                                                    <span class="_3zGV">2022</span>
                                                </div>
                                                <div class="_3fS2 o-cw _22vv _19wA _1KKs" style="padding: 0.25rem 0.5rem 0.5rem;">
                                                </div>
                                            </div>
                                            <div class="LB4I">
                                                <div class="_3fS2 o-cw2">
                                                    <canvas id="myChart3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3fS2 o-cw _2oRk" style="padding: 0.5rem;display: initial;">
                                    <div class="_3wsj _3QBC">
                                        <div class="oTaE">
                                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                                <div class="_3fS2 o-cw _22vv _1V5z _37kk" style="padding: 0rem 0.5rem 0.5rem;">
                                                    <h1 class="_1aWI">Chi phí theo kỳ</h1>
                                                    <span class="_3zGV">2022</span>
                                                </div>
                                                <div class="_3fS2 o-cw _22vv _19wA _1KKs" style="padding: 0.25rem 0.5rem 0.5rem;">
                                                </div>
                                            </div>
                                            <div class="LB4I">
                                                <div class="_3fS2 o-cw2">
                                                    <canvas id="myChart4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End đồ thị -->
                    
                </section>

                <!-- Đã có giao dịch -->
                @if (count($transactions) > 0)
                <div class="_2AsN">
                    <div class="LB4I">
                        <div class="_3fS2 o-cw">
                            <div>
                                <div class="oTaE">
                                    <div>
                                        <div class="_289Q">
                                            <div class="LB4I" style="margin: 0px -0.5rem;">
                                                <div class="_3fS2 _1SIO _22vv _3Qdf _3wdJ" style="padding: 0.5rem;">
                                                    <span class="_1kYs">Năm <?php echo date('Y') ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($transactions as $transaction)                             
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
                                                                    <span class="_3-9b _1Oob" style="background-color: {{$transaction->category->color}};">
                                                                        <img alt="{{$transaction->category->title}}" src="{{$transaction->category->icon}}">
                                                                    </span>
                                                                </div>
                                                                <div class="LB4I YM-8" style="margin: 0px -0.5rem;">
                                                                    <div class="_3fS2 pwUH _3eZo" style="padding: 0rem 0.5rem;">
                                                                        <span class="-ESZ">
                                                                            <span class="_1BDz">
                                                                                <span class="KKUC">{{$transaction->category->title}}</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="_3fS2 pwUH _15HY" style="padding: 0rem 0.5rem;">
                                                                        <span class="_1SwE">
                                                                            @if ($transaction->note != null)
                                                                                {{$transaction->note}}
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                    <div class="_3fS2 pwUH _2Be4" style="padding: 0rem 0.5rem;"></div>
                                                                    <div class="_3fS2 pwUH cycle" style="padding: 0rem 0.5rem;"></div>
                                                                    <div class="_3fS2 pwUH reminder" style="padding: 0rem 0.5rem;"></div>
                                                                </div>
                                                                <div class="_3fS2 _5CwE _2u24 pwUH _17bJ" style="padding: 0rem 0.5rem;">
                                                                    <div class="VSBN">
                                                                        @if ($transaction->amount > 0)
                                                                        <div class="_3Tj5 _210-" style="color:#2dba75;">{{$transaction->amount}}VND</div>
                                                                        @else
                                                                        <div class="_3Tj5 _210-">{{$transaction->amount}}VND</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2XTe"></div>
                                            </div>
                                            <!-- End giao dịch -->
                                        @endforeach
                                        <div class="_2Pnj"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- End chưa có giao dịch -->
            </div>
            <!--    End main    -->
        </div>
    </div>
@endsection

@section("script")
    <script src="src/js/dealsAllYear.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function myChart3(data){
            var category= [];
            var amount = [];
            var color = [];
            data.map(value =>{
                category.push(value.category);
                color.push(value.color);
                amount.push(value.amount);
            })
            var ctx3 = document.getElementById("myChart3").getContext("2d");
            var data3 = {
            labels: category,
            datasets: [{
                label: 'My First Dataset',
                data: amount,
                backgroundColor: color,
                hoverOffset: 4
            }]
            };

            const config3 = {
                type: 'doughnut',
                data: data3,
            };

            var myBarChart = new Chart(ctx3,config3);
        }

        function getApi3(){
            const user_id = document.querySelector('#user_id').value;
            fetch('http://localhost/laptrinhweb/public/api/dealsAllYear/'+user_id+'/myChart3')
            .then(response => response.json())
            .then(data => myChart3(data));
            // .then(data => console.log(data));
        }
    
        getApi3();
    </script>
    <script>
        function myChart4(data) {
            var category= [];
            var amount = [];
            var color = [];
            data.map(value =>{
                category.push(value.category);
                color.push(value.color);
                amount.push(value.amount);
            })
            var ctx4 = document.getElementById("myChart4").getContext("2d");
            var data4 = {
            labels: category,
            datasets: [{
                label: 'My First Dataset',
                data: amount,
                backgroundColor: color,
                hoverOffset: 4
            }]
            };

            const config4 = {
                type: 'doughnut',
                data: data4,
            };

            var myBarChart = new Chart(ctx4,config4);
        }

        function getApi4(){
            const user_id = document.querySelector('#user_id').value;
            fetch('http://localhost/laptrinhweb/public/api/dealsAllYear/'+user_id+'/myChart4')
            .then(response => response.json())
            .then(data => myChart4(data));
        }
    
        getApi4();
    </script>
@endsection