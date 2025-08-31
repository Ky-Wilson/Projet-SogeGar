@extends('layouts.master')
@section('content')

<!-- Carousel Start -->
<section id="accueil" class="hero-section">
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/nne.jpeg') }}" class="img-fluid"
                        alt="Gare Internationale d'Abobo">
                    <div class="carousel-caption">
                        <div class="text-center p-4" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp"
                                data-wow-delay="0.1s">
                                Gestion Moderne des Gares Routières</h4>
                            <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                                data-wow-delay="0.3s">Votre Voyage Commence Ici !</h1>
                            <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">
                                SOGEGAR modernise les infrastructures de transport en Côte d'Ivoire.
                                Découvrez nos gares modernes et sécurisées, conçues pour améliorer votre expérience de
                                voyage.
                            </p>
                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp"
                                data-wow-delay="0.7s" href="#about">Découvrir SOGEGAR</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<!-- Carousel End -->






<!-- About Start -->
<!-- Section À propos -->
<section id="apropos" class="about-section py-5">
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="{{ asset('assets/img/gare.jpg') }}" class="img-fluid w-100"
                            style="margin-bottom: -7px; width: 300px;" alt="Gare SOGEGAR">
                        <img src="{{ asset('assets/img/gare2.jpeg') }}"
                            class="img-fluid w-100 border-bottom border-5 border-primary"
                            style="border-top-right-radius: 300px; border-top-left-radius: 300px;"
                            alt="Infrastructure moderne">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">À propos de SOGEGAR</h5>
                    <h1 class="display-5 mb-4">Pionnier de la Modernisation des Infrastructures de Transport en Côte d'Ivoire</h1>
                    <p class="mb-4">Fondée en 2007 et constituée en société anonyme au capital de 20 millions de francs CFA, la SOGEGAR (Société de Gestion des Gares Routières) s'est imposée comme le leader dans la conception, le financement, la construction et la gestion de gares routières modernes en Côte d'Ivoire. Notre siège social situé aux Deux Plateaux d'Abidjan coordonne nos activités à travers tout le territoire national.</p>
                    
                    <p class="mb-4">Sous la direction générale de Monsieur ADOU FERNAND CLAUDE, SOGEGAR a révolutionné le secteur du transport routier en créant des infrastructures modernes, sécurisées et multifonctionnelles qui répondent aux besoins croissants de mobilité des populations ivoiriennes et sous-régionales.</p>

                    <div class="row gy-4 align-items-center mb-4">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                            <div class="ms-4">
                                <h5>Présence Nationale</h5>
                                <p class="mb-0 text-muted">Abidjan, Yamoussoukro, Bouaké</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-bus fa-3x text-secondary"></i>
                            <div class="ms-4">
                                <h5>Transport International</h5>
                                <p class="mb-0 text-muted">Liaisons sous-régionales</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-store fa-3x text-secondary"></i>
                            <div class="ms-4">
                                <h5>Espaces Commerciaux</h5>
                                <p class="mb-0 text-muted">Marchés, boutiques, restaurants</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-shield-alt fa-3x text-secondary"></i>
                            <div class="ms-4">
                                <h5>Sécurité Renforcée</h5>
                                <p class="mb-0 text-muted">Vidéosurveillance, police, gendarmerie</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mission et Vision -->
                    <div class="mb-4 p-4 bg-light rounded">
                        <h6 class="text-primary mb-2">Notre Mission :</h6>
                        <p class="mb-3 small">Moderniser les infrastructures de transport en Côte d'Ivoire en créant des gares routières sécurisées, fonctionnelles et génératrices d'emplois, tout en améliorant l'expérience des voyageurs et des commerçants.</p>
                        
                        <h6 class="text-primary mb-2">Notre Vision :</h6>
                        <p class="mb-0 small">Devenir le référent en matière de gestion d'infrastructures de transport en Afrique de l'Ouest, en alliant innovation, durabilité et impact social positif.</p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About End -->
