


/*
 * Ajax request https
 * @author SGV
 * @version 1.0 - 20230215 - initial release
 * @return 
**/
function ajaxRequest(url, method = 'POST', data = null, successCallback, errorCallback) {
    showLoading();
    $.ajax({
        url: url,
        type: method,
        data: data,
        //contentType: 'application/json',
        processData: false,  // No procesar los datos (FormData se encargará de esto)
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Agregar el token CSRF
        },
        success: function(response) {
            hideLoading();
            successCallback(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            hideLoading();
            errorCallback(jqXHR.status, errorThrown);
        }
    });
}


/*
 * Show Loading Component
 * @author SGV
 * @version 1.0     - 20230215  - initial release
 * @return <html>
**/
function showLoading() {
    document.getElementById("loading").style.display = "block"; // Muestra el loading
}

/*
 * Hide Loading Component
 * @author SGV
 * @version 1.0     - 20230215  - initial release
 * @return <html>
**/
function hideLoading() {
    document.getElementById("loading").style.display = "none"; // Oculta el loading
}


/*
 * Show Toast Component
 * @author SGV
 * @version 1.0     - 20230215  - initial release
 * @param <String>  - title     - Title to show 
 * @param <int>     - time      - Sample time
 * @param <String>  - classesType - Class html to change style
 * @return <Toas>
**/
function showToastComponent(title, time, classesType){
    let classes = 'rounded green darken-1'
    if(classesType != null){
        switch(classesType){
            case 'error':
                classes = 'rounded red darken-1';
                break;
            case 'notification':
                classes = 'rounded blue darken-1';
                break;
        }
    }
    M.toast({
        html: title, 
        displayLength: time != null ? time : 4000,
        classes: classes,
        completeCallback: function() {
            console.log('Toast cerrado.');
        }
    }); 
}



 /**
 * Detecta si el navegador es Safari en un dispositivo iOS (iPhone, iPad o iPod),
 * incluyendo iPadOS 13+ que reporta plataforma "MacIntel" pero tiene pantalla táctil.
 */
function isIOSSafari() {
  const ua = navigator.userAgent;
  const platform = navigator.platform;
  const hasTouch = navigator.maxTouchPoints && navigator.maxTouchPoints > 1;

  // Dispositivos iPhone, iPad (antiguo) o iPod con Safari
  const isiPadOld = /iP(hone|ad|od)/.test(platform) && /Safari/.test(ua);

  // iPadOS 13+ identifica plataforma como "MacIntel" pero con touch y Safari
  const isiPadNew =
    platform === 'MacIntel' &&               // reporta plataforma de Mac
    hasTouch &&                              // tiene pantalla táctil
    /Safari/.test(ua) &&                     // es Safari
    !/CriOS|FxiOS|OPiOS|Chrome/.test(ua);    // no sea Chrome, Firefox u otros

  // Devuelve true si coincide con cualquiera de los casos anteriores
  return isiPadOld || isiPadNew;
}

/**
 * Inicializa los <select> de la página según el navegador.
 * - En iOS Safari (incluido iPadOS): oculta los estilos de Materialize y fuerza
 *   el select nativo.
 * - En otros navegadores: inicializa el plugin de Materialize con opciones de dropdown.
 */
function initialSelectMaterialize() {
  const isiOSSafari = isIOSSafari();
  // Recorre todos los elementos <select> de la página
  document.querySelectorAll('select').forEach(el => {
    if (isiOSSafari) {
      // iOS Safari: ocultamos las labels de Materialize
      document.querySelectorAll('.label-select-materialize')
              .forEach(lb => lb.style.display = 'none');
      // y mostramos las labels alternativas si las tuvieras
      document.querySelectorAll('.option-label-select-materialize')
              .forEach(lb => lb.style.display = 'block');
      // forzamos uso del select nativo del navegador
      el.classList.add('browser-default');
    } else {
      // Otros navegadores: inicializamos Materialize para estilizar el select
      M.FormSelect.init(el, {
        dropdownOptions: {
          coverTrigger: false,       // no tapa el input al abrir el dropdown
          container: document.body,  // añade el dropdown al body
          constrainWidth: false,     // ancho libre, no lo ajusta al select
          alignment: 'left'          // alineación del dropdown a la izquierda
        }
      });
    }
  });
}


/**
 * Detecta si el navegador es Safari en un dispositivo iOS (iPhone, iPad o iPod),
 * incluyendo iPadOS 13+ que reporta plataforma "MacIntel" pero tiene pantalla táctil.
 */
function isIOSSafariDropdown() {
  const ua = navigator.userAgent;
  const platform = navigator.platform;
  const hasTouch = navigator.maxTouchPoints && navigator.maxTouchPoints > 1;

  const isiPadOld = /iP(hone|ad|od)/.test(platform) && /Safari/.test(ua);
  const isiPadNew =
    platform === 'MacIntel' &&
    hasTouch &&
    /Safari/.test(ua) &&
    !/CriOS|FxiOS|OPiOS|Chrome/.test(ua);

  return isiPadOld || isiPadNew;
}

/**
 * Inicializa selects y dropdowns de Materialize adaptados a iOS Safari.
 */
function initialMaterializeDropdownComponents() {
  const isiOSSafari = isIOSSafariDropdown();

  // === 1) SELECTs ===
  document.querySelectorAll('select').forEach(el => {
    if (isiOSSafari) {
      // Fuerza uso del select nativo
      el.classList.add('browser-default');
    } else {
      M.FormSelect.init(el, {
        dropdownOptions: {
          coverTrigger: false,
          container: document.body,
          constrainWidth: false,
          alignment: 'left'
        }
      });
    }
  });

  // === 2) DROPDOWNs ===
  document.querySelectorAll('.dropdown-trigger').forEach(el => {
    M.Dropdown.init(el, {
      coverTrigger: false,
      constrainWidth: false,
      alignment: 'left',
      // En iOS Safari no lo anexamos al body, así alinea bien con el trigger original
      container: isiOSSafari ? el.parentNode : document.body,
      closeOnClick: true
    });
  });
}

/*
 * Initial Modal Materialize
 * @author SGV
 * @version 1.0 - 20230215 - initial release
 * @return <void>
**/
function initalModal(){
    let elems = document.querySelectorAll('.modal');
    let options = {
        opacity: 0.1,
        inDuration: 300,
        outDuration: 200,
        dismissible: false,
        startingTop: '10%',
        endingTop: '20%',
          preventScrolling: false 
    };
    M.Modal.init(elems, options);
}


function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Desplazamiento suave
    });
}


function initialFloatingButtom(){
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        direction: 'right', // Dirección en la que se despliegan los botones (arriba, abajo, izquierda, derecha)
        hoverEnabled: false // Si los botones secundarios se muestran al pasar el mouse por encima
    });
}

function scrollFunction(mybutton) {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}


/*
 * Change language
 * @author SGV
 * @version 1.0 - 20230215 - initial release
 * @param <String> language - code iso of language selected
 * @return <void>
**/
function changeLanguage(language) {
    window.location = language;
    
  }


