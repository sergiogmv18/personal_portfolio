<!DOCTYPE html>
<html lang="{{ Session::get('locale')?? "es" }}">
@include('components.head')

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