<?php
class view {
    private $_controller;
    public function __construct(request $req) {
        $this->_controller=$req->getController();
    }
    public function render($view)
    {
        if(is_readable(ROOT.'views'.DS.$this->_controller.DS.$view.'.phtml'))
        {
            require_once ROOT.'views'.DS.$this->_controller.DS.$view.'.phtml';
        }
        else
        {
            throw new Exception('unknown view');
        }
    }
    public function get($composant)
    {
        if(is_readable(ROOT.'views'.DS.'layout'.DS.config::DEFAULT_LAYOUT.DS.$composant.'.php'))
        {
            require_once ROOT.'views'.DS.'layout'.DS.config::DEFAULT_LAYOUT.DS.$composant.'.php';
        }
        else echo "$composant not found";
    }
    public function loadStyle($file)
    {
        /*
         * ahla walid fel ca hedha le designeur doi taper le nom de fichier css par contre ena n7eb el php ydetecti les nom des fichier css hedhi premier sol wa illa el designeur ywalli obligé ysammi les fichier te3ou b facon standar par exmple style.css 7aja hakka          */
        echo '<link rel="stylesheet" type="text/css" href="'.config::BASE_URL.'views/layout/'.config::DEFAULT_LAYOUT.'/css/'.$file.'.css"/>';
    }
    public function loadJs($file)
    {
        echo '<script type="text/javascript" src="'.config::BASE_URL.'views/layout/'.config::DEFAULT_LAYOUT.'/js/'.$file.'.js"></script>';
    }
    public function loadImg($file,$option = array())
    {
            if(isset($option))
            {
                $ch="";
                foreach($option as $k => $v)
                {
                    $ch.=$k.'="'.$v.'" ' ;             
                            
                }
                $balise='<img src="'.config::BASE_URL.'views/layout/'.config::DEFAULT_LAYOUT.'/images/'.$file.'"'.' '.$ch.'/>';
            }
            else
            {
                $balise='<img src="'.config::BASE_URL.'views/layout/'.config::DEFAULT_LAYOUT.'/images/'.$file.'" />';
            }
           echo $balise;
    }
    // bon kayenou ychabah lel wp el fichier de teplate houa el fichier de vue fel ca hedha index.phtml w ya3mel structure te3ou bel interraction dynamique avec layout    
}

?>
