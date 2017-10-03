<?php
class person {

    var $name;
    public $height;
    protected $social_insurance;
    protected $pinn_number;

    function __construct($persons_name) {
        $this->name = $persons_name;
    }

    function set_name($new_name) {
        $this->name = $new_name;
    }
    function get_name() {
        return $this->name;
    }
    private function get_pinn(){
return $this->pinn_number;
}


}
?>
