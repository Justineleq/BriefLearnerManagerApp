<?php

?>
<div><script src="/assets/teacherDashboard.js"></script></div>
<div id='teacherDashboard'>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" id="classList">Classes</a>
  </li>
</ul>
</div>
<body id='main'>
<div><br>
  <h5>Todays Classes</h5>
</div><br>

<div id="morningCard"class="card w-75 p-3">
  <div class="card-body d-flex justify-content-between background-color: #f8f9fa;">
    <div>
    <h5 class="card-title" id="nameOfClass">name of class</h5>
     <p id="numOfStuds">15</p>
  </div>
  <div>
    <p id="date">date</p>
    <p class="displayCode"></p>
   <button id='codeBtnMorning' type="button" class="btn btn-primary">Validate presence</button>
  </div>
</div>
</div>
<br>

<div id="afternoonCard"class="card w-75 p-3">
  <div class="card-body d-flex justify-content-between background-color: #f8f9fa;">
    <div>
    <h5 class="card-title" id=>name of class</h5>
     <p>15</p>
  </div>
  <div>
    <p>date</p>
    <p class="displayCode"></p>
   <button id="codeBtnAfternoon" type="button" class="btn btn-primary">Validate presence</button>
  </div>
</div>
</div>


</body>