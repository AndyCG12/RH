/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'id' ]: { dictionary, getPluralForm } } = {"id":{"dictionary":{"Insert image or file":"Sisipkan gambar atau berkas","Image or file":"Gambar atau file","Could not obtain resized image URL.":"Gagal mendapatkan URL gambar terukur","Selecting resized image failed":"Gagal memilih gambar terukur","Could not insert image at the current position.":"Tidak dapat menyisipkan gambar pada posisi ini.","Inserting image failed":"Gagal menyisipkan gambar"},getPluralForm(n){return 0;}}};
e[ 'id' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'id' ].dictionary = Object.assign( e[ 'id' ].dictionary, dictionary );
e[ 'id' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
