(function($){
	$.fn.showTree = function(o){
		var o = $.extend({
			closeFolders: false, // �� ��������� ������ ������� �������
			classTree: null // �������������� ����� ��� ������
		}, o);
		return $(this).each(function(){ // �������� �� ���� �������
			var tree = $(this); // ����������� ���������� tree ���������� �������� ������
			tree.addClass('jquery-tree').children('li:first').prepend('<div class="first"></div>'); // ��������� ����� �� ��������� � �������� ������� ����� � ������ �������� ������
	       	tree.children('li:last').addClass('last'); // ��� ���������� �������� � ������ ��������� ����� last
			tree.find('ul').each(function(){ // �������� �� ���� ��������� �������
				$(this).children('li:last').addClass('last'); // ��� ���������� �������� � ������ �� ��� ��������� ����� last
			}).prev('a').addClass('folder'); // ��������� ����� folder ������ ������, �� ������� ��� ��������� ������

			if (o.classTree) tree.addClass(o.classTree); // ���� ���� ���������������� �����, ��������� ���
			tree.find('a.folder').before('<span class="show"></span>'); // ��������� ������ ������/������� ����������� �����
			tree.find('span').click(openTree); // ������ ������ �� ����� �� �� ������ ������� openTree
			if (o.closeFolders) { // ���� ���������� ������� ������ ���� ������
				tree.find('ul').hide(); // �������� ���
			} else {
				tree.find('.folder').addClass('open').prev('span').addClass('minus'); // ����� ���������� ��� ����� �������
			}
        	});
		function openTree(){ // �������, ������������/���������� ���������� �����
			var button = $(this); // ����������� ���������� button �������� ������� ������
		   	var link = button.next(); // ������� ������
			var files = link.next('ul'); // ������� ��������� �����
			if (link.hasClass('open')) { // ���� ����� �������
				files.hide(); // �������� �����
			} else {
				files.show(); // ����� ����������
			}
			link.toggleClass('open'); // ����������� ������ � ������ � �����
			button.toggleClass('minus'); // ���� ������ ���, ���������, ����� - �������
			return false;
		}
	};
})(jQuery)
