<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class PortofolioController extends Controller
{
    
    public function index()
    {
        $skill = new Skill();
        $companies = new Companies();
        $skills = $skill->getAllSkills();
        $clients = $companies->getAllClientsCompanies();
        $projects = $companies->getAllProjects();
        $data = [
            'skills' => $skills,
            'companies' => $clients,
            'projects' => $projects,
        ];
        // Logic to retrieve and display portfolio data
        // This could include fetching projects, skills, etc.
        return view('main', $data);
    }

    /**
     * Process contact form submission: validate input and send notification email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @author SGV
     * @version 1.0 - 20250616 - initial release
     * @return array|\Illuminate\Http\RedirectResponse
     */
    public function sendContact(Request $request){
        try {
            $data = $request->validate([
                'fullName'  => 'required|string|max:255',
                'email'     => 'required|email|max:255',
                'comments'   => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return [
                'success' => false,
                'errors' => $e->errors()
            ];
        }
        // Envío del correo al hotel
        Mail::to([
            'sergiogmv18@gmail.com',
            'contact@inspixworks.com'
        ])->send(new ContactFormMail($data));
        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
 
}
