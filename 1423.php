<!-- 1423. Maximum Points You Can Obtain from Cards -->
<?php 


    /**
     * @param Integer[] $cardPoints
     * @param Integer $k
     * @return Integer
     */
    function maxScore($cardPoints, $k) {
         
         $r=count($cardPoints)-$k; 
         $l=0;
         $arr=[];
         $total=0;
         for($i=$r;$i<count($cardPoints);$i++){
             $total+=$cardPoints[$i];
             
            }
            $res=$total;
        //  echo $total."   ";
         while($r<count($cardPoints))
         {
             $total+=$cardPoints[$l]-$cardPoints[$r];
        //   if($total>$res) $res=$total;
        // echo $total."   ";

          $res=max($total,$res);
       
          $r++;
        //   echo '<h1>'.$total."</h1>";
          $l++; 
         }
        
      return $res;
       
    }



   echo maxScore([1,2,3,4,5,6,1],3);
   /*
    3+4+5
    0+1+2
    0+4+5
    0+1+5
   */
    ?>
   
    