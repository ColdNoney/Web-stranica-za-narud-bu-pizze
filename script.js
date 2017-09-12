
	//funkcije za pokazivanje tablica
	
	$('#showTable').click(function() {        
         $('#tablicaL').show();
		 $('#tablicaD').show();
		 $('#brojPizza').show();
		 $('#potvrda').show();
		 $('.buttons').hide();
    });
	
	$('#showTable2').click(function() {        
         $('#tablica3').show();
		 $('#brojPizza').show();
		 $('#potvrda').show();
		 $('.buttons').hide();
    });

	//funkcija za spremanje inputa u bazu podataka
	
	$("#spremi").click(function(){

    $.post($("#myform").attr("action"), $("#myform:input").serializeArray(), function(info){$("#result").html(info);});
    });
	$("#myform").submit(function(){
    return false;
    });
	
	// Funkcija za izracun ukupne cijene 	
	var tijestoCijena = 10;
	var sastojakCijena = 0;

    function test(item){
        if(item.checked){
           sastojakCijena+= parseInt(item.value);
        }else{
           sastojakCijena-= parseInt(item.value);
        }
        //alert(sastojakCijena);
        document.getElementById('cijena').innerHTML = sastojakCijena + tijestoCijena;
    }

	function ukupno(){

		var e = document.getElementById("odabirBroja");
		var broj = e.options[e.selectedIndex].value;
		document.getElementById('cijena').innerHTML = (sastojakCijena + tijestoCijena) * broj;

	}
	ukupno()
	
	document.getElementById("odabirBroja").onchange = ukupno;
	
	var ukupnaCijena = (tijestoCijena + sastojakCijena) * broj;
	
	
	
	// funkcije za prikaz sastojaka
	
	$('#upaliKukuruzL').change(function(){
		if(this.checked) {
			$('#kukuruzL').show();
		} else {
			$('#kukuruzL').hide();
		}
	});
	
	$('#upaliKukuruzD').change(function(){
		if(this.checked) {
			$('#kukuruzD').show();
		} else {
			$('#kukuruzD').hide();
		}
	});
	
	$('#upaliKukuruz').change(function(){
		if(this.checked) {
			$('#kukuruz').show();
		} else {
			$('#kukuruz').hide();
		}
	});
	
	$('#upaliRajcica').change(function(){
		if(this.checked) {
			$('#rajcica').show();
		} else {
			$('#rajcica').hide();
		}
	});
	
	$('#upaliRajcica2').change(function(){
		if(this.checked) {
			$('#rajcica').show();
		} else {
			$('#rajcica').hide();
		}
	});
	
	$('#upaliRajcica3').change(function(){
		if(this.checked) {
			$('#rajcica').show();
		} else {
			$('#rajcica').hide();
		}
	});
	
	
	$('#upaliMasline').change(function(){
		if(this.checked) {
			$('#masline').show();
		} else {
			$('#masline').hide();
		}
	});
	
	$('#upaliMaslineL').change(function(){
		if(this.checked) {
			$('#maslineL').show();
		} else {
			$('#maslineL').hide();
		}
	});
	
	$('#upaliMaslineD').change(function(){
		if(this.checked) {
			$('#maslineD').show();
		} else {
			$('#maslineD').hide();
		}
	});
	
	$('#upaliSunka').change(function(){
		if(this.checked) {
			$('#sunka').show();
		} else {
			$('#sunka').hide();
		}
	});
	
	$('#upaliSunkaL').change(function(){
		if(this.checked) {
			$('#sunkaL').show();
		} else {
			$('#sunkaL').hide();
		}
	});
	
	$('#upaliSunkaD').change(function(){
		if(this.checked) {
			$('#sunkaD').show();
		} else {
			$('#sunkaD').hide();
		}
	});
	
	$('#upaliLuk').change(function(){
		if(this.checked) {
			$('#luk').show();
		} else {
			$('#luk').hide();
		}
	});
	
	$('#upaliLukL').change(function(){
		if(this.checked) {
			$('#lukL').show();
		} else {
			$('#lukL').hide();
		}
	});
	
	$('#upaliLukD').change(function(){
		if(this.checked) {
			$('#lukD').show();
		} else {
			$('#lukD').hide();
		}
	});
	
	$('#upaliTuna').change(function(){
		if(this.checked) {
			$('#tuna').show();
		} else {
			$('#tuna').hide();
		}
	});
	
	$('#upaliTunaL').change(function(){
		if(this.checked) {
			$('#tunaL').show();
		} else {
			$('#tunaL').hide();
		}
	});
	
	$('#upaliTunaD').change(function(){
		if(this.checked) {
			$('#tunaD').show();
		} else {
			$('#tunaD').hide();
		}
	});
	
	$('#upaliSalata').change(function(){
		if(this.checked) {
			$('#salata').show();
		} else {
			$('#salata').hide();
		}
	});
	
	$('#upaliSalataL').change(function(){
		if(this.checked) {
			$('#salataL').show();
		} else {
			$('#salataL').hide();
		}
	});
	
	$('#upaliSalataD').change(function(){
		if(this.checked) {
			$('#salataD').show();
		} else {
			$('#salataD').hide();
		}
	});
	
	$('#upaliGljive').change(function(){
		if(this.checked) {
			$('#gljive').show();
		} else {
			$('#gljive').hide();
		}
	});
	
	$('#upaliGljiveL').change(function(){
		if(this.checked) {
			$('#gljiveL').show();
		} else {
			$('#gljiveL').hide();
		}
	});
	
	$('#upaliGljiveD').change(function(){
		if(this.checked) {
			$('#gljiveD').show();
		} else {
			$('#gljiveD').hide();
		}
	});
	
	$('#upaliSir').change(function(){
		if(this.checked) {
			$('#sir').show();
		} else {
			$('#sir').hide();
		}
	});
	
	$('#upaliSirL').change(function(){
		if(this.checked) {
			$('#sirL').show();
		} else {
			$('#sirL').hide();
		}
	});
	
	$('#upaliSirD').change(function(){
		if(this.checked) {
			$('#sirD').show();
		} else {
			$('#sirD').hide();
		}
	});
	
	$('#upaliSir4').change(function(){
		if(this.checked) {
			$('#sir4').show();
		} else {
			$('#sir4').hide();
		}
	});
	
	$('#upaliSir4L').change(function(){
		if(this.checked) {
			$('#sir4L').show();
		} else {
			$('#sir4L').hide();
		}
	});
	
	$('#upaliSir4D').change(function(){
		if(this.checked) {
			$('#sir4D').show();
		} else {
			$('#sir4D').hide();
		}
	});
	
	$('#upaliKulen').change(function(){
		if(this.checked) {
			$('#kulen').show();
		} else {
			$('#kulen').hide();
		}
	});
	
	$('#upaliKulenL').change(function(){
		if(this.checked) {
			$('#kulenL').show();
		} else {
			$('#kulenL').hide();
		}
	});
	
	$('#upaliKulenD').change(function(){
		if(this.checked) {
			$('#kulenD').show();
		} else {
			$('#kulenD').hide();
		}
	});
	
	$('#upaliPaprika').change(function(){
		if(this.checked) {
			$('#paprika').show();
		} else {
			$('#paprika').hide();
		}
	});
	
	$('#upaliPaprikaL').change(function(){
		if(this.checked) {
			$('#paprikaL').show();
		} else {
			$('#paprikaL').hide();
		}
	});
	
		
	$('#upaliPaprikaD').change(function(){
		if(this.checked) {
			$('#paprikaD').show();
		} else {
			$('#paprikaD').hide();
		}
	});
