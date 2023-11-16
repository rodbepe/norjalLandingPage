<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
         
        public function contacto(){
	
	  $a= ' 
       <html> 
        <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       
        </head>


          
          <table style=" border: 1px solid black;" > 
          <tr ><td style="padding:20px;">Nombre: '.$_POST['name']. ' </td></tr>
          <tr ><td style="padding:20px;">E-mail: '.$_POST['email'].'</td></tr>
          <tr ><td style="padding:20px;">Numero: '.$_POST['message'].'</td></tr>
                                      
        
        </table>
        </body> 
        </html>
         '; 
        $headers = "From: contacto@norjal.com" . "\r\n" . "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

      
        mail('contacto@norjal.com',"Contacto. " ,$a,$headers);


 	
		      
        echo "<script>
        alert( '".$_POST['name']." en breve estaremos en contacto contigo.');
        </script>"; 
        
        echo "<script> window.location='/index.php'; </script>";
		
	}
}
