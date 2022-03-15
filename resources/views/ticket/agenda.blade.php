
<style type="text/css">
 .fc-time-grid .fc-slats td {
  height: 3em; 
  border-bottom: 0;
}




</style>
<script type="text/javascript">
 //sistemare il problema della simultaneità
 //sistemare mostra classi


 //mi permette di utilizzare un solo modal per due bottoni calendario/gg da posticipare
 $("#myModal2").on("hidden.bs.modal", function(){

    $("#modal2").html("");

  });

var calendar;
var id_ticket_global=[];
var id_robi_global=[];

//clicchi o su vai in agenda oppure clicchi direttamente sul ticket
function open_agenda_from_ticket(id_ticket){
   
   calendar.refetchEvents();
  $("#calendar").css({"visibility": "visible"});
  $(".fc-license-message").remove();
  $(".back").show();
  // $("#external-events").show();
  $(".go").hide();
  $("#home_page").hide();
  id_ticket_global.push(id_ticket);
  get_appointments_robi();
  
}


//ottengo gli appuntamenti inviati da roberto
function get_appointments_robi(){
  $("#appointments_robi").empty();
  $.get('/get_appointments_robi',{},
   function(data){
    var res=jQuery.parseJSON(data);
    for (var i = 0; i < res.length; i++) {
      $("#appointments_robi").append("<div class='fc-event' data-id="+res[i].id+">"+res[i].recapito+" - "+res[i].nota+"</div>");
    }
  });
}




