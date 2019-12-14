class FormCom{
    constructor(){
        this.btnAjout = document.getElementById("btnAjout");
        this.formComs = document.getElementById("formCom");
        this.sendBtn = document.getElementById("envoyer");

        this.btnAjout.addEventListener("click", this.addForm.bind(this));
        this.sendBtn.addEventListener("click", this.removeForm.bind(this));
    }

    addForm(){
        $("#btnAjout").click(() => {
            $("#btnAjout").addClass('d-none');
            $("#formCom").removeClass('d-none');
        })
    }
    removeForm(){
        $("#envoyer").click(() => {
            $("#btnAjout").removeClass('d-none');
            $("#formCom").addClass('d-none');
        })
    }

    
}

new FormCom();