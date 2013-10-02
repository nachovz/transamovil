{{$header}}

<div id="container">
<div id="container2">
<div id="foto"><iframe width="945" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ve/maps?client=safari&amp;q=Centro+Empresarial+Autana&amp;oe=UTF-8&amp;ie=UTF8&amp;hl=en&amp;hq=Centro+Empresarial+Autana&amp;hnear=Caracas+Metropolitan+District&amp;t=m&amp;ll=10.486293,-66.828847&amp;spn=0.016035,0.040512&amp;z=15&amp;output=embed"></iframe>
</div><!--foto-->



<div id="contenido"><span class="titleb">CONTÁCTANOS</span><br />
  <br />
  <div id="form">
  <!--aki empieza el code de formulario-->
	<form action="enviar.php" method="post" name="formulario" class="validable" onSubmit="return valida(this);">
	
    <label for="name">NOMBRE* </label>
	<input name="name" id="name" style="border: none"/>
	
    <label for="company">EMPRESA</label>
	<input name="company" type="company" id="company" value="" style="border: none">
    
    <label for="email">E-MAIL*</label>
    <input name="email" type="email"  id="email" value="" style="border: none">
	
    <label for="message">CONSULTA*</label>
    <textarea name="message" id="message" style="border: none"></textarea>
   <br/>
    <input name="send" type="submit" id="send"  value="ENVIAR"/>
    <input name="clear" type="reset" id="clear"  value="BORRAR"/>
    </form>

<!--aki termina el code de formulario-->
</div><!--form-->

  <span class="text">DIRECCIÓN:<br />
Av. Diego Cisneros, Centro Empresarial Autana. PB. Los Ruices. Caracas. Venezuela<br />
<br />
TELÉFONO:<br />
+58-212-234.65.50<br />
<br />
E-MAIL:<br />
<a href="mailto:info@transamovil.com">info@transamovil.com</a><br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</span><span class="ftxt">*CAMPOS OBLIGATORIOS</span><br /></div><!--contenido-->
  
</div><!--container2-->
</div><!--container-->

{{$footer}}