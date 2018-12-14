<?php
namespace PPE\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\Form\Extension\core\type\Checkboxtype;
use Symfony\component\Form\Extension\core\type\Texttype;
use Symfony\component\Form\Extension\core\type\Passwordtype;
use Symfony\component\Form\Extension\core\type\Submittype;  



class AccueilController extends Controller
{
    public function indexAction()
    {
        $formConnect = $this->createFormBuilder(array('allow_extra_fiels'=>true))
                ->add('adrMail', TextType::class, array('label'=>'Adresse Mail','attr' => array('class'=>'form-control','placeholder'=>'adresseMail')))
                ->add('MDP', PasswordType::class, array('label'=>'Mot de passe','attr' => array('class'=>'form-control','placeholder'=>'MotDePasse')))
                ->add('Valider', SubmitType::class, array('label'=>'Se connecter','attr'=>array('class'=>'btn btn-primary btn-block')))
                ->getForm();
        
        $request = Request::createFromGobals();
        $formConnect->handleRequest($request);
        
        if($formConnect->isSubmitted()&&$formConnect->isValid()){
            $em=$this->getDoctrine()->getManager();
            $data = $formConnect->getData();
            $em->getRepository('...')->seConnecter($data['adrMail'],$data['MDP']);
        }
        
        
        return $this->render('PPEAccueilBundle:Default:index.html.twig');
    }
}

