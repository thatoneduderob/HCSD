<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>HCSD</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/materialize.css">
    <!-- <link rel="stylesheet" href="/HCSD/css/materialize.css"> -->
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" type="img/png" href="/imgs/wolf.png">
  </head>
  <body>
    {% include 'templates/partials/navigation.php' %}
    {% include 'templates/partials/messages.php' %}
    <div class="row">
      <div class="sb_wd">
        <div class="col s3">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Quick Links</span>
              <ul>
                <li><a href="#">Athletics</a></li>
                <li><a href="#">Board of Education</a></li>
                <li><a href="#">Building Use</a></li>
                <li><a href="#">Building Use Calendar</a></li>
                <li><a href="#">Calendar of Events</a></li>
                <li><a href="#">Dignity For All Students</a></li>
                <li><a href="#">Files and Documents</a></li>
                <li><a href="#">FOIL Requests</a></li>
                <li><a href="#">HCSD Code of Conduct</a></li>
                <li><a href="#">Highland Music Boosters</a></li>
                <li><a href="#">Highland Taxpayer Infotax</a></li>
                <li><a href="#">Job Opportunities</a></li>
                <li><a href="#">Lunch Menus</a></li>
                <li><a href="#">Response to Crisis</a></li>
                <li><a href="#">School Messenger</a></li>
                <li><a href="#">Staff Directory</a></li>
                <li><a href="#">Ulster BOCES</a></li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-content white-text">
              <ul>
                <li>HIGHLAND CENTRAL SCHOOL DISTRICT</li>
                <li>320 Pancake Hollow Road</li>
                <li>Highland, NY 12528</li>
                <li>845-691-1000</li>
                <li>Fax: 845-691-1039</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col s6">
        <div class="card">
          <div class="card-content white-text">
            {% block content %}{% endblock %}
          </div>
        </div>
      </div>
      <div class="sb_wd">
        <div class="col s3">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Featured</span>
              <h5><a href="#">HES Gets a New Playground!</a></h5>
              <p><img src="/imgs/sample-news.jpg"></p>
              <p>A special thank you (attached) for the new playground installed at the Highland Elmentary School. Thank You</p>
              <br>
              <p><a class="waves-effect waves-light btn">View all stories</a></p>
            </div>
          </div>
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Student Accounts</span>
              <ul>
                <li><a href="#">Office 365 Login</a></li>
                <li><a href="#">Moodle</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
  </body>
</html>