/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'zh-cn' ]: { dictionary, getPluralForm } } = {"zh-cn":{"dictionary":{"media widget":"媒体小部件","Media URL":"媒体URL","Paste the media URL in the input.":"在输入中粘贴媒体URL","Tip: Paste the URL into the content to embed faster.":"提示：将URL粘贴到内容中可更快地嵌入","The URL must not be empty.":"URL不可以为空。","This media URL is not supported.":"不支持此媒体URL。","Insert media":"插入媒体","Media toolbar":"媒体工具栏","Open media in new tab":"在新标签页打开媒体"},getPluralForm(n){return 0;}}};
e[ 'zh-cn' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'zh-cn' ].dictionary = Object.assign( e[ 'zh-cn' ].dictionary, dictionary );
e[ 'zh-cn' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );