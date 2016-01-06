function novo_fornecedor() {
		$( "#novo_fornecedorJS" ).slideToggle("slow", function() {			});
}
function listar_fornecedores() {
		$( "#listar_fornecedoresJS" ).slideToggle("slow", function() {			});
}
function novo_cliente() {
		$( "#novo_clienteJS" ).slideToggle("slow", function() {			});
}
function listar_clientes() {
		$( "#listar_clientesJS" ).slideToggle("slow", function() {			});
}
function quadro() {
	$( "#anotacao" ).slideToggle("fast", function() {});
}
function autofocus() {
	$("#pesquisa").focus();
	document.getElementById("pesquisa").focus()
}
/* AJAX
-------------------------------------------- */
function ajaxRequest(){
 var activexmodes=["Msxml2.XMLHTTP", "Microsoft.XMLHTTP"]
 if (window.ActiveXObject){
  for (var i=0; i<activexmodes.length; i++){
   try{
    return new ActiveXObject(activexmodes[i])
   }
   catch(e){
    //suppress error
   }
  }
 }
 else if (window.XMLHttpRequest)
  return new XMLHttpRequest()
 else
  return false
}
function salvar_anotacao() {
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
	   document.getElementById("resultado").innerHTML=mypostrequest.responseText
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	var value1=encodeURIComponent(document.getElementById("anotacao").value)
	var value2=encodeURIComponent(document.getElementById("em").value)
	var parameters="anotacao="+value1+"&em="+value2
	mypostrequest.open("POST", "pp/salvar_anotacao.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}