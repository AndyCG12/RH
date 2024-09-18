/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ms' ]: { dictionary, getPluralForm } } = {"ms":{"dictionary":{"Insert HTML":"Masukkan HTML","HTML snippet":"Potongan HTML","Paste raw HTML here...":"Tampal HTML mentah disini...","Edit source":"Sunting sumber","Save changes":"Simpan perubahan","No preview available":"Tiada pratonton disediakan","Empty snippet content":"Kosongkan kandungan potongan"},getPluralForm(n){return 0;}}};
e[ 'ms' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ms' ].dictionary = Object.assign( e[ 'ms' ].dictionary, dictionary );
e[ 'ms' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
