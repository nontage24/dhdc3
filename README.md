#DHDC 3.0 Plugable  by DHDC Team
<hr>

<p><b>ขั้นตอนการเตรียมระบบ และการดาวน์โหลด</b>
<p>(1) #cd webroot
<p>(2) #wget http://203.157.118.123/dhdc3/dhdc3.php
<p>(3) #unzip dhdc3.zip
<p>(4) #cd dhdc3
<p>(5) #wget http://203.157.118.123/dhdc3/vendor.php
<p>(6) #unzip vendor.zip
<p>(7) #cd ..
<p>(8) #chmod -R 0777 dhdc3
<p>(9) download  http://203.157.118.123/dhdc3/databases.php
<p>(10) Linux OS แก้ไข httpd.conf  ส่วน AllowOverRide  All
<hr>
<p> <b>ขั้นตอนการติดตั้งระบบ</b>
<p>(1) สร้างฐานชื่อ dhdc3 กำหนด Collation เป็น utf8_general_ci (กรณี upgrade ข้าม )
<p>(2) ตั้งค่าการเชื่อมต่อฐานข้อมูลที่ไฟล์ dhdc3/common/config/<b>connect_database.php</b>
<p>(3) Restore ไฟล์ฐานข้อมูลใน databases.zip เรียงลำดับตามหมายเลข (กรณี update โปรดระมัดระวังการเลือกไฟล์หมายเลข 1 ผิด)
<p>(4) Login = admin ,123456
<p>(5) จัดการระบบ - ตั้งค่าอำเภอ 
<p>(6) จัดการระบบ - จัดการผู้ใช้ - create new user , สิทธิใช้งาน - มอบหมายสิทธิ
<p>(7) จัดการระบบ - ประมวลผล กดปุ่ม 1 และ 2  (สังเกต Transform Process และ System Process)
<p>(8) จัดการระบบ - Plugins

<hr>
<p><b>การติดตั้ง Plugins</b>
<p>โปรดอ่าน dhdc3/moules/การติดตั้ง.txt


<hr>
<p>Programmer Section
<p> (1) git -commit
<p> (2) git -remote -push หรือ git -remote -push to upstream ( ถ้า push ไม่ได้ให้ merge หรือ ทำข้อ (2.1) แล้วทำข้อ (3) )
<p> (2.1) git -remote -pull -merge
<p> (3) git -remote -push
<p>=============


