document.querySelectorAll(".rendre-button").forEach(function(button){
    button.addEventListener("click",function(){
        if(confirm("Etes-vous sûr de vouloir rendre ce véhicule")){
            let id = button.parentNode.parentNode.querySelector("td").innerText;
            // alert(window.location.href + "/"+id)
            const renderForm = document.getElementById("rendreForm");
            renderForm.action = "/render/reservation/"+id;
            renderForm.submit();
        }
    });
});
