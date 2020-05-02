<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <a href="" class="simple-text logo-mini">
        {{ __('QZ') }}
      </a>
      <a href="" class="simple-text logo-normal">
        {{ __('Quizzard') }}
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="@if ($activePage == 'home') active @endif">
          <a href="{{ route('home') }}">
            <i class="fas fa-gamepad"></i>
            <p>{{ __('Quizzard') }}</p>
          </a>
        </li>
        <li class = " @if ($activePage == 'table') active @endif">
            <a href="{{ route('page.index','faq') }}">
                <i class="fas fa-question-circle"></i>
              <p>{{ __('FAQ - Preguntas Frecuentes') }}</p>
            </a>
          </li>
        <li class="@if ($activePage == 'profile') active @endif">
            <a href="{{ route('profile.edit') }}">
            <i class="fas fa-user-circle"></i>
              <p> {{ __("Perfil") }} </p>
            </a>
          </li>
          <li class = " @if ($activePage == 'table') active @endif">
            <a href="{{ route('page.index','table') }}">
                <i class="fas fa-medal"></i>
              <p>{{ __('Ranking') }}</p>
            </a>
          </li>
            </a>
          </li>
        <li>
          <a data-toggle="collapse" href="#laravelExamples">
              <i class="fas fa-user-shield"></i>
            <p>
              {{ __("Admin") }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="laravelExamples">
            <ul class="nav">
              <li class="@if ($activePage == 'table') active @endif">
                <a href="{{ route('page.index','table') }}">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p> {{ __("Editar Preguntas") }} </p>
                </a>
              </li>
            </ul>
          </div>
      </ul>
    </div>
  </div>
