<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/acceuil.css') }}" />
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <h1>Auto <span>Rent.</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Accueil</a></li>
                    <li><a href="#">Catalogue</a></li>
                    <li><a href="#">Give-Back</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a href="#">Se connecter</a>
        </header>
        <main>
            <section id="section-1">
                <div class="presentation">
                    <div class="div-1">
                        <h1>
                            Osez l'Excellence, Vivez l'Émotion
                            <span>Automobile!</span>
                        </h1>
                        <p>
                            Démarquez-vous avec le meilleur service de location
                            de véhicules. Louez dès aujourd'hui et partez à la
                            conquête de vos destinations préférées.
                        </p>
                        <form action="" id="reservation-rapide">
                            <div class="nb-de-place">
                                <label for="nb-de-place"
                                    >Nb de place
                                    <i class="fa-solid fa-users"></i
                                ></label>
                                <select name="nb_de_place" id="nb-de-place">
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="date-debut">
                                <label for="date-debut"
                                    >date de debut
                                    <i class="fa-solid fa-calendar-days"></i
                                ></label>
                                <input
                                    type="date"
                                    name="date_debut"
                                    id="date-debut"
                                />
                            </div>
                            <div class="date-fin">
                                <label for="date-fin"
                                    >date de fin
                                    <i class="fa-solid fa-calendar"></i
                                ></label>
                                <input
                                    type="date"
                                    name="date_fin"
                                    id="date-fin"
                                />
                            </div>
                            <button type="submit" class="quick-search-button">
                                Search
                            </button>
                        </form>
                    </div>
                    <div class="div-2">
                        <img src="{{ asset('assets/img/img-2.jpg') }}" alt="" />
                    </div>
                </div>
                <div id="logo-vehicules">
                    <img src="{{ asset('assets/img/img-2.jpg') }}" alt="" />
                </div>
            </section>
            <section id="comment-ca-marche">
                <h1>Comment ça <span>marche?</span></h1>
                <div>
                    <div class="localisation">
                        <div><i class="fa-solid fa-location-dot"></i></div>
                        <h3>Lieu</h3>
                        <p>Indiquez le lieu de réception</p>
                    </div>
                    <img src="./arc.png" alt="" class="rigth" />
                    <div class="date">
                        <div><i class="fa-solid fa-calendar-days"></i></div>
                        <h3>Date</h3>
                        <p>Indiquez la durée de location</p>
                    </div>
                    <img src="./arc.png" alt="" class="reversed" />
                    <div class="voiture">
                        <div><i class="fa-solid fa-car"></i></div>
                        <h3>Booker</h3>
                        <p>Procédez au paiement</p>
                    </div>
                </div>
            </section>
            <img src="{{ asset('assets/img/img-2.jpg') }}" alt="" />
        </main>
    </body>
</html>
