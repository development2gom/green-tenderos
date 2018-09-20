<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['classBody'] = "login-page";
// page-login-v2 layout-full page-dark 

$this->registerJsFile(
    '@web/webAssets/js/site/index.js',
    ['depends' => [\app\assets\AppAsset::className()]]
);
?>

<div class="contend login-contend">

	<div class="login-title animation-slide-top animation-duration-1">
		<img src="<?=Url::base()?>/webAssets/images/logo-sorteo.png" alt="">
	</div>

	<div class="login-form animation-slide-top animation-duration-2">

		<h3>Ingresa</h3>
		
		<?php 
		$form = ActiveForm::begin([
			'id' => 'form-ajax'
		]);
		?>
			
			<?= $form->field($model, 'txt_clave_tienda')->textInput(["class" => "form-control", 'placeholder'=>'Clave tienda'])->label(false) ?>

			<?= $form->field($model, 'txt_clave_bodega')->textInput(["class" => "form-control", 'placeholder'=>'Clave bodega'])->label(false) ?>

			<div class="form-group form-group-check">
				<ul class="unstyled centered">
					<li>
						<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
						<label for="styled-checkbox-1">
							<span>He leído y acepto el aviso de privacidad</span>
						</label>
						<div class="styled-mask js-mask-check"></div>
					</li>
				</ul>
			</div>

			<div class="form-group form-group-actions">
				<?= Html::submitButton('<span class="ladda-label">Ingresar</span>', ["data-style" => "zoom-in", 'class' => 'btn btn-primary ladda-button', 'name' => 'login-button']); ?>
			</div>

		<?php ActiveForm::end(); ?>

	</div>

	<div class="login-instrucciones">
		<img class="login-instrucciones-img" src="<?=Url::base()?>/webAssets/images/instrucciones.png" alt="">
	</div>

</div>


