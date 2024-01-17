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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,400&family=Poppins:ital,wght@0,100;0,400;1,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/liste-vehicule.css') }}" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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
                        <button type="button" id="add-button">
                            Ajouter
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M15.4 12.6V7H12.6V12.6H7V15.4H12.6V21H15.4V15.4H21V12.6H15.4ZM14 28C10.287 28 6.72601 26.525 4.1005 23.8995C1.475 21.274 0 17.713 0 14C0 10.287 1.475 6.72601 4.1005 4.1005C6.72601 1.475 10.287 0 14 0C17.713 0 21.274 1.475 23.8995 4.1005C26.525 6.72601 28 10.287 28 14C28 17.713 26.525 21.274 23.8995 23.8995C21.274 26.525 17.713 28 14 28Z" fill="#009261"/>
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
                                    <button type="button" class="edit-buuton">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <circle cx="32" cy="32" r="32" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.6978 18.0831C46.7245 17.1101 45.4046 16.5635 44.0283 16.5635C42.6521 16.5635 41.3321 17.1101 40.3588 18.0831L39.1357 19.308L47.6996 27.8719L48.921 26.6488C49.4031 26.1668 49.7855 25.5946 50.0463 24.9648C50.3072 24.3351 50.4415 23.6601 50.4415 22.9784C50.4415 22.2967 50.3072 21.6217 50.0463 20.992C49.7855 20.3622 49.4031 19.79 48.921 19.308L47.6978 18.0831ZM45.2515 30.3183L36.6876 21.7544L20.9611 37.4826C20.617 37.8268 20.3765 38.2608 20.2673 38.7351L18.4871 46.4427C18.4207 46.7288 18.4284 47.0271 18.5092 47.3095C18.59 47.5919 18.7414 47.8491 18.9491 48.0567C19.1568 48.2644 19.414 48.4158 19.6963 48.4967C19.9787 48.5775 20.277 48.5851 20.5632 48.5188L28.2724 46.7403C28.7462 46.6307 29.1796 46.3904 29.5233 46.0465L45.2515 30.3183Z" fill="black"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="delete-buuton">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                            <g clip-path="url(#clip0_309_974)">
                                              <circle cx="31" cy="30" r="32" fill="white"/>
                                              <path d="M19.4444 43.6111C19.4444 45.75 21.1944 47.5 23.3333 47.5H38.8889C41.0278 47.5 42.7778 45.75 42.7778 43.6111V20.2778H19.4444V43.6111ZM44.7222 14.4444H37.9167L35.9722 12.5H26.25L24.3056 14.4444H17.5V18.3333H44.7222V14.4444Z" fill="#F00000"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_309_974">
                                                <rect width="60" height="60" fill="white"/>
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
            </main>
            <footer>
                <div>
                    <section class="description">
                        <h1>Auto<span>Rent.</span></h1>
                        <p>
                            Le choix incontesté des connaisseurs en matière de location de véhicules. Nous ne sommes pas simplement un service, nous sommes une expérience.
                        </p>
                    </section>
                    <section class="contact">
                        <h1 class="middle-underline">Contact</h1>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13.0001 12.4582C12.2818 12.4582 11.5929 12.1728 11.085 11.6649C10.5771 11.157 10.2917 10.4681 10.2917 9.74984C10.2917 9.03154 10.5771 8.34267 11.085 7.83476C11.5929 7.32685 12.2818 7.0415 13.0001 7.0415C13.7184 7.0415 14.4073 7.32685 14.9152 7.83476C15.4231 8.34267 15.7084 9.03154 15.7084 9.74984C15.7084 10.1055 15.6384 10.4577 15.5023 10.7863C15.3661 11.1149 15.1667 11.4134 14.9152 11.6649C14.6637 11.9164 14.3651 12.1159 14.0365 12.252C13.7079 12.3881 13.3557 12.4582 13.0001 12.4582ZM13.0001 2.1665C10.9889 2.1665 9.06001 2.96546 7.63786 4.38761C6.2157 5.80976 5.41675 7.73861 5.41675 9.74984C5.41675 15.4373 13.0001 23.8332 13.0001 23.8332C13.0001 23.8332 20.5834 15.4373 20.5834 9.74984C20.5834 7.73861 19.7845 5.80976 18.3623 4.38761C16.9402 2.96546 15.0113 2.1665 13.0001 2.1665Z" fill="black"/>
                            </svg>
                            <p>
                                Arconville, Zopah lot 122 parcelle R
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M21.6667 4.3335H4.33341C3.14175 4.3335 2.17758 5.3085 2.17758 6.50016L2.16675 19.5002C2.16675 20.6918 3.14175 21.6668 4.33341 21.6668H21.6667C22.8584 21.6668 23.8334 20.6918 23.8334 19.5002V6.50016C23.8334 5.3085 22.8584 4.3335 21.6667 4.3335ZM21.6667 8.66683L13.0001 14.0835L4.33341 8.66683V6.50016L13.0001 11.9168L21.6667 6.50016V8.66683Z" fill="black"/>
                            </svg>
                            <p>
                                inoussalouqmane@gmail.com
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M4.82667 10.3867C6.74667 14.16 9.84 17.24 13.6133 19.1733L16.5467 16.24C16.9067 15.88 17.44 15.76 17.9067 15.92C19.4 16.4133 21.0133 16.68 22.6667 16.68C23.4 16.68 24 17.28 24 18.0133V22.6667C24 23.4 23.4 24 22.6667 24C10.1467 24 0 13.8533 0 1.33333C0 0.6 0.6 0 1.33333 0H6C6.73333 0 7.33333 0.6 7.33333 1.33333C7.33333 3 7.6 4.6 8.09333 6.09333C8.24 6.56 8.13333 7.08 7.76 7.45333L4.82667 10.3867Z" fill="black"/>
                            </svg>
                            <p>
                                +229 61 78 62 22
                            </p>
                        </div>
                    </section>
                    <section class="liens-utiles">
                        <h1 class="middle-underline">Liens utiles</h1>
                        <div>
                            <a href="#">Explorer</a>
                            <a href="#">Give-back</a>
                            <a href="#">Contactez-nous</a>
                        </div>
                    </section>
                </div>
                <hr>
                <p id="copyrigth">
                    @Copywrite. All Rights Reserved
                </p>
            </footer>

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
        <script src="{{ asset("assets/js/listeVehicule.js") }}"></script>
    </body>
</html>
