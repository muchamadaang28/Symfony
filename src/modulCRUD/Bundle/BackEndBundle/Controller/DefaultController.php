<?php

namespace modulCRUD\Bundle\BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use modulCRUD\Bundle\BackEndBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    { 
        if($request->getMethod()=='POST'){
            $authenticationUtils = $this->get('security.authentication_utils');
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();
            
            //Mengambil session
            $session = new Session();
            // set and get session attributes
            $session->set('username',$username);
            
            $session->start();
            
            $username=$request->get('username');
            $password=$request->get('password');
            $encpass = sha1(strtoupper($username).":".strtoupper($password));
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('modulCRUDBackEndBundle:Users');

            $user = $repository->findOneBy(array('username'=>$username, 'password'=>$encpass));
            if($user){
//              Ketika berhasil Login
                return $this->render('modulCRUDBackEndBundle:Default:dasboard.html.twig',
                        array(
                            'name'=>$user->getFirstName(),
                            'last_username' => $lastUsername,
                            'error'         => $error,
                        )
                   );
            }
            else{
//              Ketika Gagal Login
                echo "<script type='text/javascript'>alert('Incorrect Password and Username')</script>";
                return $this->render('modulCRUDBackEndBundle:Default:index.html.twig');
            }
        }
        else{
           // Ketika data kosong
            return $this->render('modulCRUDBackEndBundle:Default:index.html.twig');
        }
    }
    
    public function signupAction(Request $request)
    {
        if($request->getMethod()=='POST'){
            $email=$request->get('email');
            $username=$request->get('username');
            $firstname=$request->get('firstname');
            $password=$request->get('password');
            $confirmPassword=$request->get('confirmPassword');
            
            if($password = $confirmPassword)
            {
                $encpass = sha1(strtoupper($username).":".strtoupper($password));

                $user = new Users();
                $user -> setEmail($email);
                $user -> setUsername($username);
                $user -> setFirstname($firstname);
                $user ->setPassword($encpass);

                $em = $this->getDoctrine()->getEntityManager();
                $em ->persist($user);
                $em ->flush();
                
                echo "<script type='text/javascript'>alert('Well Done, Regristration Sucsess !')</script>";
                return $this->render('modulCRUDBackEndBundle:Default:index.html.twig');
            }
            else // jika password dan confirm password tidak sama
            {
                echo "<script type='text/javascript'>alert('Proses Gagal, data tidak diproses !!! Password Salah')</script>";
                return $this->render('modulCRUDBackEndBundle:Default:signup.html.twig');
            }
        }
         return $this->render('modulCRUDBackEndBundle:Default:signup.html.twig');
    }
    
    public function dasboardAction()
    {
       
      //  $name = $this->get('session')->get('username');
        $name2 = $this->get('username')->set('usename', $username);
        
        $name = $session->get('username');
        
        return $this->render('modulCRUDBackEndBundle:Default:dasboard.html.twig', array('nama'=>$name,'nama2'=>$nama2));
    }
}
