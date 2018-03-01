<!DOCTYPE html>
<html>
<head>
  <title>Bhanuchandra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/edustyles.css">
</head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">PALLA</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Education.php">Education</a></li>
          <li><a href="skillset.php">SkillSet</a></li>
          <li><a href="projects.php">Projects</a></li>
        </ul>
      </div>
    </nav>
<!--  Rows creation-->
    <section id="showcase">
      <div class="container">
        <div class="Row">
          <div class="showcase-head">
            <h1>Secondry Education</h1>
            <hr>
          </div>
          <div class="col-sm-4">
            <div class="showcase-left">
              <h1>Aggregate</h1>
              <div class="progress skill-bar ">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                  <h6>77%</h6>
                 </div>
             </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="showcase-right">
              <h1>Passedout</h1>
              <h2>2012</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
<br>
    <section id="intershowcase">
      <div class="container">
        <div class="Row">
          <div class="showcase-head">
            <h1>Intermediate Education</h1>
            <hr>
          </div>
          <div class="col-sm-4">
            <div class="intershowcase-left">
              <h1>Aggregate</h1>
              <div class="progress skill-bar ">
                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="88.50" aria-valuemin="0" aria-valuemax="100">
                  <h6>88.50%</h6>
                 </div>
             </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="intershowcase-middle">
              <h1>Group</h1>
              <h2>M.P.C</h2>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="intershowcase-right">
              <h1>Passedout</h1>
              <h2>2014</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
<br>
    <section id="btechshowcase">
      <div class="container">
        <div class="Row">
          <div class="showcase-head">
            <h1>Graduation</h1>
            <hr>
          </div>
          <div class="col-sm-3">
            <div class="btechshowcase-left">
              <h1>Aggregate</h1>
              <div class="progress skill-bar ">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">
                  <h6>71%</h6>
                 </div>
             </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="btechshowcase-middle">
              <h1>Stream</h1>
              <h2>B.tech</h2>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="btechshowcase-middle1">
              <h1>Branch</h1>
              <h2>CSE</h2>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="btechshowcase-right">
              <h1>Passedout</h1>
              <h2>2018</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <footer>
      <p class="text-center">Designed and Developed by Palla Bhanuchandra <br> Copyright &copy; 2017</p>
    </footer>

    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript">
  $(document).ready(function() {
    $('.progress .progress-bar').css("width",
              function() {
                  return $(this).attr("aria-valuenow") + "%";
              }
      )
  });

  window.sr = ScrollReveal();
  sr.reveal('.navbar', {
    duration: 2000,
    origin:'bottom'
  });
  sr.reveal('.showcase-head', {
    duration: 4000,
    origin:'top',
    distance:'50px'
  });
  sr.reveal('.showcase-left', {
    duration: 2000,
    origin:'left',
    distance:'100px'
  });
  sr.reveal('.showcase-right', {
    duration: 2000,
    origin:'right',
    distance:'100px'
  });

  sr.reveal('.intershowcase-left', {
    duration: 2000,
    origin:'left',
    distance:'100px'
  });
  sr.reveal('.intershowcase-middle', {
    duration: 2000,
    origin:'bottom',
    distance:'50px'
  })
  sr.reveal('.intershowcase-right', {
    duration: 2000,
    origin:'right',
    distance:'100px'
  });


  sr.reveal('.btechshowcase-left', {
    duration: 2000,
    origin:'left',
    distance:'100px'
  });
  sr.reveal('.btechshowcase-middle', {
    duration: 2000,
    origin:'bottom',
    distance:'100px'
  })
  sr.reveal('.btechshowcase-middle1', {
    duration: 2000,
    origin:'top',
    distance:'50px'
  })
  sr.reveal('.btechshowcase-right', {
    duration: 2000,
    origin:'right',
    distance:'100px'
  });
  </script>
  </body>
</html>
