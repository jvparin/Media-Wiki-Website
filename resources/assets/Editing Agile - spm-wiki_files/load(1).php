window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/MSIE 10|webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:
function(fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/mediawiki/load.php"});mw.loader.register([["site","1jymbeh",[1]],["site.styles","1ac0sc3",[],"site"],["noscript","1pere3o",[],"noscript"],["filepage","0xfxmiz"],["user.groups","1g5fez9",[5]],["user","1uuewf3",[6],"user"],["user.styles","1irabgl",[],"user"],["user.defaults","0air55s"],["user.options","0r5ungb",[7],"private"],["user.tokens","0u6ul9b",[],"private"],["mediawiki.language.data","1pox0t6",[177]],["mediawiki.skinning.elements","00nti1n"],["mediawiki.skinning.content","09cnq7o"],["mediawiki.skinning.interface","0msycdi"],["mediawiki.skinning.content.parsoid","1nkwryc"],["mediawiki.skinning.content.externallinks","0mpfg9p"],["jquery.accessKeyLabel","09p5vh1",[22,130]],["jquery.async","180qee8"],["jquery.byteLength","0u25v2v",[131]],["jquery.byteLimit","1g5fez9",[37]],["jquery.checkboxShiftClick","155y9m0"],["jquery.chosen","1w20vsj"],[
"jquery.client","1lfnrib"],["jquery.color","18cn9ka",[24]],["jquery.colorUtil","1b4jjux"],["jquery.confirmable","0z3zoi0",[178]],["jquery.cookie","11zzpot"],["jquery.expandableField","0pr8gc5"],["jquery.farbtastic","1ecbrf8",[24]],["jquery.footHovzer","0hgkcnd"],["jquery.form","1ec8vpo"],["jquery.fullscreen","1mr2mc0"],["jquery.getAttrs","1y2kein"],["jquery.hidpi","0f8da39"],["jquery.highlightText","1oe3w1p",[130]],["jquery.hoverIntent","082lw10"],["jquery.i18n","0r6ccxx",[176]],["jquery.lengthLimit","03zy6xh",[131]],["jquery.localize","0inffge"],["jquery.makeCollapsible","0mq8tyc"],["jquery.mockjax","1sjcx7j"],["jquery.mw-jump","1rz26zh"],["jquery.qunit","1b6ld31"],["jquery.spinner","020rnom"],["jquery.jStorage","0c5kpcw"],["jquery.suggestions","1hfud8v",[34]],["jquery.tabIndex","0m811v6"],["jquery.tablesorter","0nzo0gc",[130,179]],["jquery.textSelection","02084v8",[22]],["jquery.throttle-debounce","166p18p"],["jquery.xmldom","1xa0cly"],["jquery.tipsy","1y0vyj8"],["jquery.ui.core",
"0sbfdy8",[53],"jquery.ui"],["jquery.ui.core.styles","1pahgc4",[],"jquery.ui"],["jquery.ui.accordion","12m5wud",[52,72],"jquery.ui"],["jquery.ui.autocomplete","0chwuag",[61],"jquery.ui"],["jquery.ui.button","0fy6lvt",[52,72],"jquery.ui"],["jquery.ui.datepicker","0twu5mx",[52],"jquery.ui"],["jquery.ui.dialog","1wnt8lt",[56,59,63,65],"jquery.ui"],["jquery.ui.draggable","17fg9r9",[52,62],"jquery.ui"],["jquery.ui.droppable","0q48tog",[59],"jquery.ui"],["jquery.ui.menu","0711dkj",[52,63,72],"jquery.ui"],["jquery.ui.mouse","1omxzkt",[72],"jquery.ui"],["jquery.ui.position","0lrqhsy",[],"jquery.ui"],["jquery.ui.progressbar","0x5elkx",[52,72],"jquery.ui"],["jquery.ui.resizable","1jy262w",[52,62],"jquery.ui"],["jquery.ui.selectable","01d6mnf",[52,62],"jquery.ui"],["jquery.ui.slider","0acw7c3",[52,62],"jquery.ui"],["jquery.ui.sortable","11wp6vv",[52,62],"jquery.ui"],["jquery.ui.spinner","1mtu1vn",[56],"jquery.ui"],["jquery.ui.tabs","0q6x2oc",[52,72],"jquery.ui"],["jquery.ui.tooltip","0u1w7u4",[52
,63,72],"jquery.ui"],["jquery.ui.widget","1eaw7r1",[],"jquery.ui"],["jquery.effects.core","1noh13s",[],"jquery.ui"],["jquery.effects.blind","1cptqyt",[73],"jquery.ui"],["jquery.effects.bounce","0so7ocr",[73],"jquery.ui"],["jquery.effects.clip","0jp90u2",[73],"jquery.ui"],["jquery.effects.drop","0bb29q6",[73],"jquery.ui"],["jquery.effects.explode","1vmr2tv",[73],"jquery.ui"],["jquery.effects.fade","1jeqlkv",[73],"jquery.ui"],["jquery.effects.fold","1x4oxgr",[73],"jquery.ui"],["jquery.effects.highlight","1htun7n",[73],"jquery.ui"],["jquery.effects.pulsate","02olqvr",[73],"jquery.ui"],["jquery.effects.scale","0c0i7c7",[73],"jquery.ui"],["jquery.effects.shake","0rv42g8",[73],"jquery.ui"],["jquery.effects.slide","1d9ww8n",[73],"jquery.ui"],["jquery.effects.transfer","0r056zn",[73],"jquery.ui"],["json","1g5fez9"],["moment","1geqrij",[174]],["mediawiki.apihelp","0mnfa98"],["mediawiki.template","0n7vts0"],["mediawiki.template.mustache","09ww60s",[90]],["mediawiki.template.regexp","1mcmvuw",[90
]],["mediawiki.apipretty","0dkae6u"],["mediawiki.api","1v9nef7",[148,9]],["mediawiki.api.category","0xzqlsf",[136,94]],["mediawiki.api.edit","1lf3k4s",[146]],["mediawiki.api.login","0s2m43x",[94]],["mediawiki.api.options","18u99s7",[94]],["mediawiki.api.parse","09sygol",[94]],["mediawiki.api.upload","1mi0dm1",[96]],["mediawiki.api.user","1ptgrid",[94]],["mediawiki.api.watch","08hrnl3",[94]],["mediawiki.api.messages","09vqmfk",[94]],["mediawiki.api.rollback","1s3401b",[94]],["mediawiki.content.json","1604gyi"],["mediawiki.confirmCloseWindow","0x6m9eo"],["mediawiki.debug","05sn96g",[29,273]],["mediawiki.diff.styles","0e1ful3"],["mediawiki.feedback","0ots33c",[136,124,277]],["mediawiki.feedlink","1q6e2gp"],["mediawiki.filewarning","1qc7213",[273]],["mediawiki.ForeignApi","1yzfkev",[113]],["mediawiki.ForeignApi.core","1vra03z",[94,269]],["mediawiki.helplink","1geuyn3"],["mediawiki.hidpi","0uybzd7",[33],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","084agyw"],[
"mediawiki.htmlform","0boot4s",[37,130]],["mediawiki.htmlform.checker","1tc9a1a",[49]],["mediawiki.htmlform.ooui","01sdi4k",[273]],["mediawiki.htmlform.styles","05ghg5m"],["mediawiki.htmlform.ooui.styles","11jrcch"],["mediawiki.icon","0yn0g43"],["mediawiki.inspect","09o0q9e",[130,131]],["mediawiki.messagePoster","182ao52",[112]],["mediawiki.messagePoster.wikitext","155wb3z",[96,124]],["mediawiki.notification","1j1vmr0",[148,156]],["mediawiki.notify","1gmqep9"],["mediawiki.notification.convertmessagebox","1cll23s",[126]],["mediawiki.notification.convertmessagebox.styles","0oizg8h"],["mediawiki.RegExp","0u2xz6d"],["mediawiki.String","0k8g2cr"],["mediawiki.pager.tablePager","1vqolsi"],["mediawiki.searchSuggest","08mprhl",[32,45,94]],["mediawiki.sectionAnchor","0s2w1pl"],["mediawiki.storage","1ug898g"],["mediawiki.Title","0vdgem2",[131,148]],["mediawiki.Upload","03hpca1",[100]],["mediawiki.ForeignUpload","00823t7",[112,137]],["mediawiki.ForeignStructuredUpload.config","0msydx9"],[
"mediawiki.ForeignStructuredUpload","0hon87o",[139,138]],["mediawiki.Upload.Dialog","0ajnxa4",[142]],["mediawiki.Upload.BookletLayout","12y7rdn",[136,137,178,266,88,275,277]],["mediawiki.ForeignStructuredUpload.BookletLayout","1pw9txl",[140,142,103,182,256,251]],["mediawiki.toc","1gzp7i1",[152]],["mediawiki.Uri","02mbhg9",[148,92]],["mediawiki.user","1qqm1on",[101,135,8]],["mediawiki.userSuggest","19k4r14",[45,94]],["mediawiki.util","1hwa75w",[16,127]],["mediawiki.viewport","0b8n2ie"],["mediawiki.checkboxtoggle","0ryytlh"],["mediawiki.checkboxtoggle.styles","08g2mo2"],["mediawiki.cookie","0q47k9b",[26]],["mediawiki.toolbar","0chk5ne",[48]],["mediawiki.experiments","0p781wk"],["mediawiki.editfont.styles","1pchjfi"],["mediawiki.visibleTimeout","0852z0k"],["mediawiki.action.delete","0ulqqr8",[37,273]],["mediawiki.action.delete.file","0l20l5p",[37]],["mediawiki.action.edit","16h32h4",[48,160,94,155,254]],["mediawiki.action.edit.styles","0o645pr"],["mediawiki.action.edit.collapsibleFooter",
"06gtsw2",[39,122,135]],["mediawiki.action.edit.preview","0fjvhqd",[43,48,94,108,178,273]],["mediawiki.action.history","0ihy9gh"],["mediawiki.action.history.styles","1ge0b9v"],["mediawiki.action.view.dblClickEdit","0oye9l6",[148,8]],["mediawiki.action.view.metadata","05y6u6p",[173]],["mediawiki.action.view.categoryPage.styles","1fy41pe"],["mediawiki.action.view.postEdit","14x0kha",[178,126]],["mediawiki.action.view.redirect","0g7n5fq",[22]],["mediawiki.action.view.redirectPage","17o7k7h"],["mediawiki.action.view.rightClickEdit","0xvj4q4"],["mediawiki.action.edit.editWarning","13mw5cz",[48,106,178]],["mediawiki.action.view.filepage","03001la"],["mediawiki.language","0h803eg",[175,10]],["mediawiki.cldr","0n5pth2",[176]],["mediawiki.libs.pluralruleparser","08hgfk4"],["mediawiki.language.init","1lnpqmu"],["mediawiki.jqueryMsg","1xi6hke",[174,148,8]],["mediawiki.language.months","08a5qg7",[174]],["mediawiki.language.names","0cfo43y",[177]],["mediawiki.language.specialCharacters","0meovla",[
174]],["mediawiki.libs.jpegmeta","0h3n4pr"],["mediawiki.page.gallery","1mnkjne",[49,184]],["mediawiki.page.gallery.styles","1iz1ruf"],["mediawiki.page.gallery.slideshow","0baonze",[136,94,275,290]],["mediawiki.page.ready","176t9tf",[16,20,41]],["mediawiki.page.startup","002i18o"],["mediawiki.page.patrol.ajax","0dwveb6",[43,136,94]],["mediawiki.page.watch.ajax","0zkkkh8",[136,102,178]],["mediawiki.page.rollback","1u9je1i",[43,104]],["mediawiki.page.image.pagination","0asaa0z",[43,148]],["mediawiki.rcfilters.filters.base.styles","16hpcmx"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","0egv0pt"],["mediawiki.rcfilters.filters.dm","0c8edyd",[131,145,98,178,146,269]],["mediawiki.rcfilters.filters.ui","0jsqx5i",[39,194,249,284,286,288,290]],["mediawiki.special","179r7n1"],["mediawiki.special.apisandbox.styles","1gic0h0"],["mediawiki.special.apisandbox","0wjgzxi",[39,94,178,255,272]],["mediawiki.special.block","0sx012w",[117,148,257]],["mediawiki.special.changecredentials.js",
"0spyck3",[94,119]],["mediawiki.special.changeslist","08bysiu"],["mediawiki.special.changeslist.enhanced","0tu6tjk"],["mediawiki.special.changeslist.legend","1e2v4b4"],["mediawiki.special.changeslist.legend.js","0xjq99j",[39,152]],["mediawiki.special.changeslist.visitedstatus","0f57y34"],["mediawiki.special.comparepages.styles","1ciwyr5"],["mediawiki.special.contributions","0hnjd72",[178,251]],["mediawiki.special.edittags","1gfvpxd",[21,37]],["mediawiki.special.edittags.styles","0t9h35q"],["mediawiki.special.import","12kvhnd"],["mediawiki.special.movePage","0cwqnn4",[249,254]],["mediawiki.special.movePage.styles","10nzp5e"],["mediawiki.special.pageLanguage","0z5zgjw",[273]],["mediawiki.special.pagesWithProp","1wk600z"],["mediawiki.special.preferences","03a2s5r",[106,174,128]],["mediawiki.special.preferences.styles","0jlr8yt"],["mediawiki.special.recentchanges","1gbq18h"],["mediawiki.special.revisionDelete","1g4ionh",[37]],["mediawiki.special.search","105mxa3",[264]],[
"mediawiki.special.search.commonsInterwikiWidget","1cl5320",[145,94,178]],["mediawiki.special.search.interwikiwidget.styles","0gte0cz"],["mediawiki.special.search.styles","04q2u1c"],["mediawiki.special.undelete","12d9zzd",[249,254]],["mediawiki.special.unwatchedPages","0ww2k71",[136,102]],["mediawiki.special.upload","1n11jqg",[43,136,99,106,178,182,226,90]],["mediawiki.special.upload.styles","1qlfp8c"],["mediawiki.special.userlogin.common.styles","0qo4j41"],["mediawiki.special.userlogin.login.styles","1tpcn33"],["mediawiki.special.userlogin.signup.js","1qfn0ri",[94,118,178]],["mediawiki.special.userlogin.signup.styles","0vmczli"],["mediawiki.special.userrights","100s792",[37,128]],["mediawiki.special.watchlist","19pouwu",[136,102,178,273]],["mediawiki.special.watchlist.styles","0q6w29n"],["mediawiki.special.version","1jlykal"],["mediawiki.legacy.config","0i0tpg5"],["mediawiki.legacy.commonPrint","0yocy7u"],["mediawiki.legacy.protect","09ghcxf",[37]],["mediawiki.legacy.shared","19sxnpw"
],["mediawiki.legacy.oldshared","1azws2y"],["mediawiki.legacy.wikibits","1vpw5cj"],["mediawiki.ui","1srnqhq"],["mediawiki.ui.checkbox","0loh7yu"],["mediawiki.ui.radio","07l9qyi"],["mediawiki.ui.anchor","1l2wjcq"],["mediawiki.ui.button","13ibiqh"],["mediawiki.ui.input","0xmcg7h"],["mediawiki.ui.icon","035eux4"],["mediawiki.ui.text","1gqio9v"],["mediawiki.widgets","0dfznhi",[136,94,250,275]],["mediawiki.widgets.styles","0etap8q"],["mediawiki.widgets.DateInputWidget","1p11lm7",[252,88,275]],["mediawiki.widgets.DateInputWidget.styles","17snx04"],["mediawiki.widgets.visibleByteLimit","1g5fez9",[254]],["mediawiki.widgets.visibleLengthLimit","1501w7u",[37,273]],["mediawiki.widgets.datetime","189mm8e",[273,291,292]],["mediawiki.widgets.CategoryMultiselectWidget","1qdpd4j",[112,136,275]],["mediawiki.widgets.SelectWithInputWidget","1co8tfn",[258,275]],["mediawiki.widgets.SelectWithInputWidget.styles","0bgcwbg"],["mediawiki.widgets.SizeFilterWidget","0v3twj8",[260,275]],[
"mediawiki.widgets.SizeFilterWidget.styles","183itmr"],["mediawiki.widgets.MediaSearch","0lfakar",[112,136,275]],["mediawiki.widgets.UserInputWidget","143qwld",[94,275]],["mediawiki.widgets.UsersMultiselectWidget","0xr15dx",[94,275]],["mediawiki.widgets.SearchInputWidget","1k96z0w",[133,249]],["mediawiki.widgets.SearchInputWidget.styles","1cv30ce"],["mediawiki.widgets.StashedFileWidget","1v46xrk",[94,273]],["es5-shim","1g5fez9"],["dom-level2-shim","1g5fez9"],["oojs","11s8bst"],["mediawiki.router","1i2h7bw",[271]],["oojs-router","1u4m9fm",[269]],["oojs-ui","1g5fez9",[276,275,277]],["oojs-ui-core","0olsbew",[174,269,274,281,282,287,278,279]],["oojs-ui-core.styles","1p0626s"],["oojs-ui-widgets","0cl7n67",[273,283,291,292]],["oojs-ui-toolbars","1eqihnj",[273,292]],["oojs-ui-windows","1kls90r",[273,292]],["oojs-ui.styles.indicators","17ymeis"],["oojs-ui.styles.textures","192gtks"],["oojs-ui.styles.icons-accessibility","1uamom0"],["oojs-ui.styles.icons-alerts","0kcprzl"],[
"oojs-ui.styles.icons-content","0e1hdxj"],["oojs-ui.styles.icons-editing-advanced","1q7ntm8"],["oojs-ui.styles.icons-editing-core","0xez118"],["oojs-ui.styles.icons-editing-list","1or3m4w"],["oojs-ui.styles.icons-editing-styling","05kseto"],["oojs-ui.styles.icons-interactions","0ybfcno"],["oojs-ui.styles.icons-layout","1v49ppd"],["oojs-ui.styles.icons-location","0odhyfq"],["oojs-ui.styles.icons-media","1302rzb"],["oojs-ui.styles.icons-moderation","18veo6s"],["oojs-ui.styles.icons-movement","0tguglf"],["oojs-ui.styles.icons-user","1f5f560"],["oojs-ui.styles.icons-wikimedia","1whdvfx"],["skins.vector.styles","1jn2btm"],["skins.vector.styles.responsive","138rb2k"],["skins.vector.js","18znzk9",[46,49]]]);;mw.config.set({"wgLoadScript":"/mediawiki/load.php","debug":!1,"skin":"vector","stylepath":"/mediawiki/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/mediawiki/index.php/$1","wgScriptPath":"/mediawiki","wgScript":"/mediawiki/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://spm-wiki.com","wgServerName":"spm-wiki.com","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.31.1","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"spm-wiki","5":"spm-wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":
"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"spm-wiki":4,"spm-wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"spm-wiki","wgDBname":"bitnami_mediawiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/mediawiki/extensions","wgCookiePrefix":"bitnami_mediawiki","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":
!0,"wgCommentByteLimit":255,"wgCommentCodePointLimit":null});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/mediawiki/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=13ys15n";script.onload=function(){script.onload=null;script=null;startUp();};document.head.appendChild(script);}());
