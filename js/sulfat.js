$(document).ready(function() {
	var type = "None";
	var rm = 0;
	var g_sa = 0;
	var rp = 0; // радіус циліндричної контактної поверхні обичайки пресуючого ролика
		
	var hb = 0; // шар продукту з мінімальною висотою

	//кутові координати верхньої φ_в0, рад, та нижньої φ_в1, рад, меж зони видавлювання
	var fiv_0 = 0; // кутовa координатa верхньої межі зони видавлювання
	var fiv_1 = 0;




	$("#start_calculate").click(function(){
		type = "calculate";
		rm = $("input[name='rm']").val();
		g_sa = $("input[name='g_sa']").val();
		rp = $("input[name='rp']").val();
		hb = $("input[name='hb']").val();
		fiv_0 = $("input[name='fiv_0']").val();
		fiv_1 = $("input[name='fiv_1']").val();

		$.ajax({
			type: "GET",
			url: "request/request.php",
			data: {type:type, rm:rm, g_sa:g_sa, rp:rp, hb:hb, fiv_0:fiv_0, fiv_1:fiv_1},
			success: function(msg){
				$("#result_place").html(msg);
			}
		});

	});

});