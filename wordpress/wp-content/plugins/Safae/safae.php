<?php
/*
Plugin Name: Safae
Plugin URI: http://wordpress.org/
Description: A plugging that sents a form informations by email.
Version: 0.2
Author: Badreddine Abourial
Author URI: http://wordpress.org/

*/
function Contact_Us_forum() {
    $content = "";
    $content .= '<h2>Contact Us Forum</h2>';
    $content .= '<form action="" method="post">';
    $content .= '<div class="form-group">';
    $content .= '<label for="name">Name: </label>';
    $content .= '<input type="text" name="name" id="name" placeholder="votre nom" class="form-control" />';
    $content .= '</div>';
    $content .= '<br />';
    $content .= '<div class="form-group">';
    $content .= '<label for="subject">Sujet: </label>';
    $content .= '<input type="text" name="subject" id="subject" placeholder="entrer votre sujet" class="form-control" />';
    $content .= '</div>';
    $content .= '<br />';
    $content .= '<div class="form-group">';
    $content .= '<label for="email">Email: </label>';
    $content .= '<input type="text" name="email" id="email" placeholder="votre email" class="form-control" />';
    $content .= '</div>';
    $content .= '<br />';
    $content .= '<div class="form-group">';
    $content .= '<label for="message">Message:</label>';
    $content .= '<textarea name="message" id="message" rows="5" cols="40" placeholder="veillez enter votre message" class="form-control"></textarea>';
    $content .= '</div>';
    $content .= '<br />';
    $content .= '<input type="submit" name="submit" value="Submit" class="btn btn-warning text-dark"/>';
    $content .= '</form>';
    return $content;
}
add_shortcode('contact_forum', 'Contact_Us_forum');
function contact_forum_capture(){
    if(isset($_POST['submit'])){
        $name = sanitize_text_field($_POST['name']);
        $subject = sanitize_text_field($_POST['subject']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        $to = get_option('admin_email');
        $subject="Test for submisssion";
        $messages = " ".$name." - ".$email." - ".$message;
        wp_mail($to,$subject,$messages);

}
}
add_action('wp-head', 'contact_forum_capture');
?>