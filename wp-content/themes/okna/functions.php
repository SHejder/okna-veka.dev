<?php
/**
 * @package   VeltheMe
 * @author    http://velerbu.com
 * @copyright Copyright (C) Velerbu
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

// check compatibility
if (version_compare(PHP_VERSION, '5.3', '>=')) {

    // bootstrap warp
    require(__DIR__ . '/warp.php');
}

add_filter('the_content', 'wpautop');
add_filter('the_excerpt', 'wpautop');


add_action('wp_enqueue_scripts', 'wpmidia_enqueue_masked_input');
function wpmidia_enqueue_masked_input()
{
    wp_enqueue_script('masked-input', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'));
}


add_action('wp_footer', 'wpmidia_activate_masked_input');
function wpmidia_activate_masked_input()
{
    ?>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".data").mask("99/99/9999");
            $(".tel").mask("+ 7 (999) 999-99-99");
            $(".cpf").mask("999.999.999-99");
            $(".cnpj").mask("99.999.999/9999-99");
        });
    </script>
    <?php
}

add_action('wpcf7_mail_sent', 'saveLead');

//function writeToLog($data, $title = '')
//{
//    $log = "\n------------------------\n";
//    $log .= date("Y.m.d G:i:s") . "\n";
//    $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
//    $log .= print_r($data, 1);
//    $log .= "\n------------------------\n";
//    file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
//    return true;
//}

$defaults = array('first_name' => '', 'last_name' => '', 'phone' => '', 'email' => '');


function saveLead($contact_form)
{


    $title = $contact_form->title;
    $posted_data = $contact_form->posted_data;

    if ('call request' == $title) { //Вместо "Контактная форма 1" необходимо указать название Вашей контактной формы
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
//        writeToLog(get_posted_data(), 'webform');

        $firstName = $posted_data['your-name']; //перехватываем поле [your-name]
        $phone = $posted_data['your-phone']; //перехватываем поле [your-phone]


        $queryUrl = 'https://okna-veka.bitrix24.ru/rest/872/e5x5ydd9foyuv6i8/crm.lead.add.json';
        $queryData = http_build_query(array(
            'fields' => array(
                "TITLE" => "Заказ расчета с сайта otdelka-balcony.ru от" . $firstName,
                "NAME" => $firstName,
                "STATUS_ID" => "NEW",
                "OPENED" => "Y",
                "PHONE" => array(array("VALUE" => $phone, "VALUE_TYPE" => "WORK")),
            ),
            'params' => array("REGISTER_SONET_EVENT" => "Y")
        ));

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ));

        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result, 1);
//        writeToLog($result, 'webform result');

        if (array_key_exists('error', $result)) echo "Error saving Lead: " . $result['error_description'] . "
        ";
    }
}
?>