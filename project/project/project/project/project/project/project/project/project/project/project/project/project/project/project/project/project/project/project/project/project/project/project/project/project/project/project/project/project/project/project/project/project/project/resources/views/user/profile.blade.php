<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์</title>
   <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>
<body>
<!-- ชื่อผู้ใช้งาน -->
<div class="btn-user-wrapper-1">
    <a href="{{ url('user/profile') }}" class="btn-user">
        <img src="{{ asset('user/img/user.png') }}" alt="รูปผู้ใช้งาน" class="btn-user-img" id="btn-user-wrapper-img">
        <span>User</span>
   </a>
</div>
<!--กล่องครอบเมนูปิดแท็กตรงปุ่มออกจากระบบ-->
<div class="Top_frame">
    <div class="container-1">
   <!-- โลโกมหาลัย -->
   <div class="img-Logo">
        <img src="{{ asset('admin/img/Logo.png') }}" alt="รูปโลโกมหาลัย" class="Logo-img">
   </div>
   <!-- ปุ่มเมนู -->
   <div class="btn-Sidebar">
        <a href="{{ url('user/home') }}" class="btn-Home-1">
            <img src="{{ asset('user/img/Home.png') }}" alt="รูปบ้าน" class="btn-Home-img-1">
            <span>หน้าหลัก</span>
        </a>
        <a href="{{ url('user/spin') }}" class="btn-Random-1">
            <img src="{{ asset('user/img/Random.png') }}" alt="รูปสุ่มของรางวัล" class="btn-Random-img-1">
            <span>สุ่มของรางวัล</span>
        </a>
        <a href="{{ url('user/contact') }}" class="btn-Contact-1">
            <img src="{{ asset('user/img/Contact.png') }}" alt="รูปติดต่อเรา" class="btn-Contact-img-1">
            <span>ติดต่อเรา</span>
        </a>
    </div>
        <!-- ปุ่มกดออกจากระบบ -->
        <div class="btn-logout-wrapper">
            <a href="{{ url('user/loginuser') }}" class="btn-logout">
                <img src="{{ asset('user/img/รูปปุ่มกดออก.png') }}" alt="รูปออกจากระบบ" class="btn-logout-img">
                <span>ออกจากระบบ </span>
            </a>
        </div>
    </div>
</div> 
<!--เอาไว้ควบคุมส่วนกลางของเว็บปิดล่างสุด-->
<div class="main-content-1">
    <!-- ชื่อโปรไฟล์-->  
    <div class="My_Profile">
        <h1>โปรไฟล์ของฉัน</h1>
    </div>
<!--โปรไฟล์ปิดแท็กตรงชื่อจำนวนของรางวัล-->
<div class="Profile">
    <!--โปรไฟล์ฝั่งซ้ายปิดแท็กตรงกำลังใช้งาน-->
    <div class="profile-left">
        <!--รูปภาพผู้ใช้-->
        <div class="photo_user">
            <img src="{{ asset('user/img/รูปuser.png') }}" alt="รูปภาพผู้ใช้" class="photo_user-img" id="photo_user_img_1">
        </div>
        <!--ปุ่มไว้กดเปลี่ยนรูปมี popup เด้งขึ้นมา-->
        <div class="Change_image">
            <button class="btn-open" id="btn_open_1">
                <img src="{{ asset('user/img/รูปกล้อง.png') }}" alt="รูปกล้อง">
                <span class="Nameprofile"> เปลี่ยนรูปโปรไฟล์ </span>
            </button>
        </div>  
        <div class="useremailstatus">
            <!--ชื่อ-->
            <div class="name">
                <h2 id="username">User01</h2>
            </div>
            <!--อีเมล-->
            <div class="email">
                <p id="email_user">User01@gmail.com</p>
            </div>
            <!--สถานะ-->
            <div class="In_use">
               <span>กำลังใช้งาน</span>
            </div>
        </div>
    </div> 
    <!-- ฝั่งขวาปิดแท็กตรงชื่อจำนวนของรางวัล--->
    <div class="profile-right">
        <div class="framerandom_all">
            <!--สุ่มทั้งหมด-->
            <div class="random_all"> 
                <img src="{{ asset('user/img/รูปลูกเต๋า.png') }}" alt="รูปลูกเต๋า" class="random_all-img">
            </div>
            <!--การสุ่มทั้งหมด-->
            <div class="Random_number">
                <h1 id="Random_numberaward">0</h1>
            </div>
            <!--ชื่อสุ่มทั้งหมด-->
            <div class="all_random">
                <h4>สุ่มทั้งหมด</h4>
            </div>
        </div>
        <div class="frameReward_Box">
            <!--รูปของรางวัล-->
            <div class="Reward_Box">
                <img src="{{ asset('user/img/รูปกล่องของรางวัล.png') }}" alt="รูปกล่องของรางวัล" class="Reward_Box-img">
            </div>
            <!--จำนวนรางวัลที่ได้-->
            <div class="Number_of_Reward">
                <h1 id="number_ofaward">0</h1>
            </div>
            <!--ชื่อจำนวนของรางวัล-->
            <div class="Award_Name">
                <h4>จำนวนรางวัลที่ได้</h4>
            </div>
        </div>
    </div>