//apro il fullcalendar
document.addEventListener('DOMContentLoaded', function () {

  var calendarEl = document.getElementById('calendar');
  var Draggable = FullCalendarInteraction.Draggable;
  let listofEvents = document.getElementById('external-events');
  var checkbox = document.getElementById('drop-remove');
 




  //mi permette di trascinare gli appuntamenti di roberto dentro l'agenda, facendomi ritornare l'id e il title
  new Draggable(listofEvents, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText,
        id:eventEl.dataset.id
      };
    }
  });

  



  calendar = new FullCalendar.Calendar(calendarEl, {

      //mi allerta quando cambia giorno e aggiunge onclick per aprire il datepicker;
     datesRender: function (info) {
        $(".fc-center").attr("onclick","open_calendar_from_date()");
    },


     timezone: 'UTC',
     plugins: ['interaction', 'dayGrid', 'timeGrid', 'resourceTimeGrid'],



    
    customButtons: {

      // archivio:{
      //   text: 'Archivio',
      //   click: function(e) {


      //     $('#myModal5').modal('show');

      //     $('#append_data_appointments').empty();

      //     //get_data_appointments();

          

      //   }


      //}

    },
    locale: 'it',
    // contentHeight: 'auto',
    contentHeight: $(window).height(),
    header: {
      left: 'datepicker, postpone, lesson_create, archivio',
      center: 'title',
      right: 'prev,today,next' 
    },
    titleFormat: { // will produce something like "Tuesday, September 18, 2018"
    month: 'long',
    year: 'numeric',
    day: 'numeric',
    weekday: 'long'
  },

    businessHours: true, 
    editable: true,
    allDaySlot: false,
    //giorni lavorativi e orari
    businessHours: {
      daysOfWeek: [1, 2, 3, 4, 5],
      startTime: '08:00',
      endTime: '20:00'
    },
    minTime: '08:00:00',
    maxTime: '20:00:00',
    //intervallo appuntamento di default  di 15 minuti
    slotDuration: '00:15:00',
    slotLabelInterval: 15,
    resourceColumns: [{
      field: 'title',
      width: 150,
    }, ],
    //visualizzazione a colonne delle risorse
    defaultView: 'resourceTimeGridDay',
    resources: [{
      id: '1',
      title: "Dario  ",
    },
    {
      id: '2',
      title: "Darione  ",
    },
    {
      id: '3',
      title: "Sara  ",
    },
    // {
    //   id: '4',
    //   title: "Simona  ",
    // },
    {
      id: '5',
      title: "Mauro  ",
    },
    // {
    //   id: '7',
    //   title: "Varie  ",

    // },
    // {
    //   id: '8',
    //   title: "Roberto  ",
    // }
    ],

    //ottengo tutti gli appuntamenti: 1=from_ticket,2=from_robi,3=from_app
    events: function(info, successCallback, failureCallback) {
      var eventi=[];
      $.get('/get_ticket_agenda', {},
        function(data){ 

          var res=jQuery.parseJSON(data);
          var id;
          var rendering;
          for (var i = 0; i < res.length; i++) {
           eventi.push({ id:res[i].id_external, resourceId: res[i].resourceId, title: res[i].title, start:res[i].start, end:res[i].end, rendering:res[i].rendering, select_problem:res[i].select_problem});
         }
         successCallback(eventi);
       });
    },

    // ottengo i dati dopo aver trascinato gli appuntamenti inviati da roberto e li inserisco nel db rendering=2
    eventReceive(info) {
      id_robi_global.push(info.draggedEl.dataset.id);
      let droppedResource = info.event.getResources()[0]._resource;
      var cliccato_event_receive="cliccato_event_receive";
      var tzoffset = info.event.start.getTimezoneOffset() * 60000;
      var d_s = new Date(info.event.start);
      d_s.setDate(d_s.getDate());
      var start_event_robi = (new Date(d_s.getTime() - tzoffset)).toISOString().slice(0, -1);
      var d_e = new Date(info.event.start);
      d_e.setMinutes(d_e.getMinutes() + 15);
      var end_event_robi=(new Date(d_e.getTime() - tzoffset)).toISOString().slice(0, -1);
      info.event.setEnd(end_event_robi);
      var id=id_robi_global.toString();
      var resourceId_event_robi=info.event._def.resourceIds.toString();
      var title_event_robi=info.event.title;
      insert_robi_agenda(id, resourceId_event_robi, title_event_robi, start_event_robi, end_event_robi, 2); 
    },

    //mi apre il modal per modificare, cancellare o chiudere il ticket dell'appuntamento
    eventClick: function(info) {
      $("#nota").attr("disabled",false);
      $("#add_paste").show();
      $('#modal_event').empty();
      $('#report_form_group').remove();
      var rendering=info.event.rendering;
      $('#myModal').modal('show');
      var vecchia_nota=$("#nota").val(info.event.title);
      var select_problem=info.event._def.extendedProps.select_problem;
      $("#subcategory_new_ticket").val(select_problem);

      var resourceId=info.event._def.resourceIds.toString();
      var date_start=new Date(info.event._instance.range.start.getUTCFullYear(), info.event._instance.range.start.getUTCMonth(), info.event._instance.range.start.getUTCDate(), info.event._instance.range.start.getUTCHours(), info.event._instance.range.start.getUTCMinutes(), info.event._instance.range.start.getUTCSeconds()); 
      var date_end=new Date(info.event._instance.range.end.getUTCFullYear(), info.event._instance.range.end.getUTCMonth(), info.event._instance.range.end.getUTCDate(), info.event._instance.range.end.getUTCHours(), info.event._instance.range.end.getUTCMinutes(), info.event._instance.range.end.getUTCSeconds()); 
      var tzoffset_start = date_start.getTimezoneOffset() * 60000;
      var start = (new Date(date_start.getTime() - tzoffset_start)).toISOString().slice(0, -1);
      var tzoffset_end = date_end.getTimezoneOffset() * 60000;
      var end=(new Date(date_end.getTime() - tzoffset_end)).toISOString().slice(0, -1);

      //mostra il chiudi ticket solo se l'event riguarda il ticket
      if (rendering==1) {

        $('#modal_event').append("<button class='btn btn-primary' onclick='paste_appointment(\""+start+"\",\""+end+"\",\""+rendering+"\",\""+resourceId+"\")' style='float:left'>Incolla</button><button class='btn btn-success' onclick='edit_event_agenda(\""+info.event.id+"\",\""+rendering+"\")'>Edit</button><button class='btn btn-danger' onclick='delete_event_agenda(\""+info.event.id+"\",\""+rendering+"\")'>Delete</button><button class='btn btn-primary' onclick='chiudi_ticket(\""+info.event.id+"\",\"close_ticket_agenda\",\""+rendering+"\")'>Chiudi ticket</button>");
        $('#add_report').after("<div class='form-group' id='report_form_group'><label for='report'>Report</label><textarea type='text' class='form-control' id='report' placeholder='Report'></textarea></div>");

      } else{

        $('#form_class').hide();
        $('#modal_event').append("<button class='btn btn-primary' onclick='paste_appointment(\""+start+"\",\""+end+"\",\""+rendering+"\",\""+resourceId+"\")' style='float:left'>Incolla</button><button class='btn btn-success' onclick='edit_event_agenda(\""+info.event.id+"\",\""+rendering+"\")'>Edit</button><button class='btn btn-danger' onclick='delete_event_agenda(\""+info.event.id+"\",\""+rendering+"\")'>Delete</button>");
      }
      
    },

    //mi permette di creare un appuntamento indipendente dai ticket e da roberto rendering=3
    dateClick: function(info){
      hide_form_class();
      $("#add_paste").hide();
      $("#subcategory_new_ticket").val("");
      $('#modal_event').empty();
      $('#report_form_group').remove();
      var clicked_date = info.dateStr;
      var date_start = new Date(clicked_date);

      // var tzoffset = (new Date()).getTimezoneOffset() * 60000;
      var tzoffset = date_start.getTimezoneOffset() * 60000;
      var d_s = new Date(date_start);
      d_s.setDate(d_s.getDate());
      var start = (new Date(d_s.getTime() - tzoffset)).toISOString().slice(0, -1);


      var d_e = new Date(d_s);
      d_e.setMinutes(d_e.getMinutes() + 15);
      var end=(new Date(d_e.getTime() - tzoffset)).toISOString().slice(0, -1);
     

      var id=id_ticket_global.toString();
      var resourceId=info.resource.id;
      if (id_ticket_global.toString()=="") {

        $.get('/get_app_agenda', {rendering:3},
          function(data){ 
            var id=jQuery.parseJSON(data);


            $('#myModal').modal('show');
            $('#modal_event').append("<button  class='btn btn-success' onclick='show_form_class(\""+start+"\")' id='button_class'>Mostra form classe</button><button class='btn btn-success' onclick='create_event_agenda(\""+id+"\",\""+resourceId+"\",\""+start+"\",\""+end+"\",\""+3+"\")'>Crea</button>")


          });
      //mi permette di creare un appuntamento dei ticket rendering =1
      }else{
        $.get('/ticket_agenda',{id:id},
          function(data){
            var res=jQuery.parseJSON(data);
            var title="Azienda: "+res[0].ragione_sociale+
            "Telefono: "+res[0].recapito_telefonico+
            "Email: "+res[0].indirizzo_email+
            "Categoria: "+res[0].scegli_categoria+
            "Oggetto: "+res[0].oggetto+
            "Messaggio: "+res[0].messaggio;
            insert_ticket_agenda(id, resourceId, title, start, end, 1);       
          });
      }
    },
    //mi fa modificare l'appuntamento quando trascino
    eventDrop(info) {
      console.log()
      fetch('https://jsonplaceholder.typicode.com/todos/1')
      .then(response => response.json())
      let droppedResource = info.event.getResources()[0]._resource;
      var tzoffset = info.event.start.getTimezoneOffset() * 60000;
      var start = (new Date(info.event.start.getTime() - tzoffset)).toISOString().slice(0, -1);
      var end=(new Date(info.event.end.getTime() - tzoffset)).toISOString().slice(0, -1);
      var id=info.event.id;
      var resourceId=info.event._def.resourceIds.toString();
      var rendering=info.event.rendering;
      var title="{{ Auth::user()->name }} ti ha spostato l'appuntamento: "+info.event.title;

      $.get("/edit_ticket_agenda_drop", {id:id, title:title, resourceId:resourceId, start:start, end:end, rendering:rendering},function(data){

        if (data==1) {

      alert("cella già impegnata");
      
      alert("appendi in un'altra cella");

        }else{

      alert("salvato");


        }

        var event = calendar.getEventById(id);
      event.remove();
      calendar.refetchEvents();
      get_appointments_robi();

        });

    }, 
    //mi fa modificare l'appuntamento quando ridimensiono l'appuntamento
    eventResize: function(info){

      var tzoffset = info.event.start.getTimezoneOffset() * 60000;
      var start = (new Date(info.event.start.getTime() - tzoffset)).toISOString().slice(0, -1);
      var end=(new Date(info.event.end.getTime() - tzoffset)).toISOString().slice(0, -1);
      let droppedResource = info.event.getResources()[0]._resource;
      var id=info.event.id;
      var resourceId=info.event._def.resourceIds.toString();
      var rendering=info.event.rendering;
      $.get("/edit_ticket_agenda_resize", {id:id, resourceId:resourceId, start:start, end:end, rendering:rendering},function(data){


        if (data==1) {

      alert("cella già impegnata");
      
      alert("appendi in un'altra cella");

        }else{

      alert("salvato");
    


        }
        var event = calendar.getEventById(id);
      event.remove();
      calendar.refetchEvents();
      get_appointments_robi();
        });
    }
  });


calendar.render();



});


function open_calendar_from_date(){

  $('#modal2_title').empty(); 

  $('#myModal2').modal('show');

  $('#modal2_title').append("Calendario");

  $('#modal2').append("<div id='datepicker_calendar'></div>");

  $("#datepicker_calendar").css("display","inherit");

  apri_calendario();

}

//apre il calendario del datepicker
function apri_calendario(){

 picker=$("#datepicker_calendar").datepicker({
  changeMonth: true,
  changeYear: true,
  closeText: 'Chiudi',
  prevText: 'Prec',
  nextText: 'Succ',
  currentText: 'Oggi',
  monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno', 'Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
  monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu', 'Lug','Ago','Set','Ott','Nov','Dic'],
  dayNames: ['Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'],
  dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
  dayNamesMin: ['Do','Lu','Ma','Me','Gio','Ve','Sa'],
  dateFormat: 'mm/dd/yy',
  firstDay: 1,
  isRTL: false,
  onSelect: function(date){

    calendar.gotoDate(new Date(date));
    $("#datepicker_calendar").css("display","none");
    $('#myModal2').modal('hide');
    get_appointments_robi();

  }
});
}

//inserisco nel db l'appuntamento proveniente dai ticket
function insert_ticket_agenda( id, resourceId, title, start, end, rendering){
 $.get('/insert_ticket_agenda',{id:id, title:title, resourceId:resourceId, start:start, end:end, rendering:rendering},
   function(data){


    // controllo per id
    if (data==0) {
      alert("appuntamento esistente");
      id_ticket_global=[];
     //controllo per data 
    }else if(data==1){
      alert("cella già impegnata");
      alert("appendi in un'altra cella");
    //apuntamento non esiste e quindi si crea
    }else {
      calendar.addEvent({
        id:id,
        title:title,
        resourceId:resourceId,
        start: start,
        end: end,
        rendering:rendering
      });
      
      // var event = calendar.getEventById(id);
      // event.remove();
      id_ticket_global=[];
    }

    get_appointments_robi();
    calendar.refetchEvents();
    var event = calendar.getEventById(id);
      event.remove();
      id_ticket_global=[];
  });

  
}
//inserisco nel db l'appuntamento proveniente dagli appuntamento di robi
function insert_robi_agenda(id, resourceId_event_robi, title_event_robi, start_event_robi, end_event_robi, rendering){

 $.get('/insert_robi_agenda',{id:id, title:title_event_robi, resourceId:resourceId_event_robi, start:start_event_robi, end:end_event_robi, rendering:rendering},
   function(data){
    if (data==0) {
      alert("appuntamento esistente");
      id_robi_global=[];
    }else if(data==1){
      alert("cella già impegnata");
      alert("appendi in un'altra cella");
    }else{
      alert("salvato");
      id_robi_global=[];
    }

    get_appointments_robi();
    calendar.refetchEvents();
    var event = calendar.getEventById(id);
      event.remove();
      id_robi_global=[];

  }); 
}



//inserisco nel db l'appuntamento indipendente da robi e dai ticket
function create_event_agenda(id, resourceId_event_app, start_event_app, end_event_app, rendering){
  var title_event_app="{{ Auth::user()->name }} ti ha preso appuntamento per: "+$("#nota").val();
  var select_problem=$("#subcategory_new_ticket").val();

  $.get('/insert_app_agenda',{id:id, title:title_event_app, resourceId:resourceId_event_app, start:start_event_app, end:end_event_app, rendering:rendering, select_problem:select_problem},
   function(data){

    if (data==1) {
      alert("cella già impegnata");
      alert("appendi in un'altra cella");
    
    }else{

      calendar.addEvent({
      id:id,
      title:title_event_app,
      resourceId:resourceId_event_app,
      start: start_event_app,
      end: end_event_app,
      rendering:rendering
    });

    var event = calendar.getEventById(id);
    event.remove();

    }

    get_appointments_robi();
    calendar.refetchEvents();
    $('#myModal').modal('hide');
    $("#nota").val("");
    $("#subcategory_new_ticket").val("");
  }); 
}



//modifico l'agenda nel db
function edit_event_agenda(id, rendering){

  if (window.confirm("Are you sure?")) {
    var title="{{ Auth::user()->name }} ti ha modificato appuntamento per: "+$("#nota").val();
    var select_problem=$("#subcategory_new_ticket").val();
    $.get('/edit_event_agenda',{id:id, title:title, rendering:rendering, select_problem:select_problem},
     function(data){
      
      $('#myModal').modal('hide');
      var event = calendar.getEventById(id);
      event.remove();
      calendar.refetchEvents();
      get_appointments_robi();  
      $("#subcategory_new_ticket").val("");
    });
  }
}




