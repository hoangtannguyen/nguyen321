<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        class Fan{
            const SLOW = 1;
            const MEDIUM = 2;
            const FAST = 3;
            private int $speed = self::SLOW;
            private $on = false;
            private float $radius = 5;
            private string $color = "blue";
         public function getSpeed(){
             return $this->speed;
         }
         public function getOn(){
            return $this->on;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function getColor(){
            return $this->color;
        }

        public function setMEDIUM(){
                $this->speed = self::MEDIUM;
                return $this;
        }
        public function setFAST(){
            $this->speed = self::FAST;
            return $this;
    }
    public function setSLOW(){
        $this->speed = self::SLOW;
        return $this;
}

public function setOn($cbolean){
   $this->on = $cbolean;
   return $this;
}
public function setRadius($radius){
   $this->radius = $radius;
   return $this;
}
public function setColor($color){
   $this->color = $color;
   return $this;
}
public function toString(){
    if($this->on){
        return  "</br> Tốc độ : " . $this->speed ."</br> Màu : " . $this->color . "</br> Bán kính : " . $this->radius . " :fan is on";
    }else{
        return "</br> Tốc độ : " . $this->speed . "</br> Màu : " . $this->color ."</br> Bán kính: " . $this->radius . ":fan is off";
    }
    }
}
    
    $fan1= new Fan();
    $fan2= new Fan();
    $fan1 -> setFAST() -> setRadius(10) -> setColor("yellow") -> setOn(true);
    $fan2 -> setMEDIUM() -> setRadius(5) -> setColor("blue") -> setOn(false);
    echo "Quạt 1 : " . $fan1->toString() . " </br> Quạt 2 : " . $fan2->toString();
    
    
    ?>
    
    
    
    
    
</body>
</html>