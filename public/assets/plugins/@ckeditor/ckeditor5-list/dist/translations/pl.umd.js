/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'pl' ]: { dictionary, getPluralForm } } = {"pl":{"dictionary":{"Numbered List":"Lista numerowana","Bulleted List":"Lista wypunktowana","To-do List":"Lista rzeczy do zrobienia","Bulleted list styles toolbar":"Pasek z narzędziami: style listy z punktorami","Numbered list styles toolbar":"Pasek z narzędziami: style listy numerowanej","Toggle the disc list style":"Włącz/wyłącz listę w stylu „dysk”","Toggle the circle list style":"Włącz/wyłącz listę w stylu „kółko”","Toggle the square list style":"Włącz/wyłącz listę w stylu „kwadrat”","Toggle the decimal list style":"Włącz/wyłącz listę w stylu „dziesiętne”","Toggle the decimal with leading zero list style":"Włącz/wyłącz listę w stylu „dziesiętne z zerem wiodącym”","Toggle the lower–roman list style":"Włącz/wyłącz listę w stylu „małe cyfry rzymskie”","Toggle the upper–roman list style":"Włącz/wyłącz listę w stylu „wielkie cyfry rzymskie”","Toggle the lower–latin list style":"Włącz/wyłącz listę w stylu „alfabet łaciński – małe litery”","Toggle the upper–latin list style":"Włącz/wyłącz listę w stylu „alfabet łaciński – wielkie litery”","Disc":"Dysk","Circle":"Kółko","Square":"Kwadrat","Decimal":"Dziesiętne","Decimal with leading zero":"Dziesiętne z zerem wiodącym","Lower–roman":"Małe cyfry rzymskie","Upper-roman":"Wielkie cyfry rzymskie","Lower-latin":"Alfabet łaciński – małe litery","Upper-latin":"Alfabet łaciński – wielkie litery","List properties":"Właściwości listy","Start at":"Zacznij od","Invalid start index value.":"Nieprawidłowa wartość indeksu początkowego.","Start index must be greater than 0.":"Wartość początkowa musi być większa niż 0.","Reversed order":"Odwrócona kolejność","Keystrokes that can be used in a list":"Klawisze, których można używać w odniesieniu do listy","Increase list item indent":"Zwiększa wcięcie elementu listy","Decrease list item indent":"Zmniejsza wcięcie elementu listy","Entering a to-do list":"Wchodzenie na listę zadań do wykonania","Leaving a to-do list":"Opuszczenie listy zadań do wykonania"},getPluralForm(n){return (n==1 ? 0 : (n%10>=2 && n%10<=4) && (n%100<12 || n%100>14) ? 1 : n!=1 && (n%10>=0 && n%10<=1) || (n%10>=5 && n%10<=9) || (n%100>=12 && n%100<=14) ? 2 : 3);}}};
e[ 'pl' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'pl' ].dictionary = Object.assign( e[ 'pl' ].dictionary, dictionary );
e[ 'pl' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );