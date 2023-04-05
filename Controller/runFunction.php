<?php
        
        $summit = isset($_GET['SUBMIT']) ? $_GET['SUBMIT'] : include "../alert/aleart_Submit.js";
        $Date = $_GET['Date'];
        $Month = $_GET['Month'];
        $Year = $_GET['Year'];
        $class = $_GET['class'];
        $grade = $_GET['grade'];
        $d_array = array(
        "Sunday" => "วันอาทิตย์",
        "Monday" => "วันจันทร์",
        "Tuesday" => "วันอังคาร",
        "Wednesday" => "วันพุธ",
        "Thursday" => "วันพฤหัสบดี",
        "Friday" => "วันศุกร์",
        "Saturday" => "วันเสาร์"
        );

        include_once '../model/Function.php';
        $obj = new DataAndGrade();
        $rs = $obj->DateFunction($Date,$Month,$Year); 
        $rs2 = $obj->gradeFunction($grade);
        // JSON TO ARRAY
        $jsonCode = $rs2;
        $jsonDecode = json_decode($jsonCode, true);

        include "../view/showHomepage.php";

?>