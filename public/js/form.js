class Form{
    constructor(){
        this.btnAjout = document.querySelector("#btnAjout");
        this.formComs = document.querySelector("#formCom");
        this.sendBtn = document.querySelector("#envoyer");
        this.ajoutAdmin = document.querySelector("#ajoutAdmin");
        this.formAdmin = document.querySelector("#formAdmin");
        this.btnAddAdmin = document.querySelector("#btnAddAdmin");
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
        $(this.btnAddAdmin).click(() => {
            $(this.ajoutAdmin).removeClass('d-none');
            $(this.formAdmin).addClass('d-none');
        })
    }

    
}

let set = new Form();
set.addComentForm();
set.removeComentForm();
set.addAdminForm();
set.removeAdminForm();