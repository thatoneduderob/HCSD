{% extends 'templates/default.php' %}

{% set title = 'Home' %}

{% block content %}
<h3>Welcome</h3>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">News</a></li>
        <li class="tab col s3"><a href="#test2">Upcoming</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">This would be where the news posts would be displayed.</div>
    <div id="test2" class="col s12">This would be where upcoming events would be displayed.</div>
  </div>

{% endblock %}