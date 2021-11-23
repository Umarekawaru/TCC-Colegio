<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">Email enviado com sucesso</h4>
            </div>
            <div class="modal-body">
                        Seu email foi encaminhado! Agora só esperar sua resposta
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Envio de Email falhou</h4>
            </div>
            <div class="modal-body">
                        Tente novamente!
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModaDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Deletado com sucesso!</h4>
            </div>
        </div>
    </div>
</div>      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
		
		<?php

			$form = $_GET['enviado'] ;

			if($form == "send"){ ?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#myModal').modal('show');
					});
				</script>
			<?php }elseif ($form == "falhou"){ ?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#myModalN').modal('show');
					});
				</script>
			<?php }elseif ($form == "deletado"){ ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#myModaDel').modal('show');
                    });
                </script>
            <?php }elseif ($form == "nao"){ ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#myModaDel').modal('show');
                    });
                </script>
            <?php }?>
    </body>
</html>