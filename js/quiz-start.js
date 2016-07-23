//click bottone cover
$("#btnCover").on("click",function(){
   $.ajax("./inc/iniziaQuiz.php",{
      method:"POST",
      dataType:"json",
      success:function(risposta){
          window.location = "./domanda.php";
      },
      error:function(risposta){
          console.log(risposta);
      }
   }); 
});


