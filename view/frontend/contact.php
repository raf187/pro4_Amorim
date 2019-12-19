<?php $title = ('Billet simple pour l\'Alaska - Contact'); ?>
<?php ob_start(); ?>
<div class="card form-contact">
    <h4 class="card-header">Contactez moi.</h4>
    <div class="card-body">
        <form class="form-horizontal" method="POST">
            <div class="form-group">
                <label class="col-md-8 offset-md-2 control-label" for="name">Votre nom :</label>  
                <div class="col-md-8 offset-md-2 ">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-8 offset-md-2 control-label" for="email">Votre mail :</label>  
                <div class="col-md-8 offset-md-2 ">
                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-8 offset-md-2 control-label" for="objMsg">Objet :</label>  
                <div class="col-md-8 offset-md-2 ">
                    <input id="objMsg" name="objMsg" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-8 offset-md-2 control-label" for="message"></label>
                <div class="col-md-8 offset-md-2">                     
                    <textarea class="form-control" id="message" name="message" rows="6" required="">Votre message...</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 offset-md-5">
                    <input value="Envoyer" type="submit" id="btnSend" name="btnSend" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>