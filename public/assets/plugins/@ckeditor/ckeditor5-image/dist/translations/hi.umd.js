/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'hi' ]: { dictionary, getPluralForm } } = {"hi":{"dictionary":{"image widget":"image widget","Wrap text":"टेक्स्ट रैप करें","Break text":"टेक्स्ट तोड़ें","In line":"इन - लाइन","Side image":"Side image","Full size image":"Full size image","Left aligned image":"Left aligned image","Centered image":"Centered image","Right aligned image":"Right aligned image","Change image text alternative":"Change image text alternative","Text alternative":"Text alternative","Enter image caption":"Enter image caption","Insert image":"Insert image","Replace image":"इमेज बदलें","Upload from computer":"कंप्यूटर से अपलोड करे","Replace from computer":"कंप्यूटर से बदलें","Upload image from computer":"कंप्यूटर से इमेज अपलोड करें","Image from computer":"कंप्यूटर से इमेज","Replace image from computer":"कंप्यूटर से इमेज बदलें","Upload failed":"Upload failed","Image toolbar":"Image toolbar","Resize image":"Resize image","Resize image to %0":"Resize image to %0","Resize image to the original size":"Resize image to the original size","Resize image (in %0)":"(%0 में) तस्वीर का साइज़ बदलें","Original":"Original","Custom image size":"तस्वीर का कस्टम साइज़","Custom":"कस्टम","Image resize list":"Image resize list","Insert":"Insert","Update":"Update","Insert image via URL":"Insert image via URL","Update image URL":"Update image URL","Caption for the image":"छवि के लिए कैप्शन","Caption for image: %0":"छवि के लिए कैप्शन: %0","The value must not be empty.":"वैल्यू रिक्त नहीं होना चाहिए.","The value should be a plain number.":"वैल्यू एक प्लेन नंबर होना चाहिए.","Uploading image":"तस्वीर अपलोड की जा रही है","Image upload complete":"तस्वीर का अपलोड पूरा हुआ","Error during image upload":"तस्वीर अपलोड के दौरान त्रुटि"},getPluralForm(n){return (n != 1);}}};
e[ 'hi' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'hi' ].dictionary = Object.assign( e[ 'hi' ].dictionary, dictionary );
e[ 'hi' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
