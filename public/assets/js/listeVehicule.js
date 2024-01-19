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

const nameInput = document.getElementById("nomVehicule");
const prixInput = document.getElementById("prixVehicule");
const quotionInput = document.getElementById("quotionVehicule");
const place_enfantInput = document.getElementById("place_enfantVehicule");
const chauffeuInput = document.getElementById("chauffeurVehicule");
const manuelleInput = document.getElementById("manuelle");
const automatiqueInput = document.getElementById("automatique");

const editForm = document.getElementById("edit-vehicule-form");
const submitEditFormButton = document.getElementById("submit-edit-form-button");

submitEditFormButton.disabled = "disabled";


document.querySelectorAll(".edit-button").forEach(function(button){
    button.addEventListener("click",function(){
            let id = button.parentNode.parentNode.querySelector("td").innerText;
            // alert(id);
            let vehicule = "";
            fetch( "/api/vehicule/" + id).then((data) => {
                data.json().then(val => {
                    if(val.success){
                        vehicule = val.data
                        nameInput.value = vehicule.nom;
                        prixInput.value = vehicule.prix_location;
                        quotionInput.value = vehicule.quotion;
                        place_enfantInput.value = vehicule.prix_siege_enfant;
                        chauffeuInput.value = vehicule.prix_chauffeur;

                        if(vehicule.transmission == "Automatique"){
                            automatiqueInput.checked = true;
                        }else{
                            manuelleInput.checked = true;
                        }

                        editForm.setAttribute("action","/edit/vehicule/" + id);

                        editForm.action = "/edit/vehicule/" + id;
                        console.log(editForm)
                        submitEditFormButton.removeAttribute("disabled");
                        submitEditFormButton.addEventListener("click",function(e){
                            e.preventDefault();
                            editForm.submit();
                        });
                        editForm.addEventListener("submit",function(e){
                            e.preventDefault();
                            editForm.submit();
                        });
                    }
                }).catch(function(){
                    console.log("Error");
                })
            }).catch(function(){
                console.log("Error");
            });
            // alert(window.location.href + "/"+id)
            // const deleteForm = document.getElementById("deleteForm");
            // deleteForm.action = "/delete/vehicule/"+id;
            // deleteForm.submit();
    });
});
