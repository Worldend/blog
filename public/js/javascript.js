$(document).ready(function(){
var url=document.location.href;
$.each($(".breadcrumb li a"),function(){
if(this.href==url){$(this).parent('li').addClass('active');};
});
});