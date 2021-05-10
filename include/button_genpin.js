
Runner.buttonEvents["genpin"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='genpin';if(!pageObj.buttonEventBefore['genpin']){pageObj.buttonEventBefore['genpin']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['genpin']){pageObj.buttonEventAfter['genpin']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var cfd=Runner.getControl(pageid,'FirmaDigital');var pin=result["pin"];cfd.setValue(pin);}}
$('a[id="genpin"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="genpin"+"_"+Runner.genId();var button_genpin=new Runner.form.Button({id:this.id,btnName:"genpin"});button_genpin.init({args:[pageObj,proxy,pageid]});});};