<!-- Section Services -->
<section id="services" class="services-section py-5">

    <!-- Counter Facts Start -->
    <div class="container-fluid counter-facts py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Hangars de Cars</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">32</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Emplois Créés</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">6</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">K+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Boutiques & Restaurants</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">300</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Superficie Totale</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">14</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">Ha</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->
    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Nos Services</h5>
                </div>
                <h1 class="display-5 mb-4">Des Services Complets pour Votre Voyage</h1>
                <p class="mb-0">SOGEGAR vous offre une gamme complète de services dans ses gares modernes et sécurisées.
                    De la restauration aux services bancaires, tout est pensé pour votre confort et celui de vos
                    proches.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service-1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Transport International">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Hangars de Voyage</a>
                                    </div>
                                    
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Hangars de Voyage</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">32 hangars de cars de voyage pour les lignes internationales,
                                            espace pour minibus (gbaka) et taxis-communaux (wôrô-wôrô).</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/allocodrome.jpeg') }}" class="img-fluid w-100 rounded"
                                    alt="Commerce et Restauration">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Commerce & Restauration</a>
                                    </div>
                                    
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Commerce & Restauration</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">300 boutiques et restaurants, marché de fruits et légumes
                                            de 1 062 places, boulangerie et banque.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service-3.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Sécurité et Services">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Sécurité & Services</a>
                                    </div>
                                    
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Sécurité & Services</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Commissariat de police, vidéosurveillance, 6 blocs sanitaires,
                                            centre de secours, clinique, pharmacie et station-service.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/culte.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Espaces de Culte">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Espaces de Culte</a>
                                    </div>
                                    
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Espaces de Culte</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Grotte pour
                                            les fidèles chrétiens catholiques.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/mosquée.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Espace Allocodrome">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Mosquée</a>
                                    </div>
                                    
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Mosquée</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Mosquée pour les fidèles musulmans</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

</section>








<!-- Features Start -->
<div class="container-fluid features overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Pourquoi Choisir SOGEGAR</h5>
            </div>
            <h1 class="display-5 mb-4">Des Solutions Sur Mesure Pour Vos Besoins de Transport</h1>
            <p class="mb-0">SOGEGAR s'engage à offrir des infrastructures modernes et des services de qualité
                pour améliorer l'expérience de voyage de tous les usagers. Notre approche innovante transforme
                le secteur du transport routier en Côte d'Ivoire.</p>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-clock fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Ouverture 24h/24</h5>
                        <p class="mb-3">Gares ouvertes de 5h à minuit pour les voyages et jusqu'à minuit pour la
                            restauration,
                            pour votre flexibilité maximale.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-shield-alt fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Sécurité Renforcée</h5>
                        <p class="mb-3">Système de vidéosurveillance moderne, commissariat de police et postes
                            de gendarmerie pour votre sécurité totale.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-route fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Couverture Internationale</h5>
                        <p class="mb-3">32 hangars dédiés aux lignes internationales pour voyager facilement
                            dans toute la sous-région ouest-africaine.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-briefcase fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Création d'Emplois</h5>
                        <p class="mb-3">Plus de 6 000 emplois créés pour les jeunes, contribuant au développement
                            économique et social de la communauté.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                    href="#services">Découvrir Nos Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



