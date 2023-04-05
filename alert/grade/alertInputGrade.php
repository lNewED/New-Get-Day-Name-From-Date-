<?php
if ($grade > 100 ) { ?>
    <script type="text/javascript">
        alert("คะแนนคุณเกินคะแนนเต็ม:คุณกรอก<?php echo  $grade; ?>คะแนน");
        history.go(-1);
    </script>
<?php } elseif($grade < 0) { ?>
    <script type="text/javascript">
        alert("คะแนนคุณต่ำกว่าปกติ:คุณกรอก<?php echo  $grade; ?>คะแนน");
        history.go(-1);
    </script>
<?php } ?>