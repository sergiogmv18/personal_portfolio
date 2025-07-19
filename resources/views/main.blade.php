<!DOCTYPE html>
<html lang="{{ Session::get('locale')?? "es" }}">
@include('components.head')
<style>
    body {
        background-color: var(--dark-blue);
        color: var(--lightest-blue);
        line-height: 1.6;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    input {
        color: var(--green) !important;
    }

    input::placeholder {
        color: var(--white) !important;
    }

    input::-webkit-input-placeholder {
        color: var(--white) !important;
    }

    input::-moz-placeholder {
        color: var(--white) !important;
    }

    input:-ms-input-placeholder {
        color: var(--white) !important;
    }

    input:-moz-placeholder {
        color: var(--white) !important;
    }

    input:focus {
        outline: none !important;
        border: none !important;
        box-shadow: none !important;
    }

    textarea:focus {
        outline: none !important;
        border: none !important;
        box-shadow: none !important;
    }

    textarea {
        color: var(--green) !important;
        outline: none !important;
        border: none !important;
        box-shadow: none !important;
    }

    textarea::placeholder {
        color: var(--white) !important;
    }

    textarea::-webkit-input-placeholder {
        color: var(--white) !important;
    }

    textarea::-moz-placeholder {
        color: var(--white) !important;
    }

    textarea:-ms-input-placeholder {
        color: var(--white) !important;
    }

    textarea:-moz-placeholder {
        color: var(--white) !important;
    }


    /* TEXT PROJECTS */
    .icon-text {
        text-align: justify;
    }

    /* SKILLS */
    .skill-card {
        display: flex;
        align-items: center;
        background: var(--dark-blue);
        padding: 0.5rem 1rem;
        border-radius: 10px;
        margin-right: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        flex: 0 0 auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skill-card:hover {
        background: var(--green) !important;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
        color: var(--dark-blue) !important;
    }

    .skill-card img {
        width: 50px;
        height: 50px;
        object-fit: contain;
        margin-right: 0.5rem;
    }

    .skill-card span {
        color: var(--white) !important;
        transition: color 0.3s ease;
        font-weight: bold;
    }

    .skill-card span:hover {
        color: var(--dark-blue) !important;
    }

    strong {
        font-weight: bold !important;
    }

    /* MARQUESS-SKILLS */

    .marquee-container {
        overflow: hidden;
        padding-top: 1rem;
        white-space: nowrap;
    }

    .marquee-track {
        display: flex;
        animation: scroll-marquee 20s linear infinite;
    }

    .marquee-content {
        display: flex;
        gap: 1rem;
        /* separación entre elementos */
    }

    .marquee-content span {
        font-size: 1.5rem;
        color: #222736;
        font-weight: 500;
    }

    /* Animación base */
    @keyframes scroll-marquee {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* Animación en reversa */
    @keyframes scroll-marquee-reverse {
        from {
            transform: translateX(-50%);
        }

        to {
            transform: translateX(0%);
        }
    }

    /* Normal */
    .marquee-track {
        display: flex;
        animation: scroll-marquee 20s linear infinite;
    }

    /* Reversa */
    .marquee-container.reverse .marquee-track {
        animation: scroll-marquee-reverse 20s linear infinite;
    }





    .btn-custom {
        background: var(--green) !important;
        color: var(--dark-blue) !important;
        border: none;
        /* border-radius: 45px; */
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        background: var(--green) !important;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
    }

    .btn-secondary {
        background: transparent !important;
        color: var(--white) !important;
        border: 2px solid white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-size: 1rem;
    }

    .btn-secondary:hover {
        background: var(--green) !important;
        color: var(--dark-blue) !important;
    }


    /* Header y navegación */
    /* header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: rgba(10, 25, 47, 0.85);
        backdrop-filter: blur(10px);
        transition: var(--transition);
    } */

    /* .logo {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--green);
        text-decoration: none;
    } */

    nav ul {
        display: flex;
        list-style: none;
        gap: 2.5rem;
    }

    nav a {
        color: var(--white) !important;
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition);
        padding: 5px 10px;
        position: relative;
    }

    nav a:hover {
        color: var(--green);
    }

    nav a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 10px;
        width: 0;
        height: 2px;
        background-color: var(--green);
        transition: var(--transition);
    }

    nav a:hover::after {
        width: calc(100% - 20px);
    }

    nav .resume-btn {
        color: var(--green);
        border: 1px solid var(--green);
        border-radius: 4px;
        padding: 0.5rem 1rem;
        margin-left: 1rem;
    }

    nav .resume-btn:hover {
        background-color: rgba(100, 255, 218, 0.1);
    }

    /* Secciones */
    section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 0 10%;
        position: relative;
        overflow: hidden;
    }

    .container {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        z-index: 2;
    }

    .nav-wrapper-mobile-custom {
        display: none;
    }

    /* Hero Section */
    /* #hero {
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
        }

        .greeting {
            color: var(--green);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 1rem;
            color: var(--white);
            line-height: 1.1;
        }

        .hero-content h2 {
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            margin-bottom: 2rem;
            color: var(--lightest-blue);
        }

        .hero-content p {
            max-width: 600px;
            margin-bottom: 2rem;
            font-size: clamp(1rem, 2vw, 1.1rem);
        } */

    /* .btn {
        display: inline-block;
        padding: 1rem 2rem;
        background: transparent;
        color: var(--green);
        border: 1px solid var(--green);
        border-radius: 4px;
        font-size: 1rem;
        transition: var(--transition);
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover {
        background: rgba(100, 255, 218, 0.1);
        transform: translateY(-3px);
    } */


    #about-section {
        position: relative;
        overflow: hidden;
    }

    #about-me h2,
    #companies h2,
    #projects h2,
    #contact h2 {
        font-size: 2rem;
        color: var(--white);
        margin-bottom: 3rem;
        position: relative;
        display: inline-block;
    }

    /* #about-me h2::before,
    #projects h2::before,
    #contact h2::before {
        content: '01.';
        color: var(--green);
        margin-right: 10px;
        font-size: 1.5rem;
    } */

    .material-tooltip {
        background-color: var(--white) !important;
        color: var(--dark-blue) !important;
        border-radius: 5px;
    }

    .about-content {
        display: grid;
        grid-template-columns: 3fr 2fr;
        gap: 50px;
    }

    .about-text p {
        margin-bottom: 1.5rem;
    }

    .skills {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 20px;
    }

    .skill-item {
        background: rgba(100, 255, 218, 0.1);
        padding: 0.5rem 1rem;
        border-radius: 4px;
        color: var(--green);
        font-size: 0.9rem;
    }

    .about-image {
        position: relative;
        border-radius: 45px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: var(--transition);
        max-width: 250px;
        height: 250px;
        background: linear-gradient(45deg, #64ffda, #0a192f);
    }

    .about-image:hover {
        transform: translateY(-10px);
    }

    /* Projects Section */
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        gap: 30px;
    }

    .project-card {
        background: rgba(17, 34, 64, 0.5);
        border-radius: 5px;
        padding: 30px;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .project-card:hover {
        transform: translateY(-10px);
        background: rgba(17, 34, 64, 0.8);
    }

    .project-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--green);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }

    .project-card:hover::before {
        transform: scaleX(1);
    }

    .project-icon {
        color: var(--green);
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .project-card h3 {
        color: var(--white);
        margin-bottom: 15px;
        font-size: 1.5rem;
    }

    .project-card p {
        margin-bottom: 20px;
        font-size: 0.95rem;
        color: var(--white);
    }

    .project-links {
        display: flex;
        gap: 15px;
    }

    .project-links a {
        color: var(--lightest-blue);
        transition: var(--transition);
    }

    .project-links a:hover {
        color: var(--green);
    }

    /* Contact Section */
    #contact {
        background-color: var(--dark-blue);
    }

    .contact-content {
        max-width: 600px;
    }

    .contact-content p {
        margin-bottom: 2rem;
    }

    .social-links {
        display: flex;
        gap: 20px;
        margin-top: 2rem;
    }

    .social-links a {
        color: var(--white);
        font-size: 1.5rem;
        transition: var(--transition);
    }

    .social-links a:hover {
        color: var(--green);
        transform: translateY(-5px);
    }

    /* .service-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
         background-color: var(--green);
    }


    

    .service-card {
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        padding: 0.4em;
        background-color: var(--white);
        
    } */




    .service-card {
        width: 190px;
        /* width: 30em; */
        height: 254px;
        background: var(--dark-blue);
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        place-content: center;
        place-items: center;
        overflow: hidden;
        border-radius: 10px;
        /* padding: 0.6em; */
    }

    .companies-scroll-wrapper::-webkit-scrollbar {
        display: none;
    }

    .service-card::before {
        content: '';
        position: absolute;
        width: 100px;
        /* width: 30em; */
        background-image: -webkit-gradient(linear, left top, left bottom, from(var(--green)), to(var(--white)));
        background-image: linear-gradient(180deg, var(--green), var(--white));
        height: 130%;
        -webkit-animation: rotBGimg 3s linear infinite;
        animation: rotBGimg 3s linear infinite;
        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    @-webkit-keyframes rotBGimg {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotBGimg {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .service-card::after {
        content: '';
        position: absolute;
        background: var(--white);
        inset: 3px;
        border-radius: 15px;
    }

    .email-address {
        display: none !important;
    }

    .email-address-label {
        display: block !important;
    }






    /* Footer */
    footer {
        text-align: center;
        padding: 30px;
        color: var(--lightest-blue);
        font-size: 0.9rem;
        border-top: 1px solid rgba(100, 255, 218, 0.1);
    }

    /* Responsive */
    @media (max-width: 992px) {
        /* section {
            padding: 0 5%;
        } */

        .about-content {
            grid-template-columns: 1fr;
        }

        .about-image {
            max-width: 250px;
            height: 250px;
            margin: 0 auto;
        }

        .projects-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .companies-list {
            flex-wrap: nowrap;
            min-width: max-content;
        }

        .companies-scroll-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .card.horizontal {
            display: block !important;
        }

        .card.horizontal .card-image {
            max-width: 100%;
        }

        .nav-wrapper-mobile-custom {
            display: flex;
            justify-content: space-around;
            align-items: center !important;
            height: 56px;
        }

        .email-address {
            display: block !important;
        }

        .email-address-label {
            display: none !important;
        }
    }
</style>


<body>
    @include('components.navbar')
    <!-- About Section -->
    <section id="about-section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <p style="color: var(--white) !important;">{{ ucfirst(translate('hello, my name is')) }} </p>
                    <h1 style="color: var(--white) !important;">Sergio Marcano.</h1>
                    <h2 style="color: var(--white) !important;">{{ ucfirst(translate('full Stack Developer (Web and Mobile)')) }}</h2>
                </div>
                <div class="col s12 m12 l12" style="margin-top: 1em;">
                    <a class="btn-custom btn-secondary" href="#contact">{{ ucfirst(translate('Got a project? Let’s build it together')) }}</a>
                </div>
            </div>
            <!-- MESSAGE TO I CAN -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h4 style="color: var(--white) !important;"> {{ ucfirst(translate('i can')) }} <span class="typewriter-text"><span class="txt"></span><span class="blinking-cursor">|</span></span> </h4>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about-me" style="align-items: baseline !important; min-height: 0vh;">
        <div class="container">
            <h2>{{ ucfirst(translate('about me')) }}</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>{{ ucfirst(translate("I'm a Full-Stack Developer specializing in web and mobile solutions. With over 6 years of experience, I build scalable, responsive applications using PHP, Laravel, Flutter, and modern front-end technologies. My international experience across Switzerland, Chile, and the USA allows me to bring a global perspective to every project. Curious about my work? Explore my projects — let’s collaborate!")) }}</p>
                </div>
                <div class="about-image">
                    <img loading="lazy" src="{{ asset("img/favicon.jpg") }}" alt="Sergio Marcano" style="width: 100%; height: auto; border-radius: 5px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                </div>
            </div>

            <!-- Typewriter Effect And skills -->
            <div id="skills" style="margin-top: 2em;">
                @foreach ($skills as $category => $skillsList)
                <div class="marquee-section">
                    <div class="marquee-container {{ $loop->iteration % 2 === 0 ? 'reverse' : '' }}">
                        <div class="marquee-track">
                            <div class="marquee-content">
                                @foreach ($skillsList as $skill)
                                <div class="skill-card">
                                    <img loading="lazy" src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}">
                                    <span>{{ $skill['name'] }}</span>
                                </div>
                                @endforeach

                                @foreach ($skillsList as $skill)
                                <div class="skill-card">
                                    <img loading="lazy" src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}">
                                    <span>{{ $skill['name'] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- COMPANIES -->
    <section id="companies" style="align-items: baseline !important; margin-top: 2em; min-height: 0vh;">
        <div class="container">
            <h2>{{ ucfirst(translate("Companies and brands I've worked with")) }}</h2>
            <div class="companies-scroll-wrapper">
                <div class="companies-list" style="display: flex; gap: 0.5em;">
                    @foreach ($companies as $company)
                    <div class="service-card">
                        <div class="card-image" style="margin: 0.6em;">
                            <img loading="lazy" style="width:100%; z-index: 99999; position: relative;" src="{{ $company['icon'] }}" alt="{{ $company['name'] }}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- PROJECTS -->
    <!-- Projects Section -->
    <section id="projects" style="align-items: baseline !important; margin-top: 2em;">
        <div class="container">
            <h2>{{ ucfirst(translate('featured Web & App Development Projects')) }}</h2>
            <div class="row">
                @foreach ($projects as $project)
                <div class="card horizontal project-card col s12 m12 l12">
                    <div class="card-image">
                        <img loading="lazy" src="{{ $project['img'] }}" alt="{{ $project['name'] }}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3>{{ $project['name'] }}</h3>
                            {!! $project['description'] !!}
                            <div class="project-links">
                                <a class="tooltipped" data-position="bottom" data-tooltip="{{ ucfirst(translate('View Project')) }}" target="_blank" rel="noopener noreferrer" href="{{ $project['urlProject'] }}"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" style="align-items: baseline !important; margin-top: 2em;">
        <div class="container">
            <h2>{{ ucfirst(translate('contact')) }}</h2>
            <div class="row">
                <div class="col s12 m12 l6 left">
                    <p class="light" style="color: var(--white);">{{ ucfirst(translate("If you're looking for someone who can turn your vision into a professional, scalable, and results-driven digital solution, I'd be happy to help. Feel free to reach out to discuss your project, ask questions, or just share ideas.")) }}</p>
                    <table>
                        <tbody>
                            <tr style="border-bottom: 1px solid transparent">
                                <td style="padding:5px 0px; color: var(--white);">{{ ucfirst(translate('email address'))}} :</td>
                                <td class="email-address-label" style="padding:0px 0px;"><a style="color: var(--white);" href="mailto:contact@sergiomarcano.globalvisionprojects.online"><strong>contact@sergiomarcano.globalvisionprojects.online</strong></a></td>
                                <td class="email-address" style="padding:0px 0px;"><a style="color: var(--white);" href="mailto:contact@sergiomarcano.globalvisionprojects.online"><strong>contact@sergiomarcano....</strong></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="social-links">
                        <a href="https://github.com/sergiogmv18"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/sergio-giovanny-marcano-villahermosa-15a6861a2/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="row">
                        <form class="col s12 m12 l12">
                            <div class="row">
                                <div class="input-field col s12 m12 l5" style="border: 1px solid var(--green);">
                                    <input style="border: none;" placeholder="{{ ucfirst(translate('your name')) }}" id="first_name" type="text" class="validate">
                                </div>
                                <div class="col s0 m0 l1"> </div>
                                <div class="input-field col s12 m12 l6" style="border: 1px solid var(--green);">
                                    <input style="border: none;" placeholder="{{ ucfirst(translate('your email')) }}" id="email" type="email" class="validate">
                                </div>
                                <div class="col s12 m12 l12" style="border: 1px solid var(--green);">
                                    <textarea id="textarea-messagem" placeholder="{{ ucfirst(translate('your message')) }}" class="materialize-textarea"></textarea>
                                </div>
                                <div class="input-field col s12 m12 l12" style="display: flex; justify-content: end; padding: 0px;">
                                    <button class="btn waves-effect waves-orange btn-custom" type="button" onclick="sendFormOfComment()" name="action">{{ ucfirst(translate('send')) }}
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LOADING -->
    @include ("components.loading")
    <!-- END FOOTER -->
    @include('components.scripts')
    <!-- Footer -->
    <footer>
        <p> {{ ucfirst(translate('Designed and built by')) }} Sergio Marcano &copy; 2023</p>
    </footer>

    <script>
        // Init on load
        document.addEventListener('DOMContentLoaded', () => {
            initialMaterializeDropdownComponents();
            document.querySelectorAll('.scroll-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // evita que el hash aparezca en la URL
                    const targetId = this.getAttribute('href').substring(1);
                    const targetEl = document.getElementById(targetId);
                    if (targetEl) {
                        window.scrollTo({
                            top: targetEl.offsetTop - 80, // ajusta si tienes un navbar fijo
                            behavior: 'smooth'
                        });
                    }
                });
            });

            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, {});

            var languageSuported = "{{ Session::get('locale')  }}";

            // console.log('languageSuported',languageSuported);
            // const langCompleto = navigator.language || navigator.userLanguage; // ej. "es-ES"
            // const langBase = langCompleto.split('-')[0]; // "es"

            const txtElement = document.querySelector('.typewriter-text .txt');




            const words = languageSuported === 'es' ? [
                "crear tu eCommerce ideal — con panel de administración incluido",
                "desarrollar tu app móvil profesional usando Flutter",
                "diseñar aplicaciones web modernas con Laravel y Vue",
                "construir APIs REST robustas para tu negocio",
                "convertir tu idea en un producto digital funcional",
                "integrar sistemas externos y automatizar procesos",
                "optimizar el rendimiento y la seguridad de tu plataforma",
                "ayudarte a digitalizar tu negocio desde cero"
            ] : [
                "build your ideal eCommerce — with a full admin panel",
                "develop your mobile app using Flutter",
                "design modern web applications with Laravel and Vue",
                "build robust REST APIs for your business",
                "turn your idea into a fully functional digital product",
                "integrate third-party systems and automate workflows",
                "optimize your platform for performance and security",
                "help you digitize your business from scratch"
            ];
            const wait = 2000;
            new Typewriter(txtElement, words, wait);
        });




        /*
         * Send comment  and save in server
         * @author SGV
         * @version 1.0 - 20230215 - initial release
         * @return <HTML>
         **/
        function sendFormOfComment() {

            const fullName = document.getElementById('first_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const comments = document.getElementById('textarea-messagem').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!fullName) {
                showToastComponent("<?php echo  ucfirst(translate('please enter your name.')); ?>", null, 'error');
                return;
            }
            if (!email) {
                showToastComponent("<?php echo  ucfirst(translate('please enter your email.')); ?>", null, 'error');
                return;
            }
            if (!emailRegex.test(email)) {
                showToastComponent("<?php echo  ucfirst(translate('please enter a valid email.')); ?>", null, 'error');
                return;
            }
            if (!comments) {
                showToastComponent("<?php echo  ucfirst(translate('please write a message.')); ?>", null, 'error');
                return;
            }
            const url = "{{ route('sendContact') }}";
            const formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('comments', comments);
            formData.append('status', "pending");
            formData.append('type', "1");

            ajaxRequest(url, "POST", formData,
                // ON SUCCESS
                function(response) {
                    if (response.success === false) {
                        showToastComponent(response.message, null, 'error');
                        return;
                    }
                    document.getElementById('first_name').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('textarea-messagem').value = '';
                    showToastComponent("<?php echo ucfirst(translate('sent successfully, we will be in touch soon')); ?>", null, null);
                    return;
                },
                // ON ERROR 
                function(status, textStatus, errorThrown, response) {
                    // console.log(status,textStatus, errorThrown, response);
                    showToastComponent("<?php echo  ucfirst('error sending information, please try again later'); ?>", null, 'error');
                    return;
                }

            );
        }
    </script>
</body>

</html>