/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'th' ]: { dictionary, getPluralForm } } = {"th":{"dictionary":{"image widget":"วิดเจ็ตรูปภาพ","Wrap text":"ตัดคำข้อความ","Break text":"แบ่งข้อความ","In line":"ในบรรทัด","Side image":"รูปด้านข้าง","Full size image":"รูปขนาดเต็ม","Left aligned image":"จัดแนวภาพซ้าย","Centered image":"จัดแนวรูปกึ่งกลาง","Right aligned image":"จัดแนวภาพขวา","Change image text alternative":"เปลี่ยนข้อความเมื่อไม่พบรูป","Text alternative":"ข้อความเมื่อไม่พบรูป","Enter image caption":"ระบุคำอธิบายภาพ","Insert image":"แทรกรูป","Replace image":"แทนที่ภาพ","Upload from computer":"อัปโหลดจากคอมพิวเตอร์","Replace from computer":"แทนที่จากคอมพิวเตอร์","Upload image from computer":"อัปโหลดภาพจากคอมพิวเตอร์","Image from computer":"ภาพจากคอมพิวเตอร์","Replace image from computer":"แทนที่ภาพจากคอมพิวเตอร์","Upload failed":"อัปโหลดไม่สำเร็จ","Image toolbar":"เครื่องมือรูปภาพ","Resize image":"ปรับขนาดภาพ","Resize image to %0":"ปรับขนาดภาพเป็น %0","Resize image to the original size":"ปรับขนาดภาพเป็นขนาดเดิม","Resize image (in %0)":"ปรับขนาดภาพ (ใน %0)","Original":"ดั้งเดิม","Custom image size":"ขนาดภาพที่กำหนดเอง","Custom":"กำหนดเอง","Image resize list":"รายการปรับขนาดภาพ","Insert":"แทรก","Update":"อัปเดต","Insert image via URL":"แทรกภาพผ่าน URL","Update image URL":"อัปเดต URL ภาพ","Caption for the image":"คำบรรยายภาพ","Caption for image: %0":"คำบรรยายภาพ: %0","The value must not be empty.":"ค่าต้องไม่ว่างเปล่า","The value should be a plain number.":"ค่าควรเป็นตัวเลขธรรมดา","Uploading image":"กำลังอัปโหลดรูปภาพ","Image upload complete":"อัปโหลดรูปภาพเสร็จสิ้น","Error during image upload":"เกิดข้อผิดพลาดระหว่างอัปโหลดรูปภาพ"},getPluralForm(n){return 0;}}};
e[ 'th' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'th' ].dictionary = Object.assign( e[ 'th' ].dictionary, dictionary );
e[ 'th' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
