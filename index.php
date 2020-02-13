<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Circle{
    protected $radius;
    protected $color;

        
        
      public function getRadius(){
          return $this->radius;
      }
      public function getColor(){
          return $this->color;
      }

      public function getArea(){
          $area = $this->getRadius();

          return $area * pi();
      }

      public function setColor($color){
          $this->color = $color;
    }
      public function setRadius($radius){
        $this->radius = $radius;
    }
        public function toString()
        {
            return  "Bán kính : " . $this->radius . " </br> Màu :"  . $this->color ."</br> Diện tích :" . $this->getArea();

        }




} 
    class Cylinder extends Circle{
        private $height;

        
        public function setHeight($height){
            $this->height = $height;
        }
        public function getHeight(){
            return $this->height;
        }
        public function getVolume(){
            $h = $this->getHeight();
            return 3.14 * $h * ($this->getRadius()) ** 2;
        }
       



        public function toString()
        {
            return  " Chiều cao :  " . $this->height ." </br> Bán kính : " . $this->radius . " </br> Thể tích : " . $this->getVolume()  ;

        }



 }
    $circle = new  Circle();
    $circle -> setRadius(30);
    $circle -> setColor("blue");
    echo "Circle  </br> " . $circle->toString();

   $cylinder = new Cylinder();
   $cylinder -> setHeight(101);
   $cylinder -> setRadius(10);
   echo " <br> Cylinder </br> " .   $cylinder->toString();
   
    
    
    
    
    
    
    
    ?>
</body>
</html>