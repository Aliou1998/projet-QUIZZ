<?php
class Question implements IManager{
    private $id;
    private $nbrePoint;
    private $question;
    private $reponses=[];
    private $type;


    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
       $this->id=$row['id'];
       $this->nbrePoint=$row['nbrePoint'];
       $this->question=$row['question'];
       $this->reponses=$row['reponses'];
       $this->type=$row['type'];
    }


    public function getId(){
        return $this->id;
    }

    public function getNbrePoint(){
        return $this->nbrePoint;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function getReponses(){
        return $this->reponses;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type=$type;
    }

    public function setNbrePoint($nbrePoint){
        $this->nbrePoint=$nbrePoint;
    }

    public function setQuestion($question){
        $this->question=$question;
    }

    public function setReponses($reponses){
        $this->reponses=$reponses;
    }

    
