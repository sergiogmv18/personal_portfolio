<!-- LIST OF LANGUAGE -->
<!-- Dropdown Structure -->
<ul id="select-language-mobile" style="background-color:var(--dark-blue);" class="dropdown-content">
    <li><a class="text-nav" onclick="changeLanguage(`{{ route('change.language','es') }}`)">{{ ucfirst(translate('spanish')) }}</a></li>
    <li><a class="text-nav" onclick="changeLanguage(`{{ route('change.language','en') }}`)">{{ ucfirst(translate('english')) }}</a></li>
</ul>
<ul id="select-language" style="background-color:var(--dark-blue);" class="dropdown-content">
    <li><a class="text-nav" onclick="changeLanguage(`{{ route('change.language','es') }}`)">{{ ucfirst(translate('spanish')) }}</a></li>
    <li><a class="text-nav" onclick="changeLanguage(`{{ route('change.language','en') }}`)">{{ ucfirst(translate('english')) }}</a></li>
</ul>

<div class="navbar-fixed">
  <nav style="background-color: var(--dark-blue);">
    <div class="nav-wrapper-mobile-custom">
      <a class="btn btn-custom" style="text-align: center; align-items: center; display: flex;" href="{{ asset("Curriculum.pdf") }}">
        {{ ucfirst(translate('resume')) }}
        <i class="material-icons right">work</i>
      </a>
      <a class="dropdown-trigger text-nav" data-target="select-language-mobile">{{ ucfirst(translate('languages')) }}<i class="material-icons right">arrow_drop_down</i></a>
    </div>
    <div class="nav-wrapper">
      <ul class="right hide-on-med-and-down">
        <li><a href="#about-section" class="scroll-link">{{ ucfirst(translate('home')) }}</a></li>
        <li><a href="#about-me" class="scroll-link">{{ ucfirst(translate('about me')) }}</a></li>
        <li><a href="#projects" class="scroll-link">{{ ucfirst(translate('projects')) }}</a></li>
        <li><a href="#contact" class="scroll-link">{{ ucfirst(translate('contact')) }}</a></li>
        <!--CHANGE LANGUAGE -->
        <li>
          <a class="dropdown-trigger text-nav" data-target="select-language">{{ ucfirst(translate('languages')) }}<i class="material-icons right">arrow_drop_down</i></a>
        </li>
        <li>
          <a class="btn btn-custom" href="{{ asset("Curriculum.pdf") }}">
            {{ ucfirst(translate('resume')) }}
            <i class="material-icons right">work</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>