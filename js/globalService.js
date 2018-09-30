const baseUrl = window.location.origin + '/' + window.location.pathname.split('/')[1] + '/';

const redirectUrl = function(url) {
	window.location.href = baseUrl + url;
}