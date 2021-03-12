<?php 
class HTML {
    private $code=[];
    public $data=[];
    public function set_code($name, $type, $path, $path_off){
        $this->code[$type][$name]['on'] = $path;
        $this->code[$type][$name]['off'] = $path_off;
    }
    public function get_code($name, $type="js", $url=""){
        $code="";
        if(!empty($this->code[$type][$name]["off"])){
            $url=$this->code[$type][$name]["off"];
        }elseif(empty($url)){
            return;
        }
        if($type=="js"){
            $code = '<script rel="stylesheet" src="'.$url.'"></script>';
        }elseif($type=="css"){
            $code = '<link rel="stylesheet" href="'.$url.'">';    
        }
        echo $code;
    }
    public function title($title=":page | :short_name"){
        foreach ($this->data as $key => $value) {
            $title = preg_replace('#:'.$key.'#', $value, $title);
        }
        echo '<title>'.$title.'</title>';
    }
}
?>