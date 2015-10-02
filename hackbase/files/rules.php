<div class="col-md-12">
  <div class="wrap-box">
    <h2>Rules</h2>
    <p>Our story starts with the evil overlord Mauron trying to take over the World (again). But he has has a different stategy this time.
      Instead of going on an all out attack, he has decided to search for the "Answer to Life, Universe and Everything", a legendary
      piece of knowlege said to give its acquirer unprecedented power.

      The Answer had been safely hidden away in the secret base of the World Hackers Association. Mauron attacked the base, and
      killed all but one of the seven Hackers entrusted with the Secret to the Answer's position. He has captured the remaining Hacker
      and intends to make him speak out the Secret by any means.

      The Association is sure that the Hacker will prefer to die before revealing anything. However, Mauron has many evil tools, and may eventually
      be successful in making him talk. So the Association has decided that its safest to retrieve the Answer and then destroy the base.

      Thus, the mission to retrieve the Answer, and move it to safety has been entrusted to you. Will you be able to manage it?

      What you know about the Secret:
      * There are n < 20 levels protecting the Answer, at the end of which the Answer lies.
      * You have only 03:00 hrs to complete your mission and escape, after which the base will be destroyed.
      * Look for the clues everywhere (code, comments, cookies, headers), and keep them in mind. Clues in one level may come handy in later levels.
      * Be sure to find out what the servers are for. There may be hidden ports and services running.</p>
    <?php if (isset($_SESSION['loggedin'])) { ?>
      <form action='<?php echo SITE_URL; ?>/process.php' method='post'>
        <input type='hidden' name='value' value='evilsahu' />
        <center><input class='btn btn-success' type='submit' name='answer' value='Ok Lets GO!' /></center>
      </form>
      <?php
    }
    ?>
  </div>
</div>