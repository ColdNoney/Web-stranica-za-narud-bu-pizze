function ShowTable2()
      {
            $("#tablicaL").toggle();
			$("#tablicaD").toggle();
      }
function ShowTable1()
      {
            $("#tablicaD").toggle();
      }
	  
let cijena = 20;

let ukupnaCijena = function() {
  let ukupno = $( "input:checked" ).length + cijena;
};

ukupnaCijena();

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$('#upaliKukuruz').on('click', function(){
    if( $('#kukuruz').is(':hidden')) {
    $('#kukuruz').show();
    }else{
    $('#kukuruz').hide();
    }
});

var randomnumber = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
 document.getElementById('broj').innerHTML = randomnumber;
