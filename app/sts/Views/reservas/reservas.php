<main role="main">			
	<div class="jumbotron contato">
		<div class="container">
			<h2 class="display-4 text-center" style="margin-bottom: 40px;">Reservas</h2>
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nome para Reserva</label>
                        <input type="hidden" name="id_cliente" value="<?php echo $_SESSION['id'];?>">
						<input type="text" class="form-control" name="nome" value="<?php echo $_SESSION['nome'];?>">
					</div>
					<div class="form-group col-md-6">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="Seu E-mail">
					</div>
                    <div class="form-group col-md-6">
						<label>Data de Check-in</label>
						<input type="date" name="checkin" class="form-control" >
					</div>
                    <div class="form-group col-md-6">
						<label>Data de Check-out</label>
						<input type="date" name="checkout" class="form-control">
					</div>
                
                    <div class="form-group col-md-6">



                        <label>Tipo do Quarto</label>
                        <select class="custom-select my-1 mr-sm-2" name="numero_quarto">
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
                

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" name="CadReservas" class="btn btn-success" value="Realizar Reserva">
                </div>
                <div class="col-md-6 ">    
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </div>

            
           
		</div>	
	</div>
    </form>
			
</main>
	
</body>
</html>