<!-- Destinations We Serve Start -->
<div class="container-fluid country overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">NOS DESTINATIONS</h5>
            </div>
            <h1 class="display-5 mb-4">Connectez-Vous à Travers la Côte d'Ivoire</h1>
            <p class="mb-0">Depuis la Gare Internationale d'Abobo, SOGEGAR facilite vos déplacements vers toutes les
                principales
                villes de Côte d'Ivoire et les communes du Grand Abidjan. Transport urbain et interurbain moderne
                pour tous vos besoins de mobilité quotidienne.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="country-item">
                    <div class="rounded overflow-hidden" style="height: 250px;">
                        <img src="{{ asset('assets/img/yakro.jpg') }}" class="img-fluid w-100 h-100 rounded"
                            style="object-fit: cover;" alt="Yamoussoukro">
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset('assets/img/yakro.jpg') }}" class="img-fluid rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;" alt="Capitale politique">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Yamoussoukro</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="country-item">
                    <div class="rounded overflow-hidden" style="height: 250px;">
                        <img src="{{ asset('assets/img/abidjan.jpg') }}" class="img-fluid w-100 h-100 rounded" 
                            style="object-fit: cover;" alt="Abidjan">
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset('assets/img/abidjan.jpg') }}" class="img-fluid rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;" alt="Capitale économique">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Abidjan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                <div class="country-item">
                    <div class="rounded overflow-hidden" style="height: 250px;">
                        <img src="{{ asset('assets/img/cocdy.jpg') }}" class="img-fluid w-100 h-100 rounded" 
                            style="object-fit: cover;" alt="Cocody">
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset('assets/img/cocdy.jpg') }}" class="img-fluid rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;" alt="Commune d'Abidjan">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Cocody</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                <div class="country-item">
                    <div class="rounded overflow-hidden" style="height: 250px;">
                        <img src="{{ asset('assets/img/bouake.jpeg') }}" class="img-fluid w-100 h-100 rounded"
                            style="object-fit: cover;" alt="Bouaké">
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset('assets/img/bouake.jpeg') }}" class="img-fluid rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;" alt="Centre du pays">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Bouaké</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Destinations We Serve End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial overflow-hidden pb-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">TÉMOIGNAGES CLIENTS</h5>
                </div>
                <h1 class="display-5 mb-4">Ce Que Disent Nos Usagers</h1>
                <p class="mb-0">Les témoignages de nos voyageurs et commerçants reflètent notre engagement quotidien à
                    offrir
                    des services de qualité dans nos gares modernes. Découvrez pourquoi SOGEGAR est le choix de
                    confiance
                    pour vos déplacements et activités commerciales.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">La Gare d'Abobo a complètement transformé mon expérience de voyage.
                            Les installations sont modernes, la sécurité est excellente et j'ai accès à tous les
                            services
                            dont j'ai besoin : restaurants, banque, pharmacie. C'est vraiment pratique !
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                alt="Voyageur satisfait">
                        </div>
                        <div class="my-auto">
                            <h5>Aminata Traoré</h5>
                            <p class="mb-0">Voyageuse régulière</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">En tant que commerçant, la gare SOGEGAR m'offre une clientèle importante
                            et des infrastructures de qualité. Le marché de fruits et légumes est bien organisé
                            et la sécurité nous permet de travailler sereinement. Merci SOGEGAR !
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                alt="Commerçant satisfait">
                        </div>
                        <div class="my-auto">
                            <h5>Kouassi Michel</h5>
                            <p class="mb-0">Commerçant</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">SOGEGAR a créé un véritable pôle économique à Abobo. La gare fonctionne
                            parfaitement, les horaires sont respectés et les chauffeurs sont professionnels.
                            C'est un exemple à suivre pour toute la Côte d'Ivoire.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                alt="Transporteur satisfait">
                        </div>
                        <div class="my-auto">
                            <h5>Fatou Bamba</h5>
                            <p class="mb-0">Responsable Transport</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





    <!-- Section Services -->
    <section id="nosprojets" class="projets-section py-5">
        <!-- Projects Start -->
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">NOS PROJETS</h5>
                    </div>
                    <h1 class="display-5 mb-4">Découvrez Nos Réalisations et Projets Futurs</h1>
                    <p class="mb-0">SOGEGAR continue d'innover et d'étendre son réseau de gares modernes à travers la
                        Côte
                        d'Ivoire.
                        Découvrez nos réalisations emblématiques et nos projets en cours de développement pour améliorer
                        les infrastructures de transport du pays.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                    alt="Gare d'Abobo">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">Gare Internationale</a>
                                    <a href="#" class="h4 text-white mb-0">d'Abobo</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#">
                                    <h4 class="text-white">Gare Internationale d'Abobo</h4>
                                </a>
                                <p class="text-white-50">14 hectares, 32 hangars, plus de 300 boutiques.
                                    Inaugurée en 2012, notre projet flagship.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                    alt="Gare de Yamoussoukro">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">Gare de</a>
                                    <a href="#" class="h4 text-white mb-0">Yamoussoukro</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#">
                                    <h4 class="text-white">Gare de Yamoussoukro</h4>
                                </a>
                                <p class="text-white-50">Projet de modernisation de la gare de la capitale politique.
                                    Infrastructure adaptée au statut de la ville.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                    alt="Gare de Bouaké">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">Gare de</a>
                                    <a href="#" class="h4 text-white mb-0">Bouaké</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#">
                                    <h4 class="text-white">Gare de Bouaké</h4>
                                </a>
                                <p class="text-white-50">Hub stratégique au centre du pays.
                                    Connectivité optimisée vers le nord et le sud.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                    alt="Digitalisation">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">Digitalisation</a>
                                    <a href="#" class="h4 text-white mb-0">des Services</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#">
                                    <h4 class="text-white">Digitalisation des Services</h4>
                                </a>
                                <p class="text-white-50">Modernisation technologique : billetterie en ligne,
                                    applications mobiles et services connectés.</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Projects End -->
    </section>

    <!-- Section references -->
    <section id="references" class="references-section py-5">
        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Nos Gares</h5>
                        </div>
                        <h1 class="display-5 mb-4">Découvrez Nos Gares en Côte d'Ivoire</h1>
                        <p class="mb-0">SOGEGAR assure la gestion, l'organisation et la modernisation des gares
                            routières
                            en Côte d'Ivoire. Nous garantissons la fluidité des transports, la sécurité des voyageurs
                            et l'entretien des infrastructures pour valoriser les gares comme pôles stratégiques de
                            mobilité.</p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Gare Internationale d'Abobo</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+225 XX XX XX XX</a>
                                    <a href="#" class="text-muted fs-5 mb-2">contact@sogegar.ci</a>
                                    <p class="mb-0">Abobo Anonkoua-Kouté, entre le dépôt 9 de la Sotra et le
                                        carrefour Agripac. Gare moderne de 14 hectares avec 32 hangars, marché
                                        et services complets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Gare de Yamoussoukro</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+225 XX XX XX XX</a>
                                    <a href="#" class="text-muted fs-5 mb-2">yamoussoukro@sogegar.ci</a>
                                    <p class="mb-0">Gare routière moderne située dans la capitale politique
                                        de la Côte d'Ivoire. Infrastructure de transport stratégique
                                        pour les liaisons nationales et régionales.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Gare de Bouaké</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+225 XX XX XX XX</a>
                                    <a href="#" class="text-muted fs-5 mb-2">bouake@sogegar.ci</a>
                                    <p class="mb-0">Point névralgique du transport au centre de la Côte d'Ivoire.
                                        Gare moderne facilitant les déplacements vers toutes les régions
                                        du pays avec services aux voyageurs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('assets/img/gare2.jpeg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Siège Social</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+225 XX XX XX XX</a>
                                    <a href="#" class="text-muted fs-5 mb-2">info@sogegar.ci</a>
                                    <p class="mb-0">Abidjan - Les Deux Plateaux, BP 614 Abidjan 25.
                                        Direction générale de SOGEGAR pour la coordination
                                        de toutes nos activités de gestion des gares.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </section>

    <section id="contact" class="contact-section py-5">
        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Contact Rapide</h5>
                        </div>
                        <h1 class="display-5 mb-4">Des Questions ? N'hésitez pas à Nous Contacter</h1>
                        <p class="mb-5">SOGEGAR est à votre service pour toute information concernant nos gares, nos
                            services et nos projets de modernisation des infrastructures de transport en Côte d'Ivoire.
                        </p>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>Siège Social</h5>
                                <p>Abidjan - Les Deux Plateaux, 25 Boîte Postale numéro 614 Abidjan 25, Côte d'Ivoire
                                </p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-tty fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Contact Rapide</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Téléphone:</h6>
                                            <a href="#" class="fs-5 text-primary">+225 XX XX XX XX</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="#" class="fs-5 text-primary">contact@sogegar.ci</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-clone fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Horaires d'Ouverture</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Gares:</h6>
                                            <a href="#" class="fs-5 text-primary">05h00 à 00h00</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Restaurants:</h6>
                                            <a href="#" class="fs-5 text-primary">05h00 à 00h00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <div class="me-4">
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                    style="width: 90px; height: 90px; border-radius: 10px;"><i
                                        class="fas fa-share fa-3x text-primary"></i></div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-secondary border-secondary me-2 p-0" href="">facebook <i
                                        class="fas fa-chevron-circle-right"></i></a>
                                <a class="btn btn-secondary border-secondary mx-2 p-0" href="">twitter <i
                                        class="fas fa-chevron-circle-right"></i></a>
                                <a class="btn btn-secondary border-secondary mx-2 p-0" href="">instagram <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Notre Localisation</h5>
                        </div>
                        <h1 class="display-5 mb-4">Trouvez-Nous</h1>
                        <p class="mb-3">Découvrez l'emplacement de notre siège social situé aux Deux Plateaux à Abidjan
                            et de nos principales gares routières modernes réparties à travers la Côte d'Ivoire.</p>
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" style="height: 400px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.8!2d-4.0167!3d5.3600!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLes%20Deux%20Plateaux%2C%20Abidjan%2C%20Côte%20d'Ivoire!5e0!3m2!1sfr!2sci!4v1694259649153!5m2!1sfr!2sci"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Contact End -->
    </section>



    @endsection