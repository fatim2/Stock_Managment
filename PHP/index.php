<!DOCTYPE html>
<html lang="fr">
<head>
<title>Gestion de stock</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../CSS/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/datepicker.css" />
<link rel="stylesheet" href="../CSS/fullcalendar.css" />
<link rel="stylesheet" href="../CSS/uniform.css">
<link rel="stylesheet" href="../CSS/matrix-style.css" />
<link rel="stylesheet" href="../CSS/matrix-media.css" />
<link href="../fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/fontawesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/jquery.gritter.css" />
<link rel="stylesheet" href="../CSS/select2.css">
<link rel="stylesheet" href="../CSS/bootstrap-wysihtml5.css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
  <!--alert d'ajout confirmation-->
  <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
      <?php 
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>
<!--Header-part-->
<div id="header">
  <h1><a href="##">INDEX</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i>Profil</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i>A faire</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Tools</span></a></li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Log Out</span></a></li>
  </ul>
</div>

<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href="index3.php"><i class="icon icon-home"></i> <span>Dashboard</span> <span class="badge badge-info">4</span></a>
      <ul>
      <li><a href="index3.php">Add Element</a></li>
        <li><a href="client.php">Add Client</a></li>
        <li><a href="produit.php">Add Product</a></li>
        <li><a href="fournisseur.php">Add Provider</a></li>
      </ul>
      <li class="submenu"> <a href="tables.php"><i class="icon icon-th"></i> <span>Tables</span> <span class="badge badge-info">4</span></a>
      <ul>
      <li><a href="tables.php">Details</a></li>
        <li><a href="Tableclient.php">Client Table</a></li>
        <li><a href="Tableproduit.php">Product Table</a></li>
        <li><a href="Tablefournisseur.php">Provider Table</a></li>
      </ul>
    </li>
  
    
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Add Element</a> </div>
  </div>
  
<!--End-breadcrumbs-->

<!--Action boxes-->
<!--End-Action boxes-->    

<!--Chart-box-->    
<div class="container-fluid">
  <div class="row-fluid">
  <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
          <h5>Add Element</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="addTo_DB.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Client</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nom client" name='client'/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Projet N°</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="N° Projet" name='projet' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Designation</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder='Désignation' name='designation' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Reference</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Réference" name='reference' />
              </div>
            <div class="control-group">
              <label class="control-label">Initial Stock </label>
              <div class="controls">
                <input type="number" class="span11" placeholder="0" name='stock_init' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Enter</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="0" name='in' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Enter Date</label>
              <div class="controls">
              <input type="text" class="datepicker" class="span11"  autocomplete="off" class="span11" name='D_entree'  placeholder="dd/mm/yyyy" data-date-format="dd/mm/yyyy" value=""   />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Out</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="0"  name='out' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Out Date</label>
              <div class="controls">
                <input type="text" class="datepicker"  autocomplete="off" class="span11" name='D_sortie'  placeholder="dd/mm/yyyy" data-date-format="dd/mm/yyyy" value=""   />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Final Stock </label>
              <div class="controls">
                <input type="number" class="span11" placeholder="0" name='stock_fin' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Unit Price</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="00.00" name='prix_unit' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Total Price </label>
              <div class="controls">
                <input type="text" class="span11" placeholder="00.00" name='prix_tot' />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Observation</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Observation" name='observation' />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit">Add</button>
            </div>
          </form>
        </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
      <!--Footer-part-->

  <div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; FATIMA ZAHRA </div>
  </div>
<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-colorpicker.js"></script> 
<script src="../js/bootstrap-datepicker.js"></script> 
<script src="../js/jquery.toggle.buttons.js"></script> 
<script src="../js/masked.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.form_common.js"></script> 
<script src="../js/wysihtml5-0.3.0.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
