class Form{
    constructor(){
        this.btnAjout = document.querySelector("#btnAjout");
        this.formComs = document.querySelector("#formCom");
        this.sendBtn = document.querySelector("#envoyer");
        this.ajoutAdmin = document.querySelector("#ajoutAdmin");
        this.anullAjout = document.querySelector("#btnAnnuler");
        
        this.formAdmin = document.querySelector("#formAdmin");
        this.btnAddAdmin = document.querySelector("#btnAddAdmin");
        this.btnDelete = document.querySelector(".btnSup");
    }

    addComentForm(){
        $(this.btnAjout).click(() => {
            $(this.btnAjout).addClass('d-none');
            $(this.formComs).removeClass('d-none');
        })
    }
    removeComentForm(){
        $(this.sendBtn).click(() => {
            $(this.btnAjout).removeClass('d-none');
            $(this.formComs).addClass('d-none');
        })
    }
    addAdminForm(){
        $(this.ajoutAdmin).click(() => {
            $(this.ajoutAdmin).addClass('d-none');
            $(this.formAdmin).removeClass('d-none');
        })
    }
    removeAdminForm(){
        $("#btnAddAdmin").click(function () {
            if ($("#infoAdmim").val() === '') {
                $( ".msgInput" ).text( "<p>Some</p> new text." ).addClass('alert-danger');
            } else{
                $(this.ajoutAdmin).removeClass('d-none');
                $(this.formAdmin).addClass('d-none');
            }
        });
    }

    deleteComfirm(){
        $(document).ready(function(){
            $(this.btnDelete).click(function () {
                confirm("Etes vous sur de voulloir supprimer ?");
            });
        });
    }
}

let set = new Form();
set.addComentForm();
set.removeComentForm();
set.addAdminForm();
set.removeAdminForm();
set.deleteComfirm();