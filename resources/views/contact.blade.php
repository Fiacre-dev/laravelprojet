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
        <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}" />
        <title>AutoRent | Contact</title>
    </head>
    <body>
        <div>
            @component('component.header')

            @endcomponent
            <main>
                <div class="hierarchie">
                    <a href="{{ route('acceuil') }}">Home</a>
                    <span>></span>
                    <a href="{{ route('catalogue') }}">Contact</a>
                </div>
                <section>
                    <div>
                        <h1>Vous avez des questions <br> ou suggestions? <br> <span>Let's Get In Touch !</span></h1>
                        <div class="our-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M0.075 5.3325C0.226227 4.66986 0.597983 4.07822 1.12938 3.65446C1.66078 3.23071 2.32033 2.99995 3 3H21C21.6797 2.99995 22.3392 3.23071 22.8706 3.65446C23.402 4.07822 23.7738 4.66986 23.925 5.3325L12 12.621L0.075 5.3325ZM0 7.0455V17.7015L8.7045 12.3645L0 7.0455ZM10.1415 13.245L0.2865 19.2855C0.52999 19.7989 0.91429 20.2326 1.39467 20.5362C1.87505 20.8397 2.43176 21.0005 3 21H21C21.5681 21.0001 22.1246 20.8389 22.6048 20.5351C23.0849 20.2313 23.4688 19.7975 23.712 19.284L13.857 13.2435L12 14.379L10.1415 13.2435V13.245ZM15.2955 12.366L24 17.7015V7.0455L15.2955 12.3645V12.366Z" fill="#7B61FF"/>
                            </svg>
                            <span>inoussalouqmane@gmail.com</span>
                        </div>
                        <div class="our-info" id="phone number ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_309_202)">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.82723 0.766476C3.08969 0.504409 3.40485 0.301114 3.75183 0.170061C4.0988 0.0390087 4.46966 -0.0168078 4.83984 0.00631052C5.21002 0.0294288 5.57105 0.130954 5.89902 0.304158C6.227 0.477362 6.51441 0.71829 6.74223 1.01098L9.43473 4.46998C9.92823 5.10448 10.1022 5.93098 9.90723 6.71098L9.08673 9.99598C9.04431 10.1661 9.0466 10.3443 9.09338 10.5133C9.14017 10.6823 9.22985 10.8364 9.35373 10.9605L13.0392 14.646C13.1635 14.7701 13.3178 14.8599 13.4871 14.9067C13.6563 14.9535 13.8349 14.9557 14.0052 14.913L17.2887 14.0925C17.6737 13.9962 18.0754 13.9888 18.4636 14.0706C18.8519 14.1525 19.2164 14.3215 19.5297 14.565L22.9887 17.256C24.2322 18.2235 24.3462 20.061 23.2332 21.1725L21.6822 22.7235C20.5722 23.8335 18.9132 24.321 17.3667 23.7765C13.4085 22.3838 9.81464 20.1177 6.85173 17.1465C3.88066 14.184 1.61464 10.5907 0.22173 6.63298C-0.32127 5.08798 0.16623 3.42748 1.27623 2.31748L2.82723 0.766476Z" fill="#7B61FF"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_309_202">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span>
                                +123 456 789
                            </span>
                        </div>
                        <div class="our-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                <path d="M12 14C12.825 14 13.5315 13.7256 14.1195 13.1768C14.7065 12.6289 15 11.97 15 11.2C15 10.43 14.7065 9.7706 14.1195 9.2218C13.5315 8.67393 12.825 8.4 12 8.4C11.175 8.4 10.469 8.67393 9.882 9.2218C9.294 9.7706 9 10.43 9 11.2C9 11.97 9.294 12.6289 9.882 13.1768C10.469 13.7256 11.175 14 12 14ZM12 28C7.975 24.8033 4.969 21.8339 2.982 19.0918C0.994 16.3506 0 13.8133 0 11.48C0 7.98 1.2065 5.19167 3.6195 3.115C6.0315 1.03833 8.825 0 12 0C15.175 0 17.9685 1.03833 20.3805 3.115C22.7935 5.19167 24 7.98 24 11.48C24 13.8133 23.0065 16.3506 21.0195 19.0918C19.0315 21.8339 16.025 24.8033 12 28Z" fill="#7B61FF"/>
                            </svg>
                            <span>
                                Abomey-Calavi, Arconville
                            </span>
                        </div>
                    </div>
                    <form action="">
                        <h2>Dites-Nous Tout !</h2>
                        <div class="input-group">
                            <input type="text" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="input-group">
                            <input type="text" name="email" placeholder="Votre adresse mail">
                        </div>
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Votre message">
                        </div>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M23.9471 1.02847C24.0017 0.892169 24.015 0.742859 23.9855 0.599044C23.956 0.45523 23.885 0.323236 23.7812 0.219426C23.6774 0.115616 23.5454 0.0445561 23.4015 0.0150549C23.2577 -0.0144463 23.1084 -0.00109103 22.9721 0.053465L1.15162 8.78197H1.15012L0.472125 9.05196C0.34371 9.10319 0.231953 9.18891 0.149198 9.29966C0.0664433 9.41041 0.0159116 9.54188 0.00318483 9.67955C-0.00954198 9.81721 0.0160314 9.95572 0.0770801 10.0798C0.138129 10.2038 0.232277 10.3086 0.349125 10.3825L0.964125 10.7725L0.965625 10.7755L8.45812 15.5425L13.2251 23.035L13.2281 23.038L13.6181 23.653C13.6923 23.7694 13.7971 23.863 13.921 23.9237C14.045 23.9844 14.1833 24.0097 14.3207 23.9968C14.4581 23.9839 14.5892 23.9334 14.6998 23.8508C14.8103 23.7681 14.8959 23.6566 14.9471 23.5285L23.9471 1.02847ZM21.1976 3.86347L9.95662 15.1045L9.63412 14.5975C9.57503 14.5044 9.49616 14.4256 9.40312 14.3665L8.89612 14.044L20.1371 2.80296L21.9041 2.09646L21.1991 3.86347H21.1976Z" fill="#EEEEEE"/>
                            </svg>
                            <span>Envoyer</span>
                        </button>
                    </form>
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
    </body>
</html>
