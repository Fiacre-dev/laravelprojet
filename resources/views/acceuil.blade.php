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
                <h1>Auto<span>Rent.</span></h1>
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
                        <img src="{{ asset('assets/img/voiture4.png')}}" alt="" />
                    </div>
                </div>
                <div id="logo-vehicules">
                    <img src="{{ asset('assets/img/voiture1.png') }}" alt="" />
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
                    <img src="{{ asset('assets/img/arc.png') }}" alt="" class="rigth" />
                    <div class="date">
                        <div><i class="fa-solid fa-calendar-days"></i></div>
                        <h3>Date</h3>
                        <p>Indiquez la durée de location</p>
                    </div>
                    <img src="{{ asset('assets/img/arc.png') }}" alt="" class="reversed" />
                    <div class="voiture">
                        <div><i class="fa-solid fa-car"></i></div>
                        <h3>Booker</h3>
                        <p>Procédez au paiement</p>
                    </div>
                </div>
            </section>
            <section id="decouverte">
                <img src="{{ asset('assets/img/voiture2.png') }}" id="voiture2" alt="" />
                <article>
                    <h1>Découvrez une conduite sans compromis.</h1>
                    <div class="row-container">
                        <div class="row">
                            <div class="rowIcone">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="45" viewBox="0 0 43 45" fill="none">
                                    <g clip-path="url(#clip0_223_284)">
                                      <path d="M23.0109 39.004L5.72415 21.0481V24.7163C5.72415 25.6884 6.09496 26.6238 6.76595 27.3024L20.5212 41.5901C21.8985 43.0207 24.141 43.0207 25.5183 41.5901L36.4836 30.2003C37.8609 28.7697 37.8609 26.4404 36.4836 25.0098L23.0109 39.004Z" fill="#7B61FF"/>
                                      <path d="M20.5212 32.4195C21.8985 33.8501 24.141 33.8501 25.5183 32.4195L36.4836 21.0298C37.8609 19.5992 37.8609 17.2698 36.4836 15.8392L22.7284 1.55157C22.0576 0.871674 21.1582 0.490077 20.221 0.487793L9.25566 0.487793C7.31333 0.487793 5.72415 2.13849 5.72415 4.156V15.5458C5.72415 16.5179 6.09496 17.4533 6.76595 18.1319L20.5212 32.4195ZM13.2286 5.9901C13.814 5.9901 14.3754 6.23165 14.7893 6.6616C15.2033 7.09155 15.4358 7.67469 15.4358 8.28273C15.4358 8.89078 15.2033 9.47392 14.7893 9.90387C14.3754 10.3338 13.814 10.5754 13.2286 10.5754C12.6432 10.5754 12.0818 10.3338 11.6679 9.90387C11.254 9.47392 11.0214 8.89078 11.0214 8.28273C11.0214 7.67469 11.254 7.09155 11.6679 6.6616C12.0818 6.23165 12.6432 5.9901 13.2286 5.9901Z" fill="#7B61FF"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_223_284">
                                        <rect width="42.3781" height="44.0185" fill="white" transform="translate(0.42688 0.487793)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                            </div>
                            <div class="description">
                                <h2>Des prix imbattables</h2>
                                <p>Nos services ont le meilleur rapport qualité prix disponible sur le marché.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="rowIcone div-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="80" viewBox="0 0 96 80" fill="none">
                                    {{-- <rect x="0.5" y="0.5" width="95" height="78.1282" rx="10.5" fill="white" stroke="#7B61FF"/> --}}
                                    <path d="M64.2847 56.3741H32.6423V58.6343C32.6423 59.2337 32.4042 59.8086 31.9804 60.2324C31.5565 60.6563 30.9816 60.8944 30.3822 60.8944H28.122C27.5226 60.8944 26.9477 60.6563 26.5238 60.2324C26.1 59.8086 25.8618 59.2337 25.8618 58.6343V38.2928L31.5416 23.1451C31.8647 22.2833 32.4431 21.5406 33.1996 21.0164C33.9561 20.4921 34.8546 20.2113 35.7749 20.2114H61.1521C62.0725 20.2113 62.971 20.4921 63.7274 21.0164C64.4839 21.5406 65.0623 22.2833 65.3854 23.1451L71.0652 38.2928V58.6343C71.0652 59.2337 70.8271 59.8086 70.4032 60.2324C69.9793 60.6563 69.4045 60.8944 68.805 60.8944H66.5449C65.9454 60.8944 65.3705 60.6563 64.9467 60.2324C64.5228 59.8086 64.2847 59.2337 64.2847 58.6343V56.3741ZM30.6896 38.2928H66.2375L61.1521 24.7318H35.7749L30.6896 38.2928ZM36.0326 49.5936C36.9317 49.5936 37.7941 49.2364 38.4299 48.6006C39.0657 47.9648 39.4228 47.1025 39.4228 46.2033C39.4228 45.3042 39.0657 44.4419 38.4299 43.8061C37.7941 43.1703 36.9317 42.8131 36.0326 42.8131C35.1334 42.8131 34.2711 43.1703 33.6353 43.8061C32.9995 44.4419 32.6423 45.3042 32.6423 46.2033C32.6423 47.1025 32.9995 47.9648 33.6353 48.6006C34.2711 49.2364 35.1334 49.5936 36.0326 49.5936ZM60.8944 49.5936C61.7936 49.5936 62.6559 49.2364 63.2917 48.6006C63.9275 47.9648 64.2847 47.1025 64.2847 46.2033C64.2847 45.3042 63.9275 44.4419 63.2917 43.8061C62.6559 43.1703 61.7936 42.8131 60.8944 42.8131C59.9953 42.8131 59.133 43.1703 58.4972 43.8061C57.8614 44.4419 57.5042 45.3042 57.5042 46.2033C57.5042 47.1025 57.8614 47.9648 58.4972 48.6006C59.133 49.2364 59.9953 49.5936 60.8944 49.5936Z" fill="#7B61FF"/>
                                </svg>
                            </div>
                            <div class="description">
                                <h2>Une flotte variée</h2>
                                <p>Choisissez parmi une variété de véhicules adaptés à chaque besoin.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="rowIcone">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="56" viewBox="0 0 55 56" fill="none">
                                    <path d="M25.2033 48.329V43.8087H43.2847V27.7615C43.2847 23.3542 41.75 19.6158 38.6807 16.5465C35.6114 13.4772 31.8723 11.9418 27.4635 11.9403C23.0562 11.9403 19.3178 13.4757 16.2485 16.5465C13.1792 19.6173 11.6438 23.3557 11.6423 27.7615V41.5485H9.38215C8.13906 41.5485 7.07527 41.1063 6.19079 40.2218C5.30632 39.3373 4.86332 38.2728 4.86182 37.0282V32.5078C4.86182 31.7168 5.05996 30.9732 5.45624 30.277C5.85252 29.5809 6.40777 29.0249 7.12198 28.609L7.2915 25.6143C7.59285 23.0528 8.3372 20.6796 9.52454 18.4948C10.7119 16.31 12.1998 14.4077 13.9884 12.7879C15.7769 11.1681 17.8291 9.90616 20.1451 9.0021C22.461 8.09803 24.9005 7.646 27.4635 7.646C30.025 7.646 32.4547 8.09803 34.7525 9.0021C37.0504 9.90616 39.1034 11.159 40.9115 12.7608C42.7196 14.361 44.2076 16.2535 45.3753 18.4383C46.5431 20.6231 47.2965 22.9963 47.6355 25.5578L47.805 28.496C48.5207 28.8351 49.0767 29.3436 49.473 30.0216C49.8693 30.6997 50.0667 31.4154 50.0652 32.1688V37.3672C50.0652 38.1206 49.8678 38.8363 49.473 39.5144C49.0782 40.1924 48.5222 40.7009 47.805 41.04V43.8087C47.805 45.0518 47.3628 46.1163 46.4783 47.0023C45.5938 47.8883 44.5293 48.3305 43.2847 48.329H25.2033ZM20.683 32.5078C20.0426 32.5078 19.5062 32.2909 19.0737 31.8569C18.6413 31.423 18.4243 30.8865 18.4228 30.2477C18.4228 29.6073 18.6398 29.0709 19.0737 28.6384C19.5077 28.206 20.0441 27.989 20.683 27.9875C21.3234 27.9875 21.8605 28.2045 22.2945 28.6384C22.7284 29.0724 22.9447 29.6088 22.9432 30.2477C22.9432 30.888 22.7262 31.4252 22.2922 31.8592C21.8583 32.2931 21.3219 32.5093 20.683 32.5078ZM34.244 32.5078C33.6036 32.5078 33.0672 32.2909 32.6348 31.8569C32.2023 31.423 31.9853 30.8865 31.9838 30.2477C31.9838 29.6073 32.2008 29.0709 32.6348 28.6384C33.0687 28.206 33.6051 27.989 34.244 27.9875C34.8844 27.9875 35.4215 28.2045 35.8555 28.6384C36.2894 29.0724 36.5057 29.6088 36.5042 30.2477C36.5042 30.888 36.2872 31.4252 35.8532 31.8592C35.4193 32.2931 34.8829 32.5093 34.244 32.5078ZM13.959 29.0046C13.6953 25.0116 14.9007 21.5837 17.5753 18.7208C20.2498 15.8579 23.5835 14.4265 27.5765 14.4265C30.9291 14.4265 33.8771 15.4903 36.4205 17.6179C38.964 19.7454 40.4986 22.4682 41.0245 25.7861C37.5966 25.7469 34.4421 24.8233 31.5612 23.0151C28.6802 21.207 26.4668 18.7585 24.9208 15.6696C24.3181 18.6831 23.0471 21.3675 21.1079 23.7226C19.1687 26.0777 16.7857 27.8383 13.959 29.0046Z" fill="#7B61FF"/>
                                  </svg>
                            </div>
                            <div class="description">
                                <h2>Support client</h2>
                                <p>Une tranquillité d'esprit totale avec un support client disponible 24h/24.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main>
    </body>
</html>
