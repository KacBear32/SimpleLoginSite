
var Project = function() {

    this.id = false;            // user id
    this.oClientUsers = {};

};

Project.prototype.prepareProject = function() {

	console.log("Start");
	$("#wyslijFormularz").unbind("click").bind("click", function(){
		oProject.sendData();
	});

};

Project.prototype.sendData = function() {

	var oDane = {
		"n_uz": $("input#n_uz").val(),
		"login": $("input#login").val(),
		"haslo": $("input#haslo").val(),
		"mail": $("input#mail").val(),
    "imie": $("input#imie").val(),
		"nazwisko": $("input#nazwisko").val(),
    "reklama": $("textarea#reklama").val()
	};

    $.ajax({
        type: "POST",
        dataType: "json",
        data: {
			oDane: oDane
        },
        context: this,
        url: "php/logic/saveUserData.php",
        async: false,
        success: function( oData ){

			if ( oData == "true" ) {
				alert("Dodano użytkownika");
			}
			else {
				alert("Nie podano wszystkich danych!");
			}
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
			console.log(XMLHttpRequest.responseText );
            alert( "Błąd: " + XMLHttpRequest.responseText );
        }
    });

};



var oProject = new Project();
