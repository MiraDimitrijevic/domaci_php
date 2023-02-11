$('#addform').submit(function () {

    var form = $('#addform')[0];
    var formData = new FormData(form);
    event.preventDefault();  
 

    request = $.ajax({  
        url: 'handler/insert.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });

    request.done(function (response, textStatus, jqXHR) {
        console.log(textStatus);
        console.log(jqXHR);
      console.log(response);

        if (response === "Success") {
            alert("Odeca dodata");
            
            location.reload(true);
        }
        else {
       
            console.log("Odeca nije dodata" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
}); 

function obrisiOdecu(deleteid){
 
    request = $.ajax({  
        url: 'handler/delete.php',  
        type: 'post', 
        data: {deleteid:deleteid},


        success: function(data, status){
            location.reload(true);
            alert("Uspesno obrisano!");
        }


    });



}

function prikaziOdecu(prikazid){
 

    $.post("handler/get.php",{prikazid:prikazid},function(data,status){
 
        var odecaid=JSON.parse(data); 
          
        $('#nazivPreview').text("   " + odecaid.naziv  );
        $('#descriptionPreview').text("   " +  odecaid.opis);
        $('#pricePreview').text("   " +  odecaid.cena);
 
        document.getElementById("IMG").src = 'images/'+odecaid.slika;


    });

}