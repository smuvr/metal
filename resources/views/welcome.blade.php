<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Produkcja i montaż ogrodzeń metalowych, systemów przeciwśniegowych, rynien oraz ekskluzywnych konstrukcji stalowych na zamówienie w Białymstoku.">
    <meta name="keywords"
          content="ogrodzenia metalowe, systemy przeciwśniegowe, rynny, konstrukcje stalowe, wyroby metalowe, Białystok">

    <title>MetalMaster – Metal w najlepszej formie | Białystok</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700&display=swap" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2C3E50',    /* Ciemnoniebieski */
                        secondary: '#34495E',  /* Grafitowy */
                        accent: '#E67E22',     /* Ciepły pomarańczowy dla akcentów */
                        light: '#ECF0F1',      /* Jasnoszary */
                        dark: '#2C3E50',       /* Ciemnoniebieski */
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    </style>
</head>



<body class="antialiased bg-light text-gray-800 font-sans">
<!-- Nawigacja -->
<nav class="fixed w-full bg-white/90 backdrop-blur-sm shadow-md z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-primary">
                Metal<span class="text-accent">Master</span>
            </a>

            <!-- Menu mobilne (hamburger) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu desktopowe -->
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-600 hover:text-accent transition-colors">O firmie</a>
                <a href="#services" class="text-gray-600 hover:text-accent transition-colors">Usługi</a>
                <a href="#portfolio" class="text-gray-600 hover:text-accent transition-colors">Realizacje</a>
                <a href="#process" class="text-gray-600 hover:text-accent transition-colors">Etapy pracy</a>
                <a href="#testimonials" class="text-gray-600 hover:text-accent transition-colors">Opinie</a>
                <a href="#contact" class="text-gray-600 hover:text-accent transition-colors">Kontakt</a>
            </div>
        </div>

        <!-- Menu mobilne (rozwijane) -->
        <div id="mobile-menu" class="md:hidden hidden mt-2 pb-2">
            <div class="flex flex-col space-y-3">
                <a href="#about" class="text-gray-600 hover:text-accent transition-colors">O firmie</a>
                <a href="#services" class="text-gray-600 hover:text-accent transition-colors">Usługi</a>
                <a href="#portfolio" class="text-gray-600 hover:text-accent transition-colors">Realizacje</a>
                <a href="#process" class="text-gray-600 hover:text-accent transition-colors">Etapy pracy</a>
                <a href="#testimonials" class="text-gray-600 hover:text-accent transition-colors">Opinie</a>
                <a href="#contact" class="text-gray-600 hover:text-accent transition-colors">Kontakt</a>
            </div>
        </div>
    </div>
</nav>


<!-- Sekcja Hero -->
<section id="hero" class="pt-24 pb-16 md:pt-32 md:pb-24 bg-gradient-to-br from-primary to-secondary text-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Metal w najlepszej formie</h1>
                <p class="text-xl md:text-2xl mb-8 text-light/90">Solidność, którą widać. Indywidualne rozwiązania dla każdego projektu w Białymstoku.</p>
                <a href="#contact"
                   class="inline-block bg-accent hover:bg-accent/90 text-white font-semibold py-3 px-8 rounded-md transition-colors shadow-lg hover:shadow-xl">
                    Złóż zapytanie
                </a>
            </div>
            <div class="md:w-1/2">
                <img
                    src="/hero_bunner.png"
                    alt="Wyroby metalowe"
                    class="rounded-lg shadow-2xl w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">O firmie</h2>
            <div class="w-20 h-1 bg-accent mx-auto"></div>
        </div>

        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 pr-0 md:pr-8">
                <img
                    src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                    alt="Nasz zespół"
                    class="rounded-lg shadow-lg w-full h-auto object-cover fade-in">
            </div>
            <div class="md:w-1/2 fade-in">
                <h3 class="text-2xl font-semibold text-primary mb-4">Chronimy estetycznie od 2010 roku</h3>
                <p class="text-gray-700 mb-6">
                    Nasza firma specjalizuje się w produkcji i montażu wysokiej jakości konstrukcji metalowych,
                    które łączą niezawodność, funkcjonalność i estetyczny wygląd.
                </p>
                <p class="text-gray-700 mb-6">
                    Jesteśmy dumni, że każde zamówienie realizujemy z uwzględnieniem indywidualnych potrzeb klienta,
                    warunków lokalnych oraz stylu architektonicznego obiektu – również w Białymstoku i okolicach.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                    <div class="flex items-start">
                        <div class="bg-accent rounded-full p-2 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Wysokiej jakości materiały</h4>
                            <p class="text-gray-600">Korzystamy wyłącznie ze sprawdzonych materiałów</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-accent rounded-full p-2 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Terminowość</h4>
                            <p class="text-gray-600">Dotrzymujemy ustalonych terminów</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-accent rounded-full p-2 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">5 lat gwarancji</h4>
                            <p class="text-gray-600">Na wszystkie usługi i materiały</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-accent rounded-full p-2 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Szybki montaż</h4>
                            <p class="text-gray-600">Profesjonalna instalacja przez doświadczony zespół</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Nasze usługi -->
<section id="services" class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Nasze usługi</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Indywidualne rozwiązania dla każdego projektu</p>
            <div class="w-20 h-1 bg-accent mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Usługa 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card fade-in">
                <img
                    src="https://images.unsplash.com/photo-1621155346337-1d19476ba7d6?auto=format&fit=crop&w=1470&q=80"
                    alt="Ogrodzenia metalowe"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-primary mb-3">Ogrodzenia metalowe</h3>
                    <p class="text-gray-600 mb-4">
                        Produkujemy i montujemy trwałe oraz estetyczne ogrodzenia: spawane, kute, z blachy trapezowej i siatki ogrodzeniowej.
                    </p>
                    <ul class="text-gray-600 mb-4 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Trwałość i wytrzymałość
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Indywidualny projekt
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Ochrona przed korozją
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Usługa 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card fade-in">
                <img
                    src="https://images.unsplash.com/photo-1635424710928-0544e8512eae?auto=format&fit=crop&w=1472&q=80"
                    alt="Ograniczniki śniegu i systemy rynnowe"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-primary mb-3">Ograniczniki śniegu i systemy rynnowe</h3>
                    <p class="text-gray-600 mb-4">
                        Wykonujemy i instalujemy systemy rynnowe i zabezpieczenia przeciwśniegowe, chroniące budynek przed opadami i zapewniające bezpieczeństwo.
                    </p>
                    <ul class="text-gray-600 mb-4 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Skuteczne odprowadzanie wody
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Zabezpieczenie przed zsuwającym się śniegiem
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Różnorodność kolorów
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Usługa 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card fade-in">
                <img
                    src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=1470&q=80"
                    alt="Konstrukcje metalowe na zamówienie"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-primary mb-3">Konstrukcje metalowe na zamówienie</h3>
                    <p class="text-gray-600 mb-4">
                        Tworzymy unikalne konstrukcje metalowe według indywidualnych projektów: schody, balustrady, zadaszenia, altany, grille i wiele więcej.
                    </p>
                    <ul class="text-gray-600 mb-4 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Unikalny design
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Dokładność wykonania zgodna z projektem
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="..." clip-rule="evenodd"></path>
                            </svg>
                            Funkcjonalność i estetyka
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio -->
<section id="portfolio" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Nasze realizacje</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Przykłady zrealizowanych projektów w Białymstoku i okolicach</p>
            <div class="w-20 h-1 bg-accent mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Projekt 1 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1621155346337-1d19476ba7d6?auto=format&fit=crop&w=1470&q=80"
                     alt="Ogrodzenie kute"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">Ogrodzenie kute</h3>
                    <p class="text-gray-600 text-sm">Dom jednorodzinny, Białystok</p>
                </div>
            </div>

            <!-- Projekt 2 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1518618750560-8f07abde4e4e?auto=format&fit=crop&w=1470&q=80"
                     alt="Schody metalowe"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">Schody metalowe</h3>
                    <p class="text-gray-600 text-sm">Dom letniskowy, Supraśl</p>
                </div>
            </div>

            <!-- Projekt 3 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1635424710928-0544e8512eae?auto=format&fit=crop&w=1472&q=80"
                     alt="System rynnowy"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">System rynnowy</h3>
                    <p class="text-gray-600 text-sm">Osiedle domków, Choroszcz</p>
                </div>
            </div>

            <!-- Projekt 4 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?auto=format&fit=crop&w=1470&q=80"
                     alt="Balustrady kute"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">Balustrady kute</h3>
                    <p class="text-gray-600 text-sm">Dom jednorodzinny, Łapy</p>
                </div>
            </div>

            <!-- Projekt 5 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1470&q=80"
                     alt="Ogrodzenie z blachy trapezowej"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">Ogrodzenie z blachy trapezowej</h3>
                    <p class="text-gray-600 text-sm">Działka rekreacyjna, Wasilków</p>
                </div>
            </div>

            <!-- Projekt 6 -->
            <div class="overflow-hidden rounded-lg shadow-lg fade-in">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1470&q=80"
                     alt="Zadaszenie metalowe"
                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-primary">Zadaszenie metalowe</h3>
                    <p class="text-gray-600 text-sm">Dom prywatny, Bielsk Podlaski</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Etapy współpracy -->
<section id="process" class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Etapy współpracy</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Jak realizujemy Twój projekt w Białymstoku i okolicach</p>
            <div class="w-20 h-1 bg-accent mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Etap 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center fade-in">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                    1
                </div>
                <h3 class="text-xl font-semibold text-primary mb-3">Konsultacja</h3>
                <p class="text-gray-600">
                    Omawiamy Twoje potrzeby, doradzamy najlepsze rozwiązania i przygotowujemy wstępną wycenę.
                </p>
            </div>

            <!-- Etap 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center fade-in">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                    2
                </div>
                <h3 class="text-xl font-semibold text-primary mb-3">Projekt</h3>
                <p class="text-gray-600">
                    Tworzymy szczegółowy projekt zgodnie z wymaganiami technicznymi i Twoimi oczekiwaniami.
                </p>
            </div>

            <!-- Etap 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center fade-in">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                    3
                </div>
                <h3 class="text-xl font-semibold text-primary mb-3">Produkcja</h3>
                <p class="text-gray-600">
                    Wykonujemy konstrukcje z najwyższej jakości materiałów, zgodnie z projektem.
                </p>
            </div>

            <!-- Etap 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center fade-in">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                    4
                </div>
                <h3 class="text-xl font-semibold text-primary mb-3">Montaż</h3>
                <p class="text-gray-600">
                    Profesjonalnie montujemy gotowe konstrukcje zgodnie z obowiązującymi normami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Opinie klientów -->
<section id="testimonials" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Opinie klientów</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Co mówią o nas nasi klienci z Białegostoku i okolic</p>
            <div class="w-20 h-1 bg-accent mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Opinia 1 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in">
                <div class="flex items-center mb-4 text-accent">
                    <!-- Gwiazdki -->
                    <div class="text-accent">
                        <span>★★★★★</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">
                    "Jestem bardzo zadowolony z usługi. Ogrodzenie z blachy trapezowej zostało zamontowane szybko i solidnie. Wszystko zgodnie z umową i na czas. Polecam!"
                </p>
                <div class="flex items-center">
                    <div class="mr-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Klient"
                             class="w-12 h-12 rounded-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary">Tomasz Lewandowski</h4>
                        <p class="text-gray-500 text-sm">Białystok</p>
                    </div>
                </div>
            </div>

            <!-- Opinia 2 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in">
                <div class="flex items-center mb-4 text-accent">
                    <div class="text-accent">
                        <span>★★★★★</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">
                    "Zamówiliśmy system rynnowy i zabezpieczenia przeciwśniegowe. Fachowcy pomogli dobrać najlepsze rozwiązanie dla naszego domu. Montaż był szybki i dokładny."
                </p>
                <div class="flex items-center">
                    <div class="mr-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Klientka"
                             class="w-12 h-12 rounded-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary">Ewa Kamińska</h4>
                        <p class="text-gray-500 text-sm">Zabłudów</p>
                    </div>
                </div>
            </div>

            <!-- Opinia 3 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in">
                <div class="flex items-center mb-4 text-accent">
                    <div class="text-accent">
                        <span>★★★★★</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">
                    "Zamówiłem kute poręcze do schodów. Efekt przeszedł moje oczekiwania! Projekt został odwzorowany idealnie, a jakość wykonania jest naprawdę wysoka. Dziękuję!"
                </p>
                <div class="flex items-center">
                    <div class="mr-4">
                        <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Klient"
                             class="w-12 h-12 rounded-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary">Michał Nowak</h4>
                        <p class="text-gray-500 text-sm">Kleosin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontakt -->
