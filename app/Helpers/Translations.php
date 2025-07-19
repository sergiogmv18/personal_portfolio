<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class Translations
{
    /*
    * Translate 
    * @author SGV
    * @version 1.0 - 20230215 - initial release
    * @param <String> language - code iso of language selected
    * @return <void>
    **/
    public static function translate($key)
    {
        if (!Session::has('locale')) {
            Session::put('locale', 'es');
        }
        $language = Session::get('locale');
        foreach (self::$translations as $translation) {
            if ($translation['placeholder'] === $key) {
                return $translation[$language] ?? $key;
            }
        }
        return $key; // Retorna la clave si no se encuentra una traducción
    }

    protected static $translations =  [
        [
            "placeholder" => "home",
            "en" => "home",
            "es" => "inicio",
        ],
        [
            "placeholder" => "Sergio Marcano's portfolio – Full Stack Developer specialized in web and mobile apps using Laravel, Flutter, and custom APIs. Scalable, tailored solutions for your business.",
            "en" => "Sergio Marcano's portfolio – Full Stack Developer specialized in web and mobile apps using Laravel, Flutter, and custom APIs. Scalable, tailored solutions for your business.",
            "es" => "Portfolio de Sergio Marcano, Desarrollador Full Stack especializado en aplicaciones web y móviles con Laravel, Flutter y APIs. Soluciones a medida para tu negocio.",
        ],
        [
            "placeholder" => "Sergio Marcano Portfolio | Full Stack Developer (Web & Mobile)",
            "en" => "Sergio Marcano Portfolio | Full Stack Developer (Web & Mobile)",
            "es" => "Portafolio de Sergio Marcano | Desarrollo Web y Móvil Full Stack",
        ],
        [
            "placeholder" => "hello, my name is",
            "en" => "hello, my name is",
            "es" => "hola, mi nombre es",
        ],
        [
            "placeholder" => "full Stack Developer (Web and Mobile)",
            "en" => "full Stack Developer (Web and Mobile)",
            "es" => "Desarrollador Full Stack (Web y Móvil)",
        ],
        [
            "placeholder" => "Got a project? Let’s build it together",
            "en" => "Got a project? Let’s build it together",
            "es" => "¿Tienes un proyecto? Construyámoslo juntos",
        ],
        [
            "placeholder" => "about me",
            "en" => "about me",
            "es" => "sobre mí",
        ],
        [
            "placeholder" => "I'm a Full-Stack Developer specializing in web and mobile solutions. With over 6 years of experience, I build scalable, responsive applications using PHP, Laravel, Flutter, and modern front-end technologies. My international experience across Switzerland, Chile, and the USA allows me to bring a global perspective to every project. Curious about my work? Explore my projects — let’s collaborate!",
            "en" => "I'm a Full-Stack Developer specializing in web and mobile solutions. With over 6 years of experience, I build scalable, responsive applications using PHP, Laravel, Flutter, and modern front-end technologies. My international experience across Switzerland, Chile, and the USA allows me to bring a global perspective to every project. Curious about my work? Explore my projects — let’s collaborate!",
            "es" => "Soy un desarrollador Full Stack especializado en soluciones web y móviles. Con más de 6 años de experiencia, creo aplicaciones escalables y responsivas utilizando PHP, Laravel, Flutter y tecnologías modernas de frontend. Mi experiencia internacional en Suiza, Chile y Estados Unidos me permite aportar una visión global a cada proyecto. ¿Tienes curiosidad por mi trabajo? Explora mis proyectos y trabajemos juntos.",
        ],
        [
            "placeholder" => "featured Web & App Development Projects",
            "en" => "featured Web & App Development Projects",
            "es" => "Proyectos Relevantes en Desarrollo Web y Aplicaciones Móviles",
        ],
        [
            "placeholder" => "For this project, we designed an all-in-one platform that unifies physical and online sales in a single environment, easy to manage from any device. Our all-in-one solution streamlines every step of the purchasing and business control process, from storefront to cash register closure.",
            "en" => "For this project, we designed an all-in-one platform that unifies physical and online sales in a single environment, easy to manage from any device. Our all-in-one solution streamlines every step of the purchasing and business control process, from storefront to cash register closure.",
            "es" => "Para este proyecto diseñé una plataforma integral que unifica la venta física y online en un solo entorno, fácil de gestionar desde cualquier dispositivo. Nuestra solución “todo en uno” agiliza cada paso del proceso de compra y control de negocio, desde el escaparate hasta el cierre de caja.",
        ],
        [
            "placeholder" => "Responsive storefront + Stripe Checkout",
            "en" => "Responsive storefront + Stripe Checkout",
            "es" => "Escaparate responsive + Stripe Checkout",
        ],
        [
            "placeholder" => "Interface optimized for mobile and desktop, with integrated secure payment that speeds up checkout and enhances user experience.",
            "en" => "Interface optimized for mobile and desktop, with integrated secure payment that speeds up checkout and enhances user experience.",
            "es" => "interfaz adaptada a móviles y escritorio, con pago seguro integrado que acelera la compra y mejora la experiencia del usuario.",
        ],
        [
            "placeholder" => "Automatic ticket generator",
            "en" => "Automatic ticket generator",
            "es" => "Generador automático de tickets",
        ],
        [
            "placeholder" => "Instant ticket issuance for both physical store and online platform, reducing manual errors and speeding up customer service.",
            "en" => "Instant ticket issuance for both physical store and online platform, reducing manual errors and speeding up customer service.",
            "es" => "emisión inmediata de tiques tanto en tienda física como en la web, evitando errores manuales y agilizando la atención al cliente.",
        ],
        [
            "placeholder" => "Shipping module with notifications",
            "en" => "Shipping module with notifications",
            "es" => "Módulo de envíos con notificaciones",
        ],
        [
            "placeholder" => "Complete shipping management with email notifications at every stage, ensuring transparency and reducing inquiries.",
            "en" => "Complete shipping management with email notifications at every stage, ensuring transparency and reducing inquiries.",
            "es" => "gestión completa de envíos y avisos por correo electrónico en cada etapa, garantizando transparencia y reduciendo consultas.",
        ],
        [
            "placeholder" => "View Project",
            "en" => "View Project",
            "es" => "Ver Proyecto",
        ],
        [
            "placeholder" => "For this charming rural guesthouse, we designed a fully responsive website, adapted to all types of devices, integrating an intuitive and secure booking engine. We also developed a personalized admin panel that simplifies the daily management of rooms, rates, and promotions without relying on third parties.",
            "en" => "For this charming rural guesthouse, we designed a fully responsive website, adapted to all types of devices, integrating an intuitive and secure booking engine. We also developed a personalized admin panel that simplifies the daily management of rooms, rates, and promotions without relying on third parties.",
            "es" => "Para este encantador hostal rural, diseñamos una plataforma web completamente responsive, adaptada a todo tipo de dispositivo, donde integramos un motor de reservas intuitivo y seguro. Además, desarrollamos un área administrativa personalizada que facilita la gestión diaria de habitaciones, precios y promociones sin depender de terceros.",
        ],
        [
            "placeholder" => "In parallel, we deployed a 360° local SEO strategy: technical audit, on-page optimization, geo-targeted content creation, and management of listings on Google My Business and tourism directories. In just six months, we achieved outstanding results:",
            "en" => "In parallel, we deployed a 360° local SEO strategy: technical audit, on-page optimization, geo-targeted content creation, and management of listings on Google My Business and tourism directories. In just six months, we achieved outstanding results:",
            "es" => "Paralelamente, desplegamos una estrategia SEO local 360°: auditoría técnica, optimización on-page, creación de contenido geo-orientado y gestión de fichas en Google My Business y directorios turísticos. En apenas seis meses alcanzamos resultados sobresalientes:",
        ],
        [
            "placeholder" => "+120% in direct bookings",
            "en" => "+120% in direct bookings",
            "es" => "+120 % de reservas directas",
        ],
        [
            "placeholder" => "reducing reliance on intermediaries.",
            "en" => "reducing reliance on intermediaries.",
            "es" => "reduciendo la dependencia de intermediarios.",
        ],
        [
            "placeholder" => "–30% in commission costs",
            "en" => "–30% in commission costs",
            "es" => "–30 % en costes de comisiones",
        ],
        [
            "placeholder" => "from OTAs, resulting in significant operational savings.",
            "en" => "from OTAs, resulting in significant operational savings.",
            "es" => "de OTAs, lo que se tradujo en un notable ahorro operativo.",
        ],
        [
            "placeholder" => "we developed an all-in-one solution that centralizes and automates all accommodation procedures in a single control panel. With a clear interface accessible from any device, InspixTravelers streamlines everything from the official traveler registry to invoicing and availability management, allowing the team to focus on the guest rather than the paperwork.",
            "en" => "we developed an all-in-one solution that centralizes and automates all accommodation procedures in a single control panel. With a clear interface accessible from any device, InspixTravelers streamlines everything from the official traveler registry to invoicing and availability management, allowing the team to focus on the guest rather than the paperwork.",
            "es" => "Desarrollé una solución integral que centraliza y automatiza todos los trámites de alojamiento en un único panel de control. Con una interfaz clara y accesible desde cualquier dispositivo, InspixTravelers simplifica desde el parte de viajeros oficial hasta la facturación y la gestión de disponibilidad, permitiendo al equipo centrarse en el huésped en lugar de en el papeleo.",
        ],
        [
            "placeholder" => "key features and outcomes",
            "en" => "key features and outcomes",
            "es" => "Características clave y resultados",
        ],
        [
            "placeholder" => "Automatic traveler report",
            "en" => "Automatic traveler report",
            "es" => "Parte de viajeros automático",
        ],
        [
            "placeholder" => "Generates the official Guardia Civil form in real time, ready to download or send with a single click.",
            "en" => "Generates the official Guardia Civil form in real time, ready to download or send with a single click.",
            "es" => "genera el formulario oficial para la Guardia Civil en tiempo real, listo para descargar o enviar con un clic.",
        ],
        [
            "placeholder" => "Linked billing",
            "en" => "Linked billing",
            "es" => "Facturación vinculada:",
        ],
        [
            "placeholder" => "Creates and links invoices to each stay, speeding up the accounting process and preventing manual errors.",
            "en" => "Creates and links invoices to each stay, speeding up the accounting process and preventing manual errors.",
            "es" => "crea y asocia facturas a cada estancia, acelerando el proceso contable y evitando errores manuales.",
        ],
        [
            "placeholder" => "Calendar synchronization",
            "en" => "Calendar synchronization",
            "es" => "Sincronización de calendario:",
        ],
        [
            "placeholder" => "Two-way link with Booking.com that eliminates the risk of overbooking and keeps availability always up to date.",
            "en" => "Two-way link with Booking.com that eliminates the risk of overbooking and keeps availability always up to date.",
            "es" => "Enlace bidireccional con Booking.com que elimina el riesgo de overbooking y mantiene la disponibilidad siempre actualizada.",
        ],
        [
            "placeholder" => "Time saving",
            "en" => "Time saving",
            "es" => "Ahorro de tiempo:",
        ],
        [
            "placeholder" => "Reduces up to 80% of the time spent on administrative tasks, freeing up resources for customer service.",
            "en" => "Reduces up to 80% of the time spent on administrative tasks, freeing up resources for customer service.",
            "es" => "reduce hasta un 80 % del tiempo dedicado a gestiones administrativas, liberando recursos para atención al cliente.",
        ],
        [
            "placeholder" => "Companies and brands I've worked with",
            "en" => "Companies and brands I've worked with",
            "es" => "Empresas y marcas con las que he trabajado",
        ],
        [
            "placeholder" => "Full Website Development for On Wheels Auto Sales – Car Dealership Platform",
            "en" => "Full Website Development for On Wheels Auto Sales – Car Dealership Platform",
            "es" => "Desarrollo Completo de Sitio Web para On Wheels Auto Sales – Plataforma de Concesionaria de Autos",
        ],
        [
            "placeholder" => "Complete design and development of a professional website for",
            "en" => "Complete design and development of a professional website for",
            "es" => "Diseño y desarrollo integral de un sitio web profesional para",
        ],
        [
            "placeholder" => "a car dealership. The platform includes a user-friendly interface that allows potential customers to",
            "en" => "a car dealership. The platform includes a user-friendly interface that allows potential customers to",
            "es" => "una concesionaria de autos. La plataforma cuenta con una interfaz intuitiva que permite a los clientes potenciales",
        ],
        [
            "placeholder" => "browse the vehicle inventory, submit inquiries",
            "en" => "browse the vehicle inventory, submit inquiries",
            "es" => "navegar por el inventario de vehículos, realizar consultas",
        ],
        [
            "placeholder" => "and view detailed car information. Additionally, an",
            "en" => "and view detailed car information. Additionally, an",
            "es" => "y ver información detallada de cada coche. Además, se implementó un",
        ],
        [
            "placeholder" => "admin dashboard",
            "en" => "admin dashboard",
            "es" => "panel administrativo",
        ],
        [
            "placeholder" => "was built using",
            "en" => "was built using",
            "es" => "desarrollado con",
        ],
        [
            "placeholder" => "Flutter and Laravel",
            "en" => "Flutter and Laravel",
            "es" => "Flutter y Laravel",
        ],
        [
            "placeholder" => "enabling efficient",
            "en" => "enabling efficient",
            "es" => "para una gestión eficiente del",
        ],
        [
            "placeholder" => "inventory management, user administration,",
            "en" => "inventory management, user administration,",
            "es" => "inventario, usuarios y transacciones,",
        ],
        [
            "placeholder" => "ensuring seamless operations for the business.",
            "en" => "ensuring seamless operations for the business.",
            "es" => "optimizando así las operaciones del negocio.",
        ],
        [
            "placeholder" => "projects",
            "en" => "Projects",
            "es" => "Proyectos",
        ],
        [
            "placeholder" => "skills",
            "en" => "skills",
            "es" => "Habilidades",
        ],
        [
            "placeholder" => "contact",
            "en" => "contact",
            "es" => "contacto",
        ],
        [
            "placeholder" => "I designed and developed the InspixWorks website with a strategic focus on conversion and digital positioning. The platform was built from scratch using Laravel (PHP) and a SQL database, combining a modern design with a solid and scalable architecture that reflects the agency’s core values: innovation, technology, and results.",
            "en" => "I designed and developed the InspixWorks website with a strategic focus on conversion and digital positioning. The platform was built from scratch using Laravel (PHP) and a SQL database, combining a modern design with a solid and scalable architecture that reflects the agency’s core values: innovation, technology, and results.",
            "es" => "Diseñé y desarrollé el sitio web de InspixWorks con un enfoque estratégico orientado a conversión y posicionamiento digital. La plataforma fue creada desde cero utilizando Laravel (PHP) y base de datos SQL, combinando un diseño moderno con una estructura sólida y escalable que refleja los valores de la agencia: innovación, tecnología y resultados.",
        ],
        [
            "placeholder" => "Key features and technical approach",
            "en" => "Key features and technical approach",
            "es" => "Características clave y enfoque técnico",
        ],
        [
            "placeholder" => "Responsive design and conversion-focused UX/UI",
            "en" => "Responsive design and conversion-focused UX/UI",
            "es" => "Diseño responsivo y UX/UI centrada en la conversión",
        ],
        [
            "placeholder" => "Leveraged HTML5, CSS3, and JavaScript to ensure a smooth experience across all devices, with clean interfaces and strategically placed calls to action.",
            "en" => "Leveraged HTML5, CSS3, and JavaScript to ensure a smooth experience across all devices, with clean interfaces and strategically placed calls to action.",
            "es" => "Aprovechó HTML5, CSS3 y JavaScript para garantizar una experiencia fluida en todos los dispositivos, con interfaces limpias y llamadas a la acción estratégicamente ubicadas.",
        ],
        [
            "placeholder" => "Modular architecture with Laravel",
            "en" => "Modular architecture with Laravel",
            "es" => "Arquitectura modular con Laravel",
        ],
        [
            "placeholder" => "Implemented service-based controllers (SEO, branding, web development, etc.) and reusable Blade views, making the project easy to scale and maintain.",
            "en" => "Implemented service-based controllers (SEO, branding, web development, etc.) and reusable Blade views, making the project easy to scale and maintain.",
            "es" => "Se implementaron controladores basados en servicios (SEO, branding, desarrollo web, etc.) y vistas de Blade reutilizables, lo que facilita la escalabilidad y el mantenimiento del proyecto.",
        ],
        [
            "placeholder" => "Custom admin panel",
            "en" => "Custom admin panel",
            "es" => "Gestor administrativo personalizado",
        ],
        [
            "placeholder" => "Developed an internal dashboard to manage clients, contracted services, and accounting processes, streamlining operations and improving project tracking.",
            "en" => "Developed an internal dashboard to manage clients, contracted services, and accounting processes, streamlining operations and improving project tracking.",
            "es" => "Desarrollé un panel interno para gestionar clientes, servicios contratados y procesos contables, optimizando las operaciones y mejorando el seguimiento de proyectos.",
        ],
        [
            "placeholder" => "Technical SEO optimization",
            "en" => "Technical SEO optimization",
            "es" => "Optimización técnica de SEO",
        ],
        [
            "placeholder" => "Structured the site with dynamic meta tags, clean URLs, and semantic content to improve search engine visibility from day one.",
            "en" => "Structured the site with dynamic meta tags, clean URLs, and semantic content to improve search engine visibility from day one.",
            "es" => "Estructuré el sitio con metaetiquetas dinámicas, URLs limpias y contenido semántico para mejorar la visibilidad en los motores de búsqueda desde el primer día.",
        ],
        [
            "placeholder" => "Strategic copywriting",
            "en" => "Strategic copywriting",
            "es" => "Redacción estratégica",
        ],
        [
            "placeholder" => "Wrote persuasive content aimed at attracting potential clients by clearly showcasing the benefits and use cases of each service offered by the agency.",
            "en" => "Wrote persuasive content aimed at attracting potential clients by clearly showcasing the benefits and use cases of each service offered by the agency.",
            "es" => "Escribí contenido persuasivo destinado a atraer clientes potenciales al mostrar claramente los beneficios y casos de uso de cada servicio ofrecido por la agencia.",
        ],
        [
            "placeholder" => "If you're looking for someone who can turn your vision into a professional, scalable, and results-driven digital solution, I'd be happy to help. Feel free to reach out to discuss your project, ask questions, or just share ideas.",
            "en" => "If you're looking for someone who can turn your vision into a professional, scalable, and results-driven digital solution, I'd be happy to help. Feel free to reach out to discuss your project, ask questions, or just share ideas.",
            "es" => "Si buscas a alguien que pueda convertir tu visión en una solución digital profesional, escalable y orientada a resultados, estaré encantado de ayudar. No dudes en ponerte en contacto para discutir tu proyecto, hacer preguntas o simplemente compartir ideas.",
        ],
        [
            "placeholder" => "email address",
            "en" => "Email address",
            "es" => "Dirección de correo electrónico",
        ],
        [
            "placeholder" => "send",
            "en" => "send",
            "es" => "enviar",
        ],
        [
            "placeholder" => "your message",
            "en" => "Your message",
            "es" => "Tu mensaje",
        ],
        [
            "placeholder" => "your email",
            "en" => "Your email",
            "es" => "Tu correo electrónico",
        ],
        [
            "placeholder" => "your name",
            "en" => "Your name",
            "es" => "Tu nombre",
        ],
        [
            "placeholder" => "sent successfully, we will be in touch soon",
            "en" => "Sent successfully, we will be in touch soon",
            "es" => "Enviado con éxito, me pondré en contacto pronto",
        ],
        [
            "placeholder" => "resume",
            "en" => "Resume",
            "es" => "Currículum",
        ],
        [
            "placeholder" => "spanish",
            "en" => "spanish",
            "es" => "español",
        ],
        [
            "placeholder" => "english",
            "en" => "english",
            "es" => "ingles",
        ],
        [
            "placeholder" => "i can",
            "en" => "i can",
            "es" => "puedo",
        ],
        [
            "placeholder" => "languages",
            "en" => "languages",
            "es" => "idiomas",
        ],
        [
            "placeholder" => "Designed and built by",
            "en" => "Designed and built by",
            "es" => "Diseñado y construido por",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],
        [
            "placeholder" => "",
            "en" => "",
            "es" => "",
        ],


    ];
}
