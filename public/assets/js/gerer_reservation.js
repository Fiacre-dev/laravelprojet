let id = null;

document.getElementById("confirmButton").addEventListener("click",function(){
    if(id !== null){
            // alert(window.location.href + "/"+id)
        const renderForm = document.getElementById("rendreForm");
        renderForm.action = "/render/reservation/"+id;
        renderForm.submit();
    }
});

document.querySelectorAll(".rendre-button").forEach(function(button){
    button.addEventListener("click",function(){
        id = button.parentNode.parentNode.querySelector("td").innerText;
    });
});
