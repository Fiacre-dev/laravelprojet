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
        <link rel="stylesheet" href="{{ asset('assets/css/liste-clients.css') }}" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <title>AutoRent | Liste des clients</title>
    </head>
    <body>
        <div>
            @component('component.header')

            @endcomponent
            <main>
                <div class="hierarchie">
                    <a href="{{ route('acceuil') }}">Home</a>
                    <span>></span>
                    <a href="{{ route('catalogue') }}">Catalogue</a>
                </div>
                <h1>Liste des clients</h1>

                <section class="table">
                    <table id="vehicule-table" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom complet</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->email }}</td>
                                <td class="buttons">
                                    <button type="button" class="kdelete-buuton">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <circle cx="32" cy="32" r="32" fill="white"/>
                                            <path d="M31.6667 28C30.6058 28 29.5884 28.4214 28.8382 29.1716C28.0881 29.9217 27.6667 30.9391 27.6667 32C27.6667 33.0609 28.0881 34.0783 28.8382 34.8284C29.5884 35.5786 30.6058 36 31.6667 36C32.7275 36 33.7449 35.5786 34.4951 34.8284C35.2452 34.0783 35.6667 33.0609 35.6667 32C35.6667 30.9391 35.2452 29.9217 34.4951 29.1716C33.7449 28.4214 32.7275 28 31.6667 28ZM31.6667 38.6667C29.8986 38.6667 28.2029 37.9643 26.9526 36.714C25.7024 35.4638 25 33.7681 25 32C25 30.2319 25.7024 28.5362 26.9526 27.286C28.2029 26.0357 29.8986 25.3333 31.6667 25.3333C33.4348 25.3333 35.1305 26.0357 36.3807 27.286C37.631 28.5362 38.3333 30.2319 38.3333 32C38.3333 33.7681 37.631 35.4638 36.3807 36.714C35.1305 37.9643 33.4348 38.6667 31.6667 38.6667ZM31.6667 22C25 22 19.3067 26.1467 17 32C19.3067 37.8533 25 42 31.6667 42C38.3333 42 44.0267 37.8533 46.3333 32C44.0267 26.1467 38.3333 22 31.6667 22Z" fill="black"/>
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
        </div>


        <script>
            let table = new DataTable('#vehicule-table', {
                // options
            });
        </script>
    </body>
</html>
