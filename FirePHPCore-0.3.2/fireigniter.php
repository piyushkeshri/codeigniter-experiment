class fireigniter
{
    /**
    * Constructor
    */
    function fireigniter()
    {
        //-- Load CodeIgniter Resources
        $CI =& get_instance();

        //-- Check Configuration
        if ($CI->config->item('fire_php_enabled') == true)
        {
            //-- Load FirePHP
            $CI->load->library('firephp-0.3.1/firephp');
        }
        else
        {
            //-- Load Fake FirePHP, an empty class and name instance 'firephp' instead of 'firephp_fake'
            $CI->load->library('firephp-0.3.1/firephp_fake', 'firephp');
        }
    }
}//END class