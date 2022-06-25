
<h1>
<?php 
function  checkPossibility($nums) {
        $changed=0;
        for($i=0;$i<count($nums)-1;$i++)
        {
            if($nums[$i]<=$nums[$i+1]) continue;
            // if($changed)  return false;
            if($i==0 || $nums[$i+1] >= $nums[$i-1] ){
                $nums[$i]=$nums[$i+1];
                $changed++;
            }  
            else {
                $nums[$i+1]=$nums[$i];
                $changed++;
            } 
        }
        // echo json_encode( $nums);
if($changed>1) return false;
else return true;
    }
   echo checkPossibility([4,2,1,3]);
    ?>
     </h1>