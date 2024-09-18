/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'th' ]: { dictionary, getPluralForm } } = {"th":{"dictionary":{"Numbered List":"รายการลำดับเลข","Bulleted List":"รายการสัญลักษณ์แสดงหัวข้อย่อย","To-do List":"รายการสิ่งที่จะทำ","Bulleted list styles toolbar":"แถบเครื่องมือรูปแบบรายการสัญลักษณ์แสดงหัวข้อย่อย","Numbered list styles toolbar":"แถบเครื่องมือรูปแบบรายการแบบตัวเลข","Toggle the disc list style":"สลับรูปแบบรายการดิสก์","Toggle the circle list style":"สลับรูปแบบรายการวงกลม","Toggle the square list style":"สลับรูปแบบรายการสี่เหลี่ยม","Toggle the decimal list style":"สลับรูปแบบรายการทศนิยม","Toggle the decimal with leading zero list style":"สลับทศนิยมด้วยรูปแบบรายการศูนย์นำหน้า","Toggle the lower–roman list style":"สลับรูปแบบรายการอักษรโรมันตัวพิมพ์เล็ก","Toggle the upper–roman list style":"สลับรูปแบบรายการอักษรโรมันตัวพิมพ์ใหญ่","Toggle the lower–latin list style":"สลับรูปแบบรายการอักษรลาตินตัวพิมพ์เล็ก","Toggle the upper–latin list style":"สลับรูปแบบรายการอักษรลาตินตัวพิมพ์ใหญ่","Disc":"ดิสก์","Circle":"วงกลม","Square":"สี่เหลี่ยม","Decimal":"ทศนิยม","Decimal with leading zero":"ทศนิยมที่มีศูนย์นำหน้า","Lower–roman":"อักษรโรมันตัวพิมพ์เล็ก","Upper-roman":"อักษรโรมันตัวพิมพ์ใหญ่","Lower-latin":"อักษรลาตินตัวพิมพ์เล็ก","Upper-latin":"อักษรลาตินตัวพิมพ์ใหญ่","List properties":"คุณสมบัติของรายการ","Start at":"เริ่มต้นที่","Invalid start index value.":"ค่าดัชนีเริ่มต้นไม่ถูกต้อง","Start index must be greater than 0.":"ดัชนีเริ่มต้นต้องมากกว่า 0","Reversed order":"ลำดับที่ย้อนกลับ","Keystrokes that can be used in a list":"แป้นพิมพ์ลัดที่สามารถใช้ได้ในรายการ","Increase list item indent":"เพิ่มการเยื้องวัตถุในรายการ","Decrease list item indent":"ลดการเยื้องวัตถุในรายการ","Entering a to-do list":"เข้าสู่รายการสิ่งที่ต้องทำ","Leaving a to-do list":"ออกจากรายการสิ่งที่ต้องทำ"},getPluralForm(n){return 0;}}};
e[ 'th' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'th' ].dictionary = Object.assign( e[ 'th' ].dictionary, dictionary );
e[ 'th' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
