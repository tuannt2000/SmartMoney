@extends("layout.index")

@section("title")

<title>Tổng quan</title>

@endsection

@section("content")
    <input type="hidden" id ="wallet" value="{{$wallet->id}}">
    <div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.header')
            <!--    End header  -->
            <!--    Main      -->
            <div>
                <!-- Thêm giao dịch -->
                @include('wallet.layout.addTransaction')
                <!-- End thêm giao dịch -->

                <!-- Tổng tiền -->
                @include('wallet.layout.totalMoney')
                <!-- End tổng tiền -->

                <!-- Đồ thị -->
                @include('layout.graph')
                <!-- End đồ thị -->
                
                @if (count($transactions) == 0)
                <!-- Chưa có giao dịch nào -->
                <div class="_2AsN">
                    <div class="_2jqr">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="154" height="155" viewBox="0 0 154 155"><defs><filter id="overview-empty-a" width="100%" height="100%" x="0%" y="0%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceGraphic"></feGaussianBlur></filter><rect id="overview-empty-b" width="96" height="128" rx="4"></rect><linearGradient id="overview-empty-d" x1="50%" x2="50%" y1="0%" y2="33.855%"><stop offset="0%" stop-color="#DAAB6F"></stop><stop offset="100%" stop-color="#B4753D"></stop></linearGradient><path id="overview-empty-c" d="M18 36C8.059 36 0 27.941 0 18S8.059 0 18 0s18 8.059 18 18-8.059 18-18 18zm0-8c5.523 0 10-4.477 10-10S23.523 8 18 8 8 12.477 8 18s4.477 10 10 10z"></path><linearGradient id="overview-empty-e" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#FFDD73"></stop><stop offset="100%" stop-color="#F1B742"></stop></linearGradient><linearGradient id="overview-empty-g" x1="0%" x2="102%" y1="0%" y2="101%"><stop offset="0%" stop-color="#3E87EF"></stop><stop offset="100%" stop-color="#86C8FF"></stop></linearGradient><linearGradient id="overview-empty-h" x1="28.281%" x2="49.28%" y1="2.682%" y2="78.405%"><stop offset="0%" stop-color="#FF7480"></stop><stop offset="100%" stop-color="#D4334B"></stop></linearGradient><linearGradient id="overview-empty-i" x1="54.215%" x2="54.215%" y1="19.122%" y2="86.792%"><stop offset="0%" stop-color="#60D08E"></stop><stop offset="100%" stop-color="#31A156"></stop></linearGradient><linearGradient id="overview-empty-j" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#AAA"></stop><stop offset="100%"></stop></linearGradient><path id="overview-empty-k" d="M68.032 0H4.002A4.003 4.003 0 0 0 0 4.007v119.986A4 4 0 0 0 4.003 128h87.994A4.003 4.003 0 0 0 96 123.993V28.03L68.035.03 68.032 0z"></path><path id="overview-empty-l" d="M96 28H71.998A4 4 0 0 1 68 24V0l28 28z"></path><path id="overview-empty-m" d="M18 36C8.059 36 0 27.941 0 18S8.059 0 18 0s18 8.059 18 18-8.059 18-18 18zm0-8c5.523 0 10-4.477 10-10S23.523 8 18 8 8 12.477 8 18s4.477 10 10 10z"></path></defs><g fill="none" fill-rule="evenodd" transform="translate(-1)"><ellipse cx="81" cy="148" fill="#EDF2F4" filter="url(#overview-empty-a)" rx="60" ry="7"></ellipse><g transform="rotate(-15 94.65 10.254)"><use fill="#FFF" xlink:href="#overview-empty-b"></use><rect width="95" height="127" x=".5" y=".5" stroke="#BACDD7" rx="4"></rect><g transform="translate(30 75)"><mask id="overview-empty-f" fill="#fff"><use xlink:href="#overview-empty-c"></use></mask><use fill="url(#overview-empty-d)" xlink:href="#overview-empty-c"></use><path fill="url(#overview-empty-e)" d="M18-1h21v32.359L18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-g)" d="M-1.17 34.982l26.527 6.595L39 31.359 18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-h)" d="M-1.17 34.982l-5.525-14.28 4.423-14.12L18 18z" mask="url(#overview-empty-f)"></path><path fill="url(#overview-empty-i)" d="M11.464-2.796L.02.748l-2.24 5.933L18 18z" mask="url(#overview-empty-f)"></path><circle cx="18" cy="18" r="12" fill="url(#overview-empty-j)" fill-opacity=".16" mask="url(#overview-empty-f)"></circle></g><g transform="translate(66 79)"><circle cx="3" cy="3" r="3" fill="#F9CE60"></circle><rect width="12" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><g transform="translate(48 113)"><circle cx="3" cy="3" r="3" fill="#64A9F7"></circle><rect width="10" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><g transform="translate(8 92)"><circle cx="17" cy="3" r="3" fill="#E75063"></circle><rect width="12" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="translate(15 72)"><circle cx="19" cy="3" r="3" fill="#50C07B"></circle><rect width="14" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="translate(42 67)"><circle cx="3" cy="3" r="3" fill="#D19F64"></circle><rect width="8" height="2" x="8" y="2" fill="#B1BFC7" rx="1"></rect></g><path fill="#E5EBEE" d="M13 39.503c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6-6.012A1.5 1.5 0 0 1 20.5 32h1c.828 0 1.5.669 1.5 1.491V56.51A1.5 1.5 0 0 1 21.5 58h-1c-.828 0-1.5-.669-1.5-1.491V33.49zm6 10.014c0-.831.679-1.505 1.5-1.505h1c.828 0 1.5.667 1.5 1.505v12.99c0 .831-.679 1.505-1.5 1.505h-1c-.828 0-1.5-.667-1.5-1.505v-12.99zm6 8c0-.831.679-1.505 1.5-1.505h1a1.5 1.5 0 0 1 1.5 1.505v4.99c0 .831-.679 1.505-1.5 1.505h-1a1.5 1.5 0 0 1-1.5-1.505v-4.99zm6-5.014A1.5 1.5 0 0 1 38.5 45h1c.828 0 1.5.663 1.5 1.491V56.51A1.5 1.5 0 0 1 39.5 58h-1c-.828 0-1.5-.663-1.5-1.491V46.49zm6-6.988c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6-2.008c0-.826.679-1.495 1.5-1.495h1c.828 0 1.5.67 1.5 1.495v19.01c0 .826-.679 1.495-1.5 1.495h-1c-.828 0-1.5-.67-1.5-1.495v-19.01zm6 10c0-.825.679-1.495 1.5-1.495h1c.828 0 1.5.68 1.5 1.496v9.008C59 57.33 58.321 58 57.5 58h-1c-.828 0-1.5-.68-1.5-1.496v-9.008zm6-3.99c0-.831.679-1.505 1.5-1.505h1c.828 0 1.5.667 1.5 1.505v12.99c0 .831-.679 1.505-1.5 1.505h-1c-.828 0-1.5-.667-1.5-1.505v-12.99zm6 8c0-.831.679-1.505 1.5-1.505h1a1.5 1.5 0 0 1 1.5 1.505v4.99c0 .831-.679 1.505-1.5 1.505h-1a1.5 1.5 0 0 1-1.5-1.505v-4.99zm6-12.002c0-.83.679-1.503 1.5-1.503h1c.828 0 1.5.665 1.5 1.503v16.994c0 .83-.679 1.503-1.5 1.503h-1c-.828 0-1.5-.665-1.5-1.503V39.503zm6 7.993c0-.826.679-1.496 1.5-1.496h1c.828 0 1.5.68 1.5 1.496v9.008C83 57.33 82.321 58 81.5 58h-1c-.828 0-1.5-.68-1.5-1.496v-9.008z"></path><rect width="16" height="2" x="13" y="12" fill="#BACDD7" rx="1"></rect><rect width="22" height="2" x="13" y="16" fill="#BACDD7" rx="1"></rect></g><path fill="#324C5B" fill-opacity=".04" d="M57.478 9.64L36.076 119.534c-.421 2.164.947 4.427 3.069 5.06l39.772 11.85 5.38-1.503 23.357-68.726L71.502 6 57.478 9.64z"></path><g transform="rotate(15 34.35 260.914)"><use fill="#FFF" xlink:href="#overview-empty-k"></use><path stroke="#BACDD7" d="M67.798.5H4.003A3.503 3.503 0 0 0 .5 4.007v119.986a3.5 3.5 0 0 0 3.503 3.507h87.994a3.503 3.503 0 0 0 3.503-3.507V28.236L67.798.5z"></path></g><g transform="rotate(15 34.35 260.914)"><use fill="#EDF2F4" xlink:href="#overview-empty-l"></use><path stroke="#BACDD7" d="M94.793 27.5L68.5 1.207v22.794a3.5 3.5 0 0 0 3.498 3.499h22.795z"></path></g><g transform="rotate(15 -265.49 337.35)"><mask id="overview-empty-n" fill="#fff"><use xlink:href="#overview-empty-m"></use></mask><use fill="#E5EBEE" xlink:href="#overview-empty-m"></use><path fill="#E5EBEE" stroke="#FFF" d="M18-1h21v32.359L18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M-1.17 34.982l26.527 6.595L39 31.359 18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M-1.17 34.982l-5.525-14.28 4.423-14.12L18 18z" mask="url(#overview-empty-n)"></path><path fill="#E5EBEE" stroke="#FFF" d="M11.464-2.796L.02.748l-2.24 5.933L18 18z" mask="url(#overview-empty-n)"></path></g><g transform="rotate(15 -298.682 472.074)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="12" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -418.81 386.712)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="10" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -319.055 245.297)"><circle cx="17" cy="3" r="3" fill="#E5EBEE"></circle><rect width="12" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -246.597 281.882)"><circle cx="19" cy="3" r="3" fill="#E5EBEE"></circle><rect width="14" height="2" y="2" fill="#BACDD7" rx="1"></rect></g><g transform="rotate(15 -241.108 386.925)"><circle cx="3" cy="3" r="3" fill="#E5EBEE"></circle><rect width="8" height="2" x="8" y="2" fill="#BACDD7" rx="1"></rect></g><path fill="#E5EBEE" d="M74.14 29.928a1.505 1.505 0 0 1 1.837-1.06l.965.258a1.498 1.498 0 0 1 1.061 1.837l-7.505 28.011a1.505 1.505 0 0 1-1.838 1.061l-.965-.258a1.498 1.498 0 0 1-1.061-1.838l7.505-28.01zm-.418 24.74a1.507 1.507 0 0 1 1.84-1.066l.964.259a1.5 1.5 0 0 1 1.06 1.842l-1.292 4.82a1.507 1.507 0 0 1-1.839 1.065l-.964-.258a1.5 1.5 0 0 1-1.06-1.842l1.291-4.82zm6.315-.387a1.503 1.503 0 0 1 1.838-1.058l.964.259a1.5 1.5 0 0 1 1.062 1.834l-1.813 6.767a1.503 1.503 0 0 1-1.837 1.058l-.965-.258a1.5 1.5 0 0 1-1.062-1.835l1.813-6.767zm7.347-4.235a1.507 1.507 0 0 1 1.839-1.065l.964.258a1.499 1.499 0 0 1 1.06 1.843l-3.362 12.546a1.507 1.507 0 0 1-1.839 1.066l-.964-.258a1.499 1.499 0 0 1-1.06-1.843l3.362-12.547zm4.762 5.407a1.502 1.502 0 0 1 1.837-1.056l.965.259a1.505 1.505 0 0 1 1.062 1.833L93.68 65.19a1.502 1.502 0 0 1-1.837 1.056l-.965-.259a1.505 1.505 0 0 1-1.062-1.833l2.331-8.702zm8.9-10.032a1.505 1.505 0 0 1 1.839-1.062l.964.259a1.498 1.498 0 0 1 1.061 1.838l-5.434 20.282a1.505 1.505 0 0 1-1.839 1.062l-.964-.259a1.498 1.498 0 0 1-1.061-1.838l5.434-20.282zm3.209 11.21a1.504 1.504 0 0 1 1.837-1.06l.964.259c.801.214 1.275 1.04 1.062 1.835l-2.848 10.629a1.504 1.504 0 0 1-1.837 1.059l-.964-.259a1.502 1.502 0 0 1-1.062-1.835l2.848-10.629zm5.278 3.481a1.502 1.502 0 0 1 1.837-1.056l.964.258a1.505 1.505 0 0 1 1.063 1.833l-2.332 8.702a1.502 1.502 0 0 1-1.837 1.057l-.964-.259a1.505 1.505 0 0 1-1.063-1.833l2.332-8.702zm6.828-2.301a1.507 1.507 0 0 1 1.84-1.066l.964.259a1.499 1.499 0 0 1 1.06 1.842l-3.362 12.547a1.507 1.507 0 0 1-1.839 1.065l-.964-.258a1.499 1.499 0 0 1-1.06-1.842l3.361-12.547zm3.726 9.28a1.507 1.507 0 0 1 1.839-1.065l.964.258a1.5 1.5 0 0 1 1.06 1.842l-1.291 4.82a1.507 1.507 0 0 1-1.84 1.065l-.964-.258a1.5 1.5 0 0 1-1.06-1.842l1.292-4.82zm8.901-10.04a1.506 1.506 0 0 1 1.84-1.064l.963.259a1.497 1.497 0 0 1 1.061 1.84l-4.398 16.415a1.506 1.506 0 0 1-1.839 1.063l-.964-.258a1.497 1.497 0 0 1-1.06-1.84l4.397-16.415zm3.727 9.273a1.502 1.502 0 0 1 1.837-1.056l.964.258a1.505 1.505 0 0 1 1.063 1.833l-2.332 8.702a1.502 1.502 0 0 1-1.836 1.056l-.965-.258a1.505 1.505 0 0 1-1.062-1.833l2.331-8.702z"></path><g fill="#BACDD7" transform="rotate(15 -17.725 304.286)"><rect width="16" height="2" rx="1"></rect><rect width="22" height="2" y="4" rx="1"></rect></g></g></svg>
                        <span>Bạn không có giao dịch nào.</span>
                    </div>
                </div>
                <!-- End chưa có giao dịch -->
                @endif
            </div>
            <!--    End main    -->
        </div>

    </div>
