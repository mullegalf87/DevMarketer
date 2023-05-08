<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    foreach(json_decode($data) as $value){
    @endphp
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->date}}</td>
      <td>
        <div class="d-flex flex-wrap text-center m-auto">
          <button type="button" class="btn btn-primary rounded-circle me-1 flex-grow-1 action open-game" id_game="{{$value->id}}">
            <i class="fa fa-folder-open"></i>
          </button>
          <button type="button" class="btn btn-primary rounded-circle me-1 flex-grow-1 action delete-game" id_game="{{$value->id}}">
            <i class="fa fa-trash"></i>
          </button>
        </div>
      </td>
    </tr>
    @php
    }
    @endphp
  </tbody>
</table>