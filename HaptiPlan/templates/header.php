<nav class="navbar">
  <div class="inner-navbar">
    <!--button class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button-->
    <a class="active" aria-current="page"
      href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/'; ?>">Unternehmsplanspiel
    </a>
    <ul class="element-list">
      <div class="element drop-button" aria-haspopup="true"
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/Beschaffung'; ?>">Beschaffung
        <div class="drop-content">
          <div><a class="element drop-element"
            href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/create_machine.php'; ?>">Maschine
          </a></div>
          <div><a class="element drop-element"
            href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/credit.php'; ?>">Kredit
          </a></div>
          <div><a class="element drop-element"
            href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/templates/create_building.php'; ?>">Gebäude erstellen
          </a></div>
        </div>
      </div>
      <div><a class="element" 
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/Produktion'; ?>">Produktion
      </a></div>
      <div><a class="element" 
        href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/frontend_web/HaptiPlan/Auftraege'; ?>">Aufträge
      </a></div>
      
    </ul>
  </div>
</nav>