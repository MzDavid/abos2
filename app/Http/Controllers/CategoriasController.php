<?php

namespace App\Http\Controllers;
require dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/phpmailer/PHPMailerAutoload.php';
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class CategoriasController extends Controller
{
    public function __construct(Request $request){
        $session = $this->getSession();
        if(empty($session)) {
            $request->session()->put("session",array(
                    "token" => $this->generateToken(),
                )
            );
        }
    } 

    public function nosotros(){
        return view('index/about');
    }

    public function reconocimientos(){
        return view('index/awards');
    }

    public function areas(){
        return view('index/areas');
    }

    public function contacto(){
        return view('index/contact');

    }

    public function login(){
        return view('index/login');
    }

    public function signin(){
        return view('index/registration');
    }

    public function blog(){
        return view('index/blog');
    }

    public function pleft(){
        return view('index/single-practice-left-sidebar');
    }

    public function single(){
        return view('index/single');
    }    

    public function singlepractice(){
        return view('index/single-practice');
    }    

    public function forgotpass(){
        return view('index/forgot-password');
    }        

     public function formulario(Request $request){
        $session = session('session');
        if($session['token'] && $request->isMethod("post") && $request->ajax()){
            $input = $request->all();
            $this->sendMailAdmin($input);
            $this->sendMailClient($input);
            return response()->json(['message'=>'ok!',"code"=>'200','result'=>$input],200);
        }
        return response()->json(['message'=>'No se ha validado correctamente!',"code"=>'404'],404);
    }
    private function sendMailAdmin($values){
        $email = new \PHPMailer();
        $email->isSMTP();
        $email->CharSet = 'UTF-8';
        $email->Host = "smtp.gmail.com";
        $email->Port=587;
        $email->SMTPSecure="tls";
        $email->SMTPAuth =true;
        $email->Username = "Deiimtz.90@gmail.com";
        $email->Password = "mamachiche";

        $email->setFrom("Deiimtz@gmail.com",'Moreno Montero');
        $email->addReplyTo($values['email'],$values['name']);
        $email->addAddress("Deiimtz@gmail.com");

        $email->WordWrap =100;
        $email->isHTML(true);

        $email->Subject = "Contacto página web";
        //$html = file_get_contents($this->url->get("index/email"));
        $email->msgHTML("<p style='text-align: center;'><strong>Hola este es un mensaje de la p&aacute;gina web de Moreno Montero</strong></p><p><strong>Nombre:&nbsp;</strong>{$values['name']}</p><p><strong>Tel&eacute;fono:&nbsp;</strong>{$values['tel']}</p><p><strong>Email:&nbsp;</strong>{$values['email']}</p><p><strong>Mensaje:&nbsp;</strong>{$values['message']}</p>");
        $email->AltBody = "Moreno Montero";

        if(!$email->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $email->ErrorInfo;
        } else {
            return true;
        }
        return true;
    }
    private function sendMailClient($values){
        $email = new \PHPMailer();
        $email->isSMTP();
        $email->CharSet = 'UTF-8';
        $email->Host = "smtp.gmail.com";
        $email->Port=587;
        $email->SMTPSecure="tls";
        $email->SMTPAuth =true;
        $email->Username = "deiimtz.90@gmail.com";
        $email->Password = "mamachiche";

        $email->setFrom("deiimtz.90@gmail.com",'Moreno Montero');
        $email->addReplyTo("deiimtz.90@gmail.com","Moreno Montero");
        $email->addAddress($values['email']);

        $email->WordWrap =100;
        $email->isHTML(true);
        $session = session('session');
        $email->Subject = "Gracias por utilizar nuestros servicios";
        $html = file_get_contents(url()->asset("/email-response-contact?key={$session['token']}"));
        $email->msgHTML($html);
        $email->AltBody = "Moreno Montero";

        if(!$email->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $email->ErrorInfo;
        } else {
            return true;
        }
        return true;
    }

    protected function getSession(){
        return session("session");
    }
    private function generateToken(){
        return bin2hex(openssl_random_pseudo_bytes(32));
    }
}
