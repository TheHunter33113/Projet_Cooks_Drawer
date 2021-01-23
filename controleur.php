class controleur extends model {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new Model();  
     }   
      
     public function invoke()  
     {  
          if (!isset($_GET['objet']))  
          {  
               // no special book is requested, we'll show a list of all available books  
               $books = $this->model->getobjetlist();  
               include 'view/objetlist.php'; 
          } 
          else 
          { 
               // show the requested Objet 
               $book = $this->model->getobjet($_GET['objet']); 
               include 'view/objet.php';  
          }  
     }  
}  
