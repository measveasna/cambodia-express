$(document).ready(function () {
	$('#menu').on('click','ul.sub-menu li a',function () {
		var pagenamehref= this.href;
		var spliter=pagenamehref.split('#');
		var pagename=spliter[1];
		 if (pagename=="page-home") {
		 	$('body').load('cambodia-express.php');
		 }
		 else{
			$('#content').load('content/submenu/'+pagename+'.php');
		}
	});
});