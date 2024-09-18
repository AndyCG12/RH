/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'tk' ]: { dictionary, getPluralForm } } = {"tk":{"dictionary":{"image widget":"surat widjeti","Wrap text":"","Break text":"","In line":"","Side image":"Gapdal surat","Full size image":"Doly ululykdaky surat","Left aligned image":"Çep deňleşdirilen surat","Centered image":"Merkezleşdirilen surat","Right aligned image":"Sag deňleşdirilen surat","Change image text alternative":"Surat tekstiniň alternatiwasyny üýtgediň","Text alternative":"Tekstiň alternatiwasy","Enter image caption":"Surat ýazgysyny giriziň","Insert image":"Surat goýuň","Replace image":"","Upload from computer":"","Replace from computer":"","Upload image from computer":"","Image from computer":"","Replace image from computer":"","Upload failed":"Ýükläp bolmady","Image toolbar":"Surat gurallar paneli","Resize image":"","Resize image to %0":"","Resize image to the original size":"","Resize image (in %0)":"","Original":"","Custom image size":"","Custom":"","Image resize list":"","Insert":"","Update":"","Insert image via URL":"","Update image URL":"","Caption for the image":"","Caption for image: %0":"","The value must not be empty.":"","The value should be a plain number.":"","Uploading image":"","Image upload complete":"","Error during image upload":""},getPluralForm(n){return (n != 1);}}};
e[ 'tk' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'tk' ].dictionary = Object.assign( e[ 'tk' ].dictionary, dictionary );
e[ 'tk' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
