/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'pl' ]: { dictionary, getPluralForm } } = {"pl":{"dictionary":{"Insert image or file":"Wstaw obrazek lub plik","Image or file":"Obraz lub plik","Could not obtain resized image URL.":"Nie można pobrać adresu URL obrazka po przeskalowaniu.","Selecting resized image failed":"Wybranie obrazka po przeskalowaniu nie powiodło się.","Could not insert image at the current position.":"Nie można wstawić obrazka w bieżącej lokalizacji.","Inserting image failed":"Wstawienie obrazka nie powiodło się."},getPluralForm(n){return (n==1 ? 0 : (n%10>=2 && n%10<=4) && (n%100<12 || n%100>14) ? 1 : n!=1 && (n%10>=0 && n%10<=1) || (n%10>=5 && n%10<=9) || (n%100>=12 && n%100<=14) ? 2 : 3);}}};
e[ 'pl' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'pl' ].dictionary = Object.assign( e[ 'pl' ].dictionary, dictionary );
e[ 'pl' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );