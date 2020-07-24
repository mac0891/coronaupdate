<style type="text/css">
html
{
	scroll-behavior:smooth;
	
}
*{
margin:0; padding:0;box-sizing:border-box; font-family:'muli';
}

.nav_style {
	background-color:blue!important;
}
.nav_style a{
	color:white; }
	
.main_header
{
	height:350px;
	width:100%;	
}
.rightside h1{
	font-size:40px;
	
}

.irot img{
	
	animation:gocorona 1s linear infinite 
}
@keyframes gocorona{
	0%{transform :rotate(0);}
	100%{transform:rotate(360deg);}
	
}
.corona_update{margin:0 0 30px 0;}	
.corona_update h3 {color:red;}
.corona_update h1 {text-align:center;}


.sub_section
{
	background-color:#D3D3D3;
}

.footer_style
{
	background-color:black;
	font-size:15px;
}
.footer_style p
{
	margin-bottom:0!important;<!-- to make it important -->
}

#myBtn {
  display: none; 
  position: fixed; 
  bottom: 120px; 
  right: 30px; 
  z-index: 99;
  border: none; 
  outline: none; 
  color: white; 
  background-color: red; 
  cursor: pointer;
  padding: 15px; 
  border-radius: 10px;
  font-size: 18px; 
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}

</style>