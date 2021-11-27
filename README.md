BIND10 webapp
=============

**OBSOLETO**: Se recomienda usar [Cloudflare](https://www.cloudflare.com) para administrar los DNS.

Aplicación web que permite registrar y administrar registros para zonas DNS en un servidor BIND10.

La aplicación está construída usando el [módulo Bind10](https://github.com/SowerPHP/Bind10) del framework [SowerPHP](http://sowerphp.org).

Instalación

1.	El archivo de zonas debe estar ubicado en:

		data/sqlite/default.sqlite3

	**Nota**: tanto el archivo de la base de datos como el directorio padre
	(sqlite) deben ser escribibles por el usuario web.

2.	Se debe cargar en la base de datos de bind10 las tablas para usuario de
	la extensión sowerphp/app módulo Sistema/Usuarios. Esto creará el
	usuario *admin* con contraseña *admin*.

3.	Cargar en la base de datos de bind10 el script ubicado en
	*Model/Sql/bind10.sql*.

Extensión PHP: idn2
-------------------

**Esto nunca se probó**

Se recomienda tener instalada la extensión idn2 para PHP, de esta forma los
dominios con caracteres internacionales (por ejemplo eñes) serán convertidos al
formato estándar requerido por el servidor DNS.

La extensión se encuentra disponible en <http://pecl.p4.net/download.htm>.

	# apt-get install libidn2-0
	# wget -c http://pecl.p4.net/files/phpext/idn2.so
	# mv idn2.so /usr/lib/php5/20121212/
	# echo "extension=idn2.so" > /etc/php5/mods-available/idn2.ini
	# ln -s /etc/php5/mods-available/idn2.ini \
	    /etc/php5/apache2/conf.d/30-idn2.ini

El directorio de extensiones real (en este caso 20121212) puede ser verificado a
través del comando:

	# php -r "@phpinfo();" | grep ^extension_dir | awk '{print $3}'
