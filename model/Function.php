<?php

class DataAndGrade {
    //<!-- ======= DateFunction ======= -->
    public function DateFunction($Date,$Month,$Year){
        $FullDate = "$Date-$Month-$Year";
        // return $FullDate;
        if($Date != "" && $Month != "" && $Year != ""){
            if($Year >= 1 && $Year <= 2023){
                if($Year % 4 == 0 || $Year == 1){
                    if($Month >= 1 && $Month <= 12){
                        if($Month == 1 || $Month == 3 || $Month == 5 || $Month == 7 || $Month == 8 || $Month == 10 || $Month == 12){
                            if($Date >= 1 && $Date <= 31 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }else if($Month == 4 || $Month == 6 || $Month == 9 || $Month == 11){
                            if($Date >= 1 && $Date <= 30 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }else{
                            if($Date >= 1 && $Date <= 29 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }
                    }else{
                        include "../alert/date/alertInputdateErrorMonth.php";
                    }
                }else{
                    if($Month >= 1 && $Month <= 12){
                        if($Month == 1 || $Month == 3 || $Month == 5 || $Month == 7 || $Month == 8 || $Month == 10 || $Month == 12){
                            if($Date >= 1 && $Date <= 31 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }else if($Month == 4 || $Month == 6 || $Month == 9 || $Month == 11){
                            if($Date >= 1 && $Date <= 30 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }else{
                            if($Date >= 1 && $Date <= 28 ){
                                return $FullDate;
                            }else{
                                include "../alert/date/alertInputdateErrorDay.php";
                            }
                        }
                    }else{
                        include "../alert/date/alertInputdateErrorMonth.php";
                    }
                }
            }else{
                include "../alert/date/alertInputdateErrorYear.php";
            }        
        }else{
            include "../alert/date/alertInputdateEmpty.php";
        }
    }
    
    //<!-- ======= gradeFunction ======= -->
    public function gradeFunction($grade){
        if($grade < 0){
            include "../alert/grade/alertInputGrade.php";
        }elseif($grade <= 100){
            if($grade >= 80){
                $gradeIs = "A";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดีเยี่ยม";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 75){
                $gradeIs = "B+";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดีมาก";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 70){
                $gradeIs = "B";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดี";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 65){
                $gradeIs = "C+";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับค่อนค้างดี";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 60){
                $gradeIs = "C";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับกลาง";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 55){
                $gradeIs = "D+";
                $gradeCGT = "ยินดีด้วยคุณได้ผ่านเกณฑ์ขั้นต่ำแล้ว";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }elseif($grade >= 50){
                $gradeIs = "D";
                $gradeCGT = "ยินดีด้วยคุณได้ผ่านเกณฑ์ขั้นต่ำสุด";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }else{
                $gradeIs = "E";
                $gradeCGT = "เสียใจด้วยคุณไม่ผ่านการทดสอบ";
                $data = array("$gradeIs","$gradeCGT");
                $json = json_encode($data);
                return $json ;
            }
        }else{
            include "../alert/grade/alertInputGrade.php";
        }
    }  
    
}

?>