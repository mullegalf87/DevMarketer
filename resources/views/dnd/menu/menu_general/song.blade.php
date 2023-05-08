@php
foreach(json_decode($data) as $value){
@endphp
<div class="card mb-3">
  <div class="card-header d-flex bd-highlight">
    <label class="me-auto bd-highlight">{{$value->name}}</label>
    @if( Auth::guard('users_dnd')->check())
    @php
    if($value->id_user==Auth::guard('users_dnd')->id()){
    @endphp
    <label class="bd-highlight delete-element" idelement="{{$value->id}}">
      <i class="fa fa-trash"></i>
    </label>
    @php
    }
    @endphp
    @endif
  </div>
  <div class="card-body h-50 m-auto text-center">
    <audio controls>
      <source src="dnd_repo/{{$value->category}}/{{$value->media}}" type="audio/mpeg">
    </audio>
  </div>
  <div class="card-footer d-flex bd-highlight">
    <label class="me-auto bd-highlight">Created by {{ (new App\Users_dnd())->find($value->id_user)->username }}</label>
    <label class="bd-highlight song-choose" idelement="{{$value->id}}" src="dnd_repo/{{$value->category}}/{{$value->media}}">
      <i class="fa fa-plus"></i>
    </label>
  </div>
</div>
@php
}
@endphp