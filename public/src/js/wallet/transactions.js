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

// Thêm giao dịch
const UzPn = $('.UzPn._10vh');
const addInverse = UzPn.querySelector('.egUi.addInverse._3SdL._2_oj._1mpn._3dgm');
const _2XTe1 = UzPn.querySelector('._2XTe');
const _31E1 = UzPn.querySelector('._31E1');     //form thêm giao dịch
const _3SdL = _31E1.querySelector('._3SdL._2_oj.vMKQ');
const input = _31E1.querySelectorAll('._3Iet.IhHS');  //các form điền thông tin giao dịch
const category = input.item(0).querySelectorAll('.childcategory');

const I7xv = input.item(0).querySelector('.I7xv');
let choose;
let check2 = false;
let checkCategory = false;
let dk1 = false;
let dk2 = false;
let dk3 = false;

const type = _31E1.querySelectorAll('.type');
type.forEach(function(value,index) {
    value.onclick = function() {
        if(index === 0) {
            input.item(2).querySelector('input').style.color = '#fb6666';
            input.item(2).querySelector('input').value = -1*( input.item(2).querySelector('input').value);
            dk3 = false;
        }else{
            input.item(2).querySelector('input').style.color = '#12c48b';
            input.item(2).querySelector('input').value = Math.abs( input.item(2).querySelector('input').value);
            dk3 = true;
        }
    }
})

const addTranslation = {
    handleEvents: function () {
        addInverse.onclick = function () {
            UzPn.classList.add('_3Eyk');
            _2XTe1.classList.add('_2Gxn');
        }

        input.forEach(function(value,index){
            value.onclick = function () {
                choose = value;
                if(index === 0){
                    value.classList.add('_2nzV');
                }
            }

            value.oninput = function () {
                if(index === 2){
                    const num = value.querySelector('input')
                    if(!dk3){
                        num.value = -1*Math.abs(num.value);
                    }
                    if(num.value != '' && num.value != 0){
                        dk2 = true;

                        if(dk1 && dk2) {
                            _3SdL.disabled = false;
                        }
                    }else{
                        dk2 = false;
                        _3SdL.disabled = true;
                    }
                }
            }
        });

        category.forEach(function(value,index){
            value.onclick = function () {
                I7xv.querySelector('._3-9b._2_Bp').innerHTML = value.querySelector('._3-9b._1Oob').innerHTML;
                I7xv.querySelector('._3-9b._2_Bp').style.backgroundColor =  value.querySelector('._3-9b._1Oob').style.backgroundColor;
                I7xv.querySelector('.-ESZ ._1BDz .KKUC').innerText = value.querySelector('.KKUC').innerText;
                dk1 = true;

                input.item(0).querySelector('.category_id').value = value.querySelector('.id_category').innerText;

                if(dk1 && dk2) {
                    _3SdL.disabled = false;
                }

                checkCategory = true;
            }
        })
    },
    start: function(){
        this.handleEvents();
    }
}

addTranslation.start();


// Chỉnh sửa giao dich
const _1BwG = $$('._1BwG._1tO1');
let _2k7K;
let _2XTe3;
let jcQj;
let check1 = false;
let choose1;
let checkCategory1 = false;

const ReactModal__Overlay = $('.ReactModal__Overlay');
const _36Dk = ReactModal__Overlay.querySelector('._36Dk');
const _3WuR = ReactModal__Overlay.querySelector('._3WuR._1gOp ');
let check4 = false;

const fixTransaction = {
    handleEvents : function () {
        _1BwG.forEach(function(value,index){
            value.onclick = function (e) {
                _2k7K = value.querySelector('._2k7K');
                ReactModal__Overlay.querySelector('.id').value = value.querySelector('.id').value;
        
                if(_2k7K.contains(e.target)){
                    
                }else if(value.contains(e.target)){
                    value.querySelector('._2XTe').classList.add('_2Gxn');
                    jcQj = value.querySelector('.jcQj');
                    jcQj.classList.add('_1Mlv');
                    _2XTe3 = value.querySelector('._2XTe._2Gxn');
                    check1 = true;     

                    const _3SdL2 = jcQj.querySelector('._3SdL._2_oj.vMKQ ');
                    const _3SdL3 = jcQj.querySelector('._3SdL._1_Kr');   // nút xóa
                    let dk4 = false;
                    let dk5 = false;

                    const type1 = jcQj.querySelectorAll('.type');

                    if(jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').value > 0){
                        dk5 = true;
                    }else{
                        dk5 = false;
                    }

                    type1.forEach(function(value1,index) {
                        value1.onclick = function() {
                            if(index === 0) {
                                jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').style.color = '#fb6666';
                                jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').value = -1*(jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').value);
                                dk5 = false;
                            }else{
                                jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').style.color = '#12c48b';
                                jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').value = Math.abs(jcQj.querySelectorAll('._3Iet.IhHS').item(2).querySelector('input').value);
                                dk5 = true;
                            }
                        }
                    })

                    jcQj.querySelectorAll('._3Iet.IhHS').forEach(function (value1,index) {
                        value1.onclick = function () {
                            choose1 = value1;
                            if(index === 0){
                                value1.classList.add('_2nzV');
                            }
                        }

                        value1.oninput = function () {
                            if(index === 2){
                                const num = value1.querySelector('input')
                                if(!dk5){
                                    num.value = -1*Math.abs(num.value);
                                }
                                if(num.value != '' && num.value != 0){
                                    dk4 = false;
                                    _3SdL2.disabled = false;
                                }else{
                                    dk4 = true;
                                    _3SdL2.disabled = true;
                                }
                            }
                        }
                    })

                    const category1 = jcQj.querySelectorAll('.childcategory')
                    const I7xv1 = jcQj.querySelector('.I7xv');

                    category1.forEach(function(value1,index){
                        value1.onclick = function () {
                            I7xv1.querySelector('._3-9b._2_Bp').innerHTML = value1.querySelector('._3-9b._1Oob').innerHTML;
                            I7xv1.querySelector('._3-9b._2_Bp').style.backgroundColor =  value1.querySelector('._3-9b._1Oob').style.backgroundColor;
                            I7xv1.querySelector('.-ESZ ._1BDz .KKUC').innerText = value1.querySelector('.KKUC').innerText;
            
                            jcQj.querySelectorAll('._3Iet.IhHS').item(0).querySelector('.category_id').value = value1.querySelector('.id_category').innerText;
            
                            if(!dk4) {
                                _3SdL2.disabled = false;
                            }
            
                            checkCategory1 = true;
                        }
                    })

                    _3SdL3.onclick = function() {
                        ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
                        check4 = true;
                    }
                } 
            }         
        })
    },
    start : function(){
        this.handleEvents();
    }
}