<section id="contact" class="py-20 md:py-28 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">Skontaktuj się z nami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Bądźmy w kontakcie! Znajdziesz nas na ulubionych platformach.</p>
            <div class="w-24 h-1 bg-accent mx-auto mt-6"></div>
        </div>

        <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-xl p-10 text-center fade-in">
            <h3 class="text-2xl font-bold text-primary mb-4">Dane kontaktowe</h3>
            <p class="text-gray-600 mb-2"><strong>Telefon:</strong> <a href="tel:+48881234567" class="text-accent hover:underline">+48 881 234 567</a></p>
            <p class="text-gray-600 mb-2"><strong>Email:</strong> <a href="mailto:kontakt@metal-bialystok.pl" class="text-accent hover:underline">kontakt@metal-bialystok.pl</a></p>
            <p class="text-gray-600 mb-8"><strong>Adres:</strong> Białystok, ul. Przemysłowa 12</p>

            <div class="flex justify-center items-center gap-8 text-accent">
                <a href="https://www.instagram.com/twojprofil" target="_blank" aria-label="Instagram" class="hover:text-primary transition">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 7.25a4.75 4.75 0 110 9.5 4.75 4.75 0 010-9.5zm0 1.5a3.25 3.25 0 100 6.5 3.25 3.25 0 000-6.5zm5.25-.75a1 1 0 110 2 1 1 0 010-2z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/twojprofil" target="_blank" aria-label="Facebook" class="hover:text-primary transition">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V11h2.3l-.4 3h-1.9v7A10 10 0 0022 12z"/>
                    </svg>
                </a>
                <a href="https://wa.me/48881234567" target="_blank" aria-label="WhatsApp" class="hover:text-primary transition">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A11.84 11.84 0 0012 0a11.92 11.92 0 00-10 18.69L0 24l5.41-1.69A11.92 11.92 0 0012 24a11.84 11.84 0 008.52-20.52zM12 22a9.87 9.87 0 01-5.06-1.39l-.36-.22-3.21 1L4 17.5l-.22-.36A9.94 9.94 0 1122 12a9.94 9.94 0 01-10 10zm4.78-7.5c-.26-.13-1.56-.77-1.8-.86s-.42-.13-.6.13-.69.86-.84 1c-.15.17-.3.19-.56.06s-1.09-.4-2.08-1.27c-.77-.69-1.29-1.54-1.44-1.8s-.02-.4.11-.53c.11-.12.26-.3.38-.45a1.8 1.8 0 00.26-.45.47.47 0 000-.45c-.13-.13-.56-1.33-.77-1.83s-.39-.42-.6-.43h-.52a1 1 0 00-.73.34 3.07 3.07 0 00-.95 2.26A5.41 5.41 0 0012 17.4a5.31 5.31 0 003.25-1.12 1.89 1.89 0 00.53-.73c.08-.2.08-.38 0-.5s-.23-.18-.5-.31z"/>
                    </svg>
                </a>
            </div>

            <div class="mt-10">
                <iframe class="w-full h-72 rounded-2xl shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.3781393190986!2d23.1357661!3d53.1324888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ffc4aa63291c5%3A0x40a6ed6ab35c992c!2sBia%C5%82ystok!5e0!3m2!1spl!2spl!4v1713000000000"
                        frameborder="0" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>




<!-- Stopka -->
<footer class="bg-dark text-white py-10">
    <div class="container mx-auto px-4 text-center">
        <div class="mb-6">
            <p class="text-sm md:text-base">&copy; <span id="year"></span> MetalMaster Białystok. Wszystkie prawa zastrzeżone.</p>
            <p class="text-sm md:text-base mt-2">Tworzymy z pasją do metalu 🛠</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>


<script>
    // Анимация появления блоков при скролле
    const faders = document.querySelectorAll('.fade-in');
    const appearOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -100px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('appear');
            observer.unobserve(entry.target);
        });
    }, appearOptions);

    faders.forEach(fader => appearOnScroll.observe(fader));

    // Мобильное меню
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
