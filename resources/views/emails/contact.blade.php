@component('mail::message')
# Nuevo mensaje de contacto

**Nombre:** {{ $data['fullName'] }}  
**Email:** {{ $data['email'] }}  
**Asunto:** {{ $data['subject'] ?? '—' }}  

**Mensaje:**  
{{ $data['comments'] }}

@endcomponent