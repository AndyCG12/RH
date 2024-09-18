/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'eo' ]: { dictionary, getPluralForm } } = {"eo":{"dictionary":{"image widget":"bilda fenestraĵo","Wrap text":"","Break text":"","In line":"","Side image":"Flanka biildo","Full size image":"Bildo kun reala dimensio","Left aligned image":"","Centered image":"","Right aligned image":"","Change image text alternative":"Ŝanĝu la alternativan tekston de la bildo","Text alternative":"Alternativa teksto","Enter image caption":"Skribu klarigon pri la bildo","Insert image":"Enmetu bildon","Replace image":"","Upload from computer":"","Replace from computer":"","Upload image from computer":"","Image from computer":"","Replace image from computer":"","Upload failed":"","Image toolbar":"","Resize image":"","Resize image to %0":"","Resize image to the original size":"","Resize image (in %0)":"","Original":"","Custom image size":"","Custom":"","Image resize list":"","Insert":"","Update":"","Insert image via URL":"","Update image URL":"","Caption for the image":"","Caption for image: %0":"","The value must not be empty.":"","The value should be a plain number.":"","Uploading image":"","Image upload complete":"","Error during image upload":""},getPluralForm(n){return (n != 1);}}};
e[ 'eo' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'eo' ].dictionary = Object.assign( e[ 'eo' ].dictionary, dictionary );
e[ 'eo' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
