<?php

# Wrong Way
Class Student{
    public function feeCalculator(){}
    public function gradeCalculator(){}
    public function getAttandace(){}
}

#single Respon Prin

Class PaymentSystem{

}

Class GradeCalculator{

}
Class etAttanced{

}

// Single responsibity Example

Class Mailer{
    function sendMail($to,$from,$sub,$message,$attachment){

    }
    function connectMTA($mtaType,$userName,$password){

    }
    function prepareMail($to,$form,$sub,$message){

    }
    function dispatch(){

    }
}

//solid

Class BetterMail{
    public function __construct(MailGateway $mg,MailInterface $mail,AttachmentInterface $attachment){
        $this->mg = $mg;
        $this->mail = $mail;
        $this->atttachment = $attachment;
    }


    function sendMail($to,$from,$sub,$message,$attachment){
        $this->mail->addAttachment($attachment);
        $mailbody = $this->mail->prepare($to,$from,$sub,$message,$attachment);
        $this->mg->connect();
        $this->mg->send($mailbody);
    }

}