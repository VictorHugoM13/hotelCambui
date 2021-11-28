<main role="main">			
	<div class="jumbotron contato">
		<div class="container">
			<h2 class="display-4 text-center" style="margin-bottom: 40px;">Reservas</h2>
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nome para Reserva</label>
						<input type="text" class="form-control" placeholder="Nome completo">
					</div>
					<div class="form-group col-md-6">
						<label>E-mail</label>
						<input type="email" class="form-control" placeholder="Seu E-mail">
					</div>
                    <div class="form-group col-md-6">
						<label>Data de Check-in</label>
						<input type="date" class="form-control" >
					</div>
                    <div class="form-group col-md-6">
						<label>Data de Check-out</label>
						<input type="date" class="form-control">
					</div>
                
                    <div class="form-group col-md-6">



                        <label>Tipo do Quarto</label>
                        <select class="custom-select my-1 mr-sm-2" name="">
                            <?php
                            #var_dump($this->Dados['tb_quarto']);
                            foreach ($this->Dados['tb_quarto'] as $quarto) {
                                extract($quarto);
                                #var_dump($quarto);
                                ?>
                                <option value="<?php echo $numero_quarto;?>"><?php echo $tipo_quarto?></option>
                            <?php


                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
						<label>Quantidade de Pessoas</label>
						<input type="number" class="form-control">
					</div>
                </div>
                
			</form>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" name = "CadReservas" class="btn btn-success">Realizar Reserva</button>
                </div>
                <div class="col-md-6 ">    
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </div>

            
           
		</div>	
	</div>					
			
</main>
	
</body>
</html>
