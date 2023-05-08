<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
        @if( Auth::guard('users_dnd')->check() )
          Master {{Auth::guard('users_dnd')->user()->username}}
        @endif
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="body-accordion" class="custom-body d-none">
        @include('dnd.menu.menu_general.accordion')
        </div>
        <div id="body-user" class="custom-body d-none">
        @include('dnd.menu.menu_user.user')
        </div>
      </div>
    </div>
  </div>
</div>