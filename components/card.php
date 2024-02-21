<?php 
  function Card($path, $BASE_URL, $image, $title) {
    return "
      <div class='col-md'>
        <div class='card'>
          <img class='card-img-top' src='$BASE_URL/$image' style='height: 120px;' alt='$title'>
          
          <div class='card-body'>
            <h6 class='card-title'>$title</h6>
            <a href='$path/cars/$title' class='btn btn-primary'>Lihat</a>
          </div>
        </div>
      </div>
    ";
  }
?>