/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'pt-br' ]: { dictionary, getPluralForm } } = {"pt-br":{"dictionary":{"Find and replace":"Localizar e substituir","Find in text…":"Localizar no texto","Find":"Localizar","Previous result":"Ocorrência anterior","Next result":"Próxima ocorrência","Replace":"Substituir","Replace all":"Substituir todos","Match case":"Diferenciar maiúsculas de minúsculas","Whole words only":"Apenas palavras inteiras","Replace with…":"Substituir por...","Text to find must not be empty.":"O texto a ser localizado não pode ser vazio.","Tip: Find some text first in order to replace it.":"Dica: Localize algum texto primeiro para poder substituí-lo.","Advanced options":"Opções avançadas","Find in the document":"Pesquisar no documento"},getPluralForm(n){return (n == 0 || n == 1) ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2;}}};
e[ 'pt-br' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'pt-br' ].dictionary = Object.assign( e[ 'pt-br' ].dictionary, dictionary );
e[ 'pt-br' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
