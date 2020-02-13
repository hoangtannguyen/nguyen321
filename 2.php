<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class ClassName 
{
    private $__username;
    private $__password;
     
    // SET
    function setUsername($value){
        $this->__username = $value;
    }
     
    function setPassword($value){
        $this->__password = $value;
    }
     
    // GET
    function getUsername(){
        return $this->__username;
    }
     
    function getPassword(){
        return $this->__password;
    }
     
}
 
$class = new ClassName();
 
// SET
$class->setUsername('thehalfheart');
$class->setPassword('freetuts.net');
 
// GET
echo $class->getUsername();
echo $class->getPassword();
?>
</body>
</html>