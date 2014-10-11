//------------------------------------------------------------------------
$(document).on("change", "#selectuf", function() {
	if ($('#selectuf').val() != '') {
		var ufId = $('#selectuf').val();
		loadCitySelectBox(ufId,'');
	}
});
//------------------------------------------------------------------------
function loadCitySelectBox(ufId, spanid) {
	$.ajax({url: '../controller/comum/c_cidades.php',
			type: 'get',
			data: {ufid: ufId,
				   type: 'uf'},
		success: function(resp) {			
			$('#sbox_cidades'+spanid).html(resp);
		}
	});
}