//cancello l'agenda nel db
function delete_event_agenda(id, rendering){

  if (window.confirm("Are you sure?")) {

    $.get('/delete_event_agenda',{id:id, rendering:rendering},
     function(data){

      $('#myModal').modal('hide');
      var event = calendar.getEventById(id);
      event.remove();
      calendar.refetchEvents();
      get_appointments_robi();
    });


  }

}


//posticipa data
function posticipa_data(){
  var giorni=$("#giorni").val();
 
  $.get('/postpone_agenda',{giorni:giorni},
    function(data){
  
      $('#myModal2').modal('hide');
      calendar.refetchEvents();
    })
}


//mi torna alla home page
function back_home_page(){
  id_ticket_global=[];
  $("#calendar").css({"visibility": "hidden"});
  $(".back").hide();
  $("#external-events").hide();
  $(".go").show();
  $("#home_page").show();

  
}

function show_form_class(start){
  $("#lesson_company").val(0);
  $("#image").val(0);
  $("#data_start").val(0);
  $("#data_end").val(0);

  console.log(start)
  $("#nota").val("");
  $("#nota").attr("disabled",true);

  if (start!=undefined) {

    $("#day").val(start.split("T")[0]);

  }
  $('#button_hide_class').remove();

  $("#button_class").replaceWith("<button  class='btn btn-danger' onclick='hide_form_class()' id='button_hide_class'>Nascondi form classe</button><button class='btn btn-danger' onclick='send_data_classe()' id='button_class'>Crea classe</button>");
  $('#form_class').show();

}

var text_note;

$("#lesson_company").change(function(data){

  var name_company=$(this).val();
  console.log(name_company)

  text_note="company:"+name_company+"; "

  $("#nota").val(text_note);

})

$("#image").change(function(data){

  var name_class=$(this).val();

  text_note+="title:"+$(this)[0][name_class].innerText+"; image:"+name_class+"; ";

  $("#nota").val(text_note);

});

$("#data_start").change(function(data){

  var date_start=$(this).val();

  text_note+="date_start:"+date_start+"; "

  $("#nota").val(text_note);

});

$("#data_end").change(function(data){

  var date_end=$(this).val();

  text_note+="date_end:"+date_end+"; "

  $("#nota").val(text_note);

});


function hide_form_class(){
  $("#nota").attr("disabled",false);
  $('#form_class').hide();
  $('#button_hide_class').remove();

  $("#button_class").replaceWith("<button  class='btn btn-success' onclick='show_form_class()' id='button_class'>Mostra form classe</button>");
}


