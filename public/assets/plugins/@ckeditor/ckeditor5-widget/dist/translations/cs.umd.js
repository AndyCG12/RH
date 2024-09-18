/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'cs' ]: { dictionary, getPluralForm } } = {"cs":{"dictionary":{"Widget toolbar":"Panel nástrojů ovládacího prvku","Insert paragraph before block":"Vložte odstavec před blok","Insert paragraph after block":"Vložte odstavec za blok","Press Enter to type after or press Shift + Enter to type before the widget":"Stisknutím klávesy Enter můžete psát za widgetem a stisknutím Shift + Enter před ním","Keystrokes that can be used when a widget is selected (for example: image, table, etc.)":"Klávesy, které lze použít, když je vybraný widget (např: obrázek, tabulka atd.)","Insert a new paragraph directly after a widget":"Vložte odstavec přímo po widgetu","Insert a new paragraph directly before a widget":"Vložte nový odstavec přímo před widget","Move the caret to allow typing directly before a widget":"Přesuňte stříšku pro umožnění psaní přímo před widget","Move the caret to allow typing directly after a widget":"Přesuňte stříšku pro umožnění psaní přímo před widget"},getPluralForm(n){return (n == 1 && n % 1 == 0) ? 0 : (n >= 2 && n <= 4 && n % 1 == 0) ? 1: (n % 1 != 0 ) ? 2 : 3;}}};
e[ 'cs' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'cs' ].dictionary = Object.assign( e[ 'cs' ].dictionary, dictionary );
e[ 'cs' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
