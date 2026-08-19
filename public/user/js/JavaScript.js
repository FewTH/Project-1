//เอาไว้บอกว่าให้สร้าง html ให้เสร็จก่อนแล้วค่อยมาเรียกใช่ js
document.addEventListener('DOMContentLoaded', function(){

//ส่วนของหน้า profile.blade.php
//ปุ่มเปิดเปลี่ยนรูปโปรไฟล์ หน้า profile.blade.php
const btnopen_1 = document.getElementById('btn_open_1');

if(btnopen_1){
    btnopen_1.addEventListener('click', function(){
        document.getElementById('image-popup').showModal();
    });
}

const btnclose_1 = document.getElementById('btn_close_1');

if(btnclose_1){
    btnclose_1.addEventListener('click', function(){
        document.getElementById('image-popup').close();
    });
}

//ปุ่มเปิดpopup หน้า profile.blade.php
const editinformation = document.getElementById('Edit_information')

if(editinformation){
    editinformation.addEventListener('click', function(){
        document.getElementById('popup_btn_edit').showModal();
});
}

//ปุ่มปิดpopup หน้า profile.blade.php
const btncloseedit = document.getElementById ('btn_close_Edit');

if(btncloseedit){
    btncloseedit.addEventListener('click', function(){
        document.getElementById('popup_btn_edit').close();
    });
}




});