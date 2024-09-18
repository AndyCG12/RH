/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'lt' ]: { dictionary, getPluralForm } } = {"lt":{"dictionary":{"Insert image or file":"Įterpti vaizdą ar failą","Image or file":"Vaizdas arba failas","Could not obtain resized image URL.":"Nepavyko gauti pakeisto dydžio paveiksliuko URL.","Selecting resized image failed":"Nepavyko pasirinkti pakeisto vaizdo","Could not insert image at the current position.":"Nepavyko įterpti vaizdo į dabartinę vietą.","Inserting image failed":"Nepavyko įterpti vaizdo"},getPluralForm(n){return (n % 10 == 1 && (n % 100 > 19 || n % 100 < 11) ? 0 : (n % 10 >= 2 && n % 10 <=9) && (n % 100 > 19 || n % 100 < 11) ? 1 : n % 1 != 0 ? 2: 3);}}};
e[ 'lt' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'lt' ].dictionary = Object.assign( e[ 'lt' ].dictionary, dictionary );
e[ 'lt' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
