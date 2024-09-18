/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'it' ]: { dictionary, getPluralForm } } = {"it":{"dictionary":{"image widget":"Widget immagine","Wrap text":"Testo a capo","Break text":"Interrompi testo","In line":"In linea","Side image":"Immagine laterale","Full size image":"Immagine a dimensione intera","Left aligned image":"Immagine allineata a sinistra","Centered image":"Immagine centrata","Right aligned image":"Immagine allineata a destra","Change image text alternative":"Cambia testo alternativo dell'immagine","Text alternative":"Testo alternativo","Enter image caption":"inserire didascalia dell'immagine","Insert image":"Inserisci immagine","Replace image":"Sostituisci l'immagine","Upload from computer":"Carica dal computer","Replace from computer":"Sostituisci dal computer","Upload image from computer":"Carica l'immagine dal computer","Image from computer":"Immagine dal computer","Replace image from computer":"Sostituisci l'immagine dal computer","Upload failed":"Caricamento fallito","Image toolbar":"Barra degli strumenti dell'immagine","Resize image":"Ridimensiona immagine","Resize image to %0":"Ridimensiona immagine a %0","Resize image to the original size":"Ridimensiona immagine alle dimensioni originali","Resize image (in %0)":"Ridimensiona immagine (in %0 )","Original":"Originale","Custom image size":"Dimensioni immagine personalizzate","Custom":"Personalizzato","Image resize list":"Elenco ridimensionamenti immagine","Insert":"Inserisci","Update":"Aggiorna","Insert image via URL":"Inserisci immagine tramite URL","Update image URL":"Aggiorna URL immagine","Caption for the image":"Didascalia dell'immagine","Caption for image: %0":"Didascalia dell'immagine: %0","The value must not be empty.":"Il valore non può essere essere lasciato in bianco.","The value should be a plain number.":"Il valore deve essere un numero intero.","Uploading image":"Caricamento immagine in corso","Image upload complete":"Caricamento immagine completato","Error during image upload":"Errore durante il caricamento dell'immagine"},getPluralForm(n){return n == 1 ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2;}}};
e[ 'it' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'it' ].dictionary = Object.assign( e[ 'it' ].dictionary, dictionary );
e[ 'it' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