fixTransaction.start();

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
            $('.UzPn._10vh').style.zIndex = 11;
            check = false;
        }
    }else{
        if(account.contains(e.target)){
            _2XTe.classList.add('_2Gxn');
            uZrZ.classList.add('_1z7D');
            _1zUK.classList.add('_1z7D');
            _1WaF.classList.add('_1z7D');
            $('.UzPn._10vh').style.zIndex = 9;
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
        if(choose1){
            if(!choose1.contains(e.target) || checkCategory1){
                choose1.classList.remove('_2nzV');
                checkCategory1 = false;
            }
        }
    }

    if(check2){
        const egUi = UzPn.querySelector('.egUi.B8bm');      // nút x
        const closeSecondary  = UzPn.querySelector('.egUi.closeSecondary._3SdL._3zVS._1mpn._3dgm');   // nút đóng
        if(_2XTe1 == e.target || egUi.contains(e.target) || closeSecondary.contains(e.target)){
            _2XTe1.classList.remove('_2Gxn');
            UzPn.classList.remove('_3Eyk');
            check2 = false;
        }
        if(choose){
            if(!choose.contains(e.target) || checkCategory){
                choose.classList.remove('_2nzV');
                checkCategory = false;
            }
        }
    }else{
        if(addInverse.contains(e.target)){
            check2 = true;
        }
    }

    if(check4){
        if(_36Dk.contains(e.target) || _3WuR.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            check4 = false;
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


// Theo số tiền
const rc_slider = $('.rc-slider');
const rc_slider_track = $('.rc-slider-track.rc-slider-track-1');
const rc_slider_handle1 = $('.rc-slider-handle.rc-slider-handle-1');
const rc_slider_handle2 = $('.rc-slider-handle.rc-slider-handle-2');
const _261b = $('._261b');
const _3RqA = $('._3RqA');
const _261bGia = _261b.innerText;

rc_slider.addEventListener('click', function (e) {
    // Get the target
    const target = e.target;

    // Get the bounding rectangle of target
    const rect = target.getBoundingClientRect();

    // Mouse position
    const x = e.clientX - rect.left;
    const offsetWidth = rc_slider.offsetWidth;
    const pasent = (x/offsetWidth)*100;
    rc_slider_track.style.left = pasent+"%";
    rc_slider_track.style.width = (100-pasent)+"%";
    rc_slider_handle1.style.left = pasent+"%";
    const giaMax = _261bGia * -1;
    const giaMin = _3RqA.innerText * -1;
    let thaydoi = (giaMax - (giaMax-giaMin)/100*pasent);
    thaydoi = parseInt(thaydoi);
    thaydoi = thaydoi*-1;
    _261b.innerText = thaydoi;
});

//  scroll
document.onscroll = function(){
    if(window.scrollY > 60){
        UzPn.classList.add('zpcn');
    }else{
        UzPn.classList.remove('zpcn');
    }
}

// giao dich
const giaodich = $$('._2k7K');
const _3fS2 = $$('._3fS2._1Izi');
giaodich.forEach(function(value,index){
    value.onclick = function(){
        value.querySelector('._17Fo._2Tq6').classList.toggle('_3FsX');
        if($$('._17Fo._2Tq6._3FsX').length > 0){
            _3fS2.forEach(function(value1){
                value1.classList.add('_3dgm');
            })
        }else{
            _3fS2.forEach(function(value1){
                value1.classList.remove('_3dgm');
            })
        }
    }
})
