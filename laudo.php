<!DOCTYPE html>
<html lang="pt-br">
	<head>	
		<title>Laudo-Tecnico</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<?php
		include("LaudoTecnico.php");
		?>
		<section class="content">
			<h1 class="logo">Laudo-Qualicorp</h1>
			<div class="laudo">
				<form class="form">
					<fieldset>
						<legend>Dados do Colaborador</legend>
						Nome:
						<input class="field" name="nome" placeholder="Nome" /><br/>
						Login:
						<input class="field" name="login" placeholder="Login"/><br/>
						Chamado:
						<input class="field" name="chamado" placeholder="Chamado"/><br/>
						Data:
						<input class="field" type="date" name="data" placeholder="D/M/AA"/><br/>
					</fieldset>
				</form>
			</div>
			
			<div class="error">
				<form class="errorForm">
					<fieldset>
						<legend>Erros Apresentados</legend>
						Erro relatado Pelo Colaborador:
						<textarea class="field" name="message" placeholder="Digite o Erro Informado"
						rows="5" cols="33"></textarea>
					</fieldset>
				</form>
			</div>
			
			<div class="procedimentos">
				<form class="proForm">
					<fieldset>
						<legend>Procedimentos Realizados</legend>
						<div>
							<input type="Checkbox" id="limpeza de cache" name="Limpeza de Cache" checked>
							<label for="limpeza de cache">Limpeza de cache</label>
						</div>

						<div>
							<input type="Checkbox" id="limpeza digital" name="limpeza digital" checked>
							<label for="limpeza digital">Limpeza Digital</label>
						</div>

						<div>
							<input type="Checkbox" id="desintalacao" name="desinstalacao" checked>
							<label for="desinstalacao">Desintalação</label>
						</div>

						<div>
							<input type="Checkbox" id="validacao_rede" name="val_rede" checked>
							<label for="validacao_rede">Validação Ponto de Rede</label>
						</div>

						<div>
							<input type="Checkbox" id="validacao_vga" name="val_vga" checked>
							<label for="validacao_vga">Validação de Cabo VGA</label>
						</div>

						<div>
							<input type="Checkbox" id="validacao_patchcord" name="val_patchcord" checked>
							<label for="validacao_patchcord">Validação patchcord</label>
						</div>

						<div>
							<input type="Checkbox" id="validacao_kit" name="val_kit" checked>
							<label for="validacao_kit">Validação das Pilhas do Kit</label>
						</div>

						<div>
							<input type="Checkbox" id="memoria_ram" name="memoria_ram" checked>
							<label for="memoria_ram">Memória Ram Comprometida</label>
						</div>

						<div>
							<input type="Checkbox" id="hd_espaco" name="hd_spaco" checked>
							<label for="hd_espaco">HD Sem Espacço</label>
						</div>

						<div>
							<input type="Checkbox" id="others" name="others" checked>
							<label for="others">Outros</label>
						</div>

						<div>
							Descritivo:
							<textarea class="field" name="procedimentos" placeholder="Descreva os Procedimentos"
							rows="5" cols="33"></textarea>
						</div>


					</fieldset>
				</form>
			</div>
			
			<div class="defeitos">
				<form class="defForm">
					<fieldset>
						<legend>Causa do Defeito</legend>
						<div>
							<input type="Checkbox" id="vidacomprometida" name="vidacomprometida" checked>
							<label for="vidacomprometida">Vida Útil Comprometida</label>
						</div>

						<div>
							<input type="Checkbox" id="desgastenatural" name="desgastenatural" checked>
							<label for="desgastenatural">Desgaste Natural</label>
						</div>

						<div>
							<input type="Checkbox" id="cargaeletrica" name="cargaeletrica" checked>
							<label for="cargaeletrica">Carga Elétrica</label>
						</div>

						<div>
							<input type="Checkbox" id="usoinadequado" name="usoinadequado" checked>
							<label for="usoinadequado">Uso Inadequado</label>
						</div>

						<div>
							<input type="Checkbox" id="impacto" name="impacto" checked>
							<label for="impacto">Sofreu Algum Tipo de Impacto ou Queda</label>
						</div>

						<div>
							<input type="Checkbox" id="intertecnico" name="intertecnico" checked>
							<label for="intertecnico">Intervenção Por Técnico não Especializado</label>
						</div>

						<div>
							<input type="Checkbox" id="dominio" name="dominio" checked>
							<label for="dominio">Equipamento Fora de Dominio</label>
						</div>

						<div>
							<input type="Checkbox" id="ouerrada" name="ouerrada" checked>
							<label for="ouerrada">Equipamento em OU Errada</label>
						</div>

						<div>
							<input type="Checkbox" id="serv_parado" name="serv_parado" checked>
							<label for="serv_parado">Serviço Parado</label>
						</div>

						<div>
							<input type="Checkbox" id="drive_corrompido" name="drive_corrompido" checked>
							<label for="drive_corrompido">Drive Corrompido/Desatualizado</label>
						</div>

						<div>
							<input type="Checkbox" id="others" name="others" checked>
							<label for="others">Outros</label>
						</div>

						<div>
							Descritivo:
							<textarea class="field" name="causa_defeito" placeholder="Digite as Possiveis Causas"
							rows="5" cols="33"></textarea>
						</div>
					</fieldset>

				</form>
			</div>
			
			<div class="analise">
				<form class="analForm">
					<fieldset>
						<legende>Análise Conclusiva</legende>
						Analista:
						<input type="text" name="analista" placeholder="Nome do Analista"/><br/>
						<div>
							<input type="Checkbox" id="reparo" name="reparo" checked>
							<label for="reparo">Equipamento Em Condições de Reparo</label>
						</div>

						<div>
							<input type="Checkbox" id="semreparo" name="semreparo" checked>
							<label for="semreparo">Equipamento Sem Condições de Reparo</label>
						</div>

						<div>
							Descritivo:
							<textarea class="field" name="descritivo" placeholder="Informe O Estado do Equipamento"
							rows="5" cols="66"></textarea>
						</div>

						
					</fieldset>
				</form>
			</div>

			<div class="solucao">
				<form class="solForm">
					<fieldset>
						<legend>Solução Recomendada</legend>
						<textarea class="field" name="descritivo" placeholder="Recomendação"
						rows="5" cols="100"></textarea>
					</fieldset>
				</form>
			</div>

			<div class="evidencias">
				<table border="1">
					<tr><td>Monitor de Recursos(perfmon.exe)</td></tr>
					<tr><td>Gerenciador de Disco(diskmgmt.exe)</td></tr>
					<tr><td>Gerenciador de Tarefas(taskmgr.exe)</td></tr>				
				</table>

			</div>

		</section>
	</body>
</html>
