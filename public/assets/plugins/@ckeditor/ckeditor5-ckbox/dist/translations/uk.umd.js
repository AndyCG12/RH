/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'uk' ]: { dictionary, getPluralForm } } = {"uk":{"dictionary":{"Open file manager":"Відкрити менеджер файлів","Cannot determine a category for the uploaded file.":"Не вдається визначити категорію для завантаженого файлу.","Cannot access default workspace.":"Немає доступу до робочого простору за замовчуванням.","Edit image":"Редагувати зображення","Processing the edited image.":"Обробка відредагованого зображення.","Server failed to process the image.":"Серверу не вдалося обробити зображення.","Failed to determine category of edited image.":"Не вдалося визначити категорію відредагованого зображення."},getPluralForm(n){return (n % 1 == 0 && n % 10 == 1 && n % 100 != 11 ? 0 : n % 1 == 0 && n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14) ? 1 : n % 1 == 0 && (n % 10 ==0 || (n % 10 >=5 && n % 10 <=9) || (n % 100 >=11 && n % 100 <=14 )) ? 2: 3);}}};
e[ 'uk' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'uk' ].dictionary = Object.assign( e[ 'uk' ].dictionary, dictionary );
e[ 'uk' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
