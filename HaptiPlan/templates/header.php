<nav class="navbar">
  <div class="inner-navbar">
    <!--button class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button-->
    <a class="active" aria-current="page"
      href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/'; ?>">Unternehmsplanspiel</a>
    <ul class="element-list">
      <a class="element"
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/Beschaffung'; ?>">Beschaffung</a>
      <a class="element"
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/Produktion'; ?>">Produktion</a>
      <a class="element"
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/Auftraege'; ?>">Aufträge</a>
      <a class="element"
      href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/create_machine.php'; ?>">Maschine</a>
      <a class="element"
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/credit.php'; ?>">Kredit</a>
    </ul>
  </div>
</nav>