/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'fi' ]: { dictionary, getPluralForm } } = {"fi":{"dictionary":{"image widget":"Kuvavimpain","Wrap text":"Sovita teksti","Break text":"Irrota teksti","In line":"Rivin sisällä","Side image":"Pieni kuva","Full size image":"Täysikokoinen kuva","Left aligned image":"Vasemmalle tasattu kuva","Centered image":"Keskitetty kuva","Right aligned image":"Oikealle tasattu kuva","Change image text alternative":"Vaihda kuvan vaihtoehtoinen teksti","Text alternative":"Vaihtoehtoinen teksti","Enter image caption":"Syötä kuvateksti","Insert image":"Lisää kuva","Replace image":"Korvaa kuva","Upload from computer":"Lataa tietokoneelta","Replace from computer":"Korvaa tietokoneelta","Upload image from computer":"Lataa kuva tietokoneelta","Image from computer":"Tietokoneen kuva","Replace image from computer":"Korvaa kuva tietokoneelta","Upload failed":"Lataus epäonnistui","Image toolbar":"Kuvan työkalupalkki","Resize image":"Muokkaa kuvan kokoa","Resize image to %0":"Muokkaa kuvan kooksi %0","Resize image to the original size":"Vaihda kuvan koko alkuperäiseen kokoon","Resize image (in %0)":"Muuta kuvan kokoa (%0)","Original":"Alkuperäinen","Custom image size":"Mukautettu kuvakoko","Custom":"Mukautettu","Image resize list":"Kuvan koon muokkaamisen lista","Insert":"Liitä","Update":"Päivitä","Insert image via URL":"Liitä kuva URL-koodin kautta","Update image URL":"Päivitä kuvan URL","Caption for the image":"Kuvan kuvateksti","Caption for image: %0":"Kuvan kuvateksti: %0","The value must not be empty.":"Arvo ei voi olla tyhjä.","The value should be a plain number.":"Arvon pitää olla pelkkä luku.","Uploading image":"Ladataan kuvaa","Image upload complete":"Kuvan lataus valmis","Error during image upload":"Virhe kuvaa ladattaessa"},getPluralForm(n){return (n != 1);}}};
e[ 'fi' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'fi' ].dictionary = Object.assign( e[ 'fi' ].dictionary, dictionary );
e[ 'fi' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
