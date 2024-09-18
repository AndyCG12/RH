/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'et' ]: { dictionary, getPluralForm } } = {"et":{"dictionary":{"image widget":"pildi vidin","Wrap text":"Murra teksti ridu","Break text":"Murra teksti","In line":"Joone sees","Side image":"Pilt küljel","Full size image":"Täissuuruses pilt","Left aligned image":"Vasakule joondatud pilt","Centered image":"Keskele joondatud pilt","Right aligned image":"Paremale joondatud pilt","Change image text alternative":"Muuda pildi asenduskirjeldust","Text alternative":"Asenduskirjeldus","Enter image caption":"Sisesta pildi pealkiri","Insert image":"Sisesta pilt","Replace image":"Asenda pilt","Upload from computer":"Laadi üles arvutist","Replace from computer":"Asenda arvutist","Upload image from computer":"Laadi pilt üles arvutist","Image from computer":"Pilt arvutist","Replace image from computer":"Asenda pilt arvutist","Upload failed":"Üleslaadimine ebaõnnestus","Image toolbar":"Piltide tööriistariba","Resize image":"Muuda pildi suurust","Resize image to %0":"Muuda pilt suurusesse %0","Resize image to the original size":"Muuda pilt algsuurusesse","Resize image (in %0)":"Pildi suuruse muutmine (%0)","Original":"Algne","Custom image size":"Enda valitud pildi suurus","Custom":"Enda valitud","Image resize list":"Pildi suuruse muutmise loend","Insert":"Sisesta","Update":"Uuenda","Insert image via URL":"Sisesta pilt läbi URL-i","Update image URL":"Uuenda pildi URL-i","Caption for the image":"Pildi pealkiri","Caption for image: %0":"Pildi pealkiri: %0","The value must not be empty.":"Väärtus peab olema sisestatud.","The value should be a plain number.":"Väärtus peab olema tavanumber.","Uploading image":"Pildi üleslaadimine","Image upload complete":"Pilt üles laaditud","Error during image upload":"Viga pildi üleslaadimisel"},getPluralForm(n){return (n != 1);}}};
e[ 'et' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'et' ].dictionary = Object.assign( e[ 'et' ].dictionary, dictionary );
e[ 'et' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