<div class="modal modal-aviso fade" id="modal-aviso" aria-labelledby="modal-aviso" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-simple modal-center">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">Aviso de Privacidad - Clientes</h4>
			</div>
			<div class="modal-body">
				
				<p class="p3"><span class="s1"><strong>1. Responsable del tratamiento de sus datos personales</strong></span></p>
        
				<p class="p3"><span class="s1"><strong>Grupo Gepp, S.A.P.I. de C.V., (&ldquo;</strong></span><span class="s2"><strong>GEPP&rdquo;), ,</strong></span><span class="s1"> persona moral, debidamente constituida conforme a las leyes de la Rep&uacute;blica Mexicana, con domicilio en Av. Santa Fe No. 485, piso 4, Col. Cruz Manca, Ciudad de M&eacute;xico, Cuajimalpa de Morelos, C.P. 05349, es la persona responsable del tratamiento de sus datos personales.</span></p>
				
				<p class="p3"><span class="s1">Para el Responsable, el tratar sus datos de manera leg&iacute;tima resulta un tema prioritario. Este Aviso de Privacidad complementa cualesquiera otros avisos de privacidad simplificados que nuestra organizaci&oacute;n haya puesto a su disposici&oacute;n y resulta supletorio en todo aquello que expresamente no refieran tales avisos.</span></p>
				
				<p class="p3"><span class="s1"><strong>2. Departamento de datos personales:</strong></span></p>
				
				<p class="p3"><span class="s1"><strong>Domicilio: </strong>Av. Santa Fe No. 485, piso 4, Col. Cruz Manca, Ciudad de M&eacute;xico., Cuajimalpa de Morelos, C.P. 05349.</span></p>
				<p class="p5"><span class="s3"><strong>Correo electr&oacute;nico:</strong> <a href="mailto:datos.personales@gepp.com"><span class="s4">datos.personales@gepp.com</span></a></span></p>
				
				<p class="p3"><span class="s1"><strong>3. Finalidades del tratamiento de los datos personales</strong></span></p>
				
				<p class="p3"><span class="s1">El Responsable en este acto recaba sus datos para las siguientes finalidades: </span></p>
				
				<p class="p3"><span class="s1">I.- Para darlo de alta como cliente de nuestros servicios;</span></p>
				<p class="p3"><span class="s1">II.- Para las finalidades administrativas relacionadas con el desempe&ntilde;o de las obligaciones contractuales relativas, as&iacute; como para el desempe&ntilde;o de las obligaciones de ley aplicables;</span></p>
				<p class="p3"><span class="s1">III.<span class="Apple-converted-space">&nbsp; </span>Para contactarlo y ofrecerle promociones de eventos presentes o futuros, reportes estad&iacute;sticos para promotores, organizadores y patrocinadores de eventos deportivos a trav&eacute;s de boletines y newsletters;</span></p>
				<p class="p3"><span class="s1">IV.- Para hacerle llegar ofertas de forma personalizada y prestarle servicios m&aacute;s apropiados por ejemplo, para hacerle recomendaciones y mostrarle el contenido de los productos de la familia GEPP, as&iacute; como promociones, concursos y/o sorteos de la marca, incluyendo informaci&oacute;n publicitaria de productos relativos al acondicionamiento f&iacute;sico, a la salud y al cuidado de la imagen personal.</span></p>
				<p class="p3"><span class="s1">V.-Mantener un control sobre el acceso f&iacute;sico a nuestras instalaciones y poder detectar alguna incidencia.<strong>&nbsp;</strong></span></p>
				
				<p class="p3"><span class="s1">De conformidad con los lineamientos publicados en el Diario Oficial de la Federaci&oacute;n el 17 de enero del 2013, le informamos que las finalidades necesarias para la existencia, mantenimiento y cumplimientos de nuestra relaci&oacute;n jur&iacute;dica son las detalladas en<span class="Apple-converted-space">&nbsp; </span>el punto 3 referidos anteriormente. En ese sentido, es necesario que indique si consiente el tratamiento de sus datos personales con relaci&oacute;n a las finalidades se&ntilde;aladas en el punto 3, al no ser &eacute;stos necesarios o indispensables para nuestra relaci&oacute;n jur&iacute;dica.</span></p>
				
				<p class="p3"><span class="s1">□ Consiento que mis datos personales sean tratados conforme a todas las finalidades referidas en los t&eacute;rminos de este aviso de privacidad.</span></p>
				
				<p class="p3"><span class="s1"><strong>4. Datos personales que recabamos </strong></span></p>
				
				<p class="p3"><span class="s1">Recabamos sus datos personales de forma personal cuando usted<span class="Apple-converted-space">&nbsp; </span>nos los proporciona, de manera directa, as&iacute; como<span class="Apple-converted-space">&nbsp; </span>ya sea<span class="Apple-converted-space">&nbsp; </span>por tel&eacute;fono, a trav&eacute;s de correo electr&oacute;nico o de nuestro sitio Web. Los datos personales que obtenemos son los<span class="Apple-converted-space">&nbsp; </span>siguientes: nombre, edad, domicilio, tel&eacute;fono, nacionalidad, correo electr&oacute;nico, Cedula &Uacute;nica de Registro de Poblaci&oacute;n, Registro Federal de Contribuyentes, n&uacute;mero de hijos, nombre y tel&eacute;fono de la persona que refiri&oacute; al cliente, beneficiarios y referencias laborales.</span></p>
				
				<p class="p3"><span class="s1">De conformidad con lo que establece el art&iacute;culo 9 de la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares, cuando el Responsable recabe de Usted tales datos, le ser&aacute; requerido su consentimiento expreso para el tratamiento de estos datos, por lo que le solicitaremos que, en su momento, indique si acepta o no el tratamiento, a trav&eacute;s del mecanismo electr&oacute;nico que hemos implementado para estos efectos, o en su caso, nos proporcione este documento debidamente firmado.</span></p>
				
				<p class="p3"><span class="s1"><strong>5. Datos personales sensibles, financieros y patrimoniales que recabamos</strong></span></p>
				
				<p class="p3"><span class="s1">5.1 </span><span class="s2">Datos Sensibles:</span><span class="s1"> El Responsable recaba datos sensibles para llevar a cabo las finalidades descritas en el presente aviso de privacidad. Dichos datos son los siguientes: Antecedentes de salud. Sus datos ser&aacute;n tratados &uacute;nicamente para las finalidades descritas en este Aviso de Privacidad.</span></p>
				
				<p class="p3"><span class="s1">5.2 </span><span class="s2">Datos Financieros y Patrimoniales.-</span><span class="s1"> Nuestra organizaci&oacute;n recaba de usted los datos financieros y patrimoniales que resultan necesarios para nuestra relaci&oacute;n contractual. Dichos datos son los siguientes: instituci&oacute;n bancaria, sucursal, n&uacute;mero de cuentas bancarias para transferencia de pago de n&oacute;mina, reembolso de gastos, pago de prestaciones, datos de tarjetas de cr&eacute;dito. </span></p>
				
				<p class="p6"><span class="s1"><strong>6. Mecanismos para que el titular pueda manifestar su negativa para el tratamiento de sus datos personales para aquellas finalidades que no son necesarias, ni hayan dado origen a la relaci&oacute;n jur&iacute;dica con el responsable.</strong></span></p>
				<p class="p7"><span class="s1">De manera adicional, utilizaremos su informaci&oacute;n personal para las siguientes finalidades que no son necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atenci&oacute;n: &nbsp;</span></p>
				<ul class="ul1">
				<li class="li3"><span class="s1">Finalidad secundaria para fines medir el nivel de satisfacci&oacute;n de cliente o de la calidad de nuestros productos o servicios.</span></li>
				</ul>
				<p class="p8"><span class="s1"><em>En caso de que no desee que sus datos personales se utilicen para estos fines, ind&iacute;quelo a continuaci&oacute;n: </em></span></p>
				<p class="p8"><span class="s1"><strong>□ <span class="Apple-converted-space">&nbsp; &nbsp; </span><em>No consiento que mis datos personales se utilicen para los fines secundarios mencionados en los p&aacute;rrafos anteriores.</em></strong></span></p>
				<p class="p8"><span class="s1">La negativa para el uso de sus datos personales para estas finalidades no podr&aacute; ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros.</span></p>
				<p class="p3"><span class="s1"><strong>7. Uso de Cookies y Web Beacons</strong></span></p>
				
				<p class="p3"><span class="s1">Le informamos que no recabamos datos personales a trav&eacute;s del uso de Cookies o Web Beacons, y otras tecnolog&iacute;as para obtener informaci&oacute;n personal de usted, como pudiera ser la siguiente:</span></p>
				
				<ul class="ul1">
				<li class="li3"><span class="s1">Su tipo de navegador y sistema operativo.</span></li>
				<li class="li3"><span class="s1">Las p&aacute;ginas de Internet que visita.</span></li>
				<li class="li3"><span class="s1">Los v&iacute;nculos que sigue.</span></li>
				<li class="li3"><span class="s1">La direcci&oacute;n IP.</span></li>
				<li class="li3"><span class="s1">El sitio que visit&oacute; antes de entrar al nuestro.</span></li>
				</ul>
				
				<p class="p3"><span class="s1"><strong>8. Opciones y medios para limitar el uso o divulgaci&oacute;n de datos personales</strong></span></p>
				
				<p class="p3"><span class="s1">Usted puede dejar de recibir mensajes por correo electr&oacute;nico, impresos, por tel&eacute;fono fijo o celular comunic&aacute;ndose con nuestro Responsable de Datos Personales. </span></p>
				
				<p class="p3"><span class="s1"><strong>9. Medios para ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n</strong></span></p>
				
				<p class="p3"><span class="s1">Usted tiene el derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, as&iacute; como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando resulten ser excesivos o innecesarios para las finalidades que justificaron su obtenci&oacute;n u oponerse al tratamiento de los mismos para fines espec&iacute;ficos.</span></p>
				
				<p class="p3"><span class="s1">Los mecanismos que se han implementado para el ejercicio de dichos derechos son a trav&eacute;s de la presentaci&oacute;n de la solicitud (&ldquo;Solicitud de Ejercicio de Derechos ARCO&rdquo;) la cual deber&aacute; ser solicitada a nuestro Responsable de Datos Personales, enviando un correo electr&oacute;nico al se&ntilde;alado previamente, acompa&ntilde;ando la siguiente informaci&oacute;n:</span></p>
				
				<p class="p3"><span class="s1">1.- Nombre y domicilio completo;</span></p>
				
				<p class="p3"><span class="s1">2.- Identificaci&oacute;n con la que acredite su personalidad (Credencial para votar emitida por el Instituto Nacional Electoral [&ldquo;INE&rdquo;], Pasaporte vigente, C&eacute;dula Profesional, o en caso de ser de nacionalidad extranjera, su documento migratorio vigente);</span></p>
				
				<p class="p3"><span class="s1">3.- En caso de no ser el titular quien presente la solicitud, el documento que acredite la existencia de la representaci&oacute;n, es decir instrumento p&uacute;blico o carta poder firmada ante dos testigos, junto con la identificaci&oacute;n del titular y del representante legal (Credencial del IFE, Pasaporte vigente, C&eacute;dula Profesional, o en caso de ser de nacionalidad extranjera, su documento migratorio vigente)</span></p>
				
				
				<ul class="ul1">
				<li class="li3"><span class="s1"> Para el caso de menores de edad, los documentos para acreditar la representaci&oacute;n legal del menor, que ser&aacute;n: acta de nacimiento y credencial con fotograf&iacute;a del menor (la otorgada por la instituci&oacute;n acad&eacute;mica a donde acuda), credencial del Instituto Mexicano del Seguro Social (&ldquo;IMSS&rdquo;), Pasaporte vigente, o cualquier otra que cuente con fotograf&iacute;a del mismo, adem&aacute;s que al acudir a presentar los documentos para su cotejo respectivo, la firma del documento que se anexar&aacute; a la solicitud como &ldquo;Acreditaci&oacute;n de representaci&oacute;n legal&rdquo; se manifieste bajo protesta de decir verdad ser el responsable del menor;</span></li>
				</ul>
				
				<ul class="ul1">
				<li class="li3"><span class="s1">Para el caso de interdictos (incapacitados), los documentos para acreditar la representaci&oacute;n legal ser&aacute;n: acta de interdicto y credencial con fotograf&iacute;a de la persona que ostente esta situaci&oacute;n jur&iacute;dica, ya sea Credencial para votar emitida por el Instituto Federal Electoral (&ldquo;IFE&rdquo;), Pasaporte vigente, C&eacute;dula Profesional o documento migratorio (este &uacute;ltimo caso para el caso de extranjeros). </span></li>
				</ul>
				
				<p class="p3"><span class="s1">5.- Descripci&oacute;n clara y precisa de los datos personales respecto de los cuales busca ejercer alguno de los Derechos ARCO, cu&aacute;l es el derecho a ejercer y las razones por las cuales desea ejercitarlo;</span></p>
				
				<p class="p3"><span class="s1">6.- Cualquier documento o informaci&oacute;n que acredite que sus datos personales se encuentran en propiedad de <strong>Grupo Gepp</strong>.</span></p>
				
				<p class="p3"><span class="s1">7.- En caso de solicitar una rectificaci&oacute;n de datos, se indicar&aacute;n tambi&eacute;n las modificaciones a realizarse y se aportar&aacute; la documentaci&oacute;n que sustente su petici&oacute;n (acta de nacimiento, comprobante de domicilio, o aqu&eacute;l en el que conste y se motive el cambio que se va a realizar en sus datos personales).</span></p>
				
				<p class="p3"><span class="s1">El Responsable responder&aacute; su solicitud mediante correo electr&oacute;nico o personalmente en el domicilio antes indicado, en un t&eacute;rmino de 20 (veinte) d&iacute;as h&aacute;biles contados a partir de que se le env&iacute;e acuse de recibo de la misma. En caso de que la solicitud sea procedente, la respuesta podr&aacute; enviarse v&iacute;a correo electr&oacute;nico o de forma personal. <strong>Grupo Gepp</strong> podr&aacute; solicitarle para poder darle una respuesta, presente para cotejo en el domicilio antes descrito, original de los documentos que envi&oacute; junto con su solicitud, dentro de los 5 (cinco) d&iacute;as h&aacute;biles siguientes a que le sean requeridos. Si pasado dicho t&eacute;rmino usted no ha presentado los documentos, su solicitud se archivar&aacute; y el Aviso de Privacidad continuar&aacute; vigente hasta en tanto no se presente una nueva solicitud.</span></p>
				
				<p class="p3"><span class="s1">Cuando la solicitud sea procedente y se hayan llevado a cabo los cotejos correspondientes con respecto a la personalidad y titularidad de los Derechos ARCO, los t&eacute;rminos para llevar a cabo la solicitud ser&aacute;n los siguientes:</span></p>
				
				
				<ul class="ul1">
				<li class="li3"><span class="s1">Para el acceso de los datos: dentro de un plazo de 15 (quince) d&iacute;as contados a partir de la respuesta afirmativa hecha por el Responsable, v&iacute;a correo electr&oacute;nico. </span></li>
				<li class="li3"><span class="s1">Para la rectificaci&oacute;n de los datos: dentro de un plazo de 15 (quince) d&iacute;as contados a partir de la respuesta afirmativa hecha por el Responsable.</span></li>
				<li class="li3"><span class="s1">Para la cancelaci&oacute;n u oposici&oacute;n de los datos: se har&aacute; primero un bloqueo de los mismos, desde el momento en que se hizo el cotejo de la documentaci&oacute;n requerida, en donde el acceso a los datos personales estar&aacute; restringido a toda persona hasta que haya una respuesta a la solicitud ya sea afirmativa o negativa, en el primer caso dentro de un plazo de 15 (quince) d&iacute;as contados a partir de la respuesta afirmativa hecha por el Responsable, y en el segundo caso se har&aacute; el desbloqueo de los mismos para continuar con el tratamiento. </span></li>
				</ul>
				
				<p class="p3"><span class="s1">Los plazos referidos en los incisos anteriores se podr&aacute;n prorrogar una sola vez por un periodo igual en caso de ser necesario y previa notificaci&oacute;n hecha por el Responsable.</span></p>
				
				<p class="p3"><span class="s1"><strong>&ldquo;GEPP&rdquo; </strong>podr&aacute; negar el ejercicio de los Derechos ARCO, en los siguientes supuestos:</span></p>
				
				<ol class="ol1">
					<li class="li3"><span class="s1">Cuando usted no sea el titular de los datos personales, o no haya acreditado la representaci&oacute;n del titular;</span></li>
					<li class="li3"><span class="s1">Cuando sus datos personales no obren en la base de datos del Responsable;</span></li>
					<li class="li3"><span class="s1">Cuando se lesionen los derechos de un tercero;</span></li>
					<li class="li3"><span class="s1">Cuando exista un impedimento legal o la resoluci&oacute;n de una autoridad competente que restrinja sus Derechos ARCO;</span></li>
					<li class="li3"><span class="s1">En caso de cancelaci&oacute;n, cuando los datos personales sean objeto de tratamiento para la prevenci&oacute;n o para el diagn&oacute;stico m&eacute;dico o la gesti&oacute;n de servicios de salud, o;</span></li>
					<li class="li3"><span class="s1">Cuando la rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n haya sido previamente realizada.</span></li>
				</ol>
				
				<p class="p3"><span class="s1">La Negativa podr&aacute; ser parcial, en cuyo caso, <strong>&ldquo;GEPP&rdquo; </strong>efectuar&aacute; el acceso, rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n en la parte procedente.</span></p>
				
				<p class="p3"><span class="s1">El ejercicio de los "Derechos ARCO" ser&aacute; gratuito, pero si Usted reitera su solicitud en un periodo menor a 12 (doce) meses, los costos ser&aacute;n de 3 (tres) d&iacute;as de Salario M&iacute;nimo General Vigente en el Distrito Federal, m&aacute;s el Impuesto al Valor Agregado, a menos que existan modificaciones sustanciales al Aviso de Privacidad que motiven nuevas Solicitudes de Ejercicio de Derechos ARCO. Usted deber&aacute; de cubrir los gastos justificados de env&iacute;o o el costo de reproducci&oacute;n en copias u otros formatos.</span></p>
				
				<p class="p3"><span class="s1">Para mayor informaci&oacute;n, favor de contactar al Responsable de datos personales, en el correo electr&oacute;nico se&ntilde;alado anteriormente.</span></p>
				
				<p class="p3"><span class="s1"><strong>10. Mecanismos y procedimientos para que el titular, en su caso, revoque su consentimiento en cualquier momento</strong></span></p>
				
				<p class="p3"><span class="s1">En cualquier momento del tratamiento usted podr&aacute; revocar el consentimiento que ha otorgado para el tratamiento de sus datos, para ello es necesario que contacte al Responsable de protecci&oacute;n de datos, donde le ser&aacute; indicado el procedimiento que debe seguir para realizar la revocaci&oacute;n de su consentimiento.</span></p>
				
				<p class="p8"><span class="s1"><strong>11. Transferencias de datos personales dentro de M&eacute;xico y al extranjero</strong></span></p>
				<p class="p8"><span class="s1">Sus datos personales pueden ser transferidos y tratados dentro y fuera del pa&iacute;s, por personas distintas a esta empresa. Nosotros compartimos sus datos entre nuestras filiales para cumplir con los objetos sociales de las mismas as&iacute; como con instituciones bancarias para efecto de pagar la n&oacute;mina y prestaciones de los empleados como la integraci&oacute;n del seguro de gastos m&eacute;dicos, fondo de ahorro, revisiones m&eacute;dicas integrales, despachos externos para llevar a cabo el objeto de la sociedad. &nbsp;Sus datos se encuentran protegidos en virtud de que nuestras filiales y subsidiarias, o bien nuestros socios comerciales y/o prestadores de servicio, operar&aacute;n bajo la misma Pol&iacute;tica de Protecci&oacute;n de Datos Personales. En todo caso su informaci&oacute;n ser&aacute; compartida solamente para las finalidades citadas en este aviso de privacidad.&nbsp;&nbsp;</span></p>
				<p class="p3"><span class="s1">□ Consiento que mis datos personales sean compartidos en los t&eacute;rminos de este aviso de privacidad.</span></p>
				
				<p class="p3"><span class="s1"><strong>12. Medidas de seguridad implementadas</strong></span></p>
				
				<p class="p3"><span class="s1">Para la protecci&oacute;n de sus datos personales hemos instrumentado medidas de seguridad de car&aacute;cter administrativo, f&iacute;sico y t&eacute;cnico con el objeto de evitar p&eacute;rdidas, mal uso o alteraci&oacute;n de su informaci&oacute;n.</span></p>
				
				<p class="p3"><span class="s1">Cuando comunicamos o compartimos su informaci&oacute;n con terceros que nos prestan alg&uacute;n servicio, requerimos y verificamos que cuenten con las medidas de seguridad necesarias para proteger sus datos personales, prohibiendo el uso de su informaci&oacute;n personal para fines distintos a los encargados; lo anterior en el entendido que no obstante lo anterior, cualquier incumplimiento por dichos terceros a lo previsto en la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares y su Reglamento es exclusiva responsabilidad de dichos terceros.</span></p>
				
				<p class="p3"><span class="s1"><strong>13. Modificaciones al aviso de privacidad</strong></span></p>
				
				<p class="p3"><span class="s1">Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad.</span></p>
				
				<p class="p3"><span class="s1">Estas modificaciones estar&aacute;n disponibles al p&uacute;blico a trav&eacute;s de cualquiera de los siguientes medios: (i) anuncios visibles en las oficinas corporativas; (ii) tr&iacute;pticos o folletos disponibles en las oficinas corporativas; (iii) en nuestra p&aacute;gina de Internet <a href="http://www.gepp.com.mx"><span class="s4">www.gepp.com.mx</span></a><span class="Apple-converted-space">&nbsp; </span>o (iv) se las haremos llegar al &uacute;ltimo correo electr&oacute;nico que nos haya proporcionado. </span></p>
				
				<p class="p3"><span class="s1"><strong>14. Derecho de promover los procedimientos de protecci&oacute;n de derechos y de verificaci&oacute;n que sustancia el Instituto</strong></span></p>
				
				<p class="p3"><span class="s1">Cualquier queja o informaci&oacute;n adicional respecto al tratamiento de sus datos personales o duda en relaci&oacute;n con la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares o con su Reglamento, podr&aacute; dirigirla al IFAI.<span class="Apple-converted-space">&nbsp; </span>Para mayor informaci&oacute;n visite <a href="http://www.ifai.org.mx/"><span class="s6">www.ifai.org.mx</span></a> </span></p>
				
				
				<p class="p12"><span class="s1">Nombre del Titular </span></p>
				
				<p class="p12"><span class="s1">__________________________________________</span></p>
				
				<p class="p12"><span class="s1">Firma Aut&oacute;grafa___________________________________</span></p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="btn-acepto-terminos">Acepto el Aviso de Privacidad</button>
			</div>
		</div>
	</div>
</div>