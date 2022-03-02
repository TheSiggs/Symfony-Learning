<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\Type\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController {
    /**
     * @Route("task/new")
     */
    public function new(Request $request): Response {
        $task = new Task();
        $task->setDueDate(new \DateTime('today'));

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formResults = $form->getData();
            $taskName = $formResults->getTask();
            $taskDueDate = $formResults->getDueDate()->format('Y-m-d H:i:s');
            return $this->renderForm('task/new.html.twig', [
                'form' => $form,
                'task' => $taskName,
                'dueDate' => $taskDueDate,
            ]);
        }


        return $this->renderForm('task/new.html.twig', [
            'form' => $form,
            'task' => '',
            'dueDate' => '',
        ]);
    }
}