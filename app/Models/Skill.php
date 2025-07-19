<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function getAllSkills()
    {
        return [
            "frontend" => [
                ['name' => 'HTML5', 'icon' => asset("img/skills_logo/html5.webp")],
                ['name' => 'CSS', 'icon' =>  asset("img/skills_logo/css3.png")],
                ['name' => 'SASS', 'icon' => asset("img/skills_logo/sass.png")],
                ['name' => 'Figma', 'icon' => asset("img/skills_logo/figma.svg")],
                ['name' => 'Bootstrap', 'icon' => asset("img/skills_logo/bootstrap.png")],
                ['name' => 'Materialize', 'icon' => asset("img/skills_logo/Materialize.png")],
                ['name' => 'Canva', 'icon' => asset("img/skills_logo/canva.png")], // Diseño UI simple 
            ],
            "backend" => [
                ['name' => "PHP", 'icon' => asset("img/skills_logo/php.png")],
                ['name' => "Laravel", 'icon' => asset("img/skills_logo/Laravel.png")],
                ['name' => "Doctrine (ORM)", 'icon' => asset("img/skills_logo/doctrine.svg")],
                ['name' => "SQL", 'icon' => asset("img/skills_logo/sql.png")],
                ['name' => "SQLite", 'icon' => asset("img/skills_logo/sqlite.png")],
                ['name' => "Firebase", 'icon' => asset("img/skills_logo/firebase.png")],    // Backend-as-a-Service (autenticación, BBDD, etc.)
            ],
            "mobile" => [
                ['name' => "Flutter", 'icon' => asset("img/skills_logo/flutter.png")],
                ['name' => "Dart", 'icon' => asset("img/skills_logo/dart.png")],
                ['name' => 'JavaScript', 'icon' => asset("img/skills_logo/js.png")],
                ['name' => 'jQuery', 'icon' => asset("img/skills_logo/jquery-4.svg")],
                ['name' => "Swift", 'icon' =>  asset("img/skills_logo/swift.png") ]         // iOS development (Swift es clave aquí)
            ],
            "other" => [
                ['name' => "Arduino", 'icon' => asset("img/skills_logo/arduino.png")],
                ['name' => "C", 'icon' => asset("img/skills_logo/c.png")],
                ['name' => "Microsoft Office", 'icon' => asset("img/skills_logo/microsoft-office.png")],
                ['name' => "Linux", 'icon' => asset("img/skills_logo/linux.png")],
                ['name' => "GitHub", 'icon' => asset("img/skills_logo/github.svg")],
                ['name' => 'Photoshop', 'icon' => asset("img/skills_logo/photoshop.png")], // Diseño gráfico profesional
            ]
        ];
    }
}
