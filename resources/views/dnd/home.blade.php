<!-- canvas -->
<canvas id="canvas" class="position-absolute z-n1">
</canvas>
<!-- grid -->
<div class="container-square">
    <div class="border open-modal" modal-body="accordion"></div>
</div>
<!-- button draw top left -->
<div class="position-absolute top-0 start-0 p-3 z-3">
  <div class="d-flex flex-nowrap">
    <button class="btn btn-warning rounded-circle menu open-draw" type="start" modal-body="accordion">
      <i class="fa fa-pencil"></i>
    </button>
    <button type="button" class="btn btn-primary rounded-circle ms-1 user clear-draw">
      <i class="fa fa-eraser"></i>
    </button>
  </div>
</div>
<!-- clear button -->
<div class="position-absolute top-0 end-0 p-3">
  <div class="d-flex flex-nowrap">
    <button class="btn btn-danger rounded-circle menu clear_all" modal-body="accordion">
      <i class="fa fa-trash"></i>
    </button>
  </div>
</div>
<!-- button menu bottom right -->
<div class="position-absolute bottom-0 end-0 p-3">
  <div class="d-flex flex-nowrap">
    @if( Auth::guard('users_dnd')->check() )
    <button type="button" class="btn btn-warning rounded-circle me-1 save-game">
      <i class="fa fa-save"></i>
    </button>
    @endif
    <button type="button" class="btn btn-primary rounded-circle menu open-modal" modal-body="user">  <i class="fa fa-user"></i>
    </button>
  </div>
</div>
<!-- button audio bottom left -->
<div class="position-absolute bottom-0 start-0 p-3 div-audio-icon">
  <div class="d-flex flex-nowrap">
    <button type="button" class="btn btn-secondary rounded-circle menu pause-audio" modal-body="accordion">
      <i class="fa fa-pause"></i>
    </button>
    <button type="button" class="btn btn-primary rounded-circle ms-1 user clear-song">
      <i class="fa fa-trash"></i>
    </button>
  </div>
</div>
<!-- modal -->
@include('dnd.menu.modal')
<script>
  //lasciare bottone audio play and pause e inserire un elemento audio alla volta
  //salvare disegni canvas e caricarli, e fare lo stesso con l'audio
  //oscurare caselle forse qui direttamente tramite div
  //creare due account utente giocatore e master, al secondo fare pagare solo se non vogliono vedere le pubblicità
</script>