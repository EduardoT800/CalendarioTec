let div
$(document).ready(function(e){

});


function agregar(){
	var tabla = $("#tabla-add").find('tbody');

	tabla.append($('<tr>')
			.append($('<td>').attr('id', 'new1')
				.append($('<input>').attr('type','text').attr('id', 'escribit3' ).attr('style','width: 100%;')))
			.append($('<td>').attr('id', 'new2')
				.append($('<input>').attr('type','text').attr('id', 'escribit3' ).attr('style','width: 100%;')))
			.append($('<td>').attr('id', 'new3')
				.append($('<input>').attr('type','text').attr('id', 'escribit3' ).attr('style','width: 100%;'))));
}

$(document).ready(function(){

		$('#bt_del').click(function(){
			eliminar(id_fila_selected);
		});


});

var cont=0;
	var id_fila_selected=[];