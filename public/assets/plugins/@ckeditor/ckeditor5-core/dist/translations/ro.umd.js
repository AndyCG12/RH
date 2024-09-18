/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ro' ]: { dictionary, getPluralForm } } = {"ro":{"dictionary":{"Cancel":"Anulare","Clear":"Ștergere","Remove color":"Șterge culoare","Restore default":"Reface la default","Save":"Salvare","Show more items":"Arată mai multe elemente","%0 of %1":"%0 din %1","Cannot upload file:":"Nu se poate încărca fișierul:","Rich Text Editor. Editing area: %0":"Editor Rich Text. Zonă editare: %0","Insert with file manager":"Inserare cu managerul de fișiere","Replace with file manager":"Înlocuire cu managerul de fișiere","Insert image with file manager":"Inserare imagine cu managerul de fișiere","Replace image with file manager":"Înlocuire imagine cu managerul de fișiere","Toggle caption off":"Dezactivați subtitlul","Toggle caption on":"Activați subtitlul","Content editing keystrokes":"Comenzi din tastatură pentru editarea conținutului","These keyboard shortcuts allow for quick access to content editing features.":"Aceste comenzi rapide din tastatură permit accesul rapid la funcțiile de editare a conținutului.","User interface and content navigation keystrokes":"Interfața cu utilizatorul și comenzi din tastatură pentru navigare în conținut","Use the following keystrokes for more efficient navigation in the CKEditor 5 user interface.":"Utilizați următoarele comenzi din tastatură pentru o navigare mai eficientă în interfața cu utilizatorul CKEditor 5.","Close contextual balloons, dropdowns, and dialogs":"Închide baloanele contextuale, ferestrele derulante și ferestrele de dialog","Open the accessibility help dialog":"Deschide fereastra de ajutor pentru accesibilitate","Move focus between form fields (inputs, buttons, etc.)":"Schimbă elementul activ între câmpurile unui formular (câmpuri de introducere text, butoane etc.)","Move focus to the menu bar, navigate between menu bars":"Transferarea focusului pe bara de meniu, navigarea între barele de meniu","Move focus to the toolbar, navigate between toolbars":"Mută focalizarea pe bara de instrumente, navighează prin barele de instrumente","Navigate through the toolbar or menu bar":"Navigare prin bara de instrumente sau bara de meniuri","Execute the currently focused button. Executing buttons that interact with the editor content moves the focus back to the content.":"Execută butonul focalizat în prezent. Executarea butoanelor care interacționează cu conținutul editorului mută focalizarea înapoi pe conținut.","Accept":"Acceptă"},getPluralForm(n){return (n==1?0:(((n%100>19)||((n%100==0)&&(n!=0)))?2:1));}}};
e[ 'ro' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ro' ].dictionary = Object.assign( e[ 'ro' ].dictionary, dictionary );
e[ 'ro' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
