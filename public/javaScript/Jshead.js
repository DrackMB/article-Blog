
function ValidarCamposent(idForm) {
    var rs = true;
    $("#" + idForm).find(':input[required="required"]').each(function () {
        if ($(this).val() === "" || $(this).val() === null) {
            $(this).addClass("myClassInputError");
            debugger;
            if(this.id == "_password"){
               document.getElementById('Exception_password').style.display='block';
            }
            else if(this.id == "_email"){ document.getElementById('Exception_User').style.display='block'; }
            rs=false;
        }
    });
    return rs;
}

$("#SUB").click( function(){
    var ExeceptionUtilisateur = "<div id=Exception_User> Incorecte : user n'existe pas </div>";
    var ExeceptionPassword = "<div id=Exception_password> Incorecte : Pass n'existe pas </div>";
    if(ValidarCamposent('contactForm')){
    var dd=$('#contactForm').serialize();
    $.ajax({
                url: 'userT',
                data: dd,
                type: "POST",
                success: function(code_html, statut) {
                           console.log(code_html);
                           debugger;
                     if(code_html == -2){
                         $('#_ExcepUser').html(ExeceptionUtilisateur);
                     }else if(code_html == -1)
                          $('#_ExcepPwrd').html(ExeceptionPassword);
                     else window.location.href = code_html;
                },
            });

    }
}
);

//$( function () {
        //if ( sessionStorage.reloadAfterPageLoad ) {
        //  $("#loginModal").modal('show');
        //   sessionStorage.reloadAfterPageLoad = false;
       /// }
   //} 
//);

/// carousel 


$(".accept").click( function(){
    debugger;
         $(".MDPRO").hide();
    debugger;
        alert("ajouter aux panier");});
    
    
//delet produit from panierConnected
$(".delete_btn").click( function(){
  
   
    var id = $(this).attr('id').substring(3);
    $.ajax({
                url: 'DeletePanier.php?product_id='+id,
                type: "GET",
                success: function(res) {
                
                   alert(res);
                   window.location.reload(); 
                },
            });
//        sessionStorage.reloadAfterPageLoad = true;
//        window.location.reload();
//       $("#loginModal").modal('show');
    
}
);
////panier not connected


