DNS Dinámico
============

La aplicación web pone a disposición de sus usuarios una API para realizar la
actualización de los registros de una zona a través del método PATCH de HTTP. El
recurso corresponde a:

	{_url}/api/bind10/zonas/crud/:zona

Donde *:zona* es el FQDN de la zona que se desea actualizar, por ejemplo
*sasco.cl.*

Solicitud
---------

Un ejemplo de solicitud, para el registro *test* de la zona *sasco.cl.*
sería:

	$ curl {_url}/api/bind10/zonas/crud/sasco.cl. \
		--request PATCH \
		-u YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY:X \
		-d '{"registros":[{"registro":"test", "ip":"192.168.1.10"}]}'

Donde *YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY* es el hash de 32 caracteres asignado
al usuario que es dueño de la zona.

El formato de los datos de la solicitud, debe ser un objeto JSON con el
arreglo *registros*, lo anterior a pesar de que se esté actualizando sólo un
registro de la zona. O sea:

	{
		"registros": [
			{
				"registro": "test",
				"ip": "192.168.1.10"
			}
		]
	}

Si son varios registros, son simplemente varios elementos en el arreglo:

	{
		"registros": [
			{
				"registro": "test",
				"ip": "192.168.1.10"
			},
			{
				"registro": "test2",
				"ip": "192.168.1.11"
			}
		]
	}

En caso de no ser especificada la IP de un registro, esta será asignada a la IP
de quien está haciendo la solicitud. O sea:

	{
		"registros": [
			{
				"registro": "test"
			}
		]
	}

Además para cada registro se puede indicar un *tipo* de registro, el cual de no
ser especificado es por defecto *A*.

Respuesta
---------

En caso de éxito, se entregará el código HTTP 200 y el mensaje:

	"Registro(s) de la zona sasco.cl. modificado(s)"

El mensaje indica que los registros fueron modificados, sin embargo si alguno
de los registros no existe no se creará y no se generará error. Por lo cual el
usuario debe verificar previamente que el registro exista.

Los posibles códigos de errores HTTP son:

- 400: zona solicitada no existe.
- 401: no se han enviado credenciales de autenticación o bien son inválidas.
- 403: usuario autenticado no es el dueño de la zona que está modificando.
