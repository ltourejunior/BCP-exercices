<?php

class view 
{ 
    // name (part of the path) of the .php file that actually contains the HTML code 
    // contact/form ... /system/project/views/contact/form.php 
    protected $template_name = null; 

    public $template_variables = array();
 
    /** 
    *an object is created, template_name is a property(which file should be use to display the vue). The construct method is given when an object is created
     *  
     */ 
    public function __construct($template_name) 
    { 
        $this->template_name = $template_name;  
    } 
 
    /** 
     * print the contents of the template 
     */ 
    public function render($print = true) 
    { 
        $rendered_content=$this->getRenderedContent();

        if($print) 
        { 
            // echo the contents of the file 
            echo $rendered_content;
        } 
        else 
        { 
            // return the contents of the file 
            return $rendered_content;
        } 
    } 

    protected function getRenderedContent()
    {
        // start output buffering (start'recording' any ouput)
        ob_start();

        //turn the array into variables (keys become names of variables)
        extract($this->template_variables);
        /*
        $name; // 'the value will be the email enter'
        $text; // 'the text written'
        $newletter; // '1' because checked  
        */

        // include the actual file (without output buffering this would be immediately printed out)
        //wITH the output buffering it is just stored in the buffer (in the 'recording')
        include VIEWS_DIR . '/' . $this->template_name . '.php';

        // get the contents of output buffer (the 'recording') and clean the buffer
        return ob_get_clean();
    }

    public function __toString()
    {
        return $this->render(false);
    }

    public function __set($name,$value)
    {
        $this->template_variables[$name]= $value;
    }
    public function __get($name)
    {
    if(array_key_exists($name, $this->template_variables))
        {
      return $this->template_variables[$name];
        }
    $trace = debug_backtrace();
    trigger_error(
        'Undefined property via __get(): ' . $name .
        ' in ' . $trace[0]['file'] .
        ' on line ' . $trace[0]['line'],
        E_USER_NOTICE);
    }

    public function __isset($name) //Allows us to check if a template variable exists like if it was a property of the object
    {
        return isset($this->template_variables[$name]);
    }
     public function __unset($name)// delete one item in the template arraya template variable like if it was a property of the object
    {
        unset($this->template_variables[$name]);
    }
}