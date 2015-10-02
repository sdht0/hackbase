<?php
$user = DB::findOneFromQuery("select * from users where id = " . $_SESSION['team']['id']);
$ans = explode(',', $user['mcq_answer']);
if ($user['mcq_starttime'] == 0) {
    $starttime = time();
    DB::update('users', array('mcq_starttime' => $starttime), "id = " . $_SESSION['team']['id']);
} else {
    $starttime = $user['mcq_starttime'];
}
?>
<div class="col-md-12">
    <div class="wrap-box">
        <h2>MCQ Questions</h2>
        <div class='row'>
            <div class='col-md-8' style='padding-left: 30px;'>
                <form id='answers'>
                    <?php
                    $mcq = DB::findAllFromQuery("Select * from mcq");
                    $i = 0;
                    foreach ($mcq as $question) {
                        echo "<b>Q$question[id]. $question[question]</b><br/><br/>"
                        . "<label style='font-weight: normal; display: block; cursor: pointer;'><input type='radio' name='$question[id]' class='mcq-radio' value='1' " . ((isset($ans[$i]) && $ans[$i] == 1) ? ("checked") : ("")) . "> $question[a]</label><br>"
                        . "<label style='font-weight: normal; display: block; cursor: pointer;'><input type='radio' name='$question[id]' class='mcq-radio' value='2' " . ((isset($ans[$i]) && $ans[$i] == 2) ? ("checked") : ("")) . "> $question[b]</label><br>"
                        . "<label style='font-weight: normal; display: block; cursor: pointer;'><input type='radio' name='$question[id]' class='mcq-radio' value='3' " . ((isset($ans[$i]) && $ans[$i] == 3) ? ("checked") : ("")) . "> $question[c]</label><br>"
                        . "<label style='font-weight: normal; display: block; cursor: pointer;'><input type='radio' name='$question[id]' class='mcq-radio' value='4' " . ((isset($ans[$i]) && $ans[$i] == 4) ? ("checked") : ("")) . "> $question[d]</label><br>"
                        . "<a class='btn btn-primary uncheck' id='uncheck-$question[id]'>Uncheck</a><hr/>";
                        $i++;
                    }
                    ?> 
                </form>
            </div>
            <div class='col-md-4'  style='padding-right: 30px;'>

                <div style='position: fixed; width: 300px;'>
                    <div id='timer'></div>
                    <table class='table table-bordered' style='text-align: center;'>
                        <?php
                        for ($i = 1; $i <= sizeof($mcq); $i+= 4) {
                            echo "<tr>";
                            for ($j = $i; $j < $i + 4 && $j <= sizeof($mcq); $j++) {
                                echo "<td id='table-$j' " . ((isset($ans[$j - 1]) && $ans[$j - 1] != "") ? (" class='success'>$j - " . $ans[$j - 1]) : (">$j")) . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </table>
                    <center><div class='btn btn-group'><a id='save' class='btn btn-success'>Save</a><a id='submit' class='btn btn-danger'>Submit</a></div></center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type='text/javascript'>
    var endtime = <?php echo ($starttime + 15 * 60 - time()); ?>;
    function tick() {
        if (endtime > 0) {
            var minutes = parseInt(endtime / 60);
            var seconds = endtime % 60;
            $('#timer').html(minutes + "m " + seconds + "s");
            endtime--;
            window.setTimeout("tick();", 1000);
        } else {
            var data = $('#answers').serialize();
            data += "&mcqans=";
            $.post("<?php echo SITE_URL; ?>/process.php", data).done(function() {
                location.reload();
            });
        }
    }
    function c() {
        a().done(function(c) {
            $.post("<?php echo SITE_URL; ?>/process.php", {"c": c});
        }).fail(function(c) {
            window.setTimeout("c();", 60000);
        });
    }
    $(document).ready(function() {
        $('.mcq-radio').click(function() {
            var id = $(this).attr('name');
            var ans = $(this).attr('value');
            $('#table-' + id).html(id + ' - ' + ans).prop('class', 'success');
        });
        $('.uncheck').click(function() {
            var id = $(this).attr('id');
            id = id.substring(8);
            $('input[name=' + id + ']').prop('checked', false);
            $('#table-' + id).html(id).prop('class', '');
        });
        $('#save').click(function() {
            var data = $('#answers').serialize();
            data += "&save=";
            $.post("<?php echo SITE_URL; ?>/process.php", data).done(function() {
                alert("Saved");
            });
        });
        $('#submit').click(function() {
            var r = confirm("Submit answers?");
            if (r) {
                var data = $('#answers').serialize();
                data += "&mcqans=";
                $.post("<?php echo SITE_URL; ?>/process.php", data).done(function() {
                    location.reload();
                });
            }
        });
        tick();
        c();
    });
</script>