const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');
selected.forEach(function(value,index){
    if(index == 2){
        value.classList.add('selected');
    }
})


// Chỉnh sửa ngân sách
const _2AsN = $$('._2AsN');
const _3SdL = _2AsN.item(1).querySelector('._3SdL._3j13');
const ReactModal__Overlay = $('.ReactModal__Overlay');
const _3EUw = ReactModal__Overlay.querySelector('._3EUw');
const _36Dk = ReactModal__Overlay.querySelector('._36Dk');
const _2BJz = ReactModal__Overlay.querySelector('._2BJz');
const _2wfn1 = _2BJz.querySelector('._2wfn:nth-child(2)');
const _2wfn2 = _2BJz.querySelector('._2wfn:nth-child(3)');
const _2wfn3 = _2BJz.querySelector('._2wfn:last-child');
const _3fMh = _2wfn3.querySelector('._3fMh');
const allCategory = _3fMh.querySelector('.allCategory');
const childcategories = _3fMh.querySelectorAll('.Category');
const _2axu = ReactModal__Overlay.querySelector('._2axu ._3WuR._3SdL._2_oj');
const huyButton = ReactModal__Overlay.querySelector('._2axu ._3WuR._3SdL._3qcS');
const _3q8K = _3fMh.querySelector('._3q8K span span');
const _3UJt = _3fMh.querySelector('._3UJt span span');
const num = _3q8K.innerText;

let checkbutton1 = true;
let checkbutton2 = true;
let checkbutton3 = true;

function checkButton() {
    if(checkbutton1 && checkbutton2 && checkbutton3){
        _2axu.disabled = false;
    }else{
        _2axu.disabled = true;
    }
}

allCategory.onclick = function(){
    if(allCategory.querySelector('input').checked){
        childcategories.forEach(function(value) {
            value.querySelector('input').checked = true;
        })
        _3q8K.innerText = num;
        _3UJt.innerText = 'Tất cả các danh mục';
        checkbutton3 = true;
    }else{
        childcategories.forEach(function(value) {
            value.querySelector('input').checked = false;
        })
        _3q8K.innerText = '';
        _3UJt.innerText = '';
        checkbutton3 = false;
    }

    checkButton();
}

childcategories.forEach(function(value) {
    value.onclick = function(){
        if(_3fMh.querySelectorAll('.Category input:checked').length == _3fMh.querySelectorAll('.Category').length){
            allCategory.querySelector('input').checked = true;
            _3q8K.innerText = num;
            _3UJt.innerText = 'Tất cả các danh mục';
        }else{
            allCategory.querySelector('input').checked = false;
            _3q8K.innerText = _3fMh.querySelectorAll('.Category input:checked').length;
            _3UJt.innerText = _3fMh.querySelectorAll('.Category input:checked').length + ' danh mục';
        }

        if(_3fMh.querySelectorAll('.Category input:checked').length != 0){
            checkbutton3 = true;
        }else{
            checkbutton3 = false;
        }

        checkButton();
    }
})

_2wfn1.querySelector('input').oninput = function(){
    if(_2wfn1.querySelector('input').value != ''){
        checkbutton1 = true;
    }else{
        checkbutton1 = false;
    }

    checkButton();
}

_2wfn2.querySelector('input').oninput = function(){
    if(_2wfn2.querySelector('input').value != '' && _2wfn2.querySelector('input').value > 0){
        checkbutton2 = true;
    }else{
        checkbutton2 = false;
    }

    checkButton();
}

let check3 = false;

let check2 = false;

_3SdL.onclick = function(){
    ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
    document.getElementsByTagName("BODY")[0].style.overflowY = 'hidden';
}

// Chỉnh sửa giao dich
const _1BwG = $$('._1BwG._1tO1');
let _2k7K;
let _2XTe3;
let jcQj;
let check1 = false;

//   Su li account
const account = $('.dropdownWrap');
const _2XTe = account.querySelector('._2XTe');
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
        const egUi = jcQj.querySelector('.egUi.B8bm');      // nút đóng
        const _3SdL = jcQj.querySelector('._3SdL._3qcS');   // nút hủy
        if(_2XTe3 == e.target || egUi.contains(e.target) || _3SdL.contains(e.target)){
            _2XTe3.classList.remove('_2Gxn');
            jcQj.classList.remove('_1Mlv');
            check1 = false;
        }
    }else{
        _1BwG.forEach(function(value){
            if(value.contains(e.target)){
                value.querySelector('._2XTe').classList.add('_2Gxn');
                jcQj = value.querySelector('.jcQj');
                jcQj.classList.add('_1Mlv');
                _2XTe3 = value.querySelector('._2XTe._2Gxn');
                check1 = true;     
            }          
        })
    }

    if(check2){
        if(!_3EUw.contains(e.target) || _36Dk.contains(e.target) || huyButton.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            document.getElementsByTagName("BODY")[0].style.overflowY = 'initial';
            check2 = false;
        }
    }else{
        if(_3SdL.contains(e.target)){
            check2 = true;
        }
    }

    if(check3){
        if(!_3fMh.contains(e.target)){
            _3fMh.classList.remove('is-open');
            check3 = false;
        }
    }else{
        if(_3fMh.contains(e.target)){
            _3fMh.classList.add('is-open');
            check3 = true;
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
    if(window.scrollY >= Top){
        UzPn.classList.add('zpcn');
    }else{
        UzPn.classList.remove('zpcn');
    }
}
