
Runner.buttonEvents["IniciarPA"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='IniciarPA';if(!pageObj.buttonEventBefore['IniciarPA']){pageObj.buttonEventBefore['IniciarPA']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['IniciarPA']){pageObj.buttonEventAfter['IniciarPA']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="IniciarPA"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="IniciarPA"+"_"+Runner.genId();var button_IniciarPA=new Runner.form.Button({id:this.id,btnName:"IniciarPA"});button_IniciarPA.init({args:[pageObj,proxy,pageid]});});};