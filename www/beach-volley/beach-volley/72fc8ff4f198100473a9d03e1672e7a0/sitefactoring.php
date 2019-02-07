<html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="css/blrmyfcStyle.css" type="text/css">
    <title>Beach Volley</title>
    
    
    </head>
    <body>
        <?php include ("navbar.html");?>
        <?php include ("header.html");?>
        <?php include ("offer.html");?>
        <?php include ("forblock.html");?>
        <?php include ("postblock.html");?>
        <?php include ("goods.html");?>
        <?php include ("abouttrainer.html");?>
        <?php include ("photos.html");?>
        <?php include ("footer.html");?>
        
        
    
        
        
        
        
        
        
        
        
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>        
      
       <script type="text/javascript">
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
                            alert(data);
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
                            alert(data);
                        }
                    });       
                });
          });
        
                      
      </script>
    </body>
</html>