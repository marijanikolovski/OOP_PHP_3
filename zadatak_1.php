<?php
class MailService {
    private static $oneMail = null;
    public static $count;

    private function __construct() {
        
    }

    public static function getMail() {
        if(self::$oneMail === null) {
            self::$oneMail = new MailService();
        }
        return self::$oneMail;
    }

    public function sendMail(Mail $mail) {
        echo "Sending email to <br>" ; 
        echo "Theme: " . $mail->getAddress() . "<br>";
        echo "Theme: " . $mail->getTheme() . "<br>";
        echo "Text: " . $mail->getText() . "<br>";
        self::$count ++;
    }
}

class Mail {
    private $address;
    private $theme;
    private $text;

    public function __construct($address, $theme, $text)
    {
        $this->address = $address;
        $this->theme = $theme;
        $this->text = $text;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function getText() {
        return $this->text;
    }
}

class MailFactory {
    public function makeMale($addresss, $theme, $text) {
        return new Mail($addresss, $theme, $text);
    }
}

echo '<pre>';
$factory = new MailFactory();
$mail = $factory->makeMale('m.kuzeljevic', 'neka tema', 'ovo je neki teks');
MailService::getMail()->sendMail($mail);

$mail1 = $factory->makeMale('m.kuzeljevic', 'neka tema', 'ovo je neki teks');
MailService::getMail()->sendMail($mail1);
echo(MailService::$count);