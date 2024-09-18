/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'fi' ]: { dictionary, getPluralForm } } = {"fi":{"dictionary":{"Insert HTML":"Liitä HTML","HTML snippet":"HTML-pätkä","Paste raw HTML here...":"Liitä raaka-HTML tähän...","Edit source":"Muokkaa lähdettä","Save changes":"Tallenna muutokset","No preview available":"Esikatseluversiota ei ole saatavilla","Empty snippet content":"Tyhjä pätkäsisältö"},getPluralForm(n){return (n != 1);}}};
e[ 'fi' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'fi' ].dictionary = Object.assign( e[ 'fi' ].dictionary, dictionary );
e[ 'fi' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
