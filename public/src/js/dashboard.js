const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');
selected.forEach(function(value,index){
    if(index == 0){
        value.classList.add('selected');
    }
})

// them vi
const _2ylm = $('._2ylm');
const LB4I = _2ylm.querySelectorAll('._3fS2.o-cw._1ubS._1B3o');
const _3fS2 = LB4I.item(LB4I.length - 1);
const _2XTe1 = _3fS2.querySelector('._2XTe');
const name1 = _3fS2.querySelector('#name');
const jcQj = _3fS2.querySelector('.jcQj');
const addWallet = _3fS2.querySelector('._3SdL._13Jl.jsip');

let check1 = false;

addWallet.onclick = function(){
    jcQj.classList.add('_2Xou');
    _2XTe1.classList.add('_2Gxn');
    check1 = true;
}

name1.oninput = function(){
    if(name1.value != ''){
        _3fS2.querySelector('._1KCh ._3SdL._2_oj.oiDm').disabled = false;
    }else{
        _3fS2.querySelector('._1KCh ._3SdL._2_oj.oiDm').disabled = true;
    }
}

//   Su li account
const account = $('.dropdownWrap');
const _2XTe = $('._2XTe');
const uZrZ = $('.uZrZ');
const _1zUK = $('._1zUK');
const _1WaF = $('._1WaF');

let check = false;

document.onclick = function(e){
    if(check){
        if(!_1zUK.contains(e.target)){
            _2XTe.classList.remove('_2Gxn');
            uZrZ.classList.remove('_1z7D');
            _1zUK.classList.remove('_1z7D');
            _1WaF.classList.remove('_1z7D');
            check = false;
        }
    }else{
        if(account.contains(e.target)){
            _2XTe.classList.add('_2Gxn');
            uZrZ.classList.add('_1z7D');
            _1zUK.classList.add('_1z7D');
            _1WaF.classList.add('_1z7D');
            check = true;
        }
    }

    if(check1){
        if(_2XTe1.contains(e.target)){
            jcQj.classList.remove('_2Xou');
            _2XTe1.classList.remove('_2Gxn');
        }
    }
}

//  Lịch
const _2pOY = $('._6Szy._2pOY');
const _2sWB = $('._6Szy._2sWB');
const Olv6 = $('.Olv6');

function getDate(month,year){
    const firstDate = new Date(year,month,1).getDate();
    const lastDate = new Date(year,month,0).getDate();
    return 'Th' + month + ' 0' + firstDate + ', ' + year + ' - ' + 'Th' + month + ' ' + lastDate + ', ' + year;
}
var currentdate = new Date();
let currentmonth = currentdate.getMonth()+1;
let currentyear = currentdate.getFullYear();
Olv6.innerText = getDate(currentmonth,currentyear);

_2sWB.onclick = function () {
    if(currentmonth == 12){
        currentmonth = 1;
        currentyear += 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }else{
        currentmonth += 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }
}

_2pOY.onclick = function () {
    if(currentmonth == 1){
        currentmonth = 12;
        currentyear -= 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }else{
        currentmonth -= 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }
}


//  scroll
const UzPn = $('.UzPn._10vh');
const Top = UzPn.offsetTop;

document.onscroll = function(){
    if(window.scrollY > Top){
        UzPn.classList.add('zpcn');
    }else{
        UzPn.classList.remove('zpcn');
    }
}