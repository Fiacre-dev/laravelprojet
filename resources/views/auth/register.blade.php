<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,400&family=Poppins:ital,wght@0,100;0,400;1,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}" />
        <title>S'inscrire</title>
    </head>
    <body>
        <main>
            <h1>Auto<span>Rent.</span></h1>
            <form action="{{ route('handleRegistation') }}" method="POST">
                @csrf
                @method('post')
                <div class="nom">
                    @component('component.formError',['name' => "nom"])  @endcomponent
                    <label for="nom">Nom complet</label>
                    <div>
                        <input type="text" name="nom" value="{{ old('nom') }}">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M12.736 10.396C14.7591 10.9875 16.5361 12.2187 17.8006 13.905C19.0651 15.5914 19.7491 17.6422 19.75 19.75H0.25C0.250432 17.6421 0.934212 15.5911 2.1988 13.9046C3.46339 12.2181 5.24063 10.9871 7.264 10.396L10 14.5L12.736 10.396ZM14.875 5.125C14.875 6.41793 14.3614 7.65791 13.4471 8.57215C12.5329 9.48639 11.2929 10 10 10C8.70707 10 7.46709 9.48639 6.55285 8.57215C5.63861 7.65791 5.125 6.41793 5.125 5.125C5.125 3.83207 5.63861 2.59209 6.55285 1.67785C7.46709 0.763614 8.70707 0.25 10 0.25C11.2929 0.25 12.5329 0.763614 13.4471 1.67785C14.3614 2.59209 14.875 3.83207 14.875 5.125Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="email">
                    @component('component.formError',['name' => "email"])  @endcomponent
                    <label for="email">Email adress</label>
                    <div>
                        <input type="text" name="email" value="{{ old('email') }}">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M4.66683 23.3334C4.02516 23.3334 3.47605 23.1051 3.0195 22.6486C2.56294 22.192 2.33427 21.6425 2.3335 21.0001V7.00008C2.3335 6.35841 2.56216 5.8093 3.0195 5.35275C3.47683 4.89619 4.02594 4.66753 4.66683 4.66675H23.3335C23.9752 4.66675 24.5247 4.89541 24.982 5.35275C25.4393 5.81008 25.6676 6.35919 25.6668 7.00008V21.0001C25.6668 21.6417 25.4386 22.1912 24.982 22.6486C24.5254 23.1059 23.9759 23.3342 23.3335 23.3334H4.66683ZM14.0002 15.1667L4.66683 9.33341V21.0001H23.3335V9.33341L14.0002 15.1667ZM14.0002 12.8334L23.3335 7.00008H4.66683L14.0002 12.8334ZM4.66683 9.33341V7.00008V21.0001V9.33341Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="password">
                    @component('component.formError',['name' => "password"])  @endcomponent
                    <label for="password">Password</label>
                    <div>
                        <input type="password" name="password">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M16.0002 22.6666C15.2929 22.6666 14.6146 22.3856 14.1145 21.8855C13.6144 21.3854 13.3335 20.7072 13.3335 19.9999C13.3335 18.5199 14.5202 17.3333 16.0002 17.3333C16.7074 17.3333 17.3857 17.6142 17.8858 18.1143C18.3859 18.6144 18.6668 19.2927 18.6668 19.9999C18.6668 20.7072 18.3859 21.3854 17.8858 21.8855C17.3857 22.3856 16.7074 22.6666 16.0002 22.6666ZM24.0002 26.6666V13.3333H8.00016V26.6666H24.0002ZM24.0002 10.6666C24.7074 10.6666 25.3857 10.9475 25.8858 11.4476C26.3859 11.9477 26.6668 12.626 26.6668 13.3333V26.6666C26.6668 27.3738 26.3859 28.0521 25.8858 28.5522C25.3857 29.0523 24.7074 29.3333 24.0002 29.3333H8.00016C7.29292 29.3333 6.61464 29.0523 6.11454 28.5522C5.61445 28.0521 5.3335 27.3738 5.3335 26.6666V13.3333C5.3335 11.8533 6.52016 10.6666 8.00016 10.6666H9.3335V7.99992C9.3335 6.23181 10.0359 4.53612 11.2861 3.28587C12.5364 2.03563 14.2321 1.33325 16.0002 1.33325C16.8756 1.33325 17.7425 1.50569 18.5514 1.84072C19.3602 2.17575 20.0952 2.66682 20.7142 3.28587C21.3333 3.90493 21.8243 4.63986 22.1594 5.4487C22.4944 6.25753 22.6668 7.12444 22.6668 7.99992V10.6666H24.0002ZM16.0002 3.99992C14.9393 3.99992 13.9219 4.42135 13.1717 5.17149C12.4216 5.92164 12.0002 6.93905 12.0002 7.99992V10.6666H20.0002V7.99992C20.0002 6.93905 19.5787 5.92164 18.8286 5.17149C18.0784 4.42135 17.061 3.99992 16.0002 3.99992Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="password_confirmation">
                    <label for="password">Confirm Password</label>
                    <div>
                        <input type="password" name="password_confirmation">
                    </div>
                </div>

                <button href="{{ route('register') }}" id="login-link" type="submit">Inscription</button>

                <div class="another-option">
                    <hr>
                    <span>
                        OU
                    </span>
                    <hr>
                </div>

                <a href="{{ route('login') }}" id="inscription-link">Connexion</a>
            </form>
        </main>
    </body>
</html>
