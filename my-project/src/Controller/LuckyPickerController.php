<?php
namespace App\Controller;

use App\Entity\LuckyNumber;
use App\Form\Type\LuckyNumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyPickerController extends AbstractController {
    /**
     * @Route("picker/number")
     */
    public function new(Request $request): Response {
        $number = new LuckyNumber();
        $form = $this->createForm(LuckyNumberType::class, $number);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $chosenNumber = $form->getData();
            return $this->renderForm('picker/number.html.twig', [
                'form' => $form,
                'number' => $chosenNumber->getNumber(),
            ]);
        }
        return $this->renderForm('picker/number.html.twig', [
            'form' => $form,
            'number' => '',
        ]);
    }
}