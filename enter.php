<!--------------------------------------------------------------!
  EMPRESA        : EmpregaSantos       - www.empregasantos.tk
  DESENVOLVEDORA : theDome Informática - www.thedomeinfo.tk
  ANALISTA       : Ronaldo Freitas
  PHP            : Página de Entrada de Usuário
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
	<title>Emprega Santos - Seja o primeiro a ver ofertas de emprego!</title>
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
						  <h2>Entrada de Usuários</h2>
                          <form method="post" id="fEntrada" action="buscar_usuario.php">
                        	<fieldset id="pessoa">
                              <legend>Dados do Usuário</legend>
                        	  <p>
                        	    <label for="cEmail">E-Mail.......................:</label>
                        		<input type="email" name="tEmail" id="cEmail" size="30" maxlength="40" placeholder="Exemplo: joaosilva@email.com"/>
                        	  </p>
                        	  <p>
                        	    <label for="cSenha">Senha........................:</label>
                        		<input type="password" name="tSenha" id="cSenha" size="30" maxlength="40" placeholder="Digite uma senha segura"/>
                        	  </p>
                        	</fieldset>
                        
                        	<table width="100%" border="0">
                        	  <tr>
                        		<td align="center" valign="middle">				
                                  <input type="image" value="submit" name="cadastrar" src="_images/btOk.gif" align="middle" width="50" height="50" > 
                                  <input type="image" value="reset"  name="resetar" src="_images/btReset.jpg" align="middle" width="50" height="50" >                                   
             					</td>
                        	  </tr>
                        	</table>
                            <h3><a href="faleConosco.php"> Esqueceu a Senha? Clique Aqui  
                            </a></p></h3> 	
                          </form> 						
                        </section>

						<aside id="lateral">
						  <h2>Anúncie Aqui!</h2>
                          <p>Anuncie a sua empresa, escola, loja ou produto onde centenas de pessoas passam por dia!
                             Ajude-nos a manter o site gratuito tanto para empresas anunciarem suas vagas como para 
                             aqueles que procuram uma recolocação profissional. Preços justos que agregam valor à sua 
                             empresa. <a href="faleConosco.php">Fale Conosco</a></p>
                             <a href="faleConosco.php">  
                               <figure class="foto-legenda">
                                 <img name="Empregos em Santos" src="_images/procurandoComercial.jpg" width="141" height="77" alt="">
                                 <figcaption>
							       <h3>EmpregaSantos</h3>
  							       <p>Entre em contato conosco!</p>
						         </figcaption>
					           </figure>
                             </a> 	
						</aside>

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