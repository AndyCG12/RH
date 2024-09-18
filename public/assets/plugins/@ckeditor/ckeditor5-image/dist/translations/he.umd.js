/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'he' ]: { dictionary, getPluralForm } } = {"he":{"dictionary":{"image widget":"תמונה","Wrap text":"גלישת טקסט","Break text":"שבירת טקסט","In line":"בתוך השורה","Side image":"תמונת צד","Full size image":"תמונה בפריסה מלאה","Left aligned image":"תמונה מיושרת לשמאל","Centered image":"תמונה ממרוכזת","Right aligned image":"תמונה מיושרת לימין","Change image text alternative":"שינוי טקסט אלטרנטיבי לתמונה","Text alternative":"טקסט אלטרנטיבי","Enter image caption":"הזן כותרת תמונה","Insert image":"הוספת תמונה","Replace image":"החלפת תמונה","Upload from computer":"העלאה מהמחשב","Replace from computer":"החלפה מהמחשב","Upload image from computer":"העלאת תמונה מהמחשב","Image from computer":"תמונה ממחשב","Replace image from computer":"החלפת תמונה מהמחשב","Upload failed":"העלאה נכשלה","Image toolbar":"סרגל תמונה","Resize image":"שנה גודל תמונה","Resize image to %0":"שנה את גודל התמונה ל-%0","Resize image to the original size":"שנה את גודל התמונה לגודל המקורי","Resize image (in %0)":"שינוי גודל התמונה (ב-%0)","Original":"גודל מקורי","Custom image size":"גודל תמונה מותאם אישית","Custom":"מותאם אישית","Image resize list":"רשימת שינוי גודל תמונה","Insert":"הכנס","Update":"עדכן","Insert image via URL":"הכנסת תמונה באמצעות קישור","Update image URL":"עדכן את כתובת ה-URL של התמונה","Caption for the image":"כותרת עבור התמונה","Caption for image: %0":"כותרת עבור תמונה: %0","The value must not be empty.":"הערך לא יכול להיות ריק.","The value should be a plain number.":"הערך צריך להיות מספר רגיל.","Uploading image":"מעלה תמונה","Image upload complete":"העלאת התמונה הושלמה","Error during image upload":"שגיאה במהלך העלאת התמונה"},getPluralForm(n){return (n == 1 && n % 1 == 0) ? 0 : (n == 2 && n % 1 == 0) ? 1: 2;}}};
e[ 'he' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'he' ].dictionary = Object.assign( e[ 'he' ].dictionary, dictionary );
e[ 'he' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
