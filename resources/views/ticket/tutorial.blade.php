<script type="text/javascript">

  //si clicca sulla scelta categoria quando si apre il ticket e mostra gli step e tutorial
  function tutorial_faq(nome_tutorial, nome_categoria_video, num_video, name_folder){
    $("#link_faq").append("<label>Vedi anche: </label><br><a href='#' data-toggle='modal' data-target='#myModal' id='button_step'>"+nome_tutorial+"</a><br>");
    $("#link_faq").append("<label>Videotutorial: </label><br><a href='#' data-toggle='modal' data-target='#myModal' id='button_video'>"+nome_tutorial+"</a>");
    //se si clicca sul bottone step parte il carosello
    jQuery('#button_step').click(function(){
      $("#tutorial_title_carousel").empty();
      $("#tutorial_carousel").empty();
      $("#carousel-example-generic").show();
      $("#videotutorial_carousel").hide();
      $.get('/read_number_image', {name_folder:name_folder},
        function(data){
          var res=jQuery.parseJSON(data);
          var id;
          var string_label;
          switch (name_folder) {
            case "collaboratore_1":
            string_label=["Per creare un collaboratore clicca su menu e poi impostazioni","clicca su collaboratori","clicca sul simbolo +","compila il form e salva tramite l'apposito pulsante","per modificare un collaboratore clicca sulla matita","cambiamo dunque i campi che vogliamo modificare e salviamo"];
            break;
            case "collaboratore_2":
            string_label=["Per creare un turno per un collaboratore clicca su menu e poi impostazioni","clicca su collaboratori","clicca dunque sulla matita","ed ora andiamo ala voce creazione turni",
            "compiliamo i turni nella tabella (è importante inserire la data del periodo di valità del turno)","salviamo dunque tramire l'apposito pulsante "];
            break;
            case "servizi_1":
            string_label=["Per creare un servizio clicca su menu e poi impostazioni","clicca su servizi","clicca sul simbolo +",
            "compila il form e salva tramite l'apposito pulsante","per modificare un servizio clicca sulla matita","cambia dunque i campi che vuoi modificare e salva"];
            break;
            case "prodotti_1":
            string_label=["Per creare un prodotto clicca su menu e poi impostazioni","clicca su prodotti","clicca sul simbolo new",
            "compila il form e salva tramite l'apposito pulsante","per modificare un prodotto clicca sulla matita","cambia dunque i campi che vuoi modificare e salva"];
            break;
            case "infocliente_1":
            string_label=["Per Aggiungere un cliente alla rubrica clicca sul menù e poi la voce info cliente ","clicca sul simbolo +","compila il form e salva tramite l'apposito pulsante"];
            break;
            case "ricevute_1":
            string_label=["Per effettuare una ricevuta andiamo per prima cosa alla cassa","clicca ingresso cliente","cerca e seleziona il cliente",
            "ora clicca sul parcheggio","seleziona il cliente da portare in cassa tramite la freccia","adesso seleziona il collaboratore che ha svolto i servizi",
            "e cerca il servizio dalla barra in alto selezionandolo cliccandoci","portiamo il cliente al pagamento tramite la fraccia","clicchiamo la stampante per procedere all'emissione della ricevuta","scegli la modalità di pagamento e clicca su ric per emettere la ricevuta"];
            break;
            case "ricevute_2":
            string_label=["Per creare un insoluto andiamo ad effettuare una ricevuta e fermiamoci alla selezione della modalità di pagamento","modifichiamo l'importo che il cliente paga sulla destra si genera un insoluto","quindi basterà emettere la ricevuta per creare l'insoluto","l'insoluto viene generato sul profilo del cliente, quindi basterà saldarlo per eliminarlo","oppure per l'eliminazione senza saldo andiamo sul profilo cliente","quindi clicchia unpaid","e quindi clicca il cestino, eliminandoquindi l'insoluto e creando uno storico"];
            break;
            case "ricevute_3":
            string_label=["Per modificare la modalità di pagamento di una ricevuta andiamo dal menu' alla voce ricevute","clicca sulla lente di ingrandimento","clicca su modifica metodo di pagamento","inserisci l'importo nel tipo di pagamento corretto e salva dall'apposito pulsante (questo non modifica il tipo di pagamento della ricevuta cartacea)"];
            break;
            case "agenda_1":
            string_label=["Per prendere un appuntamento clicca l'icona dell'agenda","cerca il cliente per il quale vuoi prendere un appuntamento e selezionalo dalla freccia","chiudi il profilo cliente","seleziona il servizio tramite la barra in basso","appendi il servizio in agenda cliccando prima il servizio e poi in corrispondenza di orario e collaboratore interessati ","salva tramite l'apposito pulsante"];
            break;
            case "agenda_2":
            string_label=["Per modificare un appuntamento clicca sulla i  presente sull'appuntamento","clicca aggiungi servizio","quindi seleziona il servizio da aggiungere, appendilo e salva dall'apposito pulsante","è possibile portare il cliente dall'agenda direttamente in parcheggio con i servizi prenotati tramite il pulsante park in+ servizi","oppure possiamo portare il cliente direttamente al pagamento tramite il tasto servizi prenotati in cassa","se invece il cliente salta il suo appuntamento clicchiamo il tasto non arrivato ","questo trasformerà in nero il suo appuntamento ricordandoci che il cliente non è venuto in salone","se il cliente non è arrivato lo sfondo dell'appuntamento diventerà di colore nero"];
            break;
            case "agenda_3":
            string_label=["Per cercare un appuntamento clicca sull'agenda","ora clicca sui 3 puntini in alto a destra","la prima schermata ci mostra gli appuntamenti di oggi","clicca su prossimi appuntamenti e cerca il cliente per il quale vuoi vedere gli appuntamenti","in alternativa puoi vedere gli appuntamenti settimanali di un collaboratore, quindi clicca sul collaboratore","ora clicca su visualizza settimana appuntamenti"];
            break;
            case "agenda_4":
            string_label=["Per creare una nota clicca sull'agenda","clicca sullo spazio dove vuoi inserire la nota","scrivi la tua nota e salva dall'apposito pulsante","per modificare la nota clicca la i"," quindi basterà salvare tramite l'apposito pulsante o cancellare tramite il cestino"];
            break;
            case "agenda_5":
            string_label=["Per creare una pausa clicca sull'ageda","clicca sui tre puntini in alto a destra e quindi clicca si pausa permesso","compila i campi e salva tramite l'apposito pulsante"];
            break;
            case "agenda_6":
            string_label=["Per creare un turno per un collaboratore clicca su menu e poi impostazioni","clicca su collaboratori","clicca sul simbolo matita","clicca su creazione turni","inseriamo quindi gli orari e la data di validità del turno","e quindi salva tramite l'apposito pulsante"];
            break;
            case "agenda_7":
            string_label=["Per creare una cabina clicca su menu e poi impostazioni","clicca su cabine","clicca sul simbolo +","compila il form e salva tramite l'apposito pulsante","per modificare una cabina clicca sulla matita","cambiamo dunque i cambi che ti interessano e salva tramite l'apposito pulsante"];
            break;
            case "agenda_8":
            string_label=["Per prendere un appuntamento in cabina clicca sull'agenda","clicca sull'icona cabina","cerca e seleziona il cliente per il quale vuoi prendere un appuntamento","cerca e seleziona i servizi dall'apposita barra di ricerca","clicca dunque in corrispondenza di orario e cabina interessati","seleziona dunque l'operatore che svolgerà il servizio e salva tramite l'apposito pulsante","ora basta salvare dall'apposito pulsante"];
            break;
            case "magazzino_1":
            string_label=["Per caricare un prodotto in magazzino clicca sul menù e poi la voce magazzino","clicca quindi su carico prodotti e cerca il prodotto interessato","clicca sul simbolo +","aggiungi la quantità desiderata e salva","clicca su show","controlla che tu stia caricando i prodotti e le quantità corrette e salva tramite l'apposito pulsante"];
            break;
            case "magazzino_2":
            string_label=["Per scaricare un prodotto dal magazzino clicca sul menù e poi la voce magazzino","clicca quindi su scarico prodotti e cerca il prodotto interessato","clicca sul simbolo +","aggiungi la quantità desiderata e salva","clicca su show","controlla che stia caricando i prodotti e le quantità corrette e salva tramite l'apposito pulsante"];
            break;
            case "magazzino_3":
            string_label=["per visualizzare il report valore magazzino clicca sul menù poi su magazzino ","clicca su valore magazzino ed inserisci la data che ti interessa","adesso è apparso il report, è possibile scaricarlo in formato excel tramite l'apposito pulsante"];
            break;
            case "spese_1":
            string_label=["Per creare una spesa clicca su menu e poi su spesa","clicca su registro spese","clicca sul simbolo +","compila il form e salva tramite l'apposito pulsante"];
            break;
            case "spese_2":
            string_label=["Per modificare o pagare una spesa cliccha sul menù e clicca su spese","clicca su lista fatture spese e scadenze","selezioniamo la data e la spesa che ci interessa cliccando la matita","(per il pagamento) spuntiamo 'pagato in' e selezioniamo la data salvando il tutto dall'apposito pulsante","per la modifica clicca sulla matita","modifica i campi che ti interessano e salva dall'apposito pulsante"];
            break;
            case "marketing_1":
            string_label=["Per creare un filtro marketing vai sul menù e clicca marketing","sulla destra troviamo i macrofiltri","nella parte centrale è possibile selezionare uno o più sotto filtri","una volta selezionati i filtri il gestionale ci dirà quanti clienti sono stati selezionati","è possibile resettare i filtri dal pulsante reset o vedere la lista clienti selezionati cliccando l'agenda","da qui è possibile scaricare in vari formati la lista dei clienti filtrati"];
            break;
            case "marketing_2":
            string_label=["Per creare un collaboratore clicca su menu e poi impostazioni","clicca su collaboratori","clicca sul simbolo +","compila il form e salva tramite l'apposito pulsante","per modificare un collaboratore clicca sulla matita","cambiamo dunque i campi che vogliamo modificare e salviamo"];
            break;
            case "marketing_3":
            string_label=["Per pianificare l'invio automatico di messaggi ai clienti clicchiamo sul menù e poi su marketing","quindi clicchiamo operazioni pianificate e selezioniamo l'operazione che ci interessa","attiviamo l'opzione dalla riga attiva(o via sms o via customer app)","scegli quanti giorni prima e a che orario verrà inviato il tuo messaggio","compila il testo messaggio utilizzando i codici {NOME_CLIENTE} e  {DATA_APPUNTAMENTO} per selezionare automaticamente il nome del cliente e la data dell'appuntamento","salva il tutto tramite l'apposito pulsante"];
            break;
            case "gift_1":
            string_label=["Per creare una gift card clicchiamo sulla cassa","porta un cliente in cassa","clicca su promozioni e poi su gift card","compila il form e salva tramite l'apposito pulsante","adesso basterà effettuare il pagamento e la gift card verrà caricata sul profilo del cliente"];
            break;
            case "gift_2":
            string_label=["Per utilizzare una gift card portiamo il nostro cliente in cassa","clicca utilizza gift card","seleziona la gift card da utilizzare, adesso basta procedere al pagamento"];
            break;
            case "gift_3":
            string_label=["Per regalare una gift card clicchiamo sulla cassa","portiamo il cliente in cassa","clicca prima su promozioni poi su gift card","seleziona l'opzione lista clienti e clicca dunque su lista clienti ","seleziona il cliente a cui verrà regalata la gift card ","compila i campi e salva tramite l'apposito pulsante, ora basterà procere al pagamente"];
            break;
            case "gift_4":
            string_label=["Per precaricare una gift card clicca sul menù e poi su promozioni","seleziona la voce gift card e clicca sul +","compila i campi e salva"];
            break;
            case "abbonamento_1":
            string_label=["Per creare una abbonamento clicchiamo sulla cassa","porta un cliente in cassa","clicca su promozioni e poi su abbonamento","compila il form e salva tramite l'apposito pulsante","adesso basterà effettuare il pagamento e l'abbonamento verrà caricato sul profilo del cliente"];
            break;
            case "abbonamento_2":
            string_label=["Per utilizzare un abbonamento clicca sulla cassa","porta un cliente in cassa","clicca sul simbolo dell'abbonamento","seleziona quindi il servizio in abbonamento, adesso è possibile procedere al pagamento"];
            break;
            case "abbonamento_3":
            string_label=["Per precaricare un abbonamento clicca sul menù e poi su promozioni","seleziona la voce abbonamento e clicca sul +","compila i campi e salva"];
            break;
            case "pacchetto_1":
            string_label=["Per creare un pacchetto clicchiamo sulla cassa","portiamo un cliente in cassa","clicca su promozioni e poi su pacchetti","compila il form selezionando dall'apposito pulsante i servizi da inserire e salva tramite l'apposito pulsante","adesso basterà effettuare il pagamento e il pacchetto verrà caricata sul profilo del cliente"];
            break;
            case "pacchetto_2":
            string_label=["Per utilizzare un pacchetto clicca sulla cassa","porta un cliente in cassa","clicca sul simbolo del pacchetto","seleziona quindi i servizi interessati, adesso è possibile procedere al pagamento"];
            break;
            case "pacchetto_3":
            string_label=["Per precaricare un pacchetto clicca sul menù e poi su promozioni","seleziona la voce pacchetti e clicca sul +","compila i campi aggiungendo dall'apposito pulsante i servizi e salva"];
            break;
            case "prepagato_1":
            string_label=["Per creare servizio prepagato clicchiamo sulla cassa","portiamo un cliente in cassa","clicca su promozioni e poi su prepagato","compila il form e salva tramite l'apposito pulsante","adesso basterà effettuare il pagamento e il prepagato verrà caricato sul profilo del cliente"];
            break;
            case "infinity_1":
            string_label=["Per creare una card infinity clicchiamo sulla cassa","portiamo un cliente in cassa","clicca su promozioni e poi su infinity card","compila il form e salva tramite l'apposito pulsante","adesso basterà effettuare il pagamento e la infinity card verrà caricata sul profilo del cliente"];
            break;
            case "accumulo_1":
            string_label=["Per creare un piano di accumulo clicchiamo sulla cassa","portiamo un cliente in cassa","clicca su promozioni e poi su piano di accumulo","compila il form e salva tramite l'apposito pulsante","il piano di accumulo e ora pronto per essere utilizzato"];
            break;
          }
          for (var i = 0; i < res; i++) {
           id=i+1;   
           if (id==1) {
            var attiva_carousel="active";
          } else {
            var attiva_carousel="";
          }
          $("#tutorial_carousel").append("<div class='item "+attiva_carousel+"'  style='padding-left:14%; padding-right:14%'><img src=\""+"/test_ticket/img/"+name_folder+"/"+id+".jpg"+"\"><div class='carousel-caption'>STEP "+id+": "+string_label[i]+"</div></div>");
        }
      });
});
//si clicca su video e parte il videotutorial
jQuery('#button_video').click(function(){
  $("#tutorial_title_carousel").empty();
  $("#videotutorial_carousel").empty();
  $("#tutorial_title_carousel").append(nome_tutorial);
  $("#videotutorial_carousel").show();
  link_src="https://www.panemacash.com/tutorial/generic/"+nome_categoria_video+"/"+num_video+".mp4";
  $("#carousel-example-generic").hide();
  $("#videotutorial_carousel").append("<div><video style='width:100%; height:auto;' controls='false' autostart='false' SameSite='None'><source src='"+link_src+"' type='video/mp4'></video></div>");
});
}

//si clicca e si scarica il manuale in pdf
function download_faq(download){
 $("#link_faq").append("<label>Scarica: </label><br><a href='/test_ticket/download/manuale.pdf' download>"+download+"</a>");
}


</script>