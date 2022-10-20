<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title> 
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Formulario</h1>
                        <form action="Connect_data.php" method="POST">
                            <div class="field">
                                <label class="label">Nome</label>
                                <div class="control">
                                    <input name="nome" class="input" type="text" placeholder="Seu nome">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input name="email" class="input" type="email" placeholder="Seu email">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Motivo</label>
                                <div class="control">
                                    <div class="select is-fullwidth">
                                    <select name="motivo">
                                        <option>Reportar erro</option>
                                        <option>Anuncios</option>
                                        <option>Outros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
							<label class="label">Mensagem</label>
							<div class="control">
								<textarea name="mensagem" class="textarea" placeholder="Insira a sua mensagem" maxlength="2000"></textarea>
							</div>
						</div>
 
						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link is-medium">Enviar</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
