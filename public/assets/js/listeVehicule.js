document.querySelectorAll(".delete-buuton").forEach(function(button){
    button.addEventListener("click",function(){
        if(confirm("Etes-vous sûr de vouloir supprimer ce véhicule")){
            let id = button.parentNode.parentNode.querySelector("td").innerText;
            // alert(window.location.href + "/"+id)
            const deleteForm = document.getElementById("deleteForm");
            deleteForm.action = "/delete/vehicule/"+id;
            deleteForm.submit();
        }
    });
});
