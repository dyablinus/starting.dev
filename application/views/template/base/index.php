<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/node_modules/font-awesome/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css")?>">
   
    <title>Document</title>
</head>
<body>


<div class="container">
<?php  $this->load->view('template/base/nav'); ?> 

<?= $view_content ?> 


</div>
  
    
<?php $this->load->view('template/base/footer');?>



 <script src="<?= base_url ("/node_modules/jquery/dist/jquery.js") ?>"></script>
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
</body>
</html>