/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ru' ]: { dictionary, getPluralForm } } = {"ru":{"dictionary":{"media widget":"медиа-виджет","Media URL":"URL медиа","Paste the media URL in the input.":"Вставьте URL медиа в поле ввода.","Tip: Paste the URL into the content to embed faster.":"Подсказка: Вставьте URL в контент для быстрого включения.","The URL must not be empty.":"URL не должен быть пустым.","This media URL is not supported.":"Этот URL медиа не поддерживается.","Insert media":"Вставить медиа","Media toolbar":"Панель инструментов медиа","Open media in new tab":"Откройте медиа в новой вкладке"},getPluralForm(n){return (n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<12 || n%100>14) ? 1 : n%10==0 || (n%10>=5 && n%10<=9) || (n%100>=11 && n%100<=14)? 2 : 3);}}};
e[ 'ru' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ru' ].dictionary = Object.assign( e[ 'ru' ].dictionary, dictionary );
e[ 'ru' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
