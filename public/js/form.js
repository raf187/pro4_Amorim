class Form{
    constructor(){
        this.btnAjout = document.querySelector("#btnAjout");
        this.formComs = document.querySelector("#formCom");
        this.sendBtn = document.querySelector("#envoyer");
        this.ajoutAdmin = document.querySelector("#ajoutAdmin");
        this.anullAjout = document.querySelector("#btnAnuller");
        
    }

    addComentForm(){
        $(this.btnAjout).click(() => {
            $(this.btnAjout).addClass('d-none');
            $(this.formComs).removeClass('d-none');
        })
    }
    removeComentForm(){
            $(this.btnAjout).removeClass('d-none');
            $(this.formComs).addClass('d-none');
    }
    confirmDelete(){
        $(window).ready(function() {
        $(".btnSup").on('click touchstart', function() {
            return confirm('Êtes vous sur de vouloir supprimer?');
        });
    });
    }
    confirmSignal() {
        $(window).ready(function() {
            $(".btnSignal").on('click touchstart', function() {
                return confirm('Êtes vous sur de vouloir signaler ce commentaire?');
            });
        })
    }
}

let set = new Form();
set.addComentForm();
set.removeComentForm();
set.confirmDelete();
set.confirmSignal();