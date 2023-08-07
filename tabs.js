function scriptolTabs()
{
 var element = location;
 var tabs=document.getElementById('tabs').getElementsByTagName("a");
 for (var i=0; i < tabs.length; i++)
 {
  if(tabs[i].href == element.href) 
   tabs[i].className="selected";
  else
   tabs[i].className="";
 }
}

document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.querySelector('.sidebar-toggle-btn');
  const sidebar = document.querySelector('.sidebar');
  const container = document.getElementById('container');

  toggleBtn.addEventListener('click', function () {
    container.classList.toggle('sidebar-hidden');
  });
});
