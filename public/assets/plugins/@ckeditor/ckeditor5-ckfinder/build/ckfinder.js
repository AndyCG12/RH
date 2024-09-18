!function(e){const t=e.en=e.en||{};t.dictionary=Object.assign(t.dictionary||{},{"Could not insert image at the current position.":"Could not insert image at the current position.","Could not obtain resized image URL.":"Could not obtain resized image URL.","Image or file":"Image or file","Insert image or file":"Insert image or file","Inserting image failed":"Inserting image failed","Selecting resized image failed":"Selecting resized image failed"})}(window.CKEDITOR_TRANSLATIONS||(window.CKEDITOR_TRANSLATIONS={})),
/*!
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */(()=>{var e={782:(e,t,i)=>{e.exports=i(237)("./src/core.js")},311:(e,t,i)=>{e.exports=i(237)("./src/ui.js")},584:(e,t,i)=>{e.exports=i(237)("./src/utils.js")},237:e=>{"use strict";e.exports=CKEditor5.dll}},t={};function i(n){var r=t[n];if(void 0!==r)return r.exports;var o=t[n]={exports:{}};return e[n](o,o.exports,i),o.exports}i.d=(e,t)=>{for(var n in t)i.o(t,n)&&!i.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};(()=>{"use strict";i.r(n),i.d(n,{CKFinder:()=>d,CKFinderEditing:()=>c,CKFinderUI:()=>r});var e=i(782),t=i(311);class r extends e.Plugin{static get pluginName(){return"CKFinderUI"}init(){const i=this.editor,n=i.ui.componentFactory,r=i.t;if(n.add("ckfinder",(e=>{const i=this._createButton(t.ButtonView),n=e.t;return i.set({label:n("Insert image or file"),tooltip:!0}),i})),n.add("menuBar:ckfinder",(e=>{const i=this._createButton(t.MenuBarMenuListItemButtonView),n=e.t;return i.label=n("Image or file"),i})),i.plugins.has("ImageInsertUI")){const t=i.plugins.get("ImageInsertUI");t.registerIntegration({name:"assetManager",observable:()=>i.commands.get("ckfinder"),buttonViewCreator:()=>{const i=this.editor.ui.componentFactory.create("ckfinder");return i.icon=e.icons.imageAssetManager,i.bind("label").to(t,"isImageSelected",(e=>r(e?"Replace image with file manager":"Insert image with file manager"))),i},formViewCreator:()=>{const i=this.editor.ui.componentFactory.create("ckfinder");return i.icon=e.icons.imageAssetManager,i.withText=!0,i.bind("label").to(t,"isImageSelected",(e=>r(e?"Replace with file manager":"Insert with file manager"))),i.on("execute",(()=>{t.dropdownView.isOpen=!1})),i}})}}_createButton(t){const i=this.editor,n=new t(i.locale),r=i.commands.get("ckfinder");return n.icon=e.icons.browseFiles,n.bind("isEnabled").to(r),n.on("execute",(()=>{i.execute("ckfinder"),i.editing.view.focus()})),n}}var o=i(584);class s extends e.Command{constructor(e){super(e),this.affectsData=!1,this.stopListening(this.editor.model.document,"change"),this.listenTo(this.editor.model.document,"change",(()=>this.refresh()),{priority:"low"})}refresh(){const e=this.editor.commands.get("insertImage"),t=this.editor.commands.get("link");this.isEnabled=e.isEnabled||t.isEnabled}execute(){const e=this.editor,t=this.editor.config.get("ckfinder.openerMethod")||"modal";if("popup"!=t&&"modal"!=t)throw new o.CKEditorError("ckfinder-unknown-openermethod",e);const i=this.editor.config.get("ckfinder.options")||{};i.chooseFiles=!0;const n=i.onInit;i.language||(i.language=e.locale.uiLanguage),i.onInit=t=>{n&&n(t),t.on("files:choose",(i=>{const n=i.data.files.toArray(),r=n.filter((e=>!e.isImage())),o=n.filter((e=>e.isImage()));for(const t of r)e.execute("link",t.getUrl());const s=[];for(const e of o){const i=e.getUrl();s.push(i||t.request("file:getProxyUrl",{file:e}))}s.length&&a(e,s)})),t.on("file:choose:resizedImage",(t=>{const i=t.data.resizedUrl;if(i)a(e,[i]);else{const t=e.plugins.get("Notification"),i=e.locale.t;t.showWarning(i("Could not obtain resized image URL."),{title:i("Selecting resized image failed"),namespace:"ckfinder"})}}))},window.CKFinder[t](i)}}function a(e,t){if(e.commands.get("insertImage").isEnabled)e.execute("insertImage",{source:t});else{const t=e.plugins.get("Notification"),i=e.locale.t;t.showWarning(i("Could not insert image at the current position."),{title:i("Inserting image failed"),namespace:"ckfinder"})}}class c extends e.Plugin{static get pluginName(){return"CKFinderEditing"}static get requires(){return[t.Notification,"LinkEditing"]}init(){const e=this.editor;if(!e.plugins.has("ImageBlockEditing")&&!e.plugins.has("ImageInlineEditing"))throw new o.CKEditorError("ckfinder-missing-image-plugin",e);e.commands.add("ckfinder",new s(e))}}class d extends e.Plugin{static get pluginName(){return"CKFinder"}static get requires(){return["Link","CKFinderUploadAdapter",c,r]}}})(),(window.CKEditor5=window.CKEditor5||{}).ckfinder=n})();