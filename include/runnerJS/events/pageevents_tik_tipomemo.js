
Runner.pages.PageSettings.addPageEvent('tik_tipomemo',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var csig=Runner.getControl(pageid,'Siglas');var cdes=Runner.getControl(pageid,'Descripcion');cdes.addStyle('text-transform: uppercase;');csig.addStyle('text-transform: uppercase;');;});Runner.pages.PageSettings.addPageEvent('tik_tipomemo',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var csig=Runner.getControl(pageid,'Siglas');var cdes=Runner.getControl(pageid,'Descripcion');cdes.addStyle('text-transform: uppercase;');csig.addStyle('text-transform: uppercase;');;});