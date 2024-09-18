/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'sr' ]: { dictionary, getPluralForm } } = {"sr":{"dictionary":{"image widget":"модул са сликом","Wrap text":"Преломити текст","Break text":"Прелом текста","In line":"У реду","Side image":"Бочна слика","Full size image":"Слика у пуној величини","Left aligned image":"Лева слика","Centered image":"Слика у средини","Right aligned image":"Десна слика","Change image text alternative":"Измена алтернативног текста","Text alternative":"Алтернативни текст","Enter image caption":"Одреди текст испод слике","Insert image":"Додај слику","Replace image":"Zameni sliku","Upload from computer":"Otpremi sa računara","Replace from computer":"Zameni sa računara","Upload image from computer":"Otpremi sliku sa računara","Image from computer":"Slika sa računara","Replace image from computer":"Zameni sliku sa računara","Upload failed":"Постављање неуспешно","Image toolbar":"Слика трака са алтакама","Resize image":"Промените величину слике","Resize image to %0":"Промените величину слике на% 0","Resize image to the original size":"Промените величину слике до оригиналне величине","Resize image (in %0)":"Promenite veličinu slike (u %0)","Original":"Оригинал","Custom image size":"Prilagođena veličina slike","Custom":"Prilagođeno","Image resize list":"Листа величине слике","Insert":"Убаци","Update":"Ажурирај","Insert image via URL":"Убаци слику преко УРЛ-а","Update image URL":"Ажурирај УРЛ слике","Caption for the image":"Натпис за слику","Caption for image: %0":"Натпис за слику: %0","The value must not be empty.":"Vrednost ne sme biti prazna.","The value should be a plain number.":"Vrednost treba da bude običan broj.","Uploading image":"Otpremanje slike","Image upload complete":"Otpremanje slike je završeno","Error during image upload":"Greška tokom otpremanja slike"},getPluralForm(n){return (n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);}}};
e[ 'sr' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'sr' ].dictionary = Object.assign( e[ 'sr' ].dictionary, dictionary );
e[ 'sr' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
