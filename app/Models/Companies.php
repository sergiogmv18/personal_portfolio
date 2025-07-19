<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public function getAllClientsCompanies()
    {
        return [

            [
                'name' => 'Cebreterra',
                'icon' => asset("img/companies_logo/cebreterra.jpeg"),
            ],
            [
                'name' => 'Cielo De Cebreros', 
                'icon' => asset("img/companies_logo/logo_cielo_de_cebreros.png"),
            ],
            [
                'name' => 'Inspix Works', 
                'icon' => asset("img/companies_logo/logo_iw.png"),
            ],
            [
                'name' => 'NIB Curitiba', 
                'icon' => asset("img/companies_logo/nib.jpeg"),
            ],
            [
                'name' => 'On Wheels Auto Sales', 
                'icon' => asset("img/companies_logo/onwheels.jpeg"),
            ],
            [
                'name' => 'Pinhão tecnologia', 
                'icon' => asset("img/companies_logo/pinhao.jpeg"),
                
            ],
        ];
    }



    public function getAllProjects(){
        return [
            [
                "name"=>"Cebreterra Store",
                "urlProject" => "https://cebreterra.com",
                "img" => asset("img/projects/cebreterra.png"),
                "description"=>'
                <p class="icon-text">
                    <i class="fa-solid fa-minus" style="color: var(--green);"></i> '.ucfirst(translate("For this project, we designed an all-in-one platform that unifies physical and online sales in a single environment, easy to manage from any device. Our all-in-one solution streamlines every step of the purchasing and business control process, from storefront to cash register closure.")).'
                </p>
                <ul style="list-style-type: disc;">
                    <li>
                        <p class="icon-text">
                            <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                            <strong>'.ucfirst(translate('Responsive storefront + Stripe Checkout')).':</strong>
                            '.ucfirst(translate('Interface optimized for mobile and desktop, with integrated secure payment that speeds up checkout and enhances user experience.')).'
                        </p>
                    </li>
                    <li>
                        <p class="icon-text">
                            <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                            <strong>'.ucfirst(translate('Automatic ticket generator')).'</strong>:
                            '.ucfirst(translate('Instant ticket issuance for both physical store and online platform, reducing manual errors and speeding up customer service.')).'
                        </p>
                    </li>
                    <li>
                        <p class="icon-text">
                            <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                            <strong>'.ucfirst(translate('Shipping module with notifications')).'</strong>:
                            '.ucfirst(translate('Complete shipping management with email notifications at every stage, ensuring transparency and reducing inquiries.')).'
                        </p>
                    </li>
                </ul>'
            ],
            [
                "name"=>"Cielo De Cebreros",
                "urlProject" => "https://cielodecebreros.com/",
                "img" => asset("img/projects/cielodecebreros.png"),
                "description"=>'
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> '. ucfirst(translate('For this charming rural guesthouse, we designed a fully responsive website, adapted to all types of devices, integrating an intuitive and secure booking engine. We also developed a personalized admin panel that simplifies the daily management of rooms, rates, and promotions without relying on third parties.')).'
                    </p>
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> '. ucfirst(translate('In parallel, we deployed a 360° local SEO strategy: technical audit, on-page optimization, geo-targeted content creation, and management of listings on Google My Business and tourism directories. In just six months, we achieved outstanding results:')).'
                        <ul style="list-style-type: disc;">
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '. ucfirst(translate('+120% in direct bookings')).':</strong>
                                    '.ucfirst(translate('reducing reliance on intermediaries.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('–30% in commission costs')).'</strong>
                                    '.ucfirst(translate('from OTAs, resulting in significant operational savings.')).'
                                </p>
                            </li>
                        </ul>
                    </p>
                '

            ],
            [
                "name"=>"On Wheels Auto Sales LLC",
                "urlProject" => "https://www.onwheelsautosales.com/",
                "img" => asset("img/projects/onwheels.png"),
                "description"=>'
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i>  <strong>'. ucfirst(translate('Full Website Development for On Wheels Auto Sales – Car Dealership Platform')).' </strong>
                    </p>
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> '
                        .ucfirst(translate('Complete design and development of a professional website for')).' <strong>On Wheels Auto Sales, </strong>
                        '.ucfirst(translate('a car dealership. The platform includes a user-friendly interface that allows potential customers to')).'
                        <strong>'.ucfirst(translate('browse the vehicle inventory, submit inquiries')).' </strong>
                        '.ucfirst(translate('and view detailed car information. Additionally, an')).'
                        <strong>'.translate('admin dashboard').'</strong>
                        '.translate('was built using'). '
                        <strong>'.translate('Flutter and Laravel').'</strong>
                        '.translate('enabling efficient').'
                        <strong>'.translate('inventory management, user administration,'). '</strong>
                        '.translate('ensuring seamless operations for the business.').'
                    </p>
                
                '

            ],
            [
                "name"=>"Inspix Works",
                "urlProject" => "https://inspixworks.com",
                "img" => asset("img/projects/inspixWorks.png"),
                "description"=>'
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> '.ucfirst(translate('I designed and developed the InspixWorks website with a strategic focus on conversion and digital positioning. The platform was built from scratch using Laravel (PHP) and a SQL database, combining a modern design with a solid and scalable architecture that reflects the agency’s core values: innovation, technology, and results.')).'
                    </p>
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> <strong>'.ucfirst(translate('Key features and technical approach')).'</strong>:
                        <ul style="list-style-type: disc;">
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '. ucfirst(translate('Responsive design and conversion-focused UX/UI')).'</strong>:
                                    '.ucfirst(translate('Leveraged HTML5, CSS3, and JavaScript to ensure a smooth experience across all devices, with clean interfaces and strategically placed calls to action.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('Modular architecture with Laravel')).'</strong>:
                                    '.ucfirst(translate('Implemented service-based controllers (SEO, branding, web development, etc.) and reusable Blade views, making the project easy to scale and maintain.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('Custom admin panel')).'</strong>:
                                    '.ucfirst(translate('Developed an internal dashboard to manage clients, contracted services, and accounting processes, streamlining operations and improving project tracking.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('Technical SEO optimization')).'</strong>:
                                    '.ucfirst(translate('Structured the site with dynamic meta tags, clean URLs, and semantic content to improve search engine visibility from day one.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('Strategic copywriting')).'</strong>:
                                    '.ucfirst(translate('Wrote persuasive content aimed at attracting potential clients by clearly showcasing the benefits and use cases of each service offered by the agency.')).'
                                </p>
                            </li>
                        </ul>
                    </p>
                '

            ],
             [
                "name"=>"Inspix Travel",
                "urlProject" => "https://inspixworks.com/project-inspix-travelers",
                "img" => asset("img/projects/inspixTravels.png"),
                "description"=>'
                    <p class="icon-text">
                        <i class="fa-solid fa-minus" style="color: var(--green);"></i> '.ucfirst(translate('we developed an all-in-one solution that centralizes and automates all accommodation procedures in a single control panel. With a clear interface accessible from any device, InspixTravelers streamlines everything from the official traveler registry to invoicing and availability management, allowing the team to focus on the guest rather than the paperwork.')).'
                        <br>
                        <strong> '. ucfirst(translate('key features and outcomes')) .'</strong>:
                        <ul style="list-style-type: disc; padding-left: 20px;">
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong>'. ucfirst(translate('Automatic traveler report')).':</strong>
                                    '.ucfirst(translate('Generates the official Guardia Civil form in real time, ready to download or send with a single click.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong> '.ucfirst(translate('Linked billing')).'</strong>
                                    '.ucfirst(translate('Creates and links invoices to each stay, speeding up the accounting process and preventing manual errors.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong>'. ucfirst(translate('Calendar synchronization')).'</strong>
                                    '.ucfirst(translate('Two-way link with Booking.com that eliminates the risk of overbooking and keeps availability always up to date.')).'
                                </p>
                            </li>
                            <li>
                                <p class="icon-text">
                                    <i class="fa-solid fa-circle" style="color: var(--green); font-size: 0.6em;"></i>
                                    <strong>'. ucfirst(translate('Time saving')).'</strong>
                                    '.ucfirst(translate('Reduces up to 80% of the time spent on administrative tasks, freeing up resources for customer service.')).'
                                </p>
                            </li>
                        </ul>
                    </p>
                
                
                
                
                '

            ],
            
        ];
    }
}
