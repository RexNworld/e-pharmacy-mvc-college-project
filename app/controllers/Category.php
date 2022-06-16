<?php
class Category extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->medcineModel = $this->model('Medicine');
        $this->url = $this->getUrl();
    }
     
    public function index(){
        
        $c = count($url);
        if($c !== 3)
           $this->errorPage();
    
        if(isset($url[3]))
            $this->view('Category',$data);  
    }

    public function errorPage(){
        $c = count($this->url);
        $url = $this->url;
        $allMed = $this->getMedicineByTag($url[$c-1]);
        $name = $this->medcineModel->getCategoriesByName($url[$c-1]);
        if($c !== 4)
           $this->missingPage();
           
        $data = [
        'title' => $name[0]->c_name,
        'termname'=> 'Medicine One',
        'count'=> '250',
        'categoryList' => $this->medcineModel->getCategories(),
        'medcineList' => $allMed,
        'url' => $url[$c-1],
        ];
           
        $this->view('Category',$data);
    }

    public function missingPage(){
        $this->view('404');
    }
    
    public function getMedicineByTag($slug){
        $medicine = $this->medcineModel->getMedicine();
        $resultMed = [];
        foreach($medicine as $med){
            $getTag = explode(',',$med->categories);
            foreach($getTag as $tag){
                $tags = str_replace(' ', '-',strtolower(trim($tag)));
                if($tags === $slug){
                    $resultMed[] = $med;
                }
            }
        }
        return $resultMed;
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_SERVER['REQUEST_URI'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        else{
            return [];
        }
      }
} 
?>