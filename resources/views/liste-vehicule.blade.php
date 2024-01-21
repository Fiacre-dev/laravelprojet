<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,400&family=Poppins:ital,wght@0,100;0,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/liste-vehicule.css') }}" />
    <title>AutoRent | Liste des véhicules</title>
</head>

<body>
    <div>
        @component('component.header')
        @endcomponent
        <main>
            <h1>Liste des véhicules</h1>
            <section class="table">
                <div class="add">
                    <button type="button" id="add-button" data-toggle="modal" data-target="#addModalCenter">
                        Ajouter
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <path
                                d="M15.4 12.6V7H12.6V12.6H7V15.4H12.6V21H15.4V15.4H21V12.6H15.4ZM14 28C10.287 28 6.72601 26.525 4.1005 23.8995C1.475 21.274 0 17.713 0 14C0 10.287 1.475 6.72601 4.1005 4.1005C6.72601 1.475 10.287 0 14 0C17.713 0 21.274 1.475 23.8995 4.1005C26.525 6.72601 28 10.287 28 14C28 17.713 26.525 21.274 23.8995 23.8995C21.274 26.525 17.713 28 14 28Z"
                                fill="#009261" />
                        </svg>
                    </button>
                </div>
                <table id="vehicule-table" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Model Name</th>
                            <th>Transmission</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicule)
                        <tr>
                            <td>{{ $vehicule->id }}</td>
                            <td>
                                <img src="{{ asset('assets/img/voiture4.png') }}" alt="">
                            </td>
                            <td>{{ $vehicule->nom }}</td>
                            <td>{{ $vehicule->transmission }}</td>
                            <td>{{ $vehicule->prix_location }}</td>
                            <td class="buttons">
                                <button type="button" class="edit-button" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                        fill="none">
                                        <circle cx="32" cy="32" r="32" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M47.6978 18.0831C46.7245 17.1101 45.4046 16.5635 44.0283 16.5635C42.6521 16.5635 41.3321 17.1101 40.3588 18.0831L39.1357 19.308L47.6996 27.8719L48.921 26.6488C49.4031 26.1668 49.7855 25.5946 50.0463 24.9648C50.3072 24.3351 50.4415 23.6601 50.4415 22.9784C50.4415 22.2967 50.3072 21.6217 50.0463 20.992C49.7855 20.3622 49.4031 19.79 48.921 19.308L47.6978 18.0831ZM45.2515 30.3183L36.6876 21.7544L20.9611 37.4826C20.617 37.8268 20.3765 38.2608 20.2673 38.7351L18.4871 46.4427C18.4207 46.7288 18.4284 47.0271 18.5092 47.3095C18.59 47.5919 18.7414 47.8491 18.9491 48.0567C19.1568 48.2644 19.414 48.4158 19.6963 48.4967C19.9787 48.5775 20.277 48.5851 20.5632 48.5188L28.2724 46.7403C28.7462 46.6307 29.1796 46.3904 29.5233 46.0465L45.2515 30.3183Z"
                                            fill="black" />
                                    </svg>
                                </button>
                                <button type="button" class="delete-buuton">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                        fill="none">
                                        <g clip-path="url(#clip0_309_974)">
                                            <circle cx="31" cy="30" r="32" fill="white" />
                                            <path
                                                d="M19.4444 43.6111C19.4444 45.75 21.1944 47.5 23.3333 47.5H38.8889C41.0278 47.5 42.7778 45.75 42.7778 43.6111V20.2778H19.4444V43.6111ZM44.7222 14.4444H37.9167L35.9722 12.5H26.25L24.3056 14.4444H17.5V18.3333H44.7222V14.4444Z"
                                                fill="#F00000" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_309_974">
                                                <rect width="60" height="60" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> --}}

            <!-- Modal -->
            <div class="modal fade" id="addModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form class="modal-dialog modal-dialog-centered" method="post" role="document"
                    action="{{ route("vehicule.store") }}">
                    @csrf
                    @method("post")
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalCenterTitle">Création d'un véhicule</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="border:none">
                                <span aria-hidden="true" class="btn btn-primary">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du véhicule</label>
                                <input type="text" class="form-control @error(" nomVehicule") is-invalid @enderror"
                                    name="nomVehicule" id="nomNouveauVehicule" value="{{ old("nomVehicule") }}"
                                    aria-describedby="emailHelp" placeholder="New name" required>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix</label>
                                <input type="number" class="form-control @error(" prixNouveauVehicule") is-invalid
                                    @enderror" name="prixNouveauVehicule" id="prixNouveauVehicule"
                                    value="{{ old("prixNouveauVehicule") }}" placeholder="40 000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quotion</label>
                                <input type="number" class="form-control @error(" quotionNouveauVehicule") is-invalid
                                    @enderror" name="quotionNouveauVehicule" id="quotionNouveauVehicule"
                                    value="{{ old("quotionNouveauVehicule") }}" placeholder="40 000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre de places</label>
                                <input type="number" class="form-control @error(" nombrePlacesNouveauVehicule")
                                    is-invalid @enderror" name="nombrePlacesNouveauVehicule"
                                    id="nombrePlacesNouveauVehicule" value="{{ old("nombrePlacesNouveauVehicule") }}"
                                    placeholder="5" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre de véhicules</label>
                                <input type="number" class="form-control @error(" nombreNouveauVehicule") is-invalid
                                    @enderror" name="nombreNouveauVehicule" id="nombreNouveauVehicule" placeholder="40"
                                    value="{{ old("nombreNouveauVehicule") }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Année</label>
                                <input type="number" class="form-control @error(" anneeNouveauVehicule") is-invalid
                                    @enderror" name="anneeNouveauVehicule" id="anneeNouveauVehicule" placeholder="2020"
                                    value="{{ old("anneeNouveauVehicule") }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix siège enfant</label>
                                <input type="number" class="form-control @error(" place_enfantNouveauVehicule")
                                    is-invalid @enderror" name="place_enfantNouveauVehicule"
                                    id="place_enfantNouveauVehicule" value="{{ old("place_enfantNouveauVehicule") }}"
                                    placeholder="5 000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix chauffeur</label>
                                <input type="number" class="form-control @error(" chauffeurNouveauVehicule") is-invalid
                                    @enderror" name="chauffeurNouveauVehicule" id="chauffeurNouveauVehicule"
                                    value="{{ old("chauffeurNouveauVehicule") }}" placeholder="10 000" required>
                            </div>
                            <label for="Transmission" class="mt-1">Transmission</label>
                            <div class="my-2">
                                <input type="radio" id="transmissionNouveauVehicule" class="@error("
                                    transmissionNouveauVehicule") is-invalid @enderror""
                                    name="transmissionNouveauVehicule" value="Manuel" checked>
                                <label class="form-check-label" for="manuelle">Manuelle</label>
                                <input type="radio" id="transmissionNouveauVehicule" class="@error("
                                    transmissionNouveauVehicule") is-invalid @enderror""
                                    name="transmissionNouveauVehicule" value="Automatique">
                                <label class="form-check-label" for="automatique">Automatique</label>
                            </div>
                            <label for="Transmission" class="mt-1">Carburant</label>
                            <div>
                                <input type="radio" name="carburantNouveauVehicule" value="Essence" checked>
                                <label class="form-check-label" for="manuelle">Essence</label>
                                <input type="radio" name="carburantNouveauVehicule" value="Gasoil">
                                <label class="form-check-label" for="automatique">Gasoil</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>




            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form class="modal-dialog modal-dialog-centered" method="post" role="document" id="edit-vehicule-form">
                    @csrf
                    @method("post")
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edition d'un véhicule</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="border:none">
                                <span aria-hidden="true" class="btn btn-primary">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du véhicule</label>
                                <input type="text" class="form-control" name="nomVehicule" id="nomVehicule"
                                    placeholder="New name" value="nom">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix</label>
                                <input type="number" class="form-control" name="prixVehicule" id="prixVehicule"
                                    placeholder="40 000">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quotion</label>
                                <input type="number" class="form-control" name="quotionVehicule" id="quotionVehicule"
                                    placeholder="40 000">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix siège enfant</label>
                                <input type="number" class="form-control" - name="place_enfantVehicule"
                                    id="place_enfantVehicule" placeholder="5 000">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prix chauffeur</label>
                                <input type="number" class="form-control" name="chauffeurVehicule"
                                    id="chauffeurVehicule" placeholder="10 000">
                            </div>
                            <label for="Transmission">Transmission</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="manuelle" name="transmission"
                                    value="Manuelle">
                                <label class="form-check-label" for="manuelle">Manuelle</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="automatique" name="transmission"
                                    value="Automatique">
                                <label class="form-check-label" for="automatique">Automatique</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit-edit-form-button" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        @component("component.footer")

        @endcomponent

        <form action="" id="deleteForm" method="post">
            @method("delete")
            @csrf
        </form>
    </div>


    <script>
    let table = new DataTable('#vehicule-table', {
        // options
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset("assets/js/listeVehicule.js") }}"></script>
</body>

</html>
