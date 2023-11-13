function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=tbl_ingredientes',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	id 		= document.formUser.id.value;
	nombre 		= document.formUser.nombre.value;
	descripcion 	= document.formUser.descripcion.value;
	precio 		= document.formUser.precio.value;
	unidad_mdd 		= document.formUser.unidad_mdd.value;
	stock 		= document.formUser.stock.value;
	fecha_cad 		= document.formUser.fecha_cad.value;
	cnt_ing 		= document.formUser.cnt_ing.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4	){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
			document.formUser.reset();
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&descripcion="+descripcion+"&precio="+precio+"&unidad_mdd="+unidad_mdd+"&stock="+stock+"&fecha_cad="+fecha_cad+"&cnt_ing="+cnt_ing+"&id="+id);
}	

function update(){
	id 			= document.formUserUpdate.id.value;
	nombre 		= document.formUserUpdate.nombre.value;
	descripcion 	= document.formUserUpdate.descripcion.value;
	precio 		= document.formUserUpdate.precio.value;
	unidad_mdd 		= document.formUserUpdate.unidad_mdd.value;
	stock 		= document.formUserUpdate.stock.value;
	fecha_cad 		= document.formUserUpdate.fecha_cad.value;
	cnt_ing 		= document.formUserUpdate.cnt_ing.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			if (ajax.status==200){
				read();
				alert("Los datos se han actualizado");
				$('#updateUser').modal('hide');
			}
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&descripcion="+descripcion+"&precio="+precio+"&unidad_mdd="+unidad_mdd+"&stock="+stock+"&fecha_cad="+fecha_cad+"&cnt_ing="+cnt_ing+"&id="+id);

}

function deleteUser(id){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,nombre,descripcion,precio,unidad_mdd,stock,fecha_cad,cnt_ing){			
	document.formUserUpdate.id.value 			= id;
	document.formUserUpdate.nombre.value 			= nombre;
	document.formUserUpdate.descripcion.value 	= descripcion;
	document.formUserUpdate.precio.value 		= precio;
	document.formUserUpdate.unidad_mdd.value 		= unidad_mdd;
	document.formUserUpdate.stock.value 		= stock;
	document.formUserUpdate.fecha_cad.value 		= fecha_cad;
	document.formUserUpdate.cnt_ing	.value 		= cnt_ing	;


	$('#updateUser').modal('show');
}
