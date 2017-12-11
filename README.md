# Shortcode-to-Emoji
Este pequeño proyecto convierte los emojis shortcodes a codificación del emoji en UTF8

# Uso muy simple
<pre>include('emoji_helper.php');
$texto_a_reemplazar = ReplaceEmoji($texto_a_reemplazar);

Esto buscará cadenas como shortcodes y la convertirá en UTF8 emoji

Por ejemplo: :airplane_departure: será convertido a 🛫
</pre>

# Ejemplo
<pre>
include('emoji_helper.php');
$texto = ":airplane_departure: es el shortcode de un avión";
$texto2 = ReplaceEmoji($texto);
</pre>

Visualización de variables
<pre>echo $texto;</pre>
:airplane_departure: es el shortcode de un avión
<br><br><br>
<pre>echo $texto2;</pre>
🛫 es el shortcode de un avión



