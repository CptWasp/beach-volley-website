$(document).ready(function(){
                 $("#spinner").hide(); 
                $("#post-button").bind("click", function(){
                    $("#answer-block").fadeIn();
//                    server sending
                    $.ajax({
                        url: "email.php",
                        type: "POST",
                        data: ({nameUser:  $("#name-input").val(), userPhone: $("#phone-input").val(), personType:$("#answer-block").val()}),
                        dataType: "html",
                        beforeSend: 
                            function(){
                                $("#spinner").show();
                            },
                        success: function(data){
                            $("#spinner").hide();
                            $("#answer-block").hide();
                        }
                    });  
                });   
            });
          $(document).ready(function(){
              $("#spinner-0").hide();
                $("#ftr-btn").bind("click", function(){                    
//                    server sending
                    $.ajax({
                        url: "email.php",
                        type: "POST",
                        data: ({nameUser:  $("#inlineFormInputName").val(), userPhone: $("#inlineFormInputphone").val(), personType: $("#inlineFormCustomSelect").val()}),
                        dataType: "html",
                        beforeSend: 
                            function(){
                                $("#spinner").show();
                            },
                        success: function(data){
                            $("#spinner").hide();
                            $("#answer-block").hide();
                        }
                    });
                });
          });