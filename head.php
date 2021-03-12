<?php  if($_GET['url']==="" || $_GET['url']==="index"):?>
<?php  $html->title(":name"); ?>
<?php  else:?>
<?php  $html->title(); ?>
<?php  endif?>
<?php  print_r($_GET); ?>
<?php  $html->get_code("w3.css", "css"); ?>
<?php  $html->get_code("awesome-4.7.0", "css"); ?>
<?php  $html->get_code("w3.js", "js"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bgimg {
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.img1 {
	background-image: url("<?php   $chemain; ?>assets/img/pic1.jpg");
}
.height-full-screen {
	height:100vh;
}
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.custom-file-input {
    color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
    visibility: hidden;
}
.custom-file-input::before {
    content: 'Select some files';
    display: inline-block;
    color: #fff !important;
    background-color: #f44336 !important;
    padding: 5px 8px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
}
.custom-file-input:hover::before {
    border-color: black;
}
.custom-file-input:active {
    outline: 0;
}
.custom-file-input:active::before {
    background-color: #f44336 !important;
}
</style>