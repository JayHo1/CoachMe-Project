(function (){
	var app = angular.module('store', []);

	app.controller('StoreController', function() {
		this.product = gem;
	});
	var gem = [
	{
		name: 'DODO',
		price: 80.90,
		description: 'dfskfjlsdfjsdkjfsdkfjsflkjsdkfsdjf',
		canPurchase: true,
		soldOut: true,
	}
	{
		name: 'DaDa',
		price: 810.90,
		description: 'dfskfdfsdfsdfdsfjlsdfjsdkjfsdkfjsflkjsdkfsdjf',
		canPurchase: true,
		soldOut: true,
	}
	]
})();