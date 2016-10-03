<?php
if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Display_override
{

    function star_all_fourletter_words()
    {
        $p_class_lead   = '/<\s*p class=\"lead\"[^>]*>([^<]*)<\s*\/\s*p\s*>/';
        $CI             = &get_instance();
        $current_output = $CI->output->get_output();
        $match          = array();
        $old_text       = array();  
        $new_text       = '';
        $space_delim    = ' ';
                        
        // if the tag is found
        if (preg_match($p_class_lead, $current_output, $match) )
        {
            $old_text = explode($space_delim, $match[1]); 
            $new_text = $this->star_words($old_text);
       
            //inserts the edited text back into the tags <p class="lead>...</p>
            $new_curr = preg_replace($p_class_lead, $new_text, $current_output);
            $CI->output->set_output($new_curr);
            $CI->output->_display();
        }
        else
        {
            $CI->output->_display();
        }
    }

    private function star_words($para)
    {
        $updated = '<p class = "lead">';
        
        foreach ($para as $words)
        {

            if (strlen($words)==4 && preg_match("/[0-9.!?,;:]$/", $words)==false)
                $updated .= ' ****';
            else
                $updated .= ' ' . $words;
        }
        $updated .= '</p>';
        
        return $updated;
    }
}