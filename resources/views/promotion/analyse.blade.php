<div id="analyse1" class="p-3">
  <ul class="list-inline pull-right">
    <!-- <li><button type="button" class="btn next-step">Continue</button></li> -->
  </ul>
  <div class="mb-3">
    <button class="btn" disabled="">
      Analisi dati
    </button>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Nome servizio/bene *</label> 
        <input class="form-control" type="text" id="name_service_product" name="name" placeholder="" value="piega"> 
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Prezzo di vendita *</label> 
        <input class="form-control" type="text" id="sell_price" name="name" placeholder="" value="0.35"> 
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Output produzione *</label> 
        <input class="form-control" type="text" id="output_prod" name="name" placeholder="" value="80">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Costi variabili *</label> 
        <input class="form-control" type="text" id="variable_cost" name="name" placeholder="" value="12">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Costi fissi *</label> 
        <input class="form-control" type="text" id="fixed_cost" name="name" placeholder="" value="40">
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-secondary mb-3" onclick="insert_data_analyse_promotion()">Aggiungi</button>
  <button type="button" class="btn btn-primary mb-3 d-none" id="button_reset" onclick="reset_mask()">Rimuovi tutto</button>
  <button type="button" class="btn btn-danger mb-3 d-none float-right" id="button_preview" onclick="preview_chart_promotion()">Salva anteprima</button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Lavoratori</th>
        <th scope="col">Servizio/prodotto</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Output produzione</th>
        <th scope="col">Costi variabili</th>
        <th scope="col">Costi fissi</th>
        <th scope="col">Comandi</th>
      </tr>
    </thead>
    <tbody id="append_table">

    </tbody>
  </table>
  <div class="row col-md-12">
    <div id="preview_chart" class="mt-3 mb-3 col-md-6"></div>
    <div id="preview_chart_profit" class="mt-3 mb-3 col-md-6"></div>
  </div>
</div>

