
Runner.buttonEvents["Autorizar_Memo"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Autorizar_Memo';if(!pageObj.buttonEventBefore['Autorizar_Memo']){pageObj.buttonEventBefore['Autorizar_Memo']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var gpin=prompt("Introduzca el PIN de Autorizacion");if(gpin==""){return false;}else{if(gpin.length!=6){alert("El PIN es incorrecto, verifique");return false;}else{params["pin"]=gpin;}}}}
if(!pageObj.buttonEventAfter['Autorizar_Memo']){pageObj.buttonEventAfter['Autorizar_Memo']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var sts=result["sts"];var message=result["txt"]+"!!!";if(sts=='A'){location.reload();ctrl.setMessage(message);}else if(sts=='R'){alert(message);}}}
$('a[id="Autorizar_Memo"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Autorizar_Memo"+"_"+Runner.genId();var button_Autorizar_Memo=new Runner.form.Button({id:this.id,btnName:"Autorizar_Memo"});button_Autorizar_Memo.init({args:[pageObj,proxy,pageid]});});};