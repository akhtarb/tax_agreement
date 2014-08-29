<?php
namespace tax_agreement\Resource;
/**
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @license http://opensource.org/licenses/lgpl-3.0.html
 */
class Form {
    protected $organizationname;
    protected $eventname;
    protected $eventdate;
    protected $eventlocation;
    protected $university;
    protected $filepath;
    
    protected $table = 'tax_mainclass'



 public function __construct()
    {
        parent::__construct();
        $this->organizationname = new \Variable\TextOnly(null, 'organizationname');
        $this->eventname = new \Variable\TextOnly(null, 'eventname');
        $this->eventdate = new \Variable\Date(null, 'eventdate');
        $this->eventlocation = new \Variable\TextOnly(null, 'eventlocation');
        $this->university = new \Variable\TextOnly(null, 'university');
        $this->filepath = new \Variable\File(null, 'filepath');
       
        
   
    }
    

}

?>
