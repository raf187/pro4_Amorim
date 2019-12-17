class Form{
    constructor(){
        this.btnAjout = document.querySelector("#btnAjout");
        this.formComs = document.querySelector("#formCom");
        this.sendBtn = document.querySelector("#envoyer");
        this.ajoutAdmin = document.querySelector("#ajoutAdmin");
        this.formAdmin = document.querySelector("#formAmin");
        this.btnAddAdmin = document.querySelector("#btnAddAdmin");

        this.btnAjout.addEventListener("click", this.addComentForm.bind(this));
        this.sendBtn.addEventListener("click", this.removeComentForm.bind(this));

        this.btnAjout.addEventListener("click", this.addAdminForm.bind(this));
        this.sendBtn.addEventListener("click", this.removeAdminForm.bind(this));
    }

    addComentForm(){
        $("#btnAjout").click(() => {
            $("#btnAjout").addClass('d-none');
            $("#formCom").removeClass('d-none');
        })
    }
    removeComentForm(){
        $("#envoyer").click(() => {
            $("#btnAjout").removeClass('d-none');
            $("#formCom").addClass('d-none');
        })
    }
    addAdminForm(){
        $("#ajoutAdmin").click(() => {
            $("#ajoutAdmin").addClass('d-none');
            $("#formAmin").removeClass('d-none');
        })
    }
    removeAdminForm(){
        $("#btnAddAdmin").click(() => {
            $("#btnAddAdmin").removeClass('d-none');
            $("#formAmin").addClass('d-none');
        })
    }

    
}

new Form();