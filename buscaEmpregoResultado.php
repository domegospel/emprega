<!--------------------------------------------------------------!
  EMPRESA        : EmpregaSantos       - www.empregasantos.tk
  DESENVOLVEDORA : theDome Informática - www.thedomeinfo.tk
  ANALISTA       : Ronaldo Freitas
  PHP            : Página de Busca de Vagas
 !--------------------------------------------------------------!-->
<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="UTF-8"/> 
	<title>Emprega Santos - Busca de Vagas de Empregos</title>
	<link rel="stylesheet" href="_css/principal.css"/>
  	<link rel="stylesheet" href="_css/form.css"/>
    <link href="_images/faviconEmpregaSantos.fw.png" rel="shortcut icon" type="image/x-icon" />
  </head>

  <body>
	<div id="interface">
   	  <table width="900" border="0">
   	    <tr>
          <td>
           	<table id="geral" width="900" border="0">
        	  <tr>
        	    <td align="center" valign="top" class="cabecalho">
                  <table width="900" border="0" align="center">
 					<tr>
        			  <td width="823" height="155" class="face">&nbsp;</td>
				      <td width="67" align="center" valign="middle" class="face">
				        <a href="https://www.facebook.com/prronaldo.misshellen" target="_blank">
				          <img src="_images/logoFace.fw.png" name="facebook" id="facebook"/>
				        </a>
                	  </td>
				    </tr>
      	          </table>
                </td>
	      	  </tr>
		      <tr>
        		<td class="intermediario">
                  <table width="900" border="0">
        			<tr>
        			  <td>
	                    <table width="900" border="0">
    	    			  <tr>
		    		    	<td class="menu" align="center" valign="top"><a href="index.php"><img src="_images/btHome.jpg" id="btHome"/></a></td>
				    	    <td class="menu" align="center" valign="top">&nbsp;</td>
   		    				<td class="menu" align="center" valign="top"><a href="buscaEmprego.php"><img src="_images/btBuscaEmprego.jpg" id="btBuscaEmpregos"/></a></td>
       			    		<td class="menu" align="center" valign="top">&nbsp;</td>
       			        	<td class="menu" align="center" valign="top"><a href="quemSomos.php"><img src="_images/btQuemSomos.jpg" id="btQuemSomos"/></a></td>
		       	    		<td class="menu" align="center" valign="top">&nbsp;</td>
        	    		    <td class="menu" align="center" valign="top"><a href="faleConosco.php"><img src="_images/btFaleConosco.jpg" id="btFaleConosco"/></a></td>
	   	    	        	<td class="menu" align="center" valign="top">&nbsp;</td>
    	   		            <td class="menu" align="center" valign="top"><a href="registre.php"><img src="_images/btRegistre.jpg" id="btRegistre"/></a></td>
    	   		            <td class="menu" align="center" valign="top">&nbsp;</td>
    	   		            <td class="menu" align="center" valign="top"><a href="enter.php"><img src="_images/btEnter.jpg" id="btEnter"/></a></td>
     				      </tr>
      			        </table>
                      </td>
      			    </tr>
	       			<tr>
        			  <td align="center" valign="top" class="corpo">
						<section id="corpo">
						  <table id=tabelaResultado>
						    <tr>
						      <td>#</td>
							  <td>Nome Empresa:</td>
							  <td>E-mail:</td>
						      <td>Cidade:</td>
							  <td>Vaga:</td>
							  <td>Area:</td>
							  <td>Contato:</td>
							  <td>Descrição:</td>		
							  <td>Data da Vaga:</td>							  									  									  
							</tr>
						  </table>
					      <?php
							$cidade  = $_POST['tCidade'];
							$vaga    = $_POST['tVaga'];
							$area    = $_POST['tArea'];

						    $vagas = new Vagas();

							$vagas->setCidade($cidade);
							$vagas->setVaga($vaga);
							$vagas->setArea($area);
							
							$vagas->buscaVaga();
                          ?>                          
                        </section>

						<footer id="rodape">
						  <a href="http://www.thedomeinfo.tk" target="_blank">
                  		    <img src="_images/rodape.fw.png"/>
                		  </a>  
						</footer>                
                        
                      </td>
		      	    </tr>
      	          </table>
            	</td>
      	     </tr>
       	  </table>
		</div>
	</body>
</html>