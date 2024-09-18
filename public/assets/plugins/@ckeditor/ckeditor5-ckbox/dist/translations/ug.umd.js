/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ug' ]: { dictionary, getPluralForm } } = {"ug":{"dictionary":{"Open file manager":"ھۆججەت باشقۇرغۇچنى ئاچ","Cannot determine a category for the uploaded file.":"يۈكلەيدىغان ھۆججەتنىڭ تۈرىنى جەزملىيەلمىدى.","Cannot access default workspace.":"كۆڭۈلدىكى خىزمەت بوشلۇقىنى زىيارەت قىلالمايدۇ","Edit image":"","Processing the edited image.":"","Server failed to process the image.":"","Failed to determine category of edited image.":""},getPluralForm(n){return (n != 1);}}};
e[ 'ug' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ug' ].dictionary = Object.assign( e[ 'ug' ].dictionary, dictionary );
e[ 'ug' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