@endsection

@section("script")

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="src/js/wallet/overview.js"></script>
<script>
    function myChart1 (data){
        var x = [];
        var y = [];
        data.map(value =>{
            x.push(value.amount);
            y.push(value.date);
        });
        var ctx2 = document.getElementById('myChart1').getContext("2d");
        const gradient = ctx2.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(175, 250, 169, 1)');   
        gradient.addColorStop(1, 'rgba(159, 255, 151, 0)');
        var myChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: y,
                datasets: [{
                    label: "Số dư",
                    borderColor: "rgba(45, 186, 117)",
                    pointBorderColor: "rgba(45, 186, 117)",
                    pointBackgroundColor: "white",
                    pointHoverBackgroundColor: "rgba(45, 186, 117)",
                    pointHoverBorderColor: "white",
                    pointBorderWidth: 2,
                    pointHoverRadius: 3,
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    fill: true,
                    backgroundColor: gradient,
                    borderWidth: 2,
                    data: x
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }

    function getApi1(){
        const wallet_id = document.querySelector('#wallet').value;
        fetch('./api/wallet/'+wallet_id+'/myChart1')
        .then(response => response.json())
        .then(data => myChart1(data));
    }
   
    getApi1();
</script>
<script>
    function myChart2(data) {
        var labels = [];
        var incomes = [];
        var outcomes = [];
        data.map(value =>{
            labels.push(value.date);
            incomes.push(value.income);
            outcomes.push(value.outcome);
        })

        var ctx1 = document.getElementById("myChart2").getContext("2d");
    
        var data = {
            labels: labels,
            datasets: [
                {
                    label: "Thu thập",
                    backgroundColor: "rgba(45, 186, 117)",
                    data: incomes
                },
                {
                    label: "Chi phí",
                    backgroundColor: "rgba(241, 76, 82)",
                    data: outcomes
                },
            ]
        };
        
        var myBarChart = new Chart(ctx1, {
            type: 'bar',
            data: data,
            options: {
                barValueSpacing: 20,
            }
        });
    }

    function getApi2(){
        const wallet_id = document.querySelector('#wallet').value;
        fetch('./api/wallet/'+wallet_id+'/myChart2')
        .then(response => response.json())
        .then(data => myChart2(data));
    }
   
    getApi2();
</script>
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
        const wallet_id = document.querySelector('#wallet').value;
        fetch('./api/wallet/'+wallet_id+'/myChart3')
        .then(response => response.json())
        .then(data => myChart3(data));
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
        const wallet_id = document.querySelector('#wallet').value;
        fetch('./api/wallet/'+wallet_id+'/myChart4')
        .then(response => response.json())
        .then(data => myChart4(data));
    }
   
    getApi4();
</script>

@endsection