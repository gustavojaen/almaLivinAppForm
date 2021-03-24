$(document).ready(function(){
    console.log('hola');
    var fileName = "";
    var inputFile = $('input[type="checkbox"]').val();
        $('input[type="file"]').change(function(e){
            fileName = e.target.files[0].name;
        
        });

        $(".nextButton").click(function(){
            var nombre = $("#authorization").prop('checked');
        console.log(nombre);


           
        });

         $('.authorizationButton').click(function(){
            var nombre = $("#authorization").prop('checked');
                 if (nombre == true){
                    $('.authorizationButton').css('background', 'white');
                    $('.authorizationButtonP').css('color', '#6898bd');
                }else {
                    $('.authorizationButton').css('background', 'green');
                    $('.authorizationButtonP').css('color', 'white');
                }
                
            });
        
           

    });