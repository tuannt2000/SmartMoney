const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// create budgets
const _2ylm = $('._2ylm');
const _3SdL = _2ylm.querySelector('._3SdL._2_oj');
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
const _3q8K = _3fMh.querySelector('._3q8K span span');
const _3UJt = _3fMh.querySelector('._3UJt span span');
const num = _3q8K.innerText;

let checkbutton1 = false;
let checkbutton2 = false;
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

let check2 = false;

let check1 = false;

_3SdL.onclick = function(){
    ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
}

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');
selected.forEach(function(value,index){
    if(index == 2){
        value.classList.add('selected');
    }
})

const account = $('.dropdownWrap');
const _2XTe = $('._2XTe');
const uZrZ = $('.uZrZ');
const _1zUK = $('._1zUK');
const _1WaF = $('._1WaF');
const LWqP = $('.LWqP');


//   Su li account
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
        if(!_3EUw.contains(e.target) || _36Dk.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            check1 = false;
        }
    }else{
        if(_3SdL.contains(e.target)){
            check1 = true;
        }
    }

    if(check2){
        if(!_3fMh.contains(e.target)){
            _3fMh.classList.remove('is-open');
            check2 = false;
        }
    }else{
        if(_3fMh.contains(e.target)){
            _3fMh.classList.add('is-open');
            check2 = true;
        }
    }
}