## REGISTRO DE VISITAS
<p>Sistema especializado para el registro de visitas</p>

## LENGUAJES, FRAMEWORKS UTILIZADOS Y HERRAMIENTAS <g-emoji class="g-emoji" alias="hammer_and_wrench" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f6e0.png">🛠️</g-emoji>
<ul>
	<li><b>PHP</b></li>
	<li><b>lARAVEL VER: 8.5</b></li>
	<li><b>MYSQL</b></li>
	<li><b>AXIOS</b></li>
	<li><b>VUEX</b></li>
	<li><b>VUE.JS</b></li>
	<li><b>VUE ROUTER</b></li>
	<li><b>ADMIN-LTE</b></li>
</ul>

## COMENZANDO <g-emoji class="g-emoji" alias="rocket" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f680.png">🚀</g-emoji>

<p><em>Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local, para propósitos de desarrollo y pruebas.</em></p>

## PRE-REQUISITOS <g-emoji class="g-emoji" alias="clipboard" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4cb.png">📋</g-emoji>

<ul>
	<li><b>PHP >= 7.3</b></li>
	<li><b>NODEJS:</b> LINK DESCARGA https://nodejs.org/es/</li>
	<li><b>COMPOSER:</b> LINK DESCARGA https://getcomposer.org/download/</li>
</ul>

## INSTALACIÓN <g-emoji class="g-emoji" alias="wrench" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f527.png">🔧</g-emoji>

<h3>Sigue paso a paso nuestras intrucciones para ejecutar correctamente el sistema</h3>

<em>Clonamos el repositorio</em>
<pre>
	<b>git clone https://github.com/elyugos/sistema-de-regristro-de-visitas.git</b>
</pre>
<em>Instalamos nuestras dependencias con</em>
<pre>
	<b>composer install</b>
</pre>
<em>Realizamos una copia de nuestro archivo .env con el siguiente comando</em>
<pre>
	<b>cp .env.example .env</b>
</pre>
<em>Generamos la key para nuestro .env</em>
<pre>
	<b>php artisan key:generate</b>
</pre>
<em>Instalamos nuestros paquetes necesarios </em>
<pre>
	<b>npm install</b>
</pre>
<em> Compilamos </em>
<pre>
	<b>npm run dev</b>
</pre>
<h3>Una vez terminemos con los pasos anteriores, procedemos a configurar nuestro archivo .env</h3>

<h2 style="color:red; text-align: center;"><b>IMPORTANTE:</b></h2>

<p>En el archivo .env creamos 2 variables nuevas llamadas: <b>APP_PATH_LOCAL_VUE && SANCTUM_STATEFUL_DOMAINS</b> </p>	
<ul>
	<li><b>APP_PATH_LOCAL_VUE || VALOR PREDETERMINADO "VACIO" :</b> Esta variable fue creada para entornos donde no contemos con un servidor o donde no podamos ejecutar el comando "<b>php artisan serve</b>" para que levante nuestro servidor, en esta variable podemos colocar la ruta absoluta en donde se encuentro nuestro public, ejemplo: github/visitas/public, de este modo vuejs apuntara hacia esta ruta. Es opcional</li>
	<li><b>SANCTUM_STATEFUL_DOMAINS || VALOR PREDETERMINADO "localhost" :</b> Variable importante para sanctum, paquete que usamos para autenticación, debemos colocar nuestra url sin su protocolo ejemplo: example.com </li>
</ul>

