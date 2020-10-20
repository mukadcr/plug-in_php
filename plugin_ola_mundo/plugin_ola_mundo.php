<?php
/*
* Plugin Name: Olá Mundo, meu primeiro plug-in
* Plugin URI: https://sp.senac.br
* Description: Um plug-in muito simples que apenas coloca Olá mundo nos posts
* Version: 0.0.1
* Author: Murilo Casanova
* Author URI:
* License: CC BY 
*/

add_filter('login_errors', 'nova_mensagem_de_erro');

function nova_mensagem_de_erro(){
    return 'Credenciais inválidas!';
}

add_action('wp_head', 'coloca_comentario');

function coloca_comentario(){
    
    if (is_single()){

        echo '<meta property="og:title" content="' . get_the_title() . '">';
        echo '<meta property="og:site_name" content="' . wp_title('', false) . '">';
        echo '<meta property="og:url" content="' . get_permalink(get_the_ID()) . '">';

    }

}

?>