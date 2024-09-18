/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'no' ]: { dictionary, getPluralForm } } = {"no":{"dictionary":{"media widget":"media-widget","Media URL":"Media-URL","Paste the media URL in the input.":"Lim inn media URL ","Tip: Paste the URL into the content to embed faster.":"Tips: lim inn URL i innhold for bedre hastighet ","The URL must not be empty.":"URL-en kan ikke være tom.","This media URL is not supported.":"Denne media-URL-en er ikke støttet.","Insert media":"Sett inn media","Media toolbar":"Media verktøy ","Open media in new tab":"Åpne media i ny fane"},getPluralForm(n){return (n != 1);}}};
e[ 'no' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'no' ].dictionary = Object.assign( e[ 'no' ].dictionary, dictionary );
e[ 'no' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );