<?php require_once('Connections/baba.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_baba, $baba);
$query_portafolio = "SELECT * FROM baba";
$portafolio = mysql_query($query_portafolio, $baba) or die(mysql_error());
$row_portafolio = mysql_fetch_assoc($portafolio);
$totalRows_portafolio = mysql_num_rows($portafolio);
?>
<div class="container-fluid portafolio">
<div class="row">
<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dos" id="dos" style="height:auto;">
			<main class="cd-main-content">

				<!--MENU-->
				<div class="cd-tab-filter-wrapper">
					<div class="cd-tab-filter">
						<h2>Portafolio</h2>
						<ul class="cd-filters">
							<li class="placeholder"> 
								<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
							</li> 
							<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
							<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Branding</a></li>
							<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Editorial</a></li>
							<li class="filter" data-filter=".color-3"><a href="#0" data-type="color-3">Web</a></li>
						</ul> <!-- cd-filters -->
					</div> <!-- cd-tab-filter -->
				</div> <!-- cd-tab-filter-wrapper -->
				<!--GALERIA-->
			<section class="cd-gallery">
				<ul id="da-thumbs" class="da-thumbs ">
					<li class="mix color-3 check2 radio2 option1"><a href="la_magia_sur.php"><img src="img/pag/lazapateria.jpg" alt="La Zapatería"/><div><span><?php echo $row_portafolio['titulo']; ?></span></div></a></li>
					<li class="mix color-1 check1 radio2 option3"><a href="la-bicicleta.php"><img src="img/pag/lb.jpg" alt="La Bicicleta"/><div><span><?php echo $row_portafolio['titulo']; ?></span></div></a></li>
					<li class="mix color-3 check2 radio2 option1"><a href="la_magia_sur.php"><img src="img/pag/la_magia.jpg" alt="La Magia del Sur"/><div><span>Colun La MAgia del Sur</span></div></a></li>
					<li class="mix color-3 check2 radio2 option1"><a href="http://www.plantachanqueahue.cl"><img src="img/pag/vital.jpg" alt="Vital Planta Chanqueahue"/><div><span>Vital Planta Chanqueahue</span></div></a></li>
					<li class="mix color-3 check2 radio2 option2"><a href="dr_martens.php"><img src="img/pag/drm.jpg" alt=""/><div><span>Dr. Martens</span></div></a></li>
					<li class="mix color-1 check3 radio3 option1"><a href="decopaencopa.php"><img src="img/pag/cnc.jpg" alt="De Copa en Copa"/><div><span>De Copa en Copa</span></div></a></li>					
					<li class="mix color-3 check1 radio2 option3"><a href="entrelibros.php"><img src="img/pag/entre.jpg" alt="Entrelibro"/><div><span><Madera>EntreLibros</Madera></span></div></a></li>
					<li class="mix color-1 check3 radio2 option4"><a href="maisonchef.php"><img src="img/pag/mchef.jpg" alt="Maison Chef"/><div><span>Maison Chef</span></div></a></li>
					<li class="mix color-3 check2 radio3 option3"><a href="pilares-inmobiliaria.php"><img src="img/pag/pilares.jpg" alt="violeta"/><div><span>Pilares Inmobiliaria</span></div></a></li>
					<li class="mix color-3 check2 radio2 option1"><a href="la_ultima_tarjeta.php"><img src="img/pag/la_ultima.jpg" alt="La Última Tarjeta"/><div><span>La Última tarjeta</span></div></a></li>					
					<li class="mix color-1 check1 radio3 option4"><a href="tu_rincon.php"><img src="img/pag/tr.jpg" alt="Tienda Tu Rincon"/><div><span>Tu Rincón</span></div></a></li>
					<li class="mix color-3 check1 radio2 option3"><a href="appduoc.php"><img src="img/pag/app-duoc.jpg" alt="APP Duoc UC"/><div><span>APP Duoc UC</span></div></a></li>
					<li class="mix color-2 check3 radio2 option4"><a href="teatro_udechile.php"><img src="img/pag/uchile.jpg" alt="Teatro U de Chile"/><div><span>Teatro de  la Universidad de Chile</span></div></a></li>
					<li class="mix color-3 check2 radio2 option1"><a href="hecho-amano.php"><img src="img/pag/amano.jpg" alt="hecho amano"/><div><span>Hecho Amano</span></div></a></li>
					<li class="mix color-2 check3 radio3 option2"><a href="dia_delos_muertos.php"><img src="img/pag/fzne_muerte.jpg" alt="fanzine Día de los Muertos"/><div><span>Día de los Muertos:
cómo se celebra en América Latina</span></div></a></li>
					<li class="mix color-3 check2 radio2 option1"><a class=" " data-toggle="modal" href="#detalle"><img src="img/pag/metra.jpg" alt="Metra Inmobiliaria"/><div><span>Metra Inmobiliaria</span></div></a></li>
					<li class="mix color-2 check1 radio3 option1"><a class=" " data-toggle="modal" href="<?php echo $_POST['id']; ?>"><img src="img/pag/cdarwin.jpg" alt="violeta"/><div><span>"Darwin" Una vida de anécdotas</span></div></a></li>
					<li class="gap"></li>
					<li class="gap"></li>
					<li class="gap"></li>
				</ul>
					<div class="cd-fail-message">No results found</div>
			</section> <!-- cd-gallery -->
			</main> <!-- cd-main-content -->	
	</section>
</div>
</div>
<div class="modal fade" id="<?php echo $_get['id']; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
            	<h5>id<?php echo $row_portafolio['id']; ?></h5>
                <h2><?php echo $row_portafolio['titulo']; ?></h2>
                <p><?php echo $row_portafolio['descripcion']; ?></p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<?php
mysql_free_result($portafolio);
?>
