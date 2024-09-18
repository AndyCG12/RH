/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'nl' ]: { dictionary, getPluralForm } } = {"nl":{"dictionary":{"Widget toolbar":"Widget werkbalk","Insert paragraph before block":"Voeg paragraaf toe voor blok","Insert paragraph after block":"Voeg paragraaf toe na blok","Press Enter to type after or press Shift + Enter to type before the widget":"Druk op Enter om na de widget te typen of druk op Shift + Enter om vóór de widget te typen","Keystrokes that can be used when a widget is selected (for example: image, table, etc.)":"Toetsaanslagen die gebruikt kunnen worden wanneer een widget geselecteerd is (bijvoorbeeld: een afbeelding, tabel, enz.)","Insert a new paragraph directly after a widget":"Voeg direct na een widget een nieuwe paragraaf in","Insert a new paragraph directly before a widget":"Voeg direct voor een widget een nieuwe paragraaf in","Move the caret to allow typing directly before a widget":"Beweeg het invoerteken om het mogelijk te maken direct voor een widget te typen","Move the caret to allow typing directly after a widget":"Beweeg het invoerteken om het mogelijk te maken direct achter een widget te typen"},getPluralForm(n){return (n != 1);}}};
e[ 'nl' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'nl' ].dictionary = Object.assign( e[ 'nl' ].dictionary, dictionary );
e[ 'nl' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
