<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Course Bits - Upload Files</title>
<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/custom.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>
<body>
<?php include_once("php_temps/header_nav.php"); ?>
<div id="skeleton">
<img src="img/stock/fade.png" id="fade"  />
<div id="skeleton_content">
<?php include_once("php_temps/ads.php"); ?>


<br />
<hr />

<br /><br />




<h3 style="margin-left:40px; color:#37AAA6; font-style:italic; font-size:16px;">Upload a New File</h3>


<form action="inventory_edit.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
    <table width="90%" border="0" cellspacing="0" cellpadding="6">
      <tr>
        <td width="20%" align="right">Entry Name</td>
        <td width="80%"><label>
          <input name="product_name" type="text" id="product_name" size="64" value="<?php echo $product_name; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right">Entry Price</td>
        <td><label>
          $
          <input name="price" type="text" id="price" size="12" value="<?php echo $price; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right">Category</td>
        <td><label>
          <select name="category" id="category">
          <option value="Clothing">English</option>
          <option value="Clothing">Science</option>
          <option value="Clothing">Engineering</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td align="right">Subcategory</td>
        <td><select name="subcategory" id="subcategory">
          <option value="<?php echo $subcategory; ?>"><?php echo $subcategory; ?></option>
          <option value="Hats">Hats</option>
          <option value="Pants">Pants</option>
          <option value="Shirts">Shirts</option>
          </select></td>
      </tr>
      <tr>
        <td align="right"> Details</td>
        <td><label>
          <textarea name="details" id="details" cols="64" rows="5"><?php echo $details; ?></textarea>
        </label></td>
      </tr>
      <tr>
        <td align="right">Upload Document</td>
        <td><label>
          <input type="file" name="fileField" id="fileField" />
        </label></td>
      </tr>      
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
          <input type="submit" name="button" id="button" value="Submit" />
        </label></td>
      </tr>
    </table>
    </form>
    <br />





</div>
</div>


<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
