/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'fr' ]: { dictionary, getPluralForm } } = {"fr":{"dictionary":{"Rich Text Editor":"Éditeur de texte enrichi","Editor editing area: %0":"Zone d'édition de l'éditeur : %0","Edit block":"Modifier le bloc","Click to edit block":"Cliquer pour modifier le bloc","Drag to move":"Faire glisser pour déplacer","Next":"Suivant","Previous":"Précedent","Editor toolbar":"Barre d'outils de l'éditeur","Dropdown toolbar":"Barre d'outils dans un menu déroulant","Black":"Noir","Dim grey":"Gris pâle","Grey":"Gris","Light grey":"Gris clair","White":"Blanc","Red":"Rouge","Orange":"Orange","Yellow":"Jaune","Light green":"Vert clair","Green":"Vert","Aquamarine":"Bleu vert","Turquoise":"Turquoise","Light blue":"Bleu clair","Blue":"Bleu","Purple":"Violet","Editor block content toolbar":"Barre d'outils du contenu du bloc éditeur","Editor contextual toolbar":"Barre d'outils contextuelle de l'éditeur","HEX":"HEX","No results found":"Aucun résultat trouvé","No searchable items":"Aucun élément consultable","Editor dialog":"Boîte de dialogue de l'éditeur","Close":"Fermer","Help Contents. To close this dialog press ESC.":"Contenu de l'aide. Pour fermer cette boîte de dialogue, appuyez sur ESC.","Below, you can find a list of keyboard shortcuts that can be used in the editor.":"Ci-dessous, vous trouverez une liste de raccourcis clavier pouvant être utilisés dans l’éditeur.","(may require <kbd>Fn</kbd>)":"(peut nécessiter <kbd> Fn </kbd> )","Accessibility":"Accessibilité","Accessibility help":"Aide à l'accessibilité","Press %0 for help.":"Appuyez sur %0 pour obtenir de l'aide.","Move focus in and out of an active dialog window":"Déplacer le focus vers et hors d'une fenêtre de dialogue active","MENU_BAR_MENU_FILE":"Fichier","MENU_BAR_MENU_EDIT":"Éditer","MENU_BAR_MENU_VIEW":"Afficher","MENU_BAR_MENU_INSERT":"Insérer","MENU_BAR_MENU_FORMAT":"Format","MENU_BAR_MENU_TOOLS":"Outils","MENU_BAR_MENU_HELP":"Aide","MENU_BAR_MENU_TEXT":"Texte","MENU_BAR_MENU_FONT":"Police de caractère","Editor menu bar":"Barre de menu de l'éditeur","Please enter a valid color (e.g. \"ff0000\").":"Veuillez saisir une couleur valide (par exemple « ff0000 »)."},getPluralForm(n){return (n == 0 || n == 1) ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2;}}};
e[ 'fr' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'fr' ].dictionary = Object.assign( e[ 'fr' ].dictionary, dictionary );
e[ 'fr' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
