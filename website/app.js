document.addEventListener('polymer-ready', function() {
	var navicon = document.getElementById('navicon');
	var back = document.getElementById('back');
	var drawerPanel = document.getElementById('drawerPanel');
	navicon.addEventListener('click', function() {
		drawerPanel.togglePanel();
	});
	back.addEventListener('click', function() {
		drawerPanel.togglePanel();
	});
});