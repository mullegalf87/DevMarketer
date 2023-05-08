@php
$whereappend=json_decode($data)[0]->whereappend;
@endphp
<div class="card mb-3">
  <div class="card-header">Empty</div>
  <div class="card-body w-50 h-50 m-auto text-center background-effect-choose" whereappend="{{$whereappend}}">
    <img src="" class="card-img-top d-none">
    <p class="card-text text-center">Click here to clear</p>
  </div>
</div>
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
  <div class="card-body w-50 h-50 m-auto text-center background-effect-choose" idelement="{{$value->id}}" whereappend="{{$value->whereappend}}">
    <img src="dnd_repo/{{$value->category}}/{{$value->media}}" class="card-img-top">
  </div>
  <div class="card-footer">
    <label>Created by {{ (new App\Users_dnd())->find($value->id_user)->username }}</label>
  </div>
</div>
@php
}
@endphp
