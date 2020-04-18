<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurveyQuestionsRepository")
 * @ApiResource
 */
class SurveyQuestions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
	
	/**
     * @ORM\ManyToOne(targetEntity="App\Entity\Surveys", inversedBy="surveyQuestions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $survey;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\Column(type="smallint")
     */
    private $type;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $answers = [];

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAnswers(): ?array
    {
        return $this->answers;
    }

    public function setAnswers(?array $answers): self
    {
        $this->answers = $answers;

        return $this;
    }

    public function getSurveyId(): ?Surveys
    {
        return $this->survey;
    }

    public function setSurveyId(?Surveys $survey): self
    {
        $this->survey = $survey;

        return $this;
    }
}
