
Runner.controls.EditSnapshotCam=Runner.extend(Runner.controls.Control,{required:false,myVal:"value of my Field: ",constructor:function(cfg){this.addEvent(["change","keyup"]);Runner.controls.EditSnapshotCam.superclass.constructor.call(this,cfg);this.required=this.getFieldSetting("required");this.myVal=this.getFieldSetting("myVal");$("#TakeSnapshot").bind("click",function(){Runner.pages.RunnerPage.prototype.setPageModified(true);});if(this.required)
this.addValidation("IsRequired");$("input[class^='HIDE_SNAPSHOTCAM_FIELD']").hide();if(this.getValue()!=''&&this.getValue().substr(0,3)=='[{"'){SnapshotCamFile=$.parseJSON(this.getValue());}else{SnapshotCamFile=new Array();SnapshotCamFile[0]={"name":"","usrName":"SnapshotCam.png","size":1,"type":'image\/png',"searchStr":"SnapshotCam.png,!:sStrEnd"};}},isEmpty:function(){return this.getValue().toString()=="";},getForSubmit:function(){if(SnapshotCamFile[0]['name']==''){var finalData="";}else{var myJSONString=JSON.stringify(SnapshotCamFile);var regex=/\\\\/g;var finalData=myJSONString.replace(regex,"\\");}
if(!this.appearOnPage()){return[];}
return[this.valueElem.clone().val(finalData)];},setFocus:function(){return false;}});Runner.controls.constants["EditSnapshotCam"]="EditSnapshotCam";