function send_data_classe(){



  // var title_lesson=$("#lesson_title").val();
  var company_lesson=$("#lesson_company").val();
  // var author_lesson=$("#lesson_author").val();
  // var description_lesson=$("#lesson_description").val();
  var giorno=$("#day").val();
  // var colore=$("#color").val();
  var image=$("#image").val();
  var start=$("#data_start").val();
  var end=$("#data_end").val();
  var title;
  // var id_classe=$("#id_classe").val();

   if (image==1) {
      title="Formazione 1";
   } else if(image==2){
      title="Formazione 2";
   } else if(image==3){
      title="Formazione 3";
   } else if(image==4){
      title="Promozioni";
   } else if(image==5){
      title="Customer app";
   } else if(image==6){
      title="Marketing";
   } else if(image==7){
      title="Report";
   } else if(image==8){
      title="Formazione light";
   }                                              

  

  // if (title_lesson=="" || company_lesson=="" || author_lesson==null || description_lesson=="" || giorno=="" || colore=="" || image=="" || start==null || end==null || id_classe=="") {

    if (company_lesson=="" || giorno=="" || image=="" || start==null || end==null) {

    alert("campi obbligatori*")
  } else{

    // $.get('/send_data_classe',{title_lesson:title_lesson, company_lesson:company_lesson, author_lesson:author_lesson, description_lesson:description_lesson, giorno:giorno, colore:colore, image:image,start:start, end:end, id_classe:id_classe},
    $.get('/send_data_classe',{company_lesson:company_lesson, giorno:giorno, image:image,start:start, end:end, title_lesson:title},
      function(data){


        $('#form_class').hide();
        $('#button_hide_class').remove();
        $("#button_class").replaceWith("<button  class='btn btn-danger' id='button_class' disabled>=></button>");
        $("#lesson_title").val("");
        $("#lesson_author").val("1").change();
        $("#lesson_description").val("");
        $('#day').val("");
        
        $("#color").val("1").change();
        // $("#data_start").val("1").change();
        // $("#data_end").val("1").change();
        $("#id_classe").val("");


      });

  }
 
  
}


function actived_class(){

  $('#myModal3').modal('show');

  $('#append_lesson_partecipant').empty();

  get_count_partecipanti();

}


function get_count_partecipanti(){


  $.get('/get_count_partecipanti', {},
    function(data){


      $("#table_lesson").DataTable().destroy();
      $("#append_lesson_partecipant").empty();
      var res=jQuery.parseJSON(data);
      var state;

      for (var i = 0; i < res.length; i++) {


        if (res[i].open_close_class==0) {


          state="aperto";


        } else{

          state="chiuso";

        }

        


        $('#append_lesson_partecipant').append("<tr><td data-label='id'>"+res[i].id+"</td><td data-label='company'>"+res[i].company+"</td><td data-label='author'>"+res[i].author+"</td><td data-label='title'>"+res[i].title+"</td><td data-label='partecipanti' onclick='list_partecipant("+res[i].id+")'><button>"+res[i].num_partecipant+"</button></td><td data-label='day'>"+res[i].day+" "+res[i].start+"-"+res[i].end+"</td><td onclick='close_lesson(\""+res[i].id+"\",\""+res[i].company+"\")' data-label='comandi'><button>chiudi</button></td><td data-label='state'>"+state+"</td></tr>");
      }

      $('#table_lesson').DataTable({
      "sDom": 'rt<"info"i><"sposta_p"p>',
      "paging": true,
      "destroy": true
    });
    });



}


function close_lesson(id_classe, company_lesson){


  $.get('/delete_lesson',{id_classe:id_classe},
    function(data){



      var form_data = new FormData();
      form_data.append('data', data);
      form_data.append('company', company_lesson);



      $.ajax({



        url: 'mail_post_class.php',     
        dataType: 'text',        
        cache       : false,
        contentType: false,
        processData : false,
        data: form_data,                  
        type: 'POST',

        async: true,
        headers: {
          "cache-control": "no-cache"
        },

        success: function(output){


          alert("Email inviata correttamente!");

          $('#append_lesson_partecipant').empty();

          get_count_partecipanti();





        }

      });

    });  


}


function list_partecipant(id_class){


  $("#table_list_partecipant").DataTable().destroy();
  $("#append_list_partecipant").empty();

  $('#myModal4').modal("show");




   $.get('/get_list_partecipanti', {id_class:id_class},
    function(data){



      var res=jQuery.parseJSON(data);

    


      for (var i = 0; i < res.length; i++) {


       


        $('#append_list_partecipant').append("<tr><td data-label='ditta'>"+res[i].ditta+"</td><td data-label='recapito'>"+res[i].recapito+"</td><td data-label='email'>"+res[i].email+"</td></tr>");
      }

      $('#table_list_partecipant').DataTable({
      "sDom": 'rt<"info"i><"sposta_p"p>',
      "paging": true,
      "destroy": true
    });
  



    });





}


