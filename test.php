<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>


<script src="js/Project.js"></script>

</head>

<body>

<h2>Pobieranie informacji - przyklad jquery</h2>

<p>Wpisz coœ:</p>
<input type="text" id="pobierzDane">

<button>Pobierz</button>

</body>
</html>

<script>
$(document).ready(function(){

oProject.prepareProject();

    $("button").click( function(){
		var info = $("input#pobierzDane").val();
		if ( info.length > 0 ) {
			console.log(info);
			alert(info);
		}
        
    });
	
	oDane = {
		0: "abc",
		1: "123"
	};
	
	
	
});
</script>