/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module media-embed/mediaembedui
 */
import { Plugin } from 'ckeditor5/src/core.js';
import MediaEmbedEditing from './mediaembedediting.js';
/**
 * The media embed UI plugin.
 */
export default class MediaEmbedUI extends Plugin {
    /**
     * @inheritDoc
     */
    static get requires(): readonly [typeof MediaEmbedEditing];
    /**
     * @inheritDoc
     */
    static get pluginName(): "MediaEmbedUI";
    /**
     * @inheritDoc
     */
    init(): void;
    private _setUpDropdown;
}
