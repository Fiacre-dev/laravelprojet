const nomClientBox = document.getElementById("nomClient");
const emailClientBox = document.getElementById("emailClient");
const nombreReservationTotalClientBox = document.getElementById("reservationsTotalClient");
const nombreReservationsEnCoursClientBox = document.getElementById("reservationsEnCoursClient");



document.querySelectorAll(".delete-button").forEach(element => {
    element.addEventListener("click",function(){
        const clientId = element.parentNode.parentNode.querySelector("td").innerText;
        fetch( "/api/client/" + clientId).then(success => {
            return success.json();
        }).then(data => {
            if(data.success){
                nomClientBox.value=data.data.nom;
                emailClientBox.value=data.data.email;
                nombreReservationTotalClientBox.value=data.data.reservations_count;
                nombreReservationsEnCoursClientBox.value=data.data.reservations_en_cours_count;
            }else{
                throw new Error("Erreur lors de la récupération des données");
            }

        }).catch(reject => {
            alert("Erreur lors de la récupération des données");
        });

    });
});
