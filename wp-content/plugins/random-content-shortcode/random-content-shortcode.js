(function () {
  'use strict';

	if (window.NodeList && !NodeList.prototype.forEach) {
		NodeList.prototype.forEach = function (callback, thisArg) {
			thisArg = thisArg || window;
			for (var i = 0; i < this.length; i++) {
				callback.call(thisArg, this[i], i, this);
			}
		};
 	}

	function random_between(max) {
		return Math.floor(Math.random() * max);
	}

	function insertAfter(el, referenceNode) {
		referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
	}

	document.querySelectorAll( '.random-content-shortcode' ).forEach( function( el ) {
		var $div = document.createElement('div');
		$div.innerHTML = el.innerHTML;
		var $pieces = $div.querySelectorAll( '.random-content-piece' );
		var $random_piece = $pieces[ random_between( $pieces.length ) ];
		$random_piece.innerHTML
			.replace( '<sscript', '<script' )
			.replace( '</sscript>', '</script>' );
		insertAfter( $random_piece, el );
	} );
}());
