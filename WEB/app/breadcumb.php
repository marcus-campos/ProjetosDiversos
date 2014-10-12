<ol class="breadcrumb">
  <?php
    if(isset($breadcumb) && is_array($breadcumb)){
      foreach ($breadcumb as $key => $value) {
        if (is_numeric($key)) {
          echo "<li class='" . ($value === end($breadcumb) ? 'active' : '') . "'>". $value ."</li>";
        }else{
          echo "<li class='" . ($value === end($breadcumb) ? 'active' : '') . "'><a href='". $key ."'>" . $value . "</a></li>";
        }
      }
    }
  ?>
</ol>