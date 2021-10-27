const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);


//  SideBarLeft
const LWqP = $('.LWqP');
const selected = LWqP.querySelectorAll('._3WuR._1gOp')
selected.forEach(function(value,index){
    if(index == 1){
        value.classList.add('selected');
    }
})


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
}

//  xóa, hợp nhất, Thêm
const UzPn = $('.UzPn._2pdK');
const DfeI = UzPn.querySelector('._3SdL.DfeI ');  //nút xóa
const _3j13 = UzPn.querySelector('._3SdL._3j13'); // nút hợp nhất 
const Top = UzPn.offsetTop;  // độ cao của UzPn
const _3SdL = UzPn.querySelector('._3SdL._2_oj');

document.onscroll = function(){
    if(window.scrollY >= Top){
        UzPn.classList.add('_2i1J');
        _3SdL.classList.add('_1rIk');
    }else{
        UzPn.classList.remove('_2i1J');
        _3SdL.classList.remove('_1rIk');
    }
}

//  category
const category1 = $('.category1');
const jcQj1 = category1.querySelectorAll('.jcQj');
let _3FsX1;

jcQj1.forEach(function(value){
    value.onclick = function(e){
        if(value.querySelector('._2k7K').contains(e.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        _3FsX1 = $$('._17Fo._3FsX').length;
        if(_3FsX1 > 1){
            _3j13.disabled = false;
            DfeI.disabled = false;
        }else if(_3FsX1 > 0){
            _3j13.disabled = true;
            DfeI.disabled = false;
        }else{
            _3j13.disabled = true;
            DfeI.disabled = true;
        }
    }
})

const category2 = $('.category2');
const jcQj2 = category2.querySelectorAll('.jcQj');
let _3FsX2;

jcQj2.forEach(function(value){
    value.onclick = function(e){
        if(value.querySelector('._2k7K').contains(e.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        _3FsX2 = $$('._17Fo._3FsX').length;
        if(_3FsX2 > 1){
            _3j13.disabled = false;
            DfeI.disabled = false;
        }else if(_3FsX2 > 0){
            _3j13.disabled = true;
            DfeI.disabled = false;
        }else{
            _3j13.disabled = true;
            DfeI.disabled = true;
        }
    }
})

