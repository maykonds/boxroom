<?php 
require('verify_session.php');
include "config.php";
header('Content-type: text/html; charset=iso-8859-1');
?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" type="text/css" href="style/geral.css">
    <title>BoxRoom - Bem Vindo <?php $_SESSION["nome_usuario"]?></title>
    </head>
<body>
<!-- Menu Lateral-->
<div class="menu-icon"></div>
<div class="menu"><div class="menu-option"><h3>BoxRoom</h3></div>
	<div class="menu-content" style="margin-left: -38px">
	<ul>
		<li class="navBar"><img class="menu-ico" title="Produtos" src="imagens/icons/shopping-cart.png"><div class="menu-option">Produtos</div></li>
		<li class="navBar"><img class="menu-ico" title="Estoque" src="imagens/icons/box.png"><div class="menu-option">Estoque</div></li>
		<li class="navBar"><img class="menu-ico" title="Vendas" src="imagens/icons/sales.png"><div class="menu-option">Vendas</div></li>
		<li class="navBar"><img class="menu-ico" title="Fornecedor" src="imagens/icons/fornecedor.png"><div class="menu-option">Fornecedor</div></li>
	</ul>
	</div>
</div>
<!--End Menu-->
<div class="body-content">
<a class="button-style1" href="logout.php"> LOGOUT</a>
<?php
      $id_user = $_SESSION['id_usuario'];
      $query = "SELECT comunicado_id FROM usuario
                INNER JOIN comunicados ON setor_sid = setor_id AND CURRENT_DATE <= data_finalizacao
                WHERE $id_user = uid";
      $result = mysqli_query($con, $query);
      $coluna = mysqli_fetch_array($result);
      
      if (mysqli_num_rows($result)>0){
          $id_comunicado = $coluna['comunicado_id'];
          $query = "SELECT descricao FROM comunicados 
                    WHERE $id_comunicado = comunicado_id";
          $result = mysqli_query($con, $query);
          $coluna = mysqli_fetch_array($result);
          ?>
          <div class="box-alert" style="<?php echo('display:block');?>"><?php echo $coluna['descricao'];?></div>
    <?php } ?>
<!--QUICK ACCESS MENU-->
<div class="home-menu-quickacess">
    <!--Produtos-->
    <a href="produtos.php">
        <div class="card">
            <div class="card card1">
                <div class="content">
                    <img src="imagens/icons/shopping-cart.png">
                    <h3>Produtos</h3>
                </div>
            </div>
        </div>
    </a>
        <!--Estoque-->
        <div class="card">
            <div class="card card1">
                <div class="content">
                    <img src="imagens/icons/box.png">
                    <h3>Estoque</h3>
                </div>
            </div>
        </div>
        <!--Vendas-->
        <div class="card">
            <div class="card card1">
                <div class="content">
                    <img src="imagens/icons/sales.png">
                    <h3>Vendas</h3>
                </div>
            </div>
        </div>
        <!--Fornecedor-->
        <div class="card">
            <div class="card card1">
                <div class="content">
                    <img src="imagens/icons/fornecedor.png">
                    <h3>Fornecedor</h3>
                </div>
            </div>
        </div>
</div> <!--end home-menu-quickaccess-->
</div> <!--end home-content-->

</body>
</html>

<?php include "./php/menu-lateral.php";?>
