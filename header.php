
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Itians' ASSET</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <?php if(!isset($_SESSION['login'])){ ?>
            <a class="mdl-navigation__link" href="index.php">Login</a>
            <a class="mdl-navigation__link" href="signup.php?type=student">Signup</a>
        <?php } ?>
        <?php if(isset($_SESSION['login'])){ ?>
            <a class="mdl-navigation__link" href="dashboard.php">Dashoboard</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=timetable">Timetable</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=study_material">Study Material</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=attendance">Attendance</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=exam">Exam</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=result">Result</a>
            <a class="mdl-navigation__link" href="demo.php?logout=true">Logout</a>
        <?php } ?>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer mdl-layout--small-screen-only">
    <span class="mdl-layout-title">Itians' ASSET</span>
    <nav class="mdl-navigation ">
        <?php if(!isset($_SESSION['login'])){ ?>
            <a class="mdl-navigation__link" href="index.php">Login</a>
            <a class="mdl-navigation__link" href="signup.php?type=student">Signup</a>
        <?php } ?>
        <?php if(isset($_SESSION['login'])){ ?>
            <a class="mdl-navigation__link" href="dashboard.php">Dashoboard</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=timetable">Timetable</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=study_material">Study Material</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=attendance">Attendance</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=exam">Exam</a>
            <a class="mdl-navigation__link" href="upload_data.php?type=result">Result</a>
            <a class="mdl-navigation__link" href="demo.php?logout=true">Logout</a>
        <?php } ?>
    </nav>
  </div>