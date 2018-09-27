<?php 
 $current = $_SERVER['PHP_SELF'];

	function activeurl($url,$actual){
		if($url==$actual){
			return "act";
		}	
	}
	
?>
<header class="encabezado">
	<div class="contenedor">
		<button class="nav-open">
			<span class="inner"></span>
		</button>
		<a href="/" class="logo"><img src="images/ICPNA.svg" width="156"  alt="ICPNA" /></a>
		<nav id="navigation" class="animated">
			<ul>
				<li class="nav-resp">
					<a href="quienes-somos.php" class="<?php echo  activeurl('/quienes-somos.php',$current)?>">NOSOTROS</a>
				</li>
				<li>
					<a href="programa-jovenes-adultos.php" class="<?php echo  activeurl('/programa-jovenes-adultos.php',$current)?>">PROGRAMA J&Oacute;VENES Y ADULTOS</a>
				</li>
				<li>
					<a href="programa-ninos.php" class="<?php echo activeurl('/programa-ninos.php',$current)?>">PROGRAMA NI&Ntilde;OS</a>
				</li>
				<li>
					<a href="sedes.php" class="<?php echo activeurl('/sedes.php',$current)?>">SEDES</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
