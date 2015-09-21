<?php

namespace Imie\SkillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Imie\SkillsBundle\Entity\Course;
use Imie\SkillsBundle\Form\CourseType;

class CourseController extends Controller
{
    public function indexAction(){
        $courses = $this->getDoctrine()
            ->getManager()
            ->getRepository('ImieSkillsBundle:Course')
            ->getProjectsOrderedById();

        return $this->render('ImieSkillsBundle:Course:index.html.twig', array(
            'courses' => $courses
        ));

    }
    public function addAction(Request $req){

        $course = new Course();

        $form = $this->createForm(new CourseType(),
            $course,
            array('action' => $this->generateUrl('imie_skills_course_add'))
        );

//        $form->handleRequest($req);
//        if($form->isValid()){
//            try{
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($course);
//                $em->flush();
//                return $this->redirect($this->generateUrl('imie_skills_course_add'));
//            }
//            catch (\Doctrine\DBAL\DBALException $e){
//                echo $e->getMessage();
//            }
//        }

        return $this->render('ImieSkillsBundle:Course:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