<script type="text/javascript">

  function start_function_analyse(){

    $(".container_page").css("height", "calc(100% - 56px)");

  }

  // function check_form(step){

  //   $("#step"+step+" .check_form").each(function(index){

  //     $(this).removeClass("border_black");

  //     if ($(this).val()=="" || $(this).val()==null) {

  //       $(this).css("border-color","red");

  //     } else{

  //       $(this).css("border-color","black");

  //       $(this).addClass("border_black");

  //     }
      
  //   });

  //   if ($("#step"+step+" .border_black").length==$("#step"+step+" .check_form").length) {

  //     switch(step){
  //       case 1:
  //         save_setting_promotion();
  //       break;
  //       default:
  //     }
   
  //   }

  // }

  var num=0;

  function insert_data_analyse_promotion(){

    var name_service_product=$("#name_service_product").val();
    var sell_price=parseFloat($("#sell_price").val());
    var qnt_output=parseFloat($("#output_prod").val());
    var variable_cost=parseFloat($("#variable_cost").val());
    var fixed_cost=parseFloat($("#fixed_cost").val());
    var total_cost=variable_cost+fixed_cost;
    total_cost=total_cost.toFixed(2);
    var atc_cost=total_cost/qnt_output;
    atc_cost=atc_cost.toFixed(2);
    var avc_cost=variable_cost/qnt_output;
    avc_cost=avc_cost.toFixed(2);

    $.get("insert_data_analyse_promotion",{name_service_product:name_service_product, sell_price:sell_price, qnt_output:qnt_output, variable_cost:variable_cost, fixed_cost:fixed_cost, total_cost:total_cost, atc_cost:atc_cost, avc_cost:avc_cost},
      function(data){

        var res=jQuery.parseJSON(data);

        num+=1;

        $("#append_table").append(
          "<tr id='tr_"+res+"' class=''>"+
          "<th scope='row'>"+num+"</th>"+
          "<td>"+name_service_product+"</td>"+
          "<td><input type='text' class='form-control input_table' placeholder='Price' id='sell_price_"+num+"' value='"+sell_price+"'/></td>"+
          "<td><input type='text' class='form-control input_table' placeholder='Output' id='output_prod_"+num+"' value='"+qnt_output+"'/></td>"+
          "<td><input type='text' class='form-control input_table' placeholder='Costi variabili' id='variable_cost_"+num+"' value='"+variable_cost+"'/></td>"+
          "<td><input type='text' class='form-control input_table' placeholder='Costi fissi' id='fixed_cost_"+num+"' value='"+fixed_cost+"'/></td>"+
          "<td><div class='btn-group' role='group'><button id='btnGroupDrop"+num+"' type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Azioni</button><div class='dropdown-menu' aria-labelledby='btnGroupDrop"+num+"'><a class='dropdown-item' onclick='update_data_analyse("+num+","+res+")'>Update</a><a class='dropdown-item' onclick='delete_data_analyse_detail("+res+")'>Delete</a>"+
          "</div></div></td>"+
          "</tr>");

        show_hide_button_preview();
        
      });

  }

  function update_data_analyse(num, id){

    var sell_price=parseFloat($("#sell_price_"+num).val());
    var qnt_output=parseFloat($("#output_prod_"+num).val());
    var variable_cost=parseFloat($("#variable_cost_"+num).val());
    var fixed_cost=parseFloat($("#fixed_cost_"+num).val());
    var total_cost=variable_cost+fixed_cost;
    total_cost=total_cost.toFixed(2);
    var atc_cost=total_cost/qnt_output;
    atc_cost=atc_cost.toFixed(2);
    var avc_cost=variable_cost/qnt_output;
    avc_cost=avc_cost.toFixed(2);

    $.get("update_data_analyse_promotion",{id:id,sell_price:sell_price, qnt_output:qnt_output, variable_cost:variable_cost, fixed_cost:fixed_cost, total_cost:total_cost, atc_cost:atc_cost, avc_cost:avc_cost},
      function(data){

        console.log(data);

        show_hide_button_preview();

      });

  }

  function delete_data_analyse_detail(id){

    $.get("delete_data_analyse_detail_promotion",{id:id},
      function(data){

        console.log(data);

        $("#tr_"+id).remove();

        show_hide_button_preview();

      });
  }

  function delete_data_analyse(id_mask){

    $.get("delete_data_analyse_promotion",{id_mask:id_mask},
      function(data){

        console.log(data);

        $("#button_preview").attr("onclick","preview_chart_promotion()");

      });
  }

  function show_hide_button_preview(){

    if ($("#append_table").children("tr").length>0) {

      $("#button_preview").removeClass("d-none");

      $("#button_reset").removeClass("d-none");

    }else{

      $("#button_preview").addClass("d-none");

      $("#button_reset").addClass("d-none");

      $("#preview_chart").addClass("d-none");

      var id_mask=$("#button_preview").attr("id_mask");

      delete_data_analyse(id_mask);

    }

  }

  function preview_chart_promotion(id_mask){

    $("#preview_chart").removeClass("d-none");

    $("#preview_chart_profit").removeClass("d-none");

    $('html, body').animate({
        scrollTop: $("#preview_chart").offset().top
    }, 2000);

    var sell_price_variable=[];
    var atc_variable=[];
    var avc_variable=[];
    var mc_variable=[];
    var profit_variable=[];
    var categories=[];

    $.get("get_data_analyse_promotion",{id_mask:id_mask},
      function(data){

        var res=jQuery.parseJSON(data);

        $("#button_preview").attr("onclick","preview_chart_promotion("+res[0].id_mask+")");

        $("#button_preview").attr("id_mask",res[0].id_mask);

        for (var i = 0; i < res.length; i++) {

          if (res[i].closure==0) {

            $("#tr_"+res[i].id).css("border","2px solid green");

          }else{

            $("#tr_"+res[i].id).css("border","2px solid red");

          }

          categories.push(parseFloat(res[i].qnt_output));
          sell_price_variable.push(parseFloat(res[i].sell_price));
          atc_variable.push(parseFloat(res[i].atc_cost));
          avc_variable.push(parseFloat(res[i].avc_cost));
          mc_variable.push(parseFloat(res[i].mc_cost));
          profit_variable.push(parseFloat(res[i].profit));
          
        }

        $(function () {

          $('#preview_chart').highcharts({
            title: {
              text: 'Analisi dati'
            },
            chart: {
              renderTo: 'container',
              marginBottom: 80
            },
            xAxis: {
              categories: categories

            },

            yAxis: {
              min: 0,
              title: {
                text: 'Prezzo'
              }
            },

            plotOptions: {

              column: {
                colorByPoint: true
              },

              series: {
                cursor: 'pointer',
                point: {
                  events: {

                  }
                }
              },
            },

            series: [{

              data: sell_price_variable,
              name: "Prezzo di vendita"

            },{

              data: atc_variable,
              name: "ATC"

            },{

              data: avc_variable,
              name: "AVC"

            },{

              data: mc_variable,
              name: "MC"

            }]

          });

        });


        $(function () {

          $('#preview_chart_profit').highcharts({
            title: {
              text: 'Massimizzazione profitto'
            },
            chart: {
              renderTo: 'container',
              marginBottom: 80
            },
            xAxis: {
              categories: categories

            },

            yAxis: {
              min: 0,
              title: {
                text: 'Prezzo'
              }
            },

            plotOptions: {

              column: {
                colorByPoint: true
              },

              series: {
                cursor: 'pointer',
                point: {
                  events: {

                  }
                }
              },
            },

            series: [{

              data: profit_variable,
              name: "Profitto"

            }]

          });

        });

      });

  }

  function reset_mask(){

    var array_tr=[];

    $("#analyse1 .form-control").each(function(index){

      $(this).val("");

      $(this).removeClass("border_black");
      
    });

    $("#append_table").empty();

    $("#button_preview").attr("onclick","preview_chart_promotion()");

    $("#button_preview").attr("id_mask","");

    $("#preview_chart").addClass("d-none");

    $("#preview_chart_profit").addClass("d-none");

    $("#button_reset").addClass("d-none");

    $("#button_preview").addClass("d-none");

    $.get("reset_mask_promotion",{},
      function(data){

        console.log(data);

      });

  }
</script>