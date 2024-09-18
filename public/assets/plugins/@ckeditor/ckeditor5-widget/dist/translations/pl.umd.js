/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'pl' ]: { dictionary, getPluralForm } } = {"pl":{"dictionary":{"Widget toolbar":"Pasek widgetów","Insert paragraph before block":"Wstaw akapit przed blokiem","Insert paragraph after block":"Wstaw akapit po bloku","Press Enter to type after or press Shift + Enter to type before the widget":"Naciśnij Enter, aby pisać po widżecie, lub Shift + Enter, aby pisać przed widżetem","Keystrokes that can be used when a widget is selected (for example: image, table, etc.)":"Klawisze, których można używać po wybraniu widżetu (na przykład: obraz, tabela itd.)","Insert a new paragraph directly after a widget":"Wstawia nowy akapit bezpośrednio po widżecie","Insert a new paragraph directly before a widget":"Wstawia nowy akapit bezpośrednio przed widżetem","Move the caret to allow typing directly before a widget":"Przenosi kursor, aby umożliwić pisanie bezpośrednio przed widżetem","Move the caret to allow typing directly after a widget":"Przenosi kursor, aby umożliwić pisanie bezpośrednio za widżetem"},getPluralForm(n){return (n==1 ? 0 : (n%10>=2 && n%10<=4) && (n%100<12 || n%100>14) ? 1 : n!=1 && (n%10>=0 && n%10<=1) || (n%10>=5 && n%10<=9) || (n%100>=12 && n%100<=14) ? 2 : 3);}}};
e[ 'pl' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'pl' ].dictionary = Object.assign( e[ 'pl' ].dictionary, dictionary );
e[ 'pl' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