function filter_close(){

  $.get('/filter_close', {},
    function(data){



      $("#table_lesson").DataTable().destroy();
      $("#append_lesson_partecipant").empty();
      var res=jQuery.parseJSON(data);
      var state;

      for (var i = 0; i < res.length; i++) {


        if (res[i].open_close_class==0) {


          state="aperto";


        } else{

          state="chiuso";

        }

        


        $('#append_lesson_partecipant').append("<tr><td data-label='id'>"+res[i].id+"</td><td data-label='company'>"+res[i].company+"</td><td data-label='author'>"+res[i].author+"</td><td data-label='title'>"+res[i].title+"</td><td data-label='partecipanti' onclick='list_partecipant("+res[i].id+")'><button>"+res[i].num_partecipant+"</button></td><td data-label='day'>"+res[i].day+" "+res[i].start+"-"+res[i].end+"</td><td onclick='close_lesson(\""+res[i].id+"\",\""+res[i].company+"\")' data-label='comandi'><button>chiudi</button></td><td data-label='state'>"+state+"</td></tr>");
      }

      $('#table_lesson').DataTable({
      "sDom": 'rt<"info"i><"sposta_p"p>',
      "paging": true,
      "destroy": true
    });
 


    });


}


$("#search_archive").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#button_search").click();
    }
});

$("#button_search").click(function() {
  get_data_appointments();
});


function get_data_appointments(){

  var search_value=$("#search_archive").val();

  $.get('/get_data_appointments', {search_value:search_value},
    function(data){

      $("#table_data_appointments").DataTable().destroy();
      $("#append_data_appointments").empty();
      var res=jQuery.parseJSON(data);
      var state;
      var operatore;


      for (var i = 0; i < res.length; i++) {


        if (res[i].obsolete==0) {

          state="aperto";

        } else{

          state="chiuso";
        }


  

        switch(res[i].resourceId){
          case 1:
          operatore="Dario";
          break;
          case 2:
          operatore="Darione";
          break;
          case 3:
          operatore="Sara";
          break;
          case 4:
          operatore="Simona";
          break;
          case 5:
          operatore="Mauro";
          break;
          case 7:
          operatore="Varie";
          break;
          case 8:
          operatore="Roberto";
          break;

        }




        $('#append_data_appointments').append("<tr><td data-label='title' style='word-wrap: break-word'>"+res[i].title+"</td><td data-label='start'>"+res[i].start+"</td><td data-label='end'>"+res[i].end+"</td><td data-label='state'>"+state+"</td><td data-label='operatore'>"+operatore+"</td></tr>");

      }

      $('#table_data_appointments').DataTable({
        // "sDom": 'rt<"info"i><"sposta_p"p>',
        "paging": true,
        "destroy": true
       });
    });



}

function postpone(){

  $('#modal2_title').empty();  

  $('#myModal2').modal('show');

  $('#modal2_title').append("Posponi");

  $('#modal2').append("<div id='postpone_days'><input type='text' id='giorni' placeholder='giorni da posticipare'/><button onclick='posticipa_data()' class='btn btn-success'>Invia</button></div>");

}

function archive(){

  $('#myModal5').modal('show');

  $('#append_data_appointments').empty();

  //get_data_appointments();

}

function report(){

  $("#calendar").hide();
  $("#report_chart").show();

  var categories=[];
  var gol=[];

  $.get('/get_report_agenda', {},
    function(data){

      var res=jQuery.parseJSON(data);

      for (var i=0; i<res.length; i++){

        categories.push(res[i].select_problem);
        gol.push(res[i].count_problem);

      }

      $('#report_chart').highcharts({
        title: {
          text: 'Quantità'
        },
        chart: {

          type: 'column'
        },
        xAxis: {
          categories: categories
        },

        yAxis: {
          min: 0,
          title: {
            text: 'Problemi'
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
                click: function () {

                }
              }
            }
          },
        },

        series: [{

          data: gol,

        }]
      });

    });

}



  
</script>