/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'sk' ]: { dictionary, getPluralForm } } = {"sk":{"dictionary":{"Insert image or file":"Vložiť obrázok alebo súbor","Image or file":"Obrázok alebo súbor","Could not obtain resized image URL.":"Nepodarilo sa získať URL adresu zmenšeného obrázka.","Selecting resized image failed":"Vybranie zmenšeného obrázka zlyhalo","Could not insert image at the current position.":"Obrázok nie je možné vložiť na vybranú pozíciu.","Inserting image failed":"Vloženie obrázka zlyhalo"},getPluralForm(n){return (n % 1 == 0 && n == 1 ? 0 : n % 1 == 0 && n >= 2 && n <= 4 ? 1 : n % 1 != 0 ? 2: 3);}}};
e[ 'sk' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'sk' ].dictionary = Object.assign( e[ 'sk' ].dictionary, dictionary );
e[ 'sk' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
