@php
  foreach(json_decode($data) as $value){
@endphp
<div class="card mb-3">
  <div class="card-header d-flex flex-nowrap">
    <div class="flex-grow-1 m-auto m-auto">
      <label>{{$value->name}}</label>
      @if( Auth::guard('users_dnd')->check())
      @php
      if($value->id_user==Auth::guard('users_dnd')->id()){
      @endphp
      <label class="delete-element" idelement="{{$value->id}}">
        <i class="fa fa-trash"></i>
      </label>
      @php
      }
      @endphp
      @endif
    </div>
    <div class="d-flex flex-nowrap">
      <div class="col-auto me-2"><small>Size(x1): </small></div>
      <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
        <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none btn-operator" data-type="minus">-</button>
        <input class="form-control text-center px-2 input-spin-none" type="text" min="1" value="1" style="width: 50px" disabled>
        <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none btn-operator" data-type="plus">+</button>
      </div>
    </div>
  </div>
  <div class="card-body w-50 h-50 m-auto text-center token-choose" idelement="{{$value->id}}">
    <img src="dnd_repo/{{$value->category}}/{{$value->media}}" class="card-img-top">
  </div>
  <div class="card-footer">
    <label>Created by {{ (new App\Users_dnd())->find($value->id_user)->username }}</label>
  </div>
</div>
@php
  }
@endphp
