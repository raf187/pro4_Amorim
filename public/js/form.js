class Form{
    constructor(){
        this.btnAjout = document.querySelector("#btnAjout");
        this.formComs = document.querySelector("#formCom");
        this.sendBtn = document.querySelector("#envoyer");
        this.ajoutAdmin = document.querySelector("#ajoutAdmin");
        this.anullAjout = document.querySelector("#btnAnuller");
        
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
        $(this.sendBtn).click((e) => {
            e.preventDefault();
            $(this.btnAjout).removeClass('d-none');
            $(this.formComs).addClass('d-none');
        })
}
    deleteComfirm(){
            $(this.btnDelete).click(function () {
                confirm("Etes vous sur de voulloir supprimer ?");
            });
    }
}

let set = new Form();
set.addComentForm();
set.removeComentForm();
// set.addAdminForm();
// set.removeAdminForm();
set.deleteComfirm();