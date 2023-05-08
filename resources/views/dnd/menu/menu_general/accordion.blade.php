<div class="accordion">
@php
$object[]=array("category"=>1, "namecategory"=>"background", "nameaccordion"=>"Background");
$object[]=array("category"=>2, "namecategory"=>"background", "nameaccordion"=>"Effect");
$object[]=array("category"=>3, "namecategory"=>"token", "nameaccordion"=>"Token");
$object[]=array("category"=>4, "namecategory"=>"token", "nameaccordion"=>"Spell");
$object[]=array("category"=>5, "namecategory"=>"token", "nameaccordion"=>"Monster");
$object[]=array("category"=>6, "namecategory"=>"song", "nameaccordion"=>"Song");
foreach($object as $key=>$value){
@endphp
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed click-accordion" category="{{$value['category']}}" namecategory="{{$value['namecategory']}}" type="button" data-bs-toggle="collapse" data-bs-target=".collapse{{$value['nameaccordion']}}" aria-expanded="false" aria-controls="collapse{{$value['nameaccordion']}}">
        {{$value['nameaccordion']}}
      </button>
    </h2>
    <div class="accordion-collapse collapse{{$value['nameaccordion']}} collapse">
      <div class="accordion-body" id="append_{{$value['category']}}">
      </div>
    </div>
  </div>
@php
  }
@endphp
</div>