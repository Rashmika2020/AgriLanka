function iFrameOn(){
	richTextField.document.designMode = 'On';
}
function iBold(){
	richTextField.document.execCommand('bold',false,null); 
}
function iUnderline(){
	richTextField.document.execCommand('underline',false,null);
}
function iItalic(){
	richTextField.document.execCommand('italic',false,null); 
}
function iFontName(){
	//var size = prompt('Enter a size 1 - 7', '');
	var font = document.getElementById('fontname').value;
	richTextField.document.execCommand('FontName',false,font);
}
function iFontSize(){
	//var size = prompt('Enter a size 1 - 7', '');
	var size = document.getElementById('fontsize').value;
	richTextField.document.execCommand('FontSize',false,size);
}
function iForeColor(){
	//var color = prompt('Define a basic color or apply a hexadecimal color code for advanced colors:', '');
	var color = document.getElementById('forecolor').value;
	richTextField.document.execCommand('ForeColor',false,color);
}
function iJustifyLeft(){
	richTextField.document.execCommand('JustifyLeft',false,null);
}
function iJustifyCenter(){
	richTextField.document.execCommand('JustifyCenter',false,null);
}
function iJustifyRight(){
	richTextField.document.execCommand('JustifyRight',false,null);
}

function iHorizontalRule(){
	richTextField.document.execCommand('inserthorizontalrule',false,null);
}
function iUnorderedList(){
	richTextField.document.execCommand("InsertOrderedList", false,"newOL");
}
function iOrderedList(){
	richTextField.document.execCommand("InsertUnorderedList", false,"newUL");
}
function iImage(){
	var imgSrc = document.getElementById('path').value;
    if(imgSrc != null){
        richTextField.document.execCommand('InsertImage', false, imgSrc); 
    }
}
function submit_form(){
$('h8').hide();
var addform = document.getElementById("addform");
addform.elements["body"].value = window.frames['richTextField'].document.body.innerHTML;
addform.submit();
}
