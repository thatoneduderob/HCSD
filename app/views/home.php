{% extends 'templates/default.php' %}

{% set title = 'Home' %}

{% block content %}
<h3>Welcome</h3>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#news">News</a></li>
        <li class="tab col s3"><a href="#upcoming">Upcoming</a></li>
      </ul>
    </div>
    <div id="news" class="col s12">This would be where the news posts would be displayed.</div>
    <div id="upcoming" class="col s12">This would be where upcoming events would be displayed.</div>
  </div>

{% endblock %}