</div>

 <!--หน้า Pop-up สำหรับอัปโหลดรูป-->
<div class="popup">
    <dialog id="image_popup" class="popup-box">
        <h2 class="Change-photo">เปลี่ยนรูปโปรไฟล์</h2>
        <p class="choosephotonew">เลือกรูปภาพใหม่จากเครื่องของคุณ</p>
        <input type="file" id="uploadphoto" accept="image/*">
        <button class="btn-select-file" id="btn_select_file_1">เลือกรูปภาพ</button>
        <!-- ปุ่มยกเลิก-->
        <button class="btn-close" id="btn_close_1">ยกเลิก</button>
    </dialog>
</div>

<!--ข้อมูลผู้ใช้-->
<div class="User_Information">
    <!--ข้อมูลส่วนตัว-->
    <div class="personal_information">
        <h3>ข้อมูลส่วนตัว</h3>
        <button id="Edit_information" class="btn-Edit_information"> แก้ไขข้อมูล </button>
    </div>
    <!--ชื่อผู้ใช้-->
    <div class="username">
        <label class="Type_username"> ชื่อผู้ใช้ </label> 
        <input type="text" id="Type_name" placeholder="User01" class="input-username" disabled>
    </div>
    <!--ชื่อ-นามสกุล-->
    <div class="FirstName-LastName">
        <label class="FirstNameLastName"> ชื่อ-นามสกุล </label>
        <input type="text" id="Enter_firstname-lastname" placeholder="นายนารี ใจดี" class="input-FirstName-LastName" disabled>
    </div>
    <!--อีเมลผู้ใช้-->
    <div class="email-user">
        <label class="typeemail-user"> อีเมล </label>
        <input type="text" id="Compose_email"  placeholder="User01@gmail.com" class="input-email-user" disabled>
    </div>
    <!--เบอร์โทร-->
    <div class="phone_number">
        <label class="typephone_number"> เบอร์โทร </label>
        <input type="text" id="Enter_phonenumber" placeholder="08x-xxx-xxxx" class="input-phonenumber" disabled>
    </div>
</div>

<!--เปลี่ยนรหัสผ่าน-->
<div class="Change_password">
    <div class="password">
        <h3>รหัสผ่าน/เปลี่ยนรหัสผ่าน</h3>
    </div>
    <!--รหัสผ่านปัจจุบัน-->
    <div class="Current_password">
        <label class="typeCurrent_password">รหัสผ่านปัจจุบัน</label> <br>
        <input type="password" id="Enter_password" placeholder="12345****" class="input-Current_password" disabled>
    </div>
    <!--เปลี่ยนครั้งล่าสุด-->
    <div class="Last_updated">
        <label class="typelast_updated">เปลี่ยนรหัสครั้งล่าสุด</label> <br>
        <input type="text" id="Update_password" value="01/01/2026" class="input-Last_updated" disabled>
    </div>
    <!--ปุ่มเปลี่ยนหัสผ่าน-->
    <div class="Password_Change_Button">
        <button id="Change_password" class="btn-Change_password"> เปลี่ยนรหัสผ่าน </button>
        </div>
    </div>
    <div class="popup-btn-edit">
        <dialog di="popup_btn_edit" class="popup-btn-edit-1">
            <h2 class="confirm-edit">ยืนยันการแก้ไขข้อมูล</h2>
            <p class="message-confirm-edit">คุณต้องการแก้ไขข้อมูลนี้หรือไม่?</p>
            <button class="btn-Edit-information" id="btn_Edit_information_1"> ยืนยัน </button>
            <button class="btn-close-Edit" id="btn_close_Edit_1"> ยกเลิก </button>
        </dialog>
    </div>

    
</div>
<script src="{{ asset('user/js/JavaScript.js') }}"></script>
</body>
</html>