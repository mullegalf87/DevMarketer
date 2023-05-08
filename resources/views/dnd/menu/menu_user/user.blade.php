<div class="accordion">
  @if( !Auth::guard('users_dnd')->check() )
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion" type="button" data-bs-toggle="collapse" data-bs-target=".collapseLogin" aria-expanded="false" aria-controls="collapseLogin">
        Login 
      </button>
    </h2>
    <div class="accordion-collapse collapseLogin collapse">
      <div class="accordion-body">
        @include('dnd.menu.menu_user.login')
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion" type="button" data-bs-toggle="collapse" data-bs-target=".collapseRegister" aria-expanded="false" aria-controls="collapseRegister">
        Register
      </button>
    </h2>
    <div class="accordion-collapse collapseRegister collapse">
      <div class="accordion-body">
        @include('dnd.menu.menu_user.register')
      </div>
    </div>
  </div>
  @else
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion" category="newgame" type="button" data-bs-toggle="collapse" data-bs-target=".collapseNewgame" aria-expanded="false" aria-controls="collapseNewgame">
        New game
      </button>
    </h2>
    <div class="accordion-collapse collapseNewgame collapse">
      <div class="accordion-body">
        @include('dnd.menu.menu_user.newgame')
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion get-table" category="loadgame" type="button" data-bs-toggle="collapse" data-bs-target=".collapseLoadgame" aria-expanded="false" aria-controls="collapseLoadgame">
        Load game
      </button>
    </h2>
    <div class="accordion-collapse collapseLoadgame collapse">
      <div class="accordion-body" id="append_loadgame">
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion" category="upload" type="button" data-bs-toggle="collapse" data-bs-target=".collapseUpload" aria-expanded="false" aria-controls="collapseUpload">
        Upload
      </button>
    </h2>
    <div class="accordion-collapse collapseUpload collapse">
      <div class="accordion-body">
        @include('dnd.menu.menu_user.upload')
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-out-accordion" category="setting" type="button" data-bs-toggle="collapse" data-bs-target=".collapseSetting" aria-expanded="false" aria-controls="collapseSetting">
        Setting 
      </button>
    </h2>
    <div class="accordion-collapse collapseSetting collapse">
      <div class="accordion-body">
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed logout" type="button" data-bs-toggle="collapse" aria-expanded="false">
        Logout
      </button>
    </h2>
  </div>
  @endif